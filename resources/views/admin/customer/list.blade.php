@extends('admin.master')
@section('content')
<div class="row" style="position: absolute;">
    <a href="{!! url('admin/customer/add') !!}"><button type="submit" class="btn btn-primary" style="margin-left: 15px;">ADD</button></a>
</div>
                    
<table class="table table-hover" style="margin-top: 50px;">
    <thead>
        <tr style=" background: skyblue;">
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Address</th>
            <th>Note</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $value)
        <tr>
            <td> {!! $value["id"] !!} </td>
            <td> {!! $value["name"] !!} </td>
            <td> {!! $value["gender"] !!} </td>
            <td> {!! $value["email"] !!} </td>
            <td> {!! $value["address"] !!} </td>
            <td> {!! $value["note"] !!} </td>
            <td> {!! $value["phone_number"] !!} </td>
            <td>
                <a href="{!! url('admin/customer/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                <a href="{!! url('admin/customer/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
