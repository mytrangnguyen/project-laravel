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
        $this->validate(
            $request,
            [
                'txtname' => 'required',
            ],
            [
                'txtname.required' => "vui lòng không bỏ trống",
            ]
        );

    	$category = new Category;
        $category->cate_name = $request->txtname;
		    $category->save();
		    return redirect()->route('admin.category.getListCategory');
    }

  // show list Category
    public function getListCategory() {
      $category = Category::all();
      return view('admin.category.listCategory',compact('category'));
    }

    // Edit category
    public function getEditCategory($id) {
      $cate = Category::find($id);
    //   dd($cate);
      return view('admin.category.edit',compact('cate'));
  }

    public function postEditCategory($id,Request $request) {
      $category = Category::find($id);
      $category->cate_name = $request->input('txtname');
      $category->save();
      return redirect()->route('admin.category.getListCategory')->with('success','Update successfully!');
    }

    // delete Category
    public function getDeleteCategory($id) {
      $category = Category::find($id);
      $category->delete($id);
      return back();
    }

}
