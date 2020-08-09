<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderModel;
use input;

class SliderController extends Controller
{
    public function getAddSlider() {
    	return view('admin.slider.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddSlider(Request $request) {
        $slider = new SliderModel;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $slider->image = $filename;
        $request->file('txtimage')->move('public/images/',$filename);
        $slider->save();
        return redirect()->route('admin.slider.getListSlider');
    }
  
    // show list Slider
    public function getListSlider() {
        $slider = SliderModel::select('id','image')->get()->toArray();
        return view('admin.slider.list',compact('slider'));
    }

    // Edit Slider
    public function getEditSlider($id) {
        $slider = SliderModel::select('id','image')->get()->toArray();
        $slider = SliderModel::find($id);
        return view('admin.slider.edit',compact('slider'));
    }
  
      public function postEditSlider($id,Request $request) {
        $slider = SliderModel::find($id);
        $filename = $request->file('txtimage')->getClientOriginalName();
        $slider->image = $filename;
        $request->file('txtimage')->move('public/images/',$filename);
        $slider->save();
        return redirect()->route('admin.slider.getListSlider')->with('success','Update successfully!');
      }

    // delete Slider
    public function getDeleteSlider($id) {
        $slider = SliderModel::find($id);
        $slider->delete($id);
        return back();
      }
}
