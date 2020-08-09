@extends('admin.master')
@section('content')

<a href="{!! url('admin/seller/add') !!}">Add more Seller</a>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Seller Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Center Name</th>
                        <th>Paper Identication</th>
                        <th>User Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($seller as $value)
                    <tr>
                        <td> {!! $value["id"] !!} </td>
                        <td> {!! $value["fullname"] !!} </td>
                        <td> {!! $value["email"] !!} </td>
                        <td> {!! $value["address"] !!} </td>
                        <td> {!! $value["phone"] !!} </td>
                        <td> {!! $value["center_name"] !!} </td>
                        <td> {!! $value["paper_identication"] !!} </td>
                        <td> {!! $value["user_role"] !!} </td>
                        <td>
                            <a href="{!! url('admin/seller/edit',$value->id) !!}"> <i
                                    class="menu-icon fa fa-edit"></i></a>
                            <a href="{!! url('admin/seller/delete',$value->id) !!}"> <i
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
