@extends('master')
@section('content')
<div class="container product-detail">
    <div class="product-image">
        <img src='{{ asset("source/image/$chitiet_sp->url_img") }}' class="image-detail">
    </div>
    <div class="detail-price">
        <div class="title-detail detail">
            <h4>Mô tả</h4>
        </div>
        <div class="name-detail detail">
            <h3 class="product-name-detail">Sản phẩm {{$chitiet_sp->prod_name}}</h3>
        </div>
        <div class="description-detail detail">
            <p class="description">{{$chitiet_sp->description}}</p>
        </div>
        <div class="price-detail">
            @if($chitiet_sp->promotion_price==0)
            <div class="new-price-detail detail">
                {{$chitiet_sp->price_out}}
            </div>
            @else
            <div class="old-price-detail detail">
                {{$chitiet_sp->price_out}}
            </div>
            <div class="new-price-detail detail">
                {{$chitiet_sp->promotion_price}}
            </div>
            @endif
            <div class="discount">8% giảm</div>
        </div>
        <div class="choose-product">
            <div class="quantity-detail detail">
                <h5>Số lượng</h5>
            </div>
            <div class="input-quantity">
                <span class="minus">-</span>
                <input type="text" value="1" class="quantity" />
                <span class="plus">+</span>
            </div>
            <div class="available-product-detail detail">
                <p>Còn {{$chitiet_sp->quantity}} sản phẩm trong kho</h5>
            </div>
            <div class="buy-product">
                <div class="btn-add-to-cart "><button type="submit" class="btn"><i class="fa fa-cart-plus"> </i>Thêm vào
                        giỏ hàng</button></div>
                <div class="btn-buy-now "><button type="submit" class="btn">Mua ngay</button></div>
            </div>
        </div>
    </div>
</div>
<div class="container feedback-field">
    <h3>Đánh giá</h3>
    <div class="input-feedback">
        <form>
            <textarea></textarea>
        </form>
    </div>
    <div class="btn-feedback">
        <button type="submit" class="btn">GỬI</button>
    </div>
</div>
<div class="container customer-feedback">
    <div class="customer-name">
        <h5>Thanh Phạm</h5>
    </div>
    <div class="border"></div>
    <div class="feedback content">
        <p><i class="fa fa-comment comment"></i> Giày đẹp độ co giãn tốt, bền, chắc, hài lòng</p>
    </div>
</div>
<div class="container customer-feedback">
    <div class="customer-name">
        <h5>Thanh Phạm</h5>
    </div>
    <div class="border"></div>
    <div class="feedback content ">
        <p>
            <i class="fa fa-comment comment"></i> Giày đẹp độ co giãn tốt, bền, chắc, hài lòng</p>
    </div>
</div>
<div class="container contact-introduction">
    <h4>NẾU QUÝ KHÁCH CÓ NHU CẦU ĐẶT HÀNG XIN LIÊN HỆ TRỰC TIẾP VỚI SHOP QUA SỐ HOTLINE: 0334 778 516</h4>
    <br> - SẢN PHẨM THỰC TẾ NHƯ HÌNH </br>
    - SHOP SHIP HÀNG TOÀN QUỐC ( HÓA ĐƠN TỪ 50.000 TRỞ LÊN) </br>
    - CAM KẾT 100% HÀNG CHẤT LƯỢNG </br>
    - THANH TOÁN KHI NHẬN ĐƯỢC HÀNG </br>
    - NHẬN LÀM THEO YÊU CẦU CỦA KHÁCH HÀNG </br>
    - GIÁ SỈ MUA BUÔN LIÊN HỆ SỐ HOTLINE: 0334778516</br>

</div>

@endsection