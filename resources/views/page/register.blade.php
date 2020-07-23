@extends('master')
@section('content')
<div class="container register-section ">
  <form method="POST" class="register-form modal-content">
    <h2>Đăng ký</h2>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <div class="resgiser-container   login-form">

      <div id="error" class="error-message">
        <a id="close-error"><i class="fa fa-times-circle"></i></a>
      </div>
      <label for="uname"><b>Tên đăng nhập hoặc email</b></label>
      <input type="text" class="input-infor" placeholder="Nhập tên hoặc email" id="username" name="username">

      <label for="ufullname"><b>Email</b></label>
      <input type="text" class="input-infor" placeholder="Nhập email" id="email" name="email">

      <label for="ufullname"><b>Địa chỉ</b></label>
      <input type="text" class="input-infor" placeholder="Nhập họ và tên" id="address" name="address">

      <label for="psw"><b>Số điện thoại</b></label>
      <input type="text" class="input-infor" placeholder="Nhập số điện thoại" id="phone" name="phone">

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" class="input-infor" placeholder="Nhập mật khẩu" id="password" name="password">

      <label for="psw"><b>Nhập lại mật khẩu</b></label>
      <input type="password" class="input-infor" placeholder="Nhập lại mật khẩu" id="repassword" name="repassword">

      <button type="submit" class="btnlogin" id="ajaxRegister">Đăng ký</button>
    </div>
    <div class="login-container" style="background-color:#f1f1f1">
      <span class="psw">Nếu bạn là người khuyết tật muốn đăng muốn đăng ký bán hàng hãy nhấn <a
          href="{{route('dangkybanhang')}}">Đăng ký bán</a></span>
    </div>
  </form>
</div>
@endsection