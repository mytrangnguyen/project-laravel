@extends('master')
@section('content')
<div class="contact-form history">
  <!-- Tab links -->
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London')">Thông tin cá nhân</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Lịch sử đặt hàng</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Chỉnh sửa thông tin cá nhân</button>
  </div>

  <!-- Tab content -->
  <div id="London" class="tabcontent">
    <center>
      <div class="user-infor">
        <div class="avt-user"><img src="https://avatarfiles.alphacoders.com/151/thumb-151727.jpg" alt="Avatar"
            class="user-avatar"></div>
        <div>

          <table>
            <thead>
              <tr>
                <th>Tên</th>
                <td>{{ $user->username }}</td>
              </tr>
            </thead>
            <tr>
              <th>Email</th>
              <td>{{ $user->email }}</td>
            </tr>
            <tr>
              <th>Địa chỉ</th>
              <td>{{ $user->address }}</td>
            </tr>
            <tr>
              <th>Số điện thoại</th>
              <td>{{ $user->phone }}</td>
            </tr>
          </table>
        </div>
      </div>
    </center>

  </div>

  <div id="Paris" class="tabcontent">
    <table>
      <tr>
        <th>Người mua hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Chi tiết đơn hàng</th>
        <th>Tổng tiền</th>
        <th>Tình trạng</th>
        <th>Thời gian</th>
      </tr>
      <tr>
        @foreach($history as $key=>$item)
        <td>{{$item[0]->name}}</td>
        <td>{{$item[0]->address}}</td>
        <td>0334778516</td>
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
    <td>{{$item[0]->status}}</td>
    <td>{{$item[0]->created_at}}</td>
    </tr>

    @endforeach


    </table>
  </div>

  <div id="Tokyo" class="tabcontent">
    <div class="resgiser-container">
      <form method="POST" action="{{route('users.update', $user)}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <label for="uname"><b>Tên đăng nhập hoặc email</b></label>
        <input type="text" class="input-infor" value="{{ $user->username }}" placeholder="Nhập tên hoặc email"
          id="tendangnhap" name="tendangnhap">

        <label for="ufullname"><b>Email</b></label>
        <input type="text" class="input-infor" value="{{ $user->email }}" placeholder="Nhập email" id="email"
          name="email">

        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" class="input-infor" placeholder="Nhập mật khẩu" id="matkhau" name="matkhau">

        <label for="psw"><b>Nhập lại mật khẩu</b></label>
        <input type="password" class="input-infor" placeholder="Nhập lại mật khẩu" id="rematkhau" name="rematkhau">

        <button type="submit" class="btnlogin">Chỉnh sửa thông tin</button>
      </form>
    </div>
  </div>
  <div class="">

  </div>
</div>

@endSection