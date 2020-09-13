@extends('master')
@section('content')
<div class="cart-section">
    <div class="bill-section">
            <div class="bill-item-container-header">
                <div class="bill-item-product">
                    <div class="bill-title">Sản phẩm</div>
                </div>
                <div class="bill-item-detail">
                    <div class="info-product"></div>
                    <div class="info-price">
                        <div class="bill-title">Giá</div>
                    </div>
                    <div class="info-quantity">
                        <div class="bill-title">Số lượng</div>
                    </div>
                    <div class="info-total">
                        <div class="bill-title">Tổng tiền</div>
                    </div>
                </div>
            </div>
            @if(Session::has('cart'))
            @foreach($product_cart as $product)
            <div class="bill-item-container">
                <div class="bill-item-product">
                    <div class="bill-title-image">
                        <img src="source/image/{{$product['item']['url_img']}}" alt="" sizes="80%" srcset="" class="image-info-product">
                    </div>
                </div>
                <div class="bill-item-detail">
                    <div class="info-product">
                        <p class="product-name">{{$product['item']['prod_name']}}</p>
                    </div>

                    <div class="info-price">
                        @if($product['item']['promotion_price']==0)
                        <div class="bill-title price-text">{{$product['item']['price_out']}} đ</div>
                        @else
                        <div class="bill-title price-text">{{$product['item']['promotion_price']}} đ</div>
                        @endif
                    </div>
                    <div class="info-quantity">
                    <span><div class="add-item">
                            <a class="change-qty decrease" href="{{route('minusOneItem',$product['item']['id'])}}">-</a>
                            <span class="quantity ng-binding" ng-bind=" product.qty">{{$product['quantity']}}</span>
                            <a class="change-qty increase" href="{{Route('themgiohang',$product['item']['id'])}}">+</a>
                        </div>
                        </span>
                    </div>
                    <div class="info-total">

                        @if($product['item']['promotion_price']==0)
                        <div class="bill-title total-text">{{$product['item']['price_out']}} * {{$product['quantity']}} VND</div>
                        @else
                        <div class="bill-title total-text">{{$product['item']['promotion_price']}}*{{$product['quantity']}} VND</div>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="bill-item-container">
            <span class="red">Phí giao hàng chung cho tất cả đơn hàng là 35 000đ.</span>
                <div class="bill-item-product">
                    <span>Tổng tiền:
                        <h4 class="total">{{number_format(Session('cart')->totalPrice)}} VND</h4>
                    </span>
                </div>
            </div>
        <div class="btn-row">
                <a class="btn-back"><i class="fa fa-arrow-left"></i> QUAY LẠI</a>
                <a class="btn-next" href="{{Route('dathang')}}">THANH TOÁN <i class="fa fa-arrow-right"></i></a>
            </div>
    </div>
</div>
@endsection
