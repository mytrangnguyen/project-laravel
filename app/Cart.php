<?php

namespace App;
use Illuminate\Support\Facades\Session;

class Cart
{
    //Khởi tạo các giá trị ban đầu cho giỏ hàng
    public $items = null;
    public $totalQuantity = 0; //Khoi tao cac gia tri ban dau co trong gio hang
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items; //Neu trong gia hang kg co gi($oldcart=null), thi khoi tao cac gia tri
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    //Them phan tu vao gio hang
    public function addCart($item, $id, $quantity = 1)
    {
        if ($item->promotion_price == 0) {
            $giohang = ['quantity' => 0, 'price' => $item->price_out, 'center_id'=> $item->center_id, 'item' => $item];
            // dd($giohang);
            if ($this->items) {
                if (array_key_exists($id, $this->items)) {
                    $giohang = $this->items[$id];
                }
            }
            // dd($quantity);
            $giohang['quantity'] = $giohang['quantity'] + $quantity;
            $giohang['price'] = $item->price_out * $giohang['quantity'];
            // dd($item->price_out);
            $this->items[$id] = $giohang;
            $this->totalQuantity = $this->totalQuantity + $quantity;
            $this->totalPrice += $item->price_out ;
        } else {
            $giohang = ['quantity' => 0, 'price' => $item->promotion_price,'center_id'=> $item->center_id, 'item' => $item];
            if ($this->items) {
                if (array_key_exists($id, $this->items)) {
                    $giohang = $this->items[$id];
                }
            }
            $giohang['quantity'] = $giohang['quantity'] + $quantity;
            $giohang['price'] = $item->promotion_price * $giohang['quantity'];
            $this->items[$id] = $giohang;
            $this->totalQuantity = $this->totalQuantity + $quantity;
            $this->totalPrice += $item->promotion_price;
        }
    }

    // tăng một sản phẩm
    public function plusOneItem($id)
    {
        $this->items[$id]['quantity']++;
        $this->items[$id]['price'] += $this[$id]['item']['price'];
        $this->totalQuantity++;
        $this->totalPrice += $this->items[$id]['item']['price'];

    }
    // xóa 1 sản phẩm
    public function deleteByOne($item, $id, $quantity = 1)
    {
        if ($item->promotion_price == 0) {
            $giohang = ['quantity' => 0, 'price' => $item->price_out, 'center_id'=> $item->center_id, 'item' => $item];
            // dd($giohang);
            if ($this->items) {
                if (array_key_exists($id, $this->items)) {
                    $giohang = $this->items[$id];
                }
            }
            // dd($quantity);

            if($giohang['quantity']>0){
                $giohang['quantity'] = $giohang['quantity'] - $quantity;
            }
            else{
                Session::forget('cart');
            }
            $giohang['price'] = $item->price_out * $giohang['quantity'];
            // dd($item->price_out);
            $this->items[$id] = $giohang;
            $this->totalQuantity = $this->totalQuantity - $quantity;
            $this->totalPrice -= $item->price_out ;
        } else {
            $giohang = ['quantity' => 0, 'price' => $item->promotion_price,'center_id'=> $item->center_id, 'item' => $item];
            if ($this->items) {
                if (array_key_exists($id, $this->items)) {
                    $giohang = $this->items[$id];
                }
            }
            $giohang['quantity'] = $giohang['quantity'] - $quantity;
            $giohang['price'] = $item->promotion_price * $giohang['quantity'];
            $this->items[$id] = $giohang;
            $this->totalQuantity = $this->totalQuantity - $quantity;
            $this->totalPrice -= $item->promotion_price;
        }
    }
    public function removeItem($id)
    {
        $this->totalQuantity -= $this->items[$id]['quantity'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
    //xóa nhiều sản phẩm
    // public function removeItem($id)
    // {
    //     $this->totalQuantity -= $this->item[$id]['quantity'];
    //     $this->totalPrice -= $this->item[$id]['price'];
    //     unset($this->item[$id]);
    // }
}
