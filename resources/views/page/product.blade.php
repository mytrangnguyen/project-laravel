@extends('master')
@section('content')
<div class="top-row">
    <div class="left-content col-3">
        <div class="category-content">
            <h3 class="title-category-product">
                SẢN PHẨM
            </h3>
            <ul class="list-category">
            @foreach($cate as $loai)
                            <li class="list-cate"><a href="{{route('sanpham',$loai->cate_id)}}">{{$loai->cate_name}}</a></li>
                            @endforeach
            
            </ul>
        </div>
        <div class="product-list-content">
            <h3 class="title-category">
                SẢN PHẨM HOT NHẤT
            </h3>
            @foreach($new_product as $new)
            <div class="group-product">
                <div class="item-product">
                    <div class="image-product">
                    <a href="{{Route('chitiet',$new->id)}}">
                                    <img src='{{ asset("source/image/$new->url_img") }}' alt="">
                                </a>
                    </div>
                    <div class="description-product">
                        <div class="text-description">
                            <div class="title-product">
                                <h3>{{$new->center_name}}</h3>
                            </div>
                            <div class="name-product">
                                <p>{{$new->prod_name}}</p>
                            </div>
                            <div class="price-product">
                                <span class="price">
                                {{$new->price_out}} đ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="right-content col-9">
        <!-- SECTION SLIDER -->
        <div class="slideshow">
            @foreach($slide as $sl)
            <div class="mySlides">
                <img src='{{ asset("source/$sl->img_url") }}' class="hidden-image">
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
    </div>
</div>
<!-- SECTION CONTENT ITEM  -->
<div class="content-product container">
    <div class="container-list-product">
        <div class="title-product-show">
            <h2 class="title-main-category">Trang chủ</h2>
            <span>/</span>
            <p class="title-category">Hot product</p>
        </div>
        <div class="main-content-product">
            <div class="main-title">
                <div class="title-new-pr">
                    <b></b>
                    <span class="title-product">Sản phẩm mới</span>
                    <b></b>
                </div>
            </div>
            <div class="row-list-product">
                @foreach($sp_theoloai as $sptl)
                <div class="col-3">
                    <div class="item-product">
                        <div class="product-session">
                            <div class="">
                                <a href="{{Route('chitiet',$sptl->id)}}">
                                    <img src='{{ asset("source/image/$sptl->url_img") }}' alt="" class="pr-image">
                                </a>
                            </div>
                            <div class="description">
                                <div class="title-product">
                                    <h3>{{$sptl->center_name}}</h3>
                                </div>
                                <div class="name-product">
                                    <p>{{$sptl->prod_name}}</p>
                                </div>
                                @if($sptl->promotion_price==0)
                                <div class="price-product">
                                    <span class="price">
                                        {{$sptl->price_out}} đ
                                    </span>
                                </div>
                                @else
                                <div class="price-product">
                                    <span class="price">
                                        {{$sptl->promotion_price}} đ

                                    </span>
                                    <span class="promo-price">
                                        {{$sptl->price_out}} đ
                                    </span>
                                </div>
                                @endif
                                <div class="card-product">
                                    <!-- <a href="#"><i class='fas fa-heart'></i></a> -->
                                    <a href="{{Route('themgiohang',$sptl->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="links">
            {{$sp_theoloai->links()}}
        </div>
    </div>
</div>
<!-- CLOSE SECTION CONTENT ITEM-->

@endsection