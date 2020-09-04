<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Seller;
use App\Order;
use App\Customer;
use App\Order_Prods;
use DB;
use File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Guest;
use RealRashid\SweetAlert\Facades\Alert;

class sellerAdminController extends Controller
{
    public function showAdminPage() {
        $product=Product::all()->where('center_id', Auth::guard('seller')->user()->id);
        $product_count = count($product);
        $order = Order::all();
        $order_count= Order::count();
        $customer_count=Customer::count();
        $seller_count=Seller::count();
        $new_order = Order::where('status', 1)->get();
    	return view('sellerAdmin.indexAdmin',compact('product_count','order_count','customer_count','seller_count','new_order'));
    }
    public function getLoginAdmin()
    {
        return view('sellerAdmin.login');
    }
    public function postLoginAdmin(Request $request){

        $this->validate($request, [
            'email' => 'required|max:100',
            'email' => 'required|min:10',
            'password' => 'required|max:15',
            'password' => 'required|min:6',
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ]);


        $remember = $request->has('remember') ? true : false;

        $email = $request->input('email');
        $password = $request->input('password');
        $user_role="seller";
        // dd($testAccount);
        // if ($user = User::where('user_role', $user_role)->first()) {

            if (Auth::guard('seller')->attempt(array('email' => $email, 'password' => $password),$remember)){
                // dd(Auth::user()->email);
                return redirect()->route('sellerAdmin.showAdminPage')->with('alert', 'Đăng nhập thành công');
            }
            else {
                return redirect()->back()->with('thongbao', "Đăng nhập thất bại");
            }
        // }
    }

public function postLogoutAdmin(){
    Auth::logout();
    return redirect()->route('sellerAdmin.login.getLoginAdmin');

}
}