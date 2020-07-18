@extends('master')
@section('content')
<div class="contact-form">
    <div class="resgiser-container">
        <h2>Chỉnh sửa thông tin cá nhân</h2>
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

            <!-- <label for="ufullname"><b>Địa chỉ</b></label> -->
            <!-- <input type="text" class="input-infor" value="{{ $user->address }}" placeholder="Nhập họ và tên" id="diachi"
                name="diachi">

            <label for="psw"><b>Số điện thoại</b></label>
            <input type="text" class="input-infor" value="{{ $user->phone }}" placeholder="Nhập số điện thoại" id="sdt"
                name="sdt"> -->

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" class="input-infor" placeholder="Nhập mật khẩu" id="matkhau" name="matkhau">

            <label for="psw"><b>Nhập lại mật khẩu</b></label>
            <input type="password" class="input-infor" placeholder="Nhập lại mật khẩu" id="rematkhau" name="rematkhau">

            <button type="submit" class="btnlogin">Chỉnh sửa thông tin</button>
        </form>
    </div>

</div>
@endSection