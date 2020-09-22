<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div> <img src="{{ asset('/img/logo.PNG') }}" alt=""> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{!! url('sellerAdmin/home') !!}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chủ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{!! url('sellerAdmin/category/list') !!}">
            <i class="fas fa-list"></i>
            <span>Danh mục sản phẩm</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('sellerAdmin/comment/list') !!}">
            <i class="far fa-comments"></i>
            <span>Bình luận</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('sellerAdmin/customer/list') !!}">
            <i class="fas fa-user-check"></i>
            <span>Khánh hàng</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('sellerAdmin/order/list') !!}">
            <i class="fas fa-file-invoice"></i>
            <span>Đơn hàng</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('sellerAdmin/product/list') !!}">
            <i class="fab fa-product-hunt"></i>
            <span>Sản phẩm</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>