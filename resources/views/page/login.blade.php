@extends('master')
@section('content')
<div class="container register-section">
    <div class="modal">

        <div class="modal-content">
            <h2>Đăng nhập</h2>

            <form action="{{route('login')}}" method="POST" class="login-form">
                <!-- <form method="POST" enctype="multipart/form-data" class="login-form"> -->
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul class="error-message">
                        <a id="close-error"><i class="fa fa-times-circle"></i></a>
                        @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('thongbao'))
                <div class="alert alert-danger">
                    <ul class="error-message">
                        <a id="close-error"><i class="fa fa-times-circle"></i></a>
                        <li>{{ Session::get( 'thongbao' ) }}</li>
                    </ul>
                    @endif
                    <div class="login-container">
                        <label for="uname"><b>Email đăng nhập</b></label>
                        <input type="text" class="input-infor" placeholder="Nhập tên hoặc email" name="email">

                        <label for="psw"><b>Mật khẩu</b></label>
                        <input type="password" class="input-infor" placeholder="Nhập mật khẩu" name="password">

                        <button type="submit" class="btnlogin" id="ajaxLogin">Login</button>
                        <!-- <button type="submit" class="btnlogin" id="ajaxLogin">Login</button> -->
                        <label>
                            <input type="checkbox" checked="checked" value="remember" name="remember"> Nhớ mật khẩu
                        </label>
                    </div>

                    <div class="login-container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Hủy</button>
                        <span class="psw">Quên <a href="{{route('quenmatkhau')}}">mật khẩu?</a></span>
                    </div>
            </form>
        </div>

    </div>
</div>
@endsection
