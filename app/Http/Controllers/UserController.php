<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use input;

class UserController extends Controller
{
    public function getAddUser() {
    	return view('admin.user.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddUser(Request $request) {
        $this->validate(
            $request,
            [
                'txtusername' => 'required',
                'txtaddress' => 'required',
                'txtemail' => 'required',
                'txtphone' => 'required|min:8|max:11',
                'txtpassword' => 'required',
                'txtphone' => 'required|numeric',
                'txtemail' => 'required|email|unique:sellers,email',
            ],
            [
                'txtname.required' => "vui lòng không bỏ trống trường họ và tên",
                'txtaddress.required' => "vui lòng không bỏ trống địa chỉ",
                'txtemail.required' => "vui lòng không bỏ trống email",
                'txtphone.required' => "vui lòng không bỏ trống số điện thoại",
                'txtpassword.required' => "vui lòng không bỏ trống mật khẩu",
                'txtemail.unique' => "Email này đã được sử dụng",
                'txtphone.numeric' => "vui lòng nhập số",
                'txtphone.min' => "Số điện thoại ít nhất 8 kí tự",
                'txtphone.max' => "Số điện thoại nhiều nhất 11 kí tự",
            ]
        );

    	$user = new User;
        $user->username = $request->txtusername;
        $user->email = $request->txtemail;
        $user->address = $request->txtaddress;
        $user->phone = $request->txtphone;
        $user->user_role = "user";
        $user->password = Hash::make($request->txtpassword);
		$user->save();
		return redirect()->route('admin.user.getListUser');
    }

    // show list User
    public function getListUser() {
        $user = User::all();
        return view('admin.user.list',compact('user'));
      }

       // Edit User
    public function getEditUser($id) {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function postEditUser($id,Request $request) {
        $user = User::find($id);
        $user->username = $request->input('txtusername');
        $user->email = $request->input('txtemail');
        $user->address = $request->input('txtaddress');
        $user->phone = $request->input('txtphone');
        $user->user_role = "user";
        $user->password = $request->input('txtpassword');
		$user->save();
        return redirect()->route('admin.user.getListUser')->with('success','Update successfully!');
      }

      // delete User
    public function getDeleteUser($id) {
        $user = User::find($id);
        $user->delete($id);
        return back();
      }
}