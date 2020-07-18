<?php

namespace App;

class Cart
{
    //Khởi tạo các giá trị ban đầu cho giỏ hàng
    public $items = null;
    public $totalQuantity = 0; //Khoi tao cac gia tri ban dau co trong gio hang
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
        $this->items = $oldCart->items; //Neu trong gia hang kg co gi($oldcart=null), thi khoi tao cac gia tri
        $this->totalQuantity = $oldCart->totalQuantity;
        $this->totalPrice = $oldCart->totalPrice;
    }
}
    //Them phan tu vao gio hang							
    public function addCart($item, $id, $quantity=1){							
        if($item->promotion_price == 0){						
            $giohang = ['quantity'=>0, 'price' => $item->price_out, 'item' => $item];					
            if($this->items){					
                if(array_key_exists($id, $this->items)){				
                    $giohang = $this->items[$id];			
                }				
            }					
            $giohang['quantity'] = $giohang['quantity'] + $quantity;					
            $giohang['price'] = $item->price_out * $giohang['quantity'];					
            $this->items[$id] = $giohang;					
            $this->totalQuantity = $this->totalQuantity + $quantity;					
            $this->totalPrice += $item->price_out * $giohang['quantity'];					
        }						
        else{						
            $giohang = ['quantity'=>0, 'price' => $item->promotion_price, 'item' => $item];					
            if($this->items){					
                if(array_key_exists($id, $this->items)){				
                    $giohang = $this->items[$id];			
                }				
            }					
            $giohang['quantity'] = $giohang['quantity'] + $quantity;					
            $giohang['price'] = $item->promotion_price * $giohang['quantity'];					
            $this->items[$id] = $giohang;					
            $this->totalQuantity = $this->totalQuantity + $quantity;					
            $this->totalPrice += $item->promotion_price*$giohang['quantity'];					
        }						
                                
    }

    // xóa 1 sản phẩm
    public function deleteByOne($id){
        $this->items[$id]['quantity']--;
        $this->item[$id]['price'] -= $this[$id]['item']['price'];
        $this->totalQuantity--;
        $this->totalPrice -= $this->item[$id]['item']['price'];
        if($this->items[$id]['quantity']<0){
            unset($this->items[$id]);
        }
    }
    

}