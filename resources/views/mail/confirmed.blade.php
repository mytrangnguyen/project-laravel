<base href="{{ asset('') }}">
<div marginheight="0" marginwidth="0" style="background:#f0f0f0">
    <div id="wrapper" style="background-color:#f0f0f0">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
            style="margin:0 auto;width:600px!important;min-width:600px!important" class="container">
            <tbody>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px;border-bottom:1px solid #ff3333" cellpadding="0" cellspacing="0"
                            border="0">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle" style="width:500px;height:60px">
                                        <a href="#" style="border:0" target="_blank" width="130" height="35"
                                            style="display:block;border:0px">
                                            <img src="https://i.imgur.com/SJMpt6k.png" height="100" width="115"
                                                style="display:block;border:0px;float: left;"> <b
                                                style="float: left;line-height: 100px;color: red;font-size: 20px;">Handmade
                                                Product Store</b>
                                        </a>
                                    </td>
                                    <td align="right" valign="middle" style="padding-right:15px">
                                        <a href="" style="border:0">
                                            <img src="https://i.imgur.com/eL1uAJx.png" height="36" width="115"
                                                style="display:block;border:0px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle"
                                        style="font-family:Arial,Helvetica,sans-serif;font-size:24px;color:#ff3333;text-transform:uppercase;font-weight:bold;padding:25px 10px 15px 10px">
                                        Thông báo đặt hàng thành công
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle"
                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding:0 10px 20px 10px;line-height:17px">
                                        Chào {{ $order->name }},
                                        <br> Cám ơn bạn đã mua sắm tại Handmade Store
                                        <br>
                                        <br> Đơn hàng của bạn đã
                                        <b>được</b>
                                        <b>xác nhận</b>
                                        <!-- <br> Chúng tôi sẽ thông tin <b>trạng thái đơn hàng</b> trong email tiếp theo.
                                        <br> Bạn vui lòng kiểm tra email thường xuyên nhé. -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!-- <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px;border:1px solid #ff3333;border-top:3px solid #ff3333" cellpadding="0"
                            cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="left" valign="top"
                                        style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666666;padding:10px 10px 20px 15px;line-height:17px">
                                        <b>Đơn hàng của bạn #</b>
                                        <a href="#" style="color:#ed2324;font-weight:bold;text-decoration:none"
                                            target="_blank">{{ $order->id }}
                                        </a>
                                        <span style="font-size:12px">({{ $order->created_at }})</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left" valign="top" style="width:120px;padding-left:15px">
                                        <a href="#_" style="border:0">
                                            <img src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/512x512/shopping_cart.png"
                                                height="120" width="120" style="display:block;border:0px">
                                        </a>
                                    </td>
                                    <td align="left" valign="top">
                                        <table style="width:100%" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>

                                                <table
                                                    style="border-collapse: collapse; border: 1px solid black; margin-left: 16px; width: 245%;">
                                                    <tr border: 1px solid black;>
                                                        <th border: 1px solid black;>Sản phẩm</th>
                                                        <th>Giá</th>
                                                    </tr>
                                                    @if(Session::has('cart'))
                                                    @foreach($product_cart as $product)
                                                    <tr>
                                                        <td align="left" valign="top"
                                                            style="border: 1px solid black; font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                            <a href="#" style="color:#115fff;text-decoration:none"
                                                                target="_blank">
                                                                {{$product['item']['prod_name']}}
                                                            </a>
                                                        </td>
                                                        <td align="left" valign="top"
                                                            style="border: 1px solid black; font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                            <a href="#" style="color:#115fff;text-decoration:none"
                                                                target="_blank">
                                                                @if($product['item']['promotion_price']==0)
                                                                {{$product['item']['price_out']}}
                                                                @else
                                                                {{$product['item']['promotion_price']}}
                                                                @endif
                                                            </a> </td>
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </table>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding-left:15px;padding-right:10px;line-height:20px;padding-bottom:5px">
                                                        <b>Tên Shop</b>
                                                    </td>
                                                    <td align="left" valign="top"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">
                                                        :</td>
                                                    <td align="left" valign="top"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                        <a href="#" style="color:#115fff;text-decoration:none"
                                                            target="_blank">
                                                            Handmade Product Store
                                                        </a>
                                                        - 0334778516
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:15px;padding-right:10px;padding-bottom:5px">
                                                        <b>Tổng thanh toán</b>
                                                    </td>
                                                    <td align="left" valign="top"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">
                                                        :</td>
                                                    <td align="left" valign="top"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                        {{ number_format($order->total) }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="width:120px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:15px;padding-right:10px;padding-bottom:5px">
                                                        <b>Người nhận</b>
                                                    </td>
                                                    <td align="left" valign="top"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">
                                                        :</td>
                                                    <td align="left" valign="top"
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-left:10px;padding-bottom:5px">
                                                        <b>{{ $order->name }}</b>
                                                        <br>
                                                        {{ $order->address }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" align="center" valign="top"
                                        style="padding-top:20px;padding-bottom:20px;border-bottom:1px solid #ebebeb">
                                        <a href="#" style="border:0px" target="_blank">
                                            <img src="https://i.imgur.com/f92hL68.jpg" height="29" width="191"
                                                alt="Chi tiết đơn hàng" style="border:0px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr> -->
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff;padding-top:20px">
                        <table style="width:500px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="center" valign="middle"
                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">
                                        Đây là thư tự động từ hệ thống. Vui lòng không trả lời email này.
                                        <br> Nếu có bất kỳ thắc mắc hay cần giúp đỡ, Bạn vui lòng ghé thăm
                                        <b
                                            style="font-family:Arial,Helvetica,sans-serif;font-size:13px;text-decoration:none;font-weight:bold">Trung
                                            tâm trợ giúp</b> của chúng tôi tại địa chỉ:
                                        <a href="#"
                                            style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#0066cc;text-decoration:none;font-weight:bold"
                                            target="_blank">
                                            hdflash@gmail.com
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>

                </tr>
            </tbody>
        </table>
        </ div>
    </div>
