@extends('sellerAdmin.master')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Order Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chi tiết đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        @foreach($order as $key=>$item)
                        <td>{{$item[0]->name}}</td>
                        <td>{{$item[0]->address}}</td>
                        <td>0334778516</td>
                        <td>
                            <table>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                </tr>
                                @for($i = 0; $i< count($item); $i++) <tr>
                                    <td>{{$item[$i]->prod_name}}</td>
                                    <td>{{$item[$i]->price_out}}</td>
                                    <td>{{$item[$i]->quantity}}</td>
                    </tr>
                    @endfor
                    </tr>
            </table>
            </td>
            <td>{{$item[0]->total}}</td>
            @if($item[0]->status==1)
            <td>Chờ xác nhận</td>
            @endif
            @if($item[0]->status==2)
            <td>Đang giao</td>
            @endif
            @if($item[0]->status==3)
            <td>Đã nhận</td>
            @endif
            @if($item[0]->status==4)
            <td>Đã hủy</td>
            @endif
            <td>{{$item[0]->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
