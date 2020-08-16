@extends('admin.master')
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Order Date</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($order as $value)
                    <tr>
                        <td> {!! $value["id"] !!} </td>
                        <td> {!! $value["name"] !!} </td>
                        <td> {!! $value["order_date"] !!} </td>
                        <td> {!! $value["email"] !!} </td>
                        <td> {!! $value["address"] !!} </td>
                        <td> {!! $value["total"] !!} </td>
                        <td> {!! $value["payment"] !!} </td>
                        <td> {!! $value["note"] !!} </td>
                        @if($value["status"]==1)
                        <td class="text-confirm"> Chờ xác nhận </td>
                        @endif
                        @if($value["status"]==2)
                        <td class="text-doing"> Đang giao hàng </td>
                        @endif
                        @if($value["status"]==3)
                        <td> Đã giao hàng </td>
                        @endif
                        @if($value["status"]==4)
                        <td class="text-deleted"> Đã hủy đơn </td>
                        @endif
                        <td>
                            @if($value["status"]==1)
                            <form method="POST" action="{{URL::action('OrderController@postChangeStatus',$value->id)}}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-confirm btn-success">Xác nhận
                                </button>

                            </form>

                            @elseif($value["status"]==2)
                            <form method="POST" action="{{URL::action('OrderController@postChangeStatus',$value->id)}}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-confirm btn-success">Đã giao
                                </button>
                            </form>

                            @elseif($value["status"]==3 && $value["status"]==4 )

                            @endif
                            <a href="{!! url('admin/order/delete',$value->id) !!}"> <i
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