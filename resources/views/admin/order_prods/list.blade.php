@extends('admin.master')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Order Product Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Order</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Center Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @for($i=0;$i< $size;$i++) <tr>
                        <td>{{$i}}</td>
                        <td>{{$order_prods[$i]->id_order}}</td>
                        <td>{{$order_prods[$i]->prod_name}}</td>
                        <td>{{$order_prods[$i]->quantity}}</td>
                        <td>{{$order_prods[$i]->price_out}}</td>
                        <td>{{$order_prods[$i]->center_name}}</td>
                        <td><a href="{!! url('admin/order_prods/delete',$i) !!}"> <i
                                    class="menu-icon fa fa-trash"></i></a>
                        </td>
                        </tr>
                        @endfor

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection