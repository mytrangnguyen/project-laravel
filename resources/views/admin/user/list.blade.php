@extends('admin.master')
@section('content')

<button type="submit" class="btn-add btn btn-success"><a class="add-button" href="{!! url('admin/user/add') !!}">Add</a>
    <i class="menu-icon fa fa-plus"></i></button>
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
                        <th>Status</th>
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
                        <td> <input data-id="{{$value->id}}"  class="toggle-class custom-control-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->status ? 'checked' : '' }}> </td>
                        <td>
                            <a href="{!! url('admin/user/edit',$value->id) !!}"> <i
                                    class="menu-icon fa fa-edit"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
