@extends('admin.master')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Order Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Người mua hàng</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Chi tiết đơn hàng</th>
                            <th>Tổng tiền</th>
                            <th>Thời gian</th>
                            <th>Tình trạng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(!empty($order))
                        <tr>

                            @foreach($order as $key=>$item)
                            <td>{{$item[0]->name}}</td>
                            <td>{{$item[0]->address}}</td>
                            <td>{{$item[0]->email}}</td>
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
                <td>{{$item[0]->created_at}}</td>
                @if($item[0]->status==1)
                <td class="text-confirm"> Chờ xác nhận </td>
                @endif
                @if($item[0]->status==2)
                <td class="text-doing"> Đang giao hàng </td>
                @endif
                @if($item[0]->status==3)
                <td>Đã giao</td>
                @endif
                @if($item[0]->status==4)
                <td class="text-deleted"> Đã hủy đơn </td>
                @endif
                <td>
                    @if($item[0]->status==1)
                    <form method="POST" action="{{URL::action('OrderController@postChangeStatus',$item[0]->id)}}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-confirm btn-success">Xác nhận
                        </button>

                    </form>

                    @elseif($item[0]->status==2)
                    <form method="POST" action="{{URL::action('OrderController@postChangeStatus',$item[0]->id)}}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-confirm btn-success">Đã giao
                        </button>
                    </form>

                    @elseif($item[0]->status==3 && $item[0]->status==4 )

                    @endif
                    <!-- <a href="{!! url('admin/order/delete',$item[0]->id) !!}"> <i class="menu-icon fa fa-trash"></i></a> -->

                </td>
                </tr>
                @endforeach
                @else
                <p>Hiện tại bạn chưa có đơn hàng nào</p>
                @endif
                </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
