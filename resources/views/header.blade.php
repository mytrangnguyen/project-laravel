<header class="fixed-header">
    <div class="container header-top">
        <div class="header-left">
            <div class="header-contact-email">
                <span><i class="fa-icon fa fa-envelope"></i></span><a class="icon-header link"
                    href="mailto:hdflash@gmail.com" target="_top">hdflash@gmail.com</a>
            </div>
            <div class="heaeder-contact-phone">
                <span><i class="fa-icon fa fa-phone"></i></span><a class="icon-header link"
                    href="tel:0334778516">0334778516</a>
            </div>
        </div>
        <div class="header-right">
            @if(Auth::check())
            <div class="avatar">
                <div class="user"><span><i class="fa fa-user" aria-hidden="true"></i></span><a class="icon-header link"
                        id="login-button" href="{{route('users.edit',Auth::user())}}"
                        target="_top">{{Auth::user()->username}}</a>
                    &emsp;

                </div>
                <div class="logout"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span><a
                        href="{{route('logout')}}" class="icon-header  link" id="login-button" target="_top">Đăng
                        xuất</a></div>

            </div>
            @else
            <div class="login">
                <!-- Trigger/Open The Modal -->
                <span><i class="fa-icon fa fa-user"></i></span><a class="icon-header  link" id="login-button" href="#"
                    target="_top">Đăng nhập</a>
                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Đăng nhập</h2>

                        <form action="{{route('login')}}" method="post" class="login-form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul class="error-message">
                                    <i class="fa fa-times-circle"></i>
                                    @foreach ($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="imgcontainer">
                                <img src="{{ asset('source/image/img_avatar2.png') }}" alt="Avatar" class="avatar">
                            </div>

                            <div class="login-container">
                                <label for="uname"><b>Tên đăng nhập hoặc email</b></label>
                                <input type="text" class="input-infor" placeholder="Nhập tên hoặc email" name="email">

                                <label for="psw"><b>Mật khẩu</b></label>
                                <input type="password" class="input-infor" placeholder="Nhập mật khẩu" name="password">

                                <button type="submit" class="btnlogin">Login</button>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
                                </label>
                            </div>

                            <div class="login-container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Hủy</button>
                                <span class="psw">Quên <a href="#">mật khẩu?</a></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="register">
                <span><i class="fa-icon fa fa-envelope"></i></span><a class=" icon-header link"
                    href="{{route('dangky')}}" target="_top">Đăng ký</a>
            </div>
            @endif
        </div>
    </div>
    <div class="container header-logo">
        <div class="logo-img">

            <img src=" {{ asset('source/image/logo.png') }}" class="image-logo-header" alt="logo">
        </div>
        <div class="search-bar">
            <form class="search" method="get" action="{{route('tim-kiem')}}">
                <input type="text" value="" placeholder="Search.." name="key">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="cart">

            <div class="product-cart">
                <a href="{{route('giohang')}}" class="cart-toggle">
                    <span class="cart-text">Giỏ hàng</span>
                    <span class="cart-img">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="cart-number">(@if(Session::has('cart')){{Session('cart')->totalQuantity}}@else 0
                            @endif)</span>
                    </span>
                </a>
                @if(Session::has('cart'))
                <div id="mini-cart" class="mini-cart">
                    <div class="mini-cart-content">
                        <div class="cart-info">
                            Giỏ hàng của bạn <button class="btn-back btn-more"> Xem chi tiết </button>
                        </div>
                        <div class="list-product">
                            <div class="scroll-content">

                                <ul class="cart-list">
                                    @foreach($product_cart as $product)
                                    <li class="cart-item">
                                        <div class="item-thumb">
                                            <a href="#" title="" class="">
                                                <img src="source/image/{{$product['item']['url_img']}}" alt=""
                                                    class="img-product-item">
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a href="#" ng-bind="getTranslate(product.title)"
                                                class="name-product-cart">{{$product['item']['prod_name']}}</a>
                                            <div class="item-qty">
                                                <span
                                                    class="quantity-product-cart ng-binding">{{$product['item']['quantity']}}</span>
                                                x
                                                @if($product['item']['promotion_price']==0)
                                                <span class="price ng-binding"> {{$product['item']['price_out']}}
                                                    đồng</span>
                                                @else
                                                <span class="price ng-binding"> {{$product['item']['promotion_price']}}
                                                    đồng</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item-action" ng-click="delete($index, product)">
                                            <a class="btn-remove" href="#">
                                                <i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="cart-total text-center">
                            <label>Tổng tiền</label> <span
                                class="price ng-binding">{{number_format(Session('cart')->totalPrice)}} đồng</span>
                        </div>
                        <div class="cart-link">
                            <a name="checkout" class=" btn-back" href="{{Route('dathang')}}">Thanh toán <i
                                    class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div id="mini-cart" class="mini-cart">
                <div class="mini-cart-content">
                    <div class="cart-info">
                        Giỏ hàng của bạn hiện tại đang trống
                    </div>
                </div>
            </div>
            @endif
            <!-- <div class="favorite-cart">
                <a href="#" class="cart-toggle">
                    <span class="cart-text">Yêu thích</span>
                    <span class="cart-img">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="cart-number"><i class="fa fa-heart" aria-hidden="true"></i></span>
                    </span>
                </a>
            </div> -->
        </div>
    </div>

    </div>
    <div class="container nagivation ">
        <div class="menu-btn-group">
            <div class="menu-toggle"></div>
            <div class="menu-close"></div>
        </div>
        <div class="navbar-collapse">
            <nav role="navigation">
                <ul class="nav-content">
                    <li class="menu-item">
                        <a class="active-item" href="{{route('trang-chu')}}">TRANG CHỦ</a>
                    </li>
                    <li class="menu-item">
                        <a class="active-item" href="#">SẢN PHẨM</a>
                        <ul id="nav" class=" item-submenu">
                            @foreach($loai_sp as $loai)
                            <li><a href="{{route('sanpham',$loai->cate_id)}}">{{$loai->cate_name}}</a></li>
                            @endforeach
                        </ul>

                    </li>
                    <li class="menu-item">
                        <a class="active-item" href="{{route('gioithieu')}}">GIỚI THIỆU</a>
                    </li>
                    <li class="menu-item">
                        <a class="active-item" href="{{route('lienhe')}}">LIÊN HỆ</a>
                    </li>
                </ul>
            </nav>
        </div>



    </div>


</header>