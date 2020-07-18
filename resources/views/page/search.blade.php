@extends('master')
@section('content')
<div class="section-flash new-product promotion-product">
    <!-- title product category -->
    <div class="main-title">
        <div class="title-new-pr">
            <b></b>
            <span class="title-product">Sản phẩm tim kiếm</span>
            <b></b>
        </div>
    </div>
    <!-- SECTION CONTENT ITEM  -->
    <div class="section-th content-item container" name="promotion-product">
        <div class="container-slider-item">
            <!-- <i class="fa fa-chevron-left prev-p"></i>
        <i class="fa fa-chevron-right next-p"></i> -->
            <div class="slider">
                <p>Tìm được {{count($product)}} sản phẩm khuyến mãi</p>
                <div class="box-product-wrapper">
                    @foreach($product as $pro)
                    <div class="box-content">
                        <div class="item-product">
                            <div class="image-product">
                                <a href="{{Route('chitiet',$pro->id)}}"><img src="source/image/{{$pro->url_img}}" alt="" class="hidden-image"></a>
                            </div>
                            <div class="description">
                                <div class="title-product">
                                    <h3>{{$pro->center_name}}</h3>
                                </div>
                                <div class="name-product">
                                    <p>{{$pro->prod_name}}</p>
                                </div>
                                @if($pro->promotion_price==0)
                                <div class="price-product">
                                    <span class="price">
                                        {{$pro->price_out}} đ
                                    </span>
                                </div>
                                @else
                                <div class="price-product">
                                    <span class="price">
                                        {{$pro->promotion_price}} đ
                                    </span>
                                    <span class="promo-price">
                                        {{$pro->price_out}} đ
                                    </span>
                                </div>
                                @endif

                                <div class="card-product">
                                    <a href="#"><i class='fas fa-heart'></i></a>
                                    <a href="{{Route('themgiohang',$pro->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{ csrf_field() }}
            <!-- close slider -->
        </div>
    </div>
    <!-- CLOSE SECTION CONTENT ITEM-->
    <!-- button view more -->
    <div class="btn-view-more">
        <div class="view-more">
            <span class="view-more-title">Xem tất cả sản phẩm</span>
        </div>
    </div>

</div>
@endsection