<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use Validator;
use Auth;
use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
use input;
use File;
use DB;
use App\Seller;

class ProductController extends Controller
{
    public function getAddProduct() {
        $category = Category::all();
        $sellers = Seller::all();
    	return view('admin.product.add', compact('category','sellers'));
    }

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAddProduct(Request $request) {


        $this->validate(
            $request,
            [
                'txtname' => 'required',
                'txtunit_price' => 'required',
                'txtstart_date' => 'required',
                'txtend_date' => 'required',
                'txtquantity' => 'required',
                'txtcate_id' => 'required',
                'txtcenter_id' => 'required',
                'txtstatus' => 'required',
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

    	  $product = new Product;
        $product->prod_name = $request->txtname;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $product->url_img = $filename;
        $request->file('txtimage')->move('source/image/',$filename);
        $product->price_out = $request->input('txtunit_price');

        if(!empty($request->txtpromotion_price)){
          $product->promotion_price = $request->txtpromotion_price;
        }
          else{

              $product->promotion_price =0;

          }

        $product->date_start = $request->txtstart_date;
        $product->date_end = $request->txtend_date;
        $product->quantity = $request->txtquantity;
        $product->description = $request->txtdescription;
    	$product->cate_id = $request->txtcate_id;
        $product->center_id = $request->txtcenter_id;
        $product->status = $request->txtstatus;
		$product->save();
		return redirect()->route('admin.product.getListProduct');
    }

    // show list Product
    public function getListProduct() {
    	$cate = Category::all();
        $product = Product::all();
        $seller = Seller::all();
		return view('admin.product.list',compact('product','cate','seller'));
    }

    //Edit Product
    public function getEditProduct($id) {
		$cate = Category::all();
        $product = Product::find($id);
        $seller = Seller::all();
		return view('admin.product.edit',compact('cate','product','seller'));
    }

    public function postEditProduct($id,Request $request) {
      $product = Product::find($id);
      $product->prod_name = $request->input('txtname');

        $img_current = 'source/image/'. $request->img_current;
		if(!empty($request->file('txtimage')))
		{

			$file_name =  $request->file('txtimage')->getClientOriginalName();
			$product->url_img = $file_name;
			$request->file('txtimage')->move('source/image/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}

    //   $filename = $request->file('txtimage')->getClientOriginalName();
    //   $product->url_img = $filename;
    //   $request->file('txtimage')->move('public/source/image/',$filename);


      $product->price_out = $request->input('txtunit_price');
      $product->promotion_price = $request->input('txtpromotion_price');
      $product->date_start = $request->input('txtstart_date');
      $product->date_end = $request->input('txtend_date');
      $product->quantity = $request->input('txtquantity');
      $product->description = $request->input('txtdescription');
    	$product->cate_id = $request->input('txtcate_id');
      $product->center_id = $request->input('txtcenter_id');
      $product->status = $request->input('txtstatus');
      $product->save();
      return redirect()->route('admin.product.getListProduct')->with('success','Updated successfully!');
    }

    // Delete Product
    public function getDeleteProduct($id) {
      $product = Product::find($id);
      $product->delete($id);
      return back();
    }
}
