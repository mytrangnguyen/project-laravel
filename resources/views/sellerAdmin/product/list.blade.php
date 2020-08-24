@extends('sellerAdmin.master')
@section('content')

<button type="submit" class="btn-add btn btn-success"><a class="add-button"
        href="{!! url('admin/category/add') !!}">Add</a>
    <i class="menu-icon fa fa-plus"></i></button>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Product Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Unit Price</th>
                        <th>Promotion Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($product as $value)
                    <tr>
                        <td> {!! $value["id"] !!} </td>
                        <td> {!! $value["prod_name"] !!} </td>
                        <td>@foreach($cate as $cat)
                            @if($value->cate_id==$cat->cate_id)
                            {{$cat->cate_name}}
                            @endif
                            @endforeach </td>
                        <td> {!! $value["description"] !!} </td>
                        <td> {!! $value["price_out"] !!} </td>
                        <td> {!! $value["promotion_price"] !!} </td>
                        <td> {!! $value["quantity"] !!} </td>
                        <td>
                            <img src="{{ asset('/source/image/'.$value->url_img)}}" width="100px"
                                alt="{{$value->url_img}}">
                        </td>
                        <td> {!! $value["status"] !!} </td>
                        <td>
                            <a href="{!! url('admin/product/edit',$value->id) !!}"> <i
                                    class="menu-icon fa fa-edit"></i></a>
                            <a onclick="return confirm('Bạn có muốn xóa không?')"
                                href="{!! url('admin/product/delete',$value->id) !!}"> <i
                                    class="menu-icon fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection