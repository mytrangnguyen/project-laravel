@extends('admin.master')
@section('content')

<div class="row" style="position: absolute;">
    <a href="{!! url('admin/slider/add') !!}"><button type="submit" class="btn btn-primary" style="margin-left: 15px;">ADD</button></a>
</div>

<table class="table table-hover" style="margin-top: 50px;">
    <thead>
        <tr style=" background: skyblue;">
            <th>ID</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach($slider as $value)
            <tr>
                <td> {!! $value["id"] !!} </td>
                <td> {!! $value["image"] !!} </td>
                <td>
                    <a href="{!! url('admin/slider/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                    <a href="{!! url('admin/slider/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>

@endsection