<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order_Prods;
use App\Seller;
use DB;

class sellerOrderProdsController extends Controller
{
    // show list Order_Prods
    public function getListOrder_Prods() {
        $seller = Seller::select('id','center_name')->get()->toArray();

        $order_prods = DB::table('order_prods')
        ->select('order_prods.id', 'id_order', 'prod_name','quantity','price_out','sellers.center_name as center_name')
        ->where('order_prods.center_id',Auth::user()->id)
        ->join('sellers', 'order_prods.center_id', '=', 'sellers.id')
        ->get()->toArray();
        $size=count($order_prods);

        // dd($order_prods);
        return view('sellerAdmin.order_prods.list',compact('order_prods','size'));
    }

    // delete Order_Prods
    public function getDeleteOrder_Prods($id) {
      $order_prods = Order_Prods::find($id);
      $order_prods->delete($id);
      return back();
    }
}
