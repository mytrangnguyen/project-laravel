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

class LoginAdminController extends Controller
{
    public function showAdminPage() {
    	return view('admin.indexAdmin');
    }
    public function getLoginAdmin()
    {
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request){
    $this->validate(
        $request,
        [
            'email' => 'required|email',
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
    $email = $request->email;
    $password = $request->password;
    // dd("login thành công", $credentials);
    if ($user = User::where('email', $email)->first()) {

        if (Hash::check($password, $user->password)) {
// dd($user->password);

            if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) { //login đúng
                return redirect()->route('admin.showAdminPage')->with('alert', 'Đăng nhập thành công');
                    // dd("login thành công");


    //         // return redirect()->intended('/')->with('alert', 'Đăng nhập thành công');


    } else { //login sai
        // dd('tk Hoặc mật khẩu chưa đúng');
        return redirect()->route('admin.login.getLoginAdmin')->with('alert', 'Đăng nhập thành công');
        // dd("login k thành công");
        // return redirect()->back()->with('thongbao', "Đăng nhập thất bại");


    }
    }}

}
public function postLogoutAdmin(){
    Auth::logout();
    return redirect()->route('admin.login.getLoginAdmin');

}

}