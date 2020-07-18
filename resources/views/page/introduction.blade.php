@extends('master')
@section('content')

<div class="header-top-banner">
    <div class="banner" style="background-image: url('source/image/item2.jpg');">
        <div class="container">
            <h1 class="main-title">Về chúng tôi</h1>
        </div>
    </div>
</div>
<!-- section who we are -->
<div class="header-top-intro">
    <div class="banner banner-introduce">
        <div class="container-introduce">
            <h5 class="title-about">Chúng tôi là ai?</h5>
            <p class="introduce-description">
                Nice to meet you! We are a tech-driven online retailer located near Salt Lake City in the shadow of the
                Wasatch Mountains. Since our beginnings in 1999, Shopmal has evolved from a fledging startup to a
                billion-dollar online retailer as a result of a hard-working
                and creative team.
            </p>
        </div>
    </div>
</div>
<!-- close section who we are -->

<!-- section what values -->
<div class="content">
    <div class="solutions">
        <h4 class="title-about">Chúng tôi mang tới giá trị gì?</h4>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="box-grid">
                <!-- feature content -->
                <div class="row gutters">
                    <div class="col-lg-6">
                        <div class="value-image" style="background-image: url('source/image/item2.jpg');">
                            <img alt="" src="source/image/item2.jpg" class="img-fluid hidden-image-value">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-infor black-box">
                            <h2 class="title-value">Kết nối mọi người</h2>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, mi id
                                    sodales venenatis, purus turpis ultricies magna, vitae eleifend felis tortor eget
                                    leo. Proin venenatis dolor a est pharetra, sit amet
                                    dignissim arcu pellentesque. Cras dolor metus, feugiat ac lacinia vel, facilisis ac
                                    leo. Quisque nec felis vel nisi semper gravida ac ut eros. Donec pulvinar lectus a
                                    massa laoreet, sed molestie felis gravida.
                                    Ut ultrices libero et tortor accumsan, at aliquam metus volutpat....
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- plan content -->
                <div class="row gutters row-reverse">
                    <div class="col-lg-6">
                        <div class="value-image" style="background-image: url('source/image/item2.jpg');">
                            <img alt="" src="source/image/item2.jpg" class="img-fluid hidden-image-value">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-infor">
                            <h2 class="title-value">Trách nhiệm xã hội</h2>
                            <div class="description">
                                <p>
                                    <span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, mi
                                        id sodales
                                        venenatis, purus turpis ultricies magna, vitae eleifend felis tortor eget leo.
                                        Proin
                                        venenatis dolor a est pharetra, sit amet dignissim arcu pellentesque. Cras dolor
                                        metus,
                                        feugiat ac lacinia vel, facilisis ac leo. Quisque nec felis vel nisi semper
                                        gravida ac
                                        ut eros. Donec pulvinar lectus a massa laoreet, sed molestie felis gravida. Ut
                                        ultrices
                                        libero et tortor accumsan, at aliquam metus volutpat....
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close box-grid -->
        </div>
        <!-- close container -->
    </div>
</div>
<!-- close section what mission -->

<!-- section who we are -->
<div class="section-flash ">
    <div class="banner banner-introduce" style="background-image: url('source/image/item2.jpg');">
        <div class="container-introduce">
            <h5 class="title-about">Sứ mệnh của chúng tôi là gì?</h5>
            <p class="introduce-description">
                Nice to meet you! We are a tech-driven online retailer located near Salt Lake City in the shadow of the
                Wasatch Mountains. Since our beginnings in 1999, Shopmal has evolved from a fledging startup to a
                billion-dollar online retailer as a result of a hard-working
                and creative team.
            </p>
        </div>
    </div>
</div>
<!-- close section what mission -->
@endsection