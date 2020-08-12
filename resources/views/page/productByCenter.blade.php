@extends('master')
@section('content')
<div class="top-row">
    <div class="left-content col-3">
        <div class="category-content">
            <h3 class="title-category-product">
                SẢN PHẨM
            </h3>
            <ul class="list-category">
                <li>Áo quần</li>
                <li>Mũ</li>
                <li>Khăn</li>
                <li>Móc khóa</li>
                <li>Gấu bông</li>
                <li>Hoa</li>
            </ul>
        </div>
        <div class="product-list-content">
            <h3 class="title-category">
                SẢN PHẨM HOT NHẤT
            </h3>
            <div class="group-product">
                <div class="item-product">
                    <div class="image-product">

                        <img src="{{ asset('source/image/item2.jpg') }}" alt="">
                    </div>
                    <div class="description-product">
                        <div class="text-description">
                            <div class="title-product">
                                <h3>Trung tâm KT</h3>
                            </div>
                            <div class="name-product">
                                <p>Giỏ hoa</p>
                            </div>
                            <div class="price-product">
                                <span class="price">
                                    57,00₫/giỏ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-product">
                <div class="item-product">
                    <div class="image-product">
                        <img src="{{ asset('source/image/item4.jpg') }}" alt="">
                    </div>
                    <div class="description-product">
                        <div class="text-description">
                            <div class="title-product">
                                <h3>Trung tâm KT</h3>
                            </div>
                            <div class="name-product">
                                <p>Giỏ hoa</p>
                            </div>
                            <div class="price-product">
                                <span class="price">
                                    57,00₫/giỏ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-product">
                <div class="item-product">
                    <div class="image-product">
                        <img src="{{ asset('source/image/item3.jpg') }}" alt="">
                    </div>
                    <div class="description-product">
                        <div class="text-description">
                            <div class="title-product">
                                <h3>Trung tâm KT</h3>
                            </div>
                            <div class="name-product">
                                <p>Giỏ hoa</p>
                            </div>
                            <div class="price-product">
                                <span class="price">
                                    57,00₫/giỏ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="row-list-product">
                @foreach($prodByCenter as $spttt)
                <div class="col-3">
                    <div class="item-product">
                        <div class="image-product">
                            <a href="{{Route('chitiet',$spttt->id)}}">
                                <img src='{{ asset("source/image/$spttt->url_img") }}' alt="" class="hidden-image">
                            </a>
                        </div>
                        <div class="description">
                            <div class="title-product">
                                <h3>{{$spttt->center_name}}</h3>
                            </div>
                            <div class="name-product">
                                <p>{{$spttt->prod_name}}</p>
                            </div>
                            @if($spttt->promotion_price==0)
                            <div class="price-product">
                                <span class="price">
                                    {{$spttt->price_out}} đ
                                </span>
                            </div>
                            @else
                            <div class="price-product">
                                <span class="price">
                                    {{$spttt->promotion_price}} đ

                                </span>
                                <span class="promo-price">
                                    {{$spttt->price_out}} đ
                                </span>
                            </div>
                            @endif
                            <div class="card-product">
                                <!-- <a href="#"><i class='fas fa-heart'></i></a> -->
                                <a href="{{Route('themgiohang',$spttt->id)}}"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="links">
            {{$prodByCenter->links()}}
        </div>
    </div>
</div>
<!-- CLOSE SECTION CONTENT ITEM-->

@endsection
