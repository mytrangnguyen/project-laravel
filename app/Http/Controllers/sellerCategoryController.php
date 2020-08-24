<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;

use input;

class sellerCategoryController extends Controller
{
    public function getAddCategory() {
    	return view('sellerAdmin.category.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddCategory(Request $request) {
        $this->validate($request, [

            'category' => 'required|max:30',
            'category' => 'required|min:5',
        ],
        [
            'category.required' => 'Vui lòng nhập category',
        ]

        );

    	$category = new Category;
        $category->cate_name = $request->txtname;
		    $category->save();
		    return redirect()->route('sellerAdmin.category.getListCategory');
    }

  // show list Category
    public function getListCategory() {
        dd(Auth::user()->email);

      $category = Category::all();
      return view('sellerAdmin.category.listCategory',compact('category'));
    }

    // Edit category
    public function getEditCategory($id) {
      $cate = Category::find($id);
    //   dd($cate);
      return view('sellerAdmin.category.edit',compact('cate'));
  }

    public function postEditCategory($id,Request $request) {
      $category = Category::find($id);
      $category->cate_name = $request->input('txtcate_name');
      $category->save();
      return redirect()->route('sellerAdmin.category.getListCategory')->with('success','Update successfully!');
    }

    // delete Category
    public function getDeleteCategory($id) {
      $category = Category::find($id);
      $category->delete($id);
      return back();
    }
}
