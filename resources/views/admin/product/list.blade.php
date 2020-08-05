@extends('admin.master')
@section('content')
<div class="row" style="position: absolute;">
    <a href="{!! url('admin/product/add') !!}"><button type="submit" class="btn btn-primary"
            style="margin-left: 15px;">ADD</button></a>
</div>

<table class="table table-hover" style="margin-top: 50px;">
    <thead>
        <tr style=" background: skyblue;">
            <th>ID</th>
            <th>Name</th>
            <th>Category ID</th>
            <th>Description</th>
            <th>Unit Price</th>
            <th>Promotion Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Disabled Center</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $value)
        <tr>
            <td> {!! $value["id"] !!} </td>
            <td> {!! $value["prodname"] !!} </td>
            <td> {!! $value["cate_id"] !!} </td>
            <td> {!! $value["description"] !!} </td>
            <td> {!! $value["price_out"] !!} </td>
            <td> {!! $value["promotion_price"] !!} </td>
            <td> {!! $value["quantity"] !!} </td>
            <td> {!! $value["url_img"] !!} </td>
            <td> {!! $value["center_name"] !!} </td>
            <td> {!! $value["status"] !!} </td>
            <td>
                <a href="{!! url('admin/product/edit',$value[" id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                <a href="{!! url('admin/product/delete',$value[" id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection