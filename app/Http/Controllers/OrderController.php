<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Mail\ConfirmedMail;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    public function getListOrder() {
        $orderArr= DB::table('orders')
        ->select('orders.id','orders.name', 'orders.address', 'orders.email', 'orders.status', 'orders.total', 'orders.created_at', 'order_prods.prod_name', 'order_prods.quantity', 'order_prods.price_out')
        ->join('order_prods', 'order_prods.id_order', '=', 'orders.id')
        ->get();
        $order = collect($orderArr)->groupBy('created_at')->toArray();
        // dd($order);
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