@extends('admin.master')
@section('content')

<a href="{!! url('admin/user/add') !!}">Add more User</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">User Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>User Role</th>
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
                        <td>
                            <a href="{!! url('admin/user/edit',$value->id) !!}"> <i
                                    class="menu-icon fa fa-edit"></i></a>
                            <a href="{!! url('admin/user/delete',$value->id) !!}"> <i
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