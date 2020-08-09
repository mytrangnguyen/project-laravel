<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div> <img src="{{ asset('/img/logo.PNG') }}" alt=""> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/category/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>CATEGORIES</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/comment/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>COMMENTS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/customer/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>CUSTOMERS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/order/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>ORDERS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/order_prods/add') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>ORDER PRODUCTS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/seller/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>SELLERS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/user/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>USERS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/slider/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>SLIDERS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! url('admin/product/list') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>PRODUCTS</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>