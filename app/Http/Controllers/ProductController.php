<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use Validator;
use Auth;
use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
use input, file;

class ProductController extends Controller
{
    public function getAddProduct() {
    	$category = Category::all();
    	return view('admin.product.add', compact('category'));
    }

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAddProduct(Request $request) {
    	$product = new Product;
        $product->prod_name = $request->txtname;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $product->url_img = $filename;
        $request->file('txtimage')->move('public/images/',$filename);
        $product->price_out = $request->txtunit_price;
        $product->promotion_price = $request->txtpromotion_price;
        $product->date_start = $request->txtstart_date;
        $product->date_end = $request->txtend_date;
        $product->quantity = $request->txtquantity;
        $product->description = $request->txtdescription;
    	  $product->cate_id = $request->txtcate_id;
        $product->center_name = $request->txtdisabled_center;
        $product->status = $request->txtstatus;

		$product->save();
		return redirect()->route('admin.product.getListProduct');
    }

    // show list Product
    public function getListProduct() {
    	$cate = Category::all();
		$product = Product::all();
		return view('admin.product.list',compact('product'),['category' => $cate]);
    }

    //Edit Product
    public function getEditProduct($id) {
		$cate = Category::all();
		$product = Product::find($id);
		return view('admin.product.edit',compact('cate','product'));
    }

    public function postEditProduct($id,Request $request) {
      $product = Product::find($id);
      $product->prod_name = $request->input('txtname');
      $filename = $request->file('txtimage')->getClientOriginalName();
      $product->url_img = $filename;
      $request->file('txtimage')->move('public/images/',$filename);
      $product->price_out = $request->input('txtunit_price');
      $product->promotion_price = $request->input('txtpromotion_price');
      $product->date_start = $request->input('txtstart_date');
      $product->date_end = $request->input('txtend_date');
      $product->quantity = $request->input('txtquantity');
      $product->description = $request->input('txtdescription');
    	$product->cate_id = $request->input('txtcate_id');
      $product->center_name = $request->input('txtdisabled_center');
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