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
                Chúng tôi là những người trẻ, chúng tôi muốn đóng góp một phần sức lực của mình cho xã hội, cho những
                người đang cần sự giúp đỡ ở đất nước hình chữ s này bằng việc tạo ra một trang website bán hàng dành cho
                người khuyết tật. Giúp kết nối những sản phẩm thủ công chính tay những người khuyết tật làm ra đến với
                nhiều người không chỉ trong nước mà còn cả ngoài nước.
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
                                <p>Con người ta sinh ra ai cũng muốn được lành lặn, khỏe mạnh, nhưng vì nhiều nguyên
                                    nhân, có những mảnh đời luôn mang trên mình những khuyết tật, ảnh hưởng đến thẩm mỹ,
                                    trí tuệ, giảm và mất khả năng lao động, các sinh hoạt cộng đồng và có lẽ vì những
                                    điều đó mà người khuyết tật trở tự ti về bản thân và thu hẹp lại cuộc sống của chính
                                    họ. Vì vậy chúng tôi tạo trang website này không chỉ để mọi người biết sản phẩm của
                                    những người tàn tật mà còn một phần nào đó để họ được kết nối với cộng đồng qua tất
                                    cả mọi hình thức có thể

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
                                    <span>Chia sẻ, giúp đỡ những người tàn tật không chỉ thể hiện được lòng thương người
                                        mà còn thể hiện được trách nhiệm của bản thân đối với xã hội. Mỗi hành động đóng
                                        góp cả về vật chất lẫn tinh thần giúp người khuyết tật vơi đi nỗi đau, vươn lên
                                        hòa nhập với cộng đồng. Và một phần nào đó thúc đẩy phát triển xã hội.

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
                Trang website chúng tôi tạo ra với sứ mệnh là giúp đỡ những người khuyết tật có thể phát triển được
                những tài năng của họ. giúp những tài năng những thành quả họ tạo ra được vươn cao hơn, vươn xa hơn
                không chỉ ở trong nước mà cả ngoài nước. Giúp họ có việc làm và thu nhập ổn định hơn để có một cuộc sống
                tốt hơn
            </p>
        </div>
    </div>
</div>
<div class="section-flash">
<h2 class="title-about">Hoạt động</h2>
<div class="row">
    <div class="box-infor">
        @foreach($activities as $act)
        <div class="column">
            <img class="act-img" src='{{ asset("source/$act->image") }}' alt="Not Found">
        </div>
        @endforeach
    </div>
</div>
</div>
<!-- close section what mission -->
@endsection
