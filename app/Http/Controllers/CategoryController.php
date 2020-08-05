<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use input;

class CategoryController extends Controller
{
    public function getAddCategory() {
    	return view('admin.category.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddCategory(Request $request) {
    	$category = new Category;
        $category->cate_name = $request->txtname;
		    $category->save();
		    return redirect()->route('admin.category.getListCategory');
    }

  // show list Category
    public function getListCategory() {
      $category = category::select('id','cate_name')->get()->toArray();
      return view('admin.category.listCategory',compact('category'));
    }

    // Edit category
    public function getEditCategory($id) {
      $category = category::select('id','cate_name')->get()->toArray();
      $category = category::find($id);
      return view('admin.category.edit',compact('category'));
  }

    public function postEditCategory($id,Request $request) {
      $category = category::find($id);
      $category->cate_name = $request->input('txtcate_name');
      $category->save();
      return redirect()->route('admin.category.getListCategory')->with('success','Update successfully!');
    }

    // delete Category
    public function getDeleteCategory($id) {
      $category = category::find($id);
      $category->delete($id);
      return back();
    }

}