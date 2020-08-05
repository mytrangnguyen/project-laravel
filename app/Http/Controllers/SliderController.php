<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use input;

class SliderController extends Controller
{
    public function getAddSlider() {
    	return view('admin.slider.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddSlider(Request $request) {
        $slider = new Slider;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $slider->image = $filename;
        $request->file('txtimage')->move('public/images/',$filename);
        $slider->save();
        return redirect()->route('admin.slider.getListSlider');
    }

    // show list Slider
    public function getListSlider() {
        $slider = Slider::select('id','image')->get()->toArray();
        return view('admin.slider.list',compact('slider'));
    }

    // Edit Slider
    public function getEditSlider($id) {
        $slider = Slider::select('id','image')->get()->toArray();
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

      public function postEditSlider($id,Request $request) {
        $slider = Slider::find($id);
        $filename = $request->file('txtimage')->getClientOriginalName();
        $slider->image = $filename;
        $request->file('txtimage')->move('public/images/',$filename);
        $slider->save();
        return redirect()->route('admin.slider.getListSlider')->with('success','Update successfully!');
      }

    // delete Slider
    public function getDeleteSlider($id) {
        $slider = Slider::find($id);
        $slider->delete($id);
        return back();
      }
}