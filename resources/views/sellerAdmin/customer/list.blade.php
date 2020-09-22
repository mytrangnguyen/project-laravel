@extends('sellerAdmin.master')
@section('content')

<!-- <button type="submit" class="btn-add btn btn-success"><a class="add-button"
        href="{!! url('sellerAdmin/customer/add') !!}">Add</a>
    <i class="menu-icon fa fa-plus"></i></button> -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Danh sách khách hàng</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú</th>
                        <th>Số điện thoại</th>
                        <!-- <th>Action</th> -->
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
                        <!-- <td>
                            <a onclick="return confirm('Bạn có muốn xóa không?')"
                                href="{{ url('sellerAdmin/customer/delete',$value["id"]) }}"> <i
                                    class="menu-icon fa fa-trash"></i></a>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
