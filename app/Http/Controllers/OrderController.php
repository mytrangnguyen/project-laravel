<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\Mail\ConfirmedMail;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    public function getListOrder() {
        // dd(Auth::guard('admin')->user()->email);
        $order = Order::all();
        return view('admin.order.list',compact('order'));
    }

    // delete Order
    public function getDeleteOrder($id) {
      $order = Order::find($id);
      $order->delete($id);
      return back();
    }

    public function postChangeStatus($id) {
        $order = Order::find($id);
        if($order->status==1){
            $order->status=2;
        //    dd($order->name);
            $order->save();
            Mail::to($order->email)->send(new ConfirmedMail($order));

        }
        elseif($order->status==2){
            $order->status=3;
            $order->save();

        }
        return redirect()->back();
      }

}