<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\Session;
use App\Slide;
use App\Product;
use App\User;
use DB;
use App\Cart;
use App\Comment;
use App\Order_Prods;
use App\Order;
use App\Customer;
use App\Contact;
use App\Seller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ShoppingMail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = DB::table('products')->where('status', 1)->orderBy('id')
        ->select('products.id','prod_name','url_img','price_out','promotion_price','status','sellers.center_name')
        ->join('sellers', 'sellers.id', '=', 'products.center_id')
        ->paginate(8);

        $sanpham_khuyenmai = DB::table('products')->where('promotion_price', '<>', 0)->orderBy('id')
        ->select('products.id','prod_name','url_img','price_out','promotion_price','status','sellers.center_name')
        ->join('sellers', 'sellers.id', '=', 'products.center_id')
        ->paginate(8);
        // $new_product = Product::where('status', 1)->paginate(8);
        // $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(8);
        return view('page.home', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }

    public function getProPagebyType($type)
    {
        $slide = Slide::all();
        $new_product = DB::table('products')->where('status', 1)->select('products.id','prod_name','url_img','price_out','promotion_price','status','sellers.center_name')
        ->join('sellers', 'sellers.id', '=', 'products.center_id')->limit(3)->get();
        $sp_theoloai = Product::where('cate_id', $type)->paginate(8);
        return view('page.product', compact('slide', 'sp_theoloai','new_product'));
    }

    public function getProductByCenterName($center_id){
        $slide = Slide::all();
        $prodByCenter =  DB::table('products')->where('center_id', $center_id)->orderBy('id')
        ->select('products.id','prod_name','url_img','price_out','promotion_price','status','sellers.center_name')
        ->join('sellers', 'sellers.id', '=', 'products.center_id')
        ->paginate(8);
        return view('page.productByCenter', compact('slide', 'prodByCenter'));
    }

    public function getIntroPage()
    {
        return view('page.introduction');
    }

    public function getContactPage()
    {
        return view('page.contact');
    }

    public function postContact(Request $req)
    {
        $this->validate(
            $req,
            [
                'name' => 'required',
                'email' => 'required|email',
                'content' => 'required'
            ],
            [
                'name.required' => "Họ và têbn là trường bắt buộc, vui lòng không bỏ trống",
                'email.required' => "Vui lòng nhập email",
                'email.email' => "Vui lòng nhập đúng định dạng email",
                'content.required' => "Nội dung là trường bắt buộc, vui lòng không bỏ trống",
            ]
        );
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->content = $req->content;

        $contact->save();
        return redirect()->back();
    }

    public function getCartPage()
    {
        $cart = Session::get('cart');
        return view('page.cart', compact('cart'));
    }

    public function getDetailPage(Request $req)
    {
        $chitiet_sp = Product::where('id', $req->id)->first();
        $comment = new Comment();
        $comment = comment::select('id_user', 'id_prod', 'comment', 'comments.created_at as created_at', 'users.username as username')->join('users', 'comments.id_user', 'users.id')->where('id_prod', $req->id)->get();
        return view('page.detailProduct', compact('chitiet_sp', 'comment'));
    }

    public function getSearch(Request $req)
    {
        $product= DB::table('products')
        ->select('products.id','prod_name','products.url_img', 'price_out', 'promotion_price', 'sellers.center_name as center_name')
        ->where('prod_name', 'like', '%' . $req->key . '%')
        ->orWhere('price_out', $req->key)
        ->join('sellers','sellers.id','products.center_id')
        ->get();
        // dd($product);
        $product1 = Product::where('prod_name', 'like', '%' . $req->key . '%')
            ->orWhere('price_out', $req->key)
            ->get();
        return view('page.search', compact('product'));
    }

    public function getAddToCart(Request $req, $id)
    {
        if(Auth::user()){
            $product = Product::find($id);
            if($product->quantity == 0){
                Alert::warning('Cảnh báo', 'Bạn không thể đặt hàng vì số lượng sản phẩm này đã hết');
                return redirect()->back();
            }
            else{
                $oldCart = Session('cart') ? Session::get('cart') : null;
                $cart = new Cart($oldCart);
                $cart->addCart($product, $id);
                $req->session()->put('cart', $cart);
                return redirect()->back();
            }
        }
        else{
            Alert::warning('Cảnh báo', 'Bạn phải đăng nhập trước khi mua hàng');
            return view('page.login');
        }
    }

    public function postCancel($id){
        $orders = Order::find($id);
        $orders->status=4;
        $orders->save();
        return redirect()->back();
    }

    public function postReOrder($id){
        $orders = Order::find($id);
        $orders->status = 1;
        $orders->save();
        return redirect()->back();
    }

    public function getCheckout()
    {
        return view('page.checkout');
    }

    public function postCheckout(Request $req)
    {
        $cart = Session::get('cart');
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->ship_method = $req->ship_method;
        $customer->note = $req->notes;
        $customer->save();
        DB::beginTransaction();
        try {
            $bill = new Order;
        $bill->order_date = date('Y-m-d');
        $bill->user_id = Auth::user()->id;
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->name = $req->name;
        $bill->email = $req->email;
        $bill->address = $req->address;
        $bill->note = $req->notes;
        $bill->status = 1;
        $bill->save();

        $order_detail = [];
        Mail::to(Auth::user()->email)->send(new ShoppingMail($bill, $order_detail));
        foreach ($cart->items as $key => $value) {
            $product = Product::find($value['item']['id']);
            $product->decrement('quantity', $value['quantity']);
            $bill_detail = new Order_Prods;
            $bill_detail->id_order = $bill->id;
            $bill_detail->center_id = $value['center_id'];
            $bill_detail->prod_name = $value['item']['prod_name'];
            $bill_detail->quantity = $value['quantity'];
            $bill_detail->price_out = $value['price'] / $value['quantity'];
            $bill_detail->save();
        }

        Session::forget('cart');
        DB::commit();
        $notification = array(
            'message' => 'Đặt hàng thành công',
            'alert-type' => 'success'
        );
        Alert::success('Thành công', 'Bạn đã đặt hàng thành công, vui lòng kiểm tra email về thông tin đơn hàng');
        return redirect()->back();
        } catch (Exception $e) {
            DB::rollback();
        }

    }

    public function getBill(){
        return view('page.bill');
    }

    public function getDeleteItemCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    //Controller post comment
    public function postComment(Request $req)
    {
        if(Auth::user()){
            $comment = new Comment();
            $comment->id_prod = $req->id_prod;
            $comment->id_user = $req->id_user;
            $comment->comment = $req->comment;
            $comment->save();
            return redirect()->back();
        }
        else{
            Alert::warning('Cảnh báo', 'Bạn phải đăng nhập trước khi bình luận');
            return redirect()->back();
        }
    }
}