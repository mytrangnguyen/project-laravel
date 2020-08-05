@extends('admin.master')
@section('content')

<div class="row" style="position: absolute;">
    <a href="{!! url('admin/category/add') !!}"><button type="submit" class="btn btn-primary" style="margin-left: 15px;">ADD</button></a>
</div>

<table class="table table-hover" style="margin-top: 50px;">
    <thead>
        <tr style=" background: skyblue;">
            <th>ID</th>
            <th>Cate Name</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach($category as $value)
            <tr>
                <td> {!! $value["id"] !!} </td>
                <td> {!! $value["cate_name"] !!} </td>
                <td>
                    <a href="{!! url('admin/category/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                    <a href="{!! url('admin/category/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>

@endsection