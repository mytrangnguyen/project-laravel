<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seller;
use App\Order;
use App\Order_Prods;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Guest;


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
        $destination = base_path() . '/IT_Biz_Project/public/source/image';
        $req->file('imageIdentify')->move($destination, $file_name);
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
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        $credentials = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($credentials)) { //login đúng
            // dd('đăng nhập thành công');
            // var_dump("login thành công");
            return redirect()->intended('/')->with('alert', 'Đăng nhập thành công');
        } else { //login sai
            // dd('tk Hoặc mật khẩu chưa đúng');
            // var_dump("login k thành công");
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập không thành công!']);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function edit(User $user)
    {
        $user = Auth::user();
        $historyarr = DB::table('orders')
            ->select('orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
            ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
            ->where('orders.user_id', '=', Auth::user()->id)
            // ->groupBy('created_at')
            // ->map(function ($item) {
            //     return array_merge(...$item->toArray());
            // })
            ->get();
        $history = collect($historyarr)->groupBy('created_at')->toArray();
        $length = count($history);
        // dd($history);

        return view('page.editUser', compact('user', 'history', 'length'));
    }

    public function update(User $user, Request $request)
    {
        // $data = $request->validate([
        //     'tendangnhap' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'matkhau' => 'required|min:6|confirmed'
        // ]); // cái này bị lỗi nek -
        $user->username = $request->tendangnhap;
        $user->email = $request->email;
        $user->password = bcrypt($request->matkhau);
        $user->save();
        return back();
    }
}