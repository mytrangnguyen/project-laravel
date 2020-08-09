@extends('admin.master')
@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Comment Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @for($i=0;$i< $size;$i++) <tr>
                        <td>{{$i}}</td>
                        <td>{{$comment[$i]['username']}}</td>
                        <td>{{$comment[$i]['prod_name']}}</td>
                        <td>{{$comment[$i]['comment']}}</td>
                        <td><a href="{!! url('admin/comment/delete',$i) !!}"> <i class="menu-icon fa fa-trash"></i></a>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection