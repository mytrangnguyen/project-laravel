<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seller;
use App\Order;
use App\Order_Prods;
use DB;
use File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Guest;
use RealRashid\SweetAlert\Facades\Alert;


class AccountController extends Controller
{
    public function getRegister()
    {
        return view('page.register');
    }

    public function getSellerRegister()
    {
        return view('page.sellerRegister');
    }

    public function getLogin()
    {
        return view('page.login');
    }

    public function addUser(Request $request)
    {
        $this->validate(
            $request,
            [
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users,email',
                'address' => 'required',
                'phone' => 'required|unique:users',
                'password' => 'required|min:6|max:20',
                'repassword' => 'required|same:password'
            ],
            [
                'username.required' => "Tên đăng nhập là trường bắt buộc, vui lòng không bỏ trống",
                'username.unique' => "Tên đăng nhập đã được sử dụng",
                'email.required' => "Vui lòng nhập email",
                'email.email' => "Vui lòng nhập đúng định dạng email",
                'email.unique' => "Email đã được sử dụng",
                'address.required' => "Địa chỉ là trường bắt buộc, vui lòng không bỏ trống",
                'phone.required' => "Số điện thoại là trường bắt buộc, vui lòng không bỏ trống",
                'phone.unique' => "Số điện thoại đã được sử dụng",
                'password.required' => "Vui lòng nhập mật khẩu",
                'password.min' => "Mật khẩu phải ít nhất 6 kí tự",
                'password.max' => "Mật khẩu không quá 20 kí tự",
                'password.same' => "Mật khẩu không giống nhau",
                'repassword.required' => "Nhập lại mật khẩu là trường bắt buộc, vui lòng không bỏ trống"
            ]
        );

        // var_dump($this->validate);
        $newUser = new User();
        $newUser->username = $request->username;
        $newUser->password = Hash::make($request->password);
        $newUser->address = $request->address;
        $newUser->phone = $request->phone;
        $newUser->email = $request->email;
        $newUser->avatar = "";
        $newUser->user_role = "user";
        $newUser->save();
        return redirect()->route('trang-chu')->with('alert', 'Đăng ký thành công');
    }

    public function addSeller(Request $req)
    {
        $this->validate(
            $req,
            [
                'tendaidien' => 'required',
                'emailSeller' => 'required|email|unique:sellers,email',
                'diachiSeller' => 'required',
                'sdtSeller' => 'required',
                // 'imageIdentify'=>'required|image|mimes:jpeg,png,jpg',
                'mkSeller' => 'required|min:6|max:20',
                'remkSeller' => 'required|same:mkSeller'
            ],
            [
                'tendaidien.required' => "Tên đại diện là trường bắc buộc, vui lòng không bỏ trống",
                'emailSeller.required' => "Email là trường bắc buộc, vui lòng không bỏ trống",
                'emailSeller.email' => "Vui lòng nhập đúng định dạng email",
                'emailSeller.unique' => "Email này đã được sử dụng",
                'diachiSeller.required' => "Địa chỉ là trường bắc buộc, vui lòng không bỏ trống",
                'image.required' => "Cung cấp cho chúng tôi giấy xác nhận trung tâm hoặc cá nhân khuyết tật",
                // 'imageIdentify.image'=>"Vui lòng đúng đăng tải đúng định dạng là hình ảnh",
                // 'imageIdentify.mimes'=>"Bạn chỉ có thể đăng tải được các định dạng jpg, png, jpeg",
                'mkSeller.required' => "Vui lòng nhập mật khẩu",
                'mkSeller.min' => "Mật khẩu phải ít nhất 6 kí tự",
                'mkSeller.max' => "Mật khẩu không quá 20 kí tự",
                'mkSeller.same' => "Mật khẩu không giống nhau",
                'remkSeller.required' => "Nhập lại mật khẩu là trường bắt buộc, vui lòng không bỏ trống"
            ]
        );

        $newSeller = new Seller;
        $file_name = $req->file('imageIdentify')->getClientOriginalName();
        $newSeller->username = $req->tendaidien;
        $newSeller->email = $req->emailSeller;
        $newSeller->address = $req->diachiSeller;
        $newSeller->phone = $req->sdtSeller;
        $newSeller->paper_identication = $file_name;
        $user = base_path() . '/project-laravel/public/source/image';
        $req->file('imageIdentify')->move($user, $file_name);
        $newSeller->user_role = "seller";
        $newSeller->password = Hash::make($req->mkSeller);
        $newSeller->save();
        return redirect()->route('trang-chu')->with('alert', 'Đăng ký thành công');
    }

    public function login(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Không đúng định dạng email',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
                'password.max' => 'Mật khẩu không quá 20 ký tự'
            ]
        );

        $remember = $request->has('remember') ? true : false;
        $user_role="user";
        // dd($testAccount);
        if ($user = User::where('user_role', $user_role)->first()) {
    if (Auth::attempt(['email' => $request->email, 'word' => $request->password], $remember)) {
            //login đúng
            // dd("login thành công", Auth::user()->username);
            return redirect()->intended('/')->with('alert', 'Đăng nhập thành công');


        } else { //login sai
            // dd('tk Hoặc mật khẩu chưa đúng');
            // dd("login k thành công");
            return redirect()->back()->with('thongbao', "Đăng nhập thất bại");
        }
    }
    }

    public function getFormResetPassword(){
        return view('page.resetPassword');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function getUserProfile(User $user)
    {
        $user = Auth::user();


        return view('page.profile', compact('user', 'history', 'length'));
    }

    public function getOrdersHistory(){
        //get all orders
        $historyarr= DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->where('orders.user_id', '=', Auth::user()->id)
        ->get();
        $history = collect($historyarr)->groupBy('created_at')->toArray();

        //get orders with "Chờ xác nhận"
        $historyarr1 = DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->where('orders.user_id', '=', Auth::user()->id)
        ->where('orders.status',1)
        ->get();
        $history1 = collect($historyarr1)->groupBy('created_at')->toArray();

        //get orders with "Đang giao"
        $historyarr2 = DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->where('orders.user_id', '=', Auth::user()->id)
        ->where('orders.status',2)
        ->get();
        $history2 = collect($historyarr2)->groupBy('created_at')->toArray();

        //get orders with "Đã giao"
        $historyarr3 = DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->where('orders.user_id', '=', Auth::user()->id)
        ->where('orders.status',3)
        ->get();
        $history3 = collect($historyarr3)->groupBy('created_at')->toArray();

        //get orders with "Đã hủy"
        $historyarr3 = DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->where('orders.user_id', '=', Auth::user()->id)
        ->where('orders.status',3)
        ->get();
        $history3 = collect($historyarr3)->groupBy('created_at')->toArray();

        $historyarr4 = DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->where('orders.user_id', '=', Auth::user()->id)
        ->where('orders.status',4)
        ->get();
        $history4 = collect($historyarr4)->groupBy('created_at')->toArray();

        return view('page.historyOrder', compact('history','history1','history2','history3','history4'));
    }

    public function getProfile(){
        return view('page.profile');
    }

    public function updateUser(User $user, Request $request)
    {
        $user->username = $request->username;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $img_current = 'public/avatar/'. $request->img_current;
		if(!empty($request->file('avatar')))
		{
			$file_name =  $request->file('avatar')->getClientOriginalName();
			$user->avatar = $file_name;
			$request->file('avatar')->move('public/avatar/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
        }
        if($request->matkhau != ""){
            $user->password = bcrypt($request->matkhau);
        }
        $user->save();
        Alert::success('Thành công', 'Chỉnh sửa thành công');
        return back();
    }
}
