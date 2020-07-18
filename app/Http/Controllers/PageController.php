<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\Session;
use App\Slide;
use App\Product;
use App\User;
use DB;
use App\Cart;
use App\Order_Prods;
use App\Order;
use App\Customer;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('status', 1)->paginate(8);
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(4);
        return view('page.home', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }

    public function getProPagebyType($type)
    {
        $slide = Slide::all();
        $sp_theoloai = Product::where('cate_id', $type)->get();
        return view('page.product', compact('slide', 'sp_theoloai'));
    }

    public function getIntroPage()
    {
        return view('page.introduction');
    }

    public function getContactPage(){
        return view('page.contact');
    }

    public function getCartPage(){
        return view('page.cart');
    }

    public function getDetailPage(Request $req)
    {
        $chitiet_sp = Product::where('id',$req->id)->first();
        return view('page.detailProduct',compact('chitiet_sp'));
    }
    
    public function getSearch(Request $req){
        $product = Product::where('prod_name','like','%'.$req->key.'%')
                            ->orWhere('price_out',$req->key)
                            ->get();
                            return view('page.search',compact('product'));
    }

    public function getAddToCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addCart($product,$id);
        $req->session()->put('cart', $cart);
        // session()->flush();
        return redirect()->back();
    }

    public function getCheckout(){
        return view('page.checkout');
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        // dd($cart);
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Order;
        $bill->id = $customer->id;
        $bill->order_date = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        foreach($cart->items as $key=>$value){
            $bill_detail = new Order_Prods;
            $bill_detail->id = $bill->id;
            $bill_detail->id = $key;
            $bill_detail->center_name="MT";
            $bill_detail->quantity = $value['quantity'];
            $bill_detail->price_out = $value['price']/$value['quantity'];
            $bill_detail->save();
        }
        
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

    	
    

}