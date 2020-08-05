<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use input;

class CustomerController extends Controller
{
    public function getAddCustomer() {
    	return view('admin.customer.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddCustomer(Request $request) {
    	$customer = new Customer;
        $customer->name = $request->txtname;
        $customer->gender = $request->txtgender;
        $customer->email = $request->txtemail;
        $customer->address = $request->txtaddress;
        $customer->note = $request->txtnote;
        $customer->phone_number = $request->txtphone_number;
		$customer->save();
		return redirect()->route('admin.customer.getListCustomer');
    }

    // show list Customer
    public function getListCustomer() {
        $customer = Customer::select('id','name','gender','email','address','note','phone_number')->get()->toArray();
        return view('admin.customer.list',compact('customer'));
      }

       // Edit Customer
    public function getEditCustomer($id) {
        $customer = Customer::select('id','name','gender','email','address','note','phone_number')->get()->toArray();
        $customer = Customer::find($id);
        return view('admin.customer.edit',compact('customer'));
    }

    public function postEditCustomer($id,Request $request) {
        $customer = Customer::find($id);
        $customer->name = $request->input('txtname');
        $customer->gender = $request->input('txtgender');
        $customer->email = $request->input('txtemail');
        $customer->address = $request->input('txtaddress');
        $customer->note = $request->input('txtnote');
        $customer->phone_number = $request->input('txtphone_number');
		    $customer->save();
        return redirect()->route('admin.customer.getListCustomer')->with('success','Update successfully!');
      }

      // delete Customer
    public function getDeleteCustomer($id) {
        $customer = Customer::find($id);
        $customer->delete($id);
        return back();
      }
}