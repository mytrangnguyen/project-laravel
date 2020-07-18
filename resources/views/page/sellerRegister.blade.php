@extends('master')
@section('content')
<div class="container register-section">
    <form action="{{route('addSellerRegister')}}" method="POST" class="register-form" enctype="multipart/form-data">
        <h2>Đăng ký bán hàng dành cho trung tâm hoặc cá nhân bị khuyết tật</h2>
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
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <div class="resgiser-container">
            <label for="uname"><b>Họ và tên người đại diện</b></label>
            <input type="text" class="input-infor" placeholder="Nhập tên người đại diện" id="tendaidien" name="tendaidien">

            <label for="uemail"><b>Email của cá nhân hoặc tổ chức</b></label>
            <input type="text" class="input-infor" placeholder="Nhập email" id="emailSeller" name="emailSeller">

            <label for="uaddress"><b>Địa chỉ trung tâm hoặc cá nhân</b></label>
            <input type="text" class="input-infor" placeholder="Nhập địa chỉ" id="diachiSeller" name="diachiSeller">

            <label for="uidentication"><b>Giấy xác nhận khuyết tật</b></label>
            <input type="file" class="input-infor" id="giayxacnhan" name="imageIdentify">

            <label for="phonenumber"><b>Số điện thoại cá nhân hoặc tổ chức</b></label>
            <input type="text" class="input-infor" placeholder="Nhập số điện thoại" id="sdtSeller" name="sdtSeller">

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" class="input-infor" placeholder="Nhập mật khẩu" id="mkSeller" name="mkSeller">

            <label for="psw"><b>Nhập lại mật khẩu</b></label>
            <input type="password" class="input-infor" placeholder="Nhập lại mật khẩu" id="remkSeller" name="remkSeller">

            <button type="submit" class="btnlogin">Đăng ký</button>
        </div>
        <div class="login-container" style="background-color:#f1f1f1">
            <span class="psw">Nếu bạn là đăng ký là thành viên mua hàng hãy nhấn <a href="#">Đăng ký</a></span>
        </div>
    </form>
</div>
@endsection