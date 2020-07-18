<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Guest;



class AccountController extends Controller
{
    public function getRegister(){
        return view('page.register');
    }

    public function getSellerRegister(){
        return view('page.sellerRegister');
    }

    public function addUser(Request $request)
    {
        $this->validate($request,[
            'tendangnhap'=>'required',
            'hovaten'=>'required',
            'email'=>'required|email|unique:users,email',
            'diachi'=>'required',
            'sdt'=>'required',
            'matkhau'=>'required|min:6|max:20',
            'rematkhau'=>'required|same:matkhau'
        ],
        [
            'tendangnhap.required'=>"Tên đăng nhập là trường bắt buộc, vui lòng không bỏ trống",
            'hovaten.required'=>"Họ và tên là trường bắt buộc, vui lòng không bỏ trống",
            'email.required'=>"Vui lòng nhập email",
            'email.email'=>"Vui lòng nhập đúng định dạng email",
            'email.unique'=>"Email đã được sử dụng",
            'diachi.required'=>"Địa chỉ là trường bắt buộc, vui lòng không bỏ trống",
            'sdt.required'=>"Số điện thoại là trường bắt buộc, vui lòng không bỏ trống",
            'matkhau.required'=>"Vui lòng nhập mật khẩu",
            'matkhau.min'=>"Mật khẩu phải ít nhất 6 kí tự",
            'matkhau.max'=>"Mật khẩu không quá 20 kí tự",
            'matkhau.same'=>"Mật khẩu không giống nhau",
            'rematkhau.required'=>"Nhập lại mật khẩu là trường bắt buộc, vui lòng không bỏ trống"
        ]);
        $newUser= new User();
        $newUser->username = $request->tendangnhap;
        $newUser->password = Hash::make($request->matkhau);
        $newUser->address =$request->diachi;
        $newUser->phone =$request->sdt;
        $newUser->email =$request->email;
        $newUser->user_role="user";
        $newUser->save();
        return redirect()->route('trang-chu')->with('alert','Đăng ký thành công');
    }

    public function addSeller(Request $req){
        $this->validate($req,[
            'tendaidien'=>'required',
            'emailSeller'=>'required|email|unique:sellers,email',
            'diachiSeller'=>'required',
            'sdtSeller'=>'required',
            // 'imageIdentify'=>'required|image|mimes:jpeg,png,jpg',
            'mkSeller'=>'required|min:6|max:20',
            'remkSeller'=>'required|same:mkSeller'
        ],
        [
            'tendaidien.required'=>"Tên đại diện là trường bắc buộc, vui lòng không bỏ trống",
            'emailSeller.required'=>"Email là trường bắc buộc, vui lòng không bỏ trống",
            'emailSeller.email'=>"Vui lòng nhập đúng định dạng email",
            'emailSeller.unique'=>"Email này đã được sử dụng",
            'diachiSeller.required'=>"Địa chỉ là trường bắc buộc, vui lòng không bỏ trống",
            'image.required'=>"Cung cấp cho chúng tôi giấy xác nhận trung tâm hoặc cá nhân khuyết tật",
            // 'imageIdentify.image'=>"Vui lòng đúng đăng tải đúng định dạng là hình ảnh",
            // 'imageIdentify.mimes'=>"Bạn chỉ có thể đăng tải được các định dạng jpg, png, jpeg",
            'mkSeller.required'=>"Vui lòng nhập mật khẩu",
            'mkSeller.min'=>"Mật khẩu phải ít nhất 6 kí tự",
            'mkSeller.max'=>"Mật khẩu không quá 20 kí tự",
            'mkSeller.same'=>"Mật khẩu không giống nhau",
            'remkSeller.required'=>"Nhập lại mật khẩu là trường bắt buộc, vui lòng không bỏ trống"
        ]);

        $newSeller = new Seller;
        $file_name = $req->file('imageIdentify')->getClientOriginalName();
        $newSeller->username = $req->tendaidien;
        $newSeller->email = $req->emailSeller;
        $newSeller->address = $req->diachiSeller;
        $newSeller->phone = $req->sdtSeller;
        $newSeller->paper_identication = $file_name;
        $destination = base_path() . '/IT_Biz_Project/public/source/image';
        $req->file('imageIdentify')->move($destination,$file_name);
        $newSeller->user_role="seller";
        $newSeller->password = Hash::make($req->mkSeller);
        $newSeller->save();
        return redirect()->route('trang-chu')->with('alert','Đăng ký thành công');


    }

    public function login(Request $request){
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu phải chứa ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'
            ]);
            if ($request->remember == trans('remember.Remember Me')) {
                $remember = true;
            } else {
                $remember = false;
            }
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials)) { //login đúng
            // dd('đăng nhập thành công');
            return redirect()->intended('index')->with('alert','Đăng nhập thành công');
        }
        else { //login sai
            // dd('tk Hoặc mật khẩu chưa đúng');
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công!']);
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('page.editUser', compact('user'));
    }

    public function update(User $user , Request $request)
    { 
         dd('sửa user', $user->username);
         $data = $request->validate([
                    'username' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:6|confirmed'
                ]);
        
                $user->username = request('username');
                $user->email = request('email');
                $user->password = bcrypt(request('password'));
                $user->fill($data);
                $user->save();
        
                return back();  
                
            }
    
    

}