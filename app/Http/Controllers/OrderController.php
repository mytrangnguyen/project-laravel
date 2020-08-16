<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function getListOrder() {
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
            $order->save();

        }
        elseif($order->status==2){
            $order->status=3;
            $order->save();

        }
        return redirect()->back();
      }

}
