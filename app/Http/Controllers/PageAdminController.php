<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use input;

class PageAdminController extends Controller
{
    public function showLoginPage() {
    	return view('admin.login');
    }
    public function showAdminPage(Request $request) {
        $email = $request->input('txtemail');
        $password = $request->input('txtpassword');

        if ($email=="thaotran@gmail.com" && $password=="123456") {
            return view('admin.indexAdmin');
        }
    	return view('admin.login');
    }
}
