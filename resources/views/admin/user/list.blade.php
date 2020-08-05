@extends('admin.master')
@section('content')
<div class="row" style="position: absolute;">
    <a href="{!! url('admin/user/add') !!}"><button type="submit" class="btn btn-primary" style="margin-left: 15px;">ADD</button></a>
</div>
                    
<table class="table table-hover" style="margin-top: 50px;">
    <thead>
        <tr style=" background: skyblue;">
            <th>ID</th>
            <th>Userame</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>User Role</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $value)
        <tr>
            <td> {!! $value["id"] !!} </td>
            <td> {!! $value["username"] !!} </td>
            <td> {!! $value["email"] !!} </td>
            <td> {!! $value["address"] !!} </td>
            <td> {!! $value["phone"] !!} </td>
            <td> {!! $value["user_role"] !!} </td>
            <td> {!! $value["password"] !!} </td> 
            <td>
                <a href="{!! url('admin/user/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                <a href="{!! url('admin/user/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
