<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use input;

class SliderController extends Controller
{
    public function getAddSlider() {
    	return view('admin.slider.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddSlider(Request $request) {
        $slider = new Slide;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $slider->img_url = $filename;
        $request->file('txtimage')->move('public/source/image/',$filename);
        $slider->save();
        return redirect()->route('admin.slider.getListSlider');
    }

    // show list Slider
    public function getListSlider() {
        $slider = Slide::all();
        return view('admin.slider.list',compact('slider'));
    }

    // Edit Slider
    public function getEditSlider($id) {
        $slider = Slide::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

      public function postEditSlider($id,Request $request) {
        $slider = Slide::find($id);
        $filename = $request->file('txtimage')->getClientOriginalName();
        $slider->img_url = $filename;
        $request->file('txtimage')->move('public/source/image/',$filename);
        $slider->save();
        return redirect()->route('admin.slider.getListSlider')->with('success','Update successfully!');
      }

    // delete Slider
    public function getDeleteSlider($id) {
        $slider = Slide::find($id);
        $slider->delete($id);
        return back();
      }
}