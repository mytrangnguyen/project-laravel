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
            <!-- <div class="input-quantity">
                <span class="minus">-</span>
                <input type="text" value="1" class="quantity" />
                <span class="plus">+</span>
            </div> -->
            <div class="available-product-detail detail">
                <p>Còn {{$chitiet_sp->quantity}} sản phẩm trong kho</h5>
            </div>
            <div class="buy-product">
                <div class="btn-add-to-cart "><a class="btn" href="{{Route('themgiohang',$chitiet_sp->id)}}"><i
                            class="fa fa-cart-plus"> </i>Thêm vào
                        giỏ hàng</a></div>
                <div class="btn-buy-now "><a class="btn" href="{{Route('dathang')}}">Mua ngay</a></div>
            </div>
        </div>
    </div>
</div>
<div class="container feedback-field">
    <h3>Đánh giá</h3>
    <div class="input-feedback">
        <form action="{{route('feedback')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id_prod" value="{{$chitiet_sp->id}}" />
            @if(Auth::user())
            <input type="hidden" name="id_user" value="{{Auth::user()->id}}" />
            @else
            <input type="hidden" name="id_user" value="" />
            @endif
            <textarea name="comment"></textarea>
            <!-- <div class="btn-feedback"> -->
            <button type="submit" class="btn">GỬI</button>
            <!-- </div> -->
        </form>
    </div>

</div>
@foreach ($comment as $cmt)
<div class="container customer-feedback">
    <div class="customer-name">
        <h5>{{$cmt->username}}</h5>
    </div>
    <div class="border"></div>
    <div class="feedback content">
        <span><i class="fa fa-comment comment"></i> </span>
        <p>{{$cmt->comment}}</p>
        <h5 class="time-cmt">{{$cmt->created_at}}</h5>
    </div>
</div>
@endforeach
<!-- <div class="container customer-feedback">
  <div class="customer-name">
    <h5>Thanh Phạm</h5>
  </div>
  <div class="border"></div>
  <div class="feedback content ">
    <p>
      <i class="fa fa-comment comment"></i> Giày đẹp độ co giãn tốt, bền, chắc, hài lòng</p>
    <h5>10:30 23/7/2020</h5>
  </div>
</div> -->
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