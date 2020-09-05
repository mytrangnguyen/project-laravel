<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Seller;
use App\User;
use App\Order_Prods;
use input;
use File;

class SellerController extends Controller
{
    public function getAddSeller() {
    	return view('admin.seller.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddSeller(Request $request) {

        $this->validate(
            $request,
            [
                'txtfullname' => 'required',
                'txtaddress' => 'required',
                'txtcenter_name' => 'required',
                'txtemail' => 'required',
                'txtphone' => 'required',
                'txtpassword' => 'required',
                'txtphone' => 'required|numeric',
                'txtemail' => 'required|email|unique:sellers,email',
            ],
            [
                'txtname.required' => "vui lòng không bỏ trống trường họ và tên",
                'txtaddress.required' => "vui lòng không bỏ trống địa chỉ",
                'txtcenter_name.required' => "vui lòng không bỏ trống trung tâm",
                'txtemail.required' => "vui lòng không bỏ trống email",
                'txtphone.required' => "vui lòng không bỏ trống số điện thoại",
                'txtpassword.required' => "vui lòng không bỏ trống mật khẩu",
                'txtemail.unique' => "Email này đã được sử dụng",
            ]
        );

    	$seller = new Seller;
        $seller->fullname = $request->txtfullname;
        $seller->address = $request->txtaddress;
        $seller->center_name = $request->txtcenter_name;

        $filename = $request->file('txtimage')->getClientOriginalName();
        $seller->paper_identication = $filename;
        $request->file('txtimage')->move('public/avatar/',$filename);

        $seller->email = $request->txtemail;
        $seller->phone = $request->txtphone;
        $seller->user_role = $request->txtuser_role="seller";
        $seller->password = Hash::make($request->txtpassword);
        $seller->save();

		return redirect()->route('admin.seller.getListSeller');
    }

    // show list Seller
    public function getListSeller() {
        $seller = Seller::all();

        // dd($seller);
        return view('admin.seller.list',compact('seller'));
      }

       // Edit Seller
    public function getEditSeller($id) {
        $seller = Seller::all();
        $seller = Seller::find($id);
        return view('admin.seller.edit',compact('seller'));
    }

    public function postEditSeller($id,Request $request) {
        $seller = Seller::find($id);
        $seller->fullname = $request->input('txtfullname');
        $seller->address = $request->input('txtaddress');

        $img_current = 'public/avatar/'. $request->img_current;
		if(!empty($request->file('txtimage')))
		{

			$filename =  $request->file('txtimage')->getClientOriginalName();
			$seller->paper_identication = $filename;
			$request->file('txtimage')->move('public/avatar/',$filename);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}

        $seller->center_name = $request->input('txtcenter_name');
        $seller->email = $request->input('txtemail');
        $seller->phone = $request->input('txtphone');
        if($request->txtpassword != ""){
            $seller->password = bcrypt($request->txtpassword);
        }
		$seller->save();
        return redirect()->route('admin.seller.getListSeller')->with('success','Update successfully!');
      }

      // delete Seller
    public function getDeleteSeller($id) {
        $seller = Seller::find($id);
        $seller->delete($id);
        return back();
    }

    public function getOrdersByCenter(){
        $orderByCenter = DB::table('order_prods')
        ->select('order_prods.id', 'order_prods.id_order', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out', 'order_prods.created_at')
        ->where('order_prods.center_id', '=', '3')->get();
        $orderByCenter1 = collect($orderByCenter)->groupBy('created_at')->toArray();
        // dd($orderByCenter1);
    }
}
