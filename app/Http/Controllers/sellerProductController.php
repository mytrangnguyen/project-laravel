<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use Validator;
use Auth;
use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
use App\Seller;
use input;
use File;

class sellerProductController extends Controller
{
    public function getAddProduct() {
        $category = Category::all();
        $sellers = Seller::all();
    	return view('sellerAdmin.product.add', compact('category','sellers'));
    }

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAddProduct(Request $request) {
    	$product = new Product;
        $product->prod_name = $request->txtname;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $product->url_img = $filename;
        $request->file('txtimage')->move('public/source/image/',$filename);
        $product->price_out = $request->txtunit_price;

        if(empty($request->txtpromotion_price)){
            $product->promotion_price = 0;

          }
            else{

                $product->promotion_price = $request->txtpromotion_price;

            }

        $product->date_start = $request->txtstart_date;
        $product->date_end = $request->txtend_date;
        $product->quantity = $request->txtquantity;
        $product->description = $request->txtdescription;
    	$product->cate_id = $request->txtcate_id;
        $product->center_id = Auth::guard('seller')->user()->id;
        $product->status = $request->txtstatus;
        // dd(txtcate_id);
		$product->save();
		return redirect()->route('sellerAdmin.product.getListProduct');
    }

    // show list Product
    public function getListProduct() {
        // dd(Auth::user()->email);
    	$cate = Category::all();
		$product = Product::all()->where('center_id', Auth::guard('seller')->user()->id);
		return view('sellerAdmin.product.list',compact('product','cate'));
    }

    //Edit Product
    public function getEditProduct($id) {
		$cate = Category::all();
        $product = Product::find($id);
        $seller = Seller::all();
		return view('sellerAdmin.product.edit',compact('cate','product','seller'));
    }

    public function postEditProduct($id,Request $request) {
      $product = Product::find($id);
      $product->prod_name = $request->input('txtname');

        $img_current = 'public/source/image/'. $request->img_current;
		if(!empty($request->file('txtimage')))
		{

			$file_name =  $request->file('txtimage')->getClientOriginalName();
			$product->url_img = $file_name;
			$request->file('txtimage')->move('public/source/image/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}

    //   $filename = $request->file('txtimage')->getClientOriginalName();
    //   $product->url_img = $filename;
    //   $request->file('txtimage')->move('public/source/image/',$filename);


      $product->price_out = $request->input('txtunit_price');
      if(empty($request->txtpromotion_price)){
        $product->promotion_price = 0;
      }
        else{

            $product->promotion_price = $request->txtpromotion_price;
        }

      $product->date_start = $request->input('txtstart_date');
      $product->date_end = $request->input('txtend_date');
      $product->quantity = $request->input('txtquantity');
      $product->description = $request->input('txtdescription');
      $product->cate_id = $request->input('txtcate_id');
      $product->center_id = Auth::guard('seller')->user()->id;
      $product->status = $request->input('txtstatus');
      $product->save();
      return redirect()->route('sellerAdmin.product.getListProduct')->with('success','Updated successfully!');
    }

    // Delete Product
    public function getDeleteProduct($id) {
      $product = Product::find($id);
      $product->delete($id);
      return back();
    }
}