@extends('master')
@section('content')
<!-- SECTION SLIDER -->
<div class="slideshow">
    @foreach($slide as $sl)
    <div class="mySlides main-slide">
        <img src="source/{{$sl->img_url}}" class="hidden-image">
    </div>
    @endforeach
    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<!-- CLOSE SLIDER -->

<!-- SECTION NEW PRODUCT -->
<div class="section-flash new-product">
    <!-- title product category -->
    <div class="main-title">
        <div class="title-new-pr">
            <b></b>
            <span class="title-product">Sản phẩm mới</span>
            <b></b>
        </div>
    </div>
    <!-- SECTION CONTENT ITEM  -->
    <div class="section-th content-item container">
        <div class="container-slider-item">
            <!-- <i class="fa fa-chevron-left prev-p"></i>
        <i class="fa fa-chevron-right next-p"></i> -->
            <div class="slider">
                <p>Tìm được {{count($new_product)}} sản phẩm mới</p>
                <div class="box-product-wrapper">
                    @foreach($new_product as $new)
                    <div class="box-content">
                        <div class="item-product">
                            <div class="image-product">
                                <a href="{{Route('chitiet',$new->id)}}"><img src="source/image/{{$new->url_img}}" alt=""
                                        class="hidden-image"></a>
                            </div>
                            <div class="description">
                                <div class="title-product">
                                    <h3>{{$new->center_name}}</h3>
                                </div>
                                <div class="name-product">
                                    <p>{{$new->prod_name}}</p>
                                </div>
                                @if($new->promotion_price==0)
                                <div class="price-product">
                                    <span class="price">
                                        {{$new->price_out}} đ
                                    </span>
                                </div>
                                @else
                                <div class="price-product">
                                    <span class="price">
                                        {{$new->promotion_price}} đ
                                    </span>
                                    <span class="promo-price">
                                        {{$new->price_out}} đ
                                    </span>
                                </div>
                                @endif

                                <div class="card-product">
                                    <a href="#"><i class='fas fa-heart'></i></a>
                                    <a href="{{Route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
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
<!-- CLOSE SECTION NEW PRODUCT -->

<!-- SECTION FLOWERS PRODUCT -->
<!-- title product category -->
<div class="main-title">
    <div class="title-new-pr">
        <b></b>
        <span class="title-product">SẢN PHẨM KHUYẾN MÃI</span>
        <b></b>
    </div>
</div>
<!-- SECTION CONTENT ITEM  -->
<div class="section-flash new-product container">
    <div class="section-th content-item ">
        <div class="container-slider-item">
            <p>Tìm được {{count($sanpham_khuyenmai)}} sản phẩm khuyến mãi</p>
            <!-- <i class="fa fa-chevron-left prev-p"></i>
        <i class="fa fa-chevron-right next-p"></i> -->
            <div class="slider">
                <div class="box-product-wrapper">
                    @foreach($sanpham_khuyenmai as $spkm)
                    <div class="box-content">
                        <div class="item-product">
                            <div class="image-product">
                                <a href="{{Route('chitiet',$spkm->id)}}"><img src="source/image/{{$spkm->url_img}}"
                                        alt="" class="hidden-image"></a>
                            </div>
                            <div class="description">
                                <div class="title-product">
                                    <h3>{{$spkm->center_name}}</h3>
                                </div>
                                <div class="name-product">
                                    <p>{{$spkm->prod_name}}</p>
                                </div>
                                <div class="price-product">
                                    <span class="price">
                                        {{$spkm->promotion_price}} đ
                                    </span>
                                    <span class="promo-price">
                                        {{$spkm->price_out}} đ
                                    </span>
                                </div>
                                <div class="card-product">
                                    <a href="#"><i class='fas fa-heart'></i></a>
                                    <a href="{{Route('themgiohang',$spkm->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
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
<!-- CLOSE SECTION FLOWERs PRODUCT -->



</div>
<!-- CLOSE SECTION LOCKERS PRODUCT -->
@endsection