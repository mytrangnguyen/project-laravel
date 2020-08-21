@extends('master')
@section('content')
<div class="container account-session contact-form history">
    <div class="my-account-section__header">
        <div class="my-account-section__header-left">
            <div class="my-account-section__header-title">Hồ sơ của tôi</div>
            <div class="my-account-section__header-subtitle">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        </div>
    </div>
    <div class="my-account-profile">

        <div class="resgiser-container profile">
            <form method="POST" action="{{route('users.update', $user)}}" enctype="multipart/form-data"
                class="user-information">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ csrf_field() }}
                {{ method_field('patch') }}

                <div class="my-account-profile__left">
                    <table class="user-information">
                        <thead>
                            <tr>
                                <th class="table-th"> <label class="label"><b>Tên</b></label></th>
                                <td class="table-th"><input type="text" class="input-infor"
                                        value="{{ $user->username }}" placeholder="Nhập tên" id="tendangnhap"
                                        name="username"></td>
                            </tr>
                        </thead>
                        <tr>
                            <th class="table-th"><label class="label"><b>Email</b></label></th>
                            <td class="table-th"><input type="text" class="input-infor" value="{{ $user->email }}"
                                    placeholder="Nhập email" id="email" name="email"></td>
                        </tr>
                        <tr>
                            <th class="table-th"><label class="label"><b>Địa chỉ</b></label></th>
                            <td class="table-th"><input type="text" class="input-infor" value="{{ $user->address }}"
                                    placeholder="Nhập địa chỉ" id="address" name="address"></td>
                        </tr>
                        <tr>
                            <th class="table-th"><label class="label"><b>Số điện thoại</b></label></th>
                            <td class="table-th"><input type="text" class="input-infor" value="{{ $user->phone }}"
                                    placeholder="Nhập số điện thoại" id="phone" name="phone"></td>
                        </tr>
                        <tr>
                            <th class="table-th"><label for=" psw" class="label"><b>Mật khẩu</b></label></th>
                            <td class="table-th"><input type="password" class="input-infor" placeholder="Nhập mật khẩu"
                                    id="password" name="password"></td>
                        </tr>
                        <tr>
                            <th class="table-th"> <label for="psw " class="label"><b>Nhập lại mật khẩu</b></label>
                            </th>
                            <td class="table-th">
                                <input type="password" class="input-infor" placeholder="Nhập lại mật khẩu"
                                    id="repassword" name="repassword"></td>
                        </tr>
                    </table>
                </div>
                <div class="my-account-profile__right">
                    <div class="custom-avt">
                        <label class="label"><b>Ảnh đại diện</b></label>
                        @empty($user->avatar)
                        <div class=" avt-user"> <img src="https://www.jbrhomes.com/wp-content/uploads/blank-avatar.png"
                                width="100px" class="user-avatar" name="img_current">
                        </div>
                        @else
                        <div class="avt-user"> <img src="{{ asset('public/avatar/'.$user->avatar)}}" width="100px"
                                class="user-avatar" name="img_current">
                        </div>
                        @endempty
                        <input type="file" value="{{ URL::asset('public/source/image/'.$user->avatar)}}"
                            class="input-infor upload" id="avatar" name="avatar">
                    </div>
                </div>
                <button type="submit" class="btnedit" id="update">Chỉnh sửa thông tin</button>
            </form>
        </div>
    </div>
</div>


@endSection
