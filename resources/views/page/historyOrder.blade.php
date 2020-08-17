@extends('master')
@section('content')
<div class="contact-form history">
    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')">Tất cả</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Chờ xác nhận</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Đang giao</button>
        <button class="tablinks" onclick="openCity(event, 'finish')">Đã giao</button>
        <button class="tablinks" onclick="openCity(event, 'cancel')">Đã hủy</button>
    </div>

    <!-- Tab content -->
    <div id="London" class="tabcontent" style="display:block">
        <center>
            <div class="user-infor">
                @empty($history)
                <div class="purchase-empty-order__container">
                    <div class="purchase-empty-order__icon"> </div>
                    <div class="purchase-empty-order__text"> Chưa có đơn hàng </div>
                </div>
                @else
                <table>
                    <tr>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chi tiết đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th>Thời gian</th>
                    </tr>
                    <tr>
                        <!-- <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th> -->
                    </tr>
                    <tr>
                        @foreach($history as $key=>$item)
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
                </table>
                @endempty
            </div>
        </center>
    </div>
    <div id="Paris" class="tabcontent">
        <center>
            <div class="user-infor">
                @empty($history1)
                <div class="purchase-empty-order__container">
                    <div class="purchase-empty-order__icon"> </div>
                    <div class="purchase-empty-order__text"> Chưa có đơn hàng </div>
                </div>
                @else
                <table>
                    <tr>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chi tiết đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian</th>
                    </tr>
                    <tr>
                        @foreach($history1 as $key=>$item)
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
                <td>{{$item[0]->created_at}}</td>
                <td>
                    <form method="POST" action="{{URL::action('PageController@postCancel',$item[0]->id)}}">
                        {{ csrf_field() }}
                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng')"
                            class="btn-cancel">Hủy đơn</button></form>
                </td>
                <!-- {!! url('huydonhang',$item[0]->id) !!} -->
                </tr>
                @endforeach
                </table>
                @endempty
            </div>
        </center>

    </div>
    <div id="Tokyo" class="tabcontent">
        <center>

            <div class="user-infor">
                @empty($history2)
                <div class="purchase-empty-order__container">
                    <div class="purchase-empty-order__icon"> </div>
                    <div class="purchase-empty-order__text"> Chưa có đơn hàng </div>
                </div>
                @else
                <table>
                    <tr>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chi tiết đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian</th>
                    </tr>
                    <tr>
                        @foreach($history2 as $key=>$item)
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
                <td>{{$item[0]->created_at}}</td>
                </tr>
                @endforeach
                </table>
                @endempty
            </div>
        </center>

    </div>
    <div id="finish" class="tabcontent">
        <center>

            <div class="user-infor">
                @empty($history3)
                <div class="purchase-empty-order__container">
                    <div class="purchase-empty-order__icon"> </div>
                    <div class="purchase-empty-order__text"> Chưa có đơn hàng </div>
                </div>
                @else
                <table>
                    <tr>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chi tiết đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian</th>
                    </tr>
                    <tr>
                        @foreach($history3 as $key=>$item)
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
                <td>{{$item[0]->created_at}}</td>

                <!-- {!! url('huydonhang',$item[0]->id) !!} -->
                </tr>
                @endforeach
                </table>
                @endempty
            </div>
        </center>

    </div>
    <div id="cancel" class="tabcontent">
        <center>

            <div class="user-infor">
                @empty($history4)
                <div class="purchase-empty-order__container">
                    <div class="purchase-empty-order__icon"> </div>
                    <div class="purchase-empty-order__text"> Chưa có đơn hàng </div>
                </div>
                @else
                <table>
                    <tr>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chi tiết đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian</th>
                    </tr>
                    <tr>
                        @foreach($history4 as $key=>$item)
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
                <td>{{$item[0]->created_at}}</td>
                <td>
                    <form method="POST" action="{{URL::action('PageController@postReOrder',$item[0]->id)}}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn">Đặt lại</button>
                    </form>
                </td>
                </tr>
                @endforeach
                </table>
                @endempty
            </div>
        </center>

    </div>
</div>
<div class="">

</div>
</div>






@endSection
