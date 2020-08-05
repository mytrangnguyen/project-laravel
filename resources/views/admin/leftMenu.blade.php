<div class="col-3 left-menu">
    <div class="navbar-header">
        <a class="navbar-brand" href=""><img src="{{ url('./source/image/logo_admin.png') }}" alt="Logo"></a>
    </div>

    <div class="main-menu">
        <ul class="list-table">
            <li class="active">
                <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <h3 class="menu-title">FORM</h3><!-- /.menu-title -->

            <!-- SLIDE -->
            <li class="">
                <a href="{!! url('admin/slide/list') !!}"> <i class="menu-icon fa fa-table"></i>Slides</a>
            </li>

            <!-- USERS -->
            <li class="">
                <a href="{!! url('admin/user/list') !!}"> <i class="menu-icon fa fa-table"></i>Users</a>
            </li>

            <!-- SHIPPERS -->
            <li class="">
                <a href="#"> <i class="menu-icon fa fa-table"></i>Customers</a>
            </li>

            <!-- ORDERS -->
            <li class="">
                <a href="#"> <i class="menu-icon fa fa-table"></i>Orders</a>
            </li>

            <!-- ORDERS_PRODS -->
            <li class="">
                <a href="#"> <i class="menu-icon fa fa-table"></i>Orders_prods</a>
            </li>

            <!-- CATEGORIES -->
            <li class="">
                <a href="{!! url('admin/category/list') !!}"> <i class="menu-icon fa fa-table"></i>Categories</a>
            </li>

            <!-- PRODUCTS -->
            <li class="">
                <a href="{!! url('admin/product/list') !!}"> <i class="menu-icon fa fa-table"></i>Products</a>
            </li>

            <!-- COMMENTS -->
            <li class="">
                <a href="#"> <i class="menu-icon fa fa-table"></i>Sellers</a>
            </li>

            <!-- COMMENTS -->
            <li class="">
                <a href="#"> <i class="menu-icon fa fa-table"></i>Comments</a>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</div>