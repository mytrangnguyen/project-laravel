@extends('master')
@section('content')
<div class="container register-section">
    <form action="{{route('addUsers')}}" method="POST" class="register-form">
        <h2>Đăng ký</h2>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul class="error-message">
            <i class="fa fa-times-circle"></i>
                @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="resgiser-container">
            <label for="uname"><b>Tên đăng nhập hoặc email</b></label>
            <input type="text" class="input-infor" placeholder="Nhập tên hoặc email" id="tendangnhap" name="tendangnhap">

            <label for="ufullname"><b>Họ và tên</b></label>
            <input type="text" class="input-infor" placeholder="Nhập họ và tên" id="hovaten" name="hovaten">

            <label for="ufullname"><b>Email</b></label>
            <input type="text" class="input-infor" placeholder="Nhập email" id="email" name="email">

            <label for="ufullname"><b>Địa chỉ</b></label>
            <input type="text" class="input-infor" placeholder="Nhập họ và tên" id="diachi" name="diachi">

            <label for="psw"><b>Số điện thoại</b></label>
            <input type="text" class="input-infor" placeholder="Nhập số điện thoại" id="sdt" name="sdt">

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" class="input-infor" placeholder="Nhập mật khẩu" id="matkhau" name="matkhau">

            <label for="psw"><b>Nhập lại mật khẩu</b></label>
            <input type="password" class="input-infor" placeholder="Nhập lại mật khẩu" id="rematkhau" name="rematkhau">

            <button type="submit" class="btnlogin">Đăng ký</button>
        </div>
        <div class="login-container" style="background-color:#f1f1f1">
            <span class="psw">Nếu bạn là người khuyết tật muốn đăng muốn đăng ký bán hàng hãy nhấn <a href="{{route('dangkybanhang')}}">Đăng ký bán</a></span>
        </div>
    </form>
</div>
@endsection