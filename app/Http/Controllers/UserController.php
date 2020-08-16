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
    	$user = new User;
        $user->username = $request->txtusername;
        $user->email = $request->txtemail;
        $user->address = $request->txtaddress;
        $user->phone = $request->txtphone;
        $user->user_role = $request->txtuser_role;
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
        $user->user_role = $request->input('txtuser_role');
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
