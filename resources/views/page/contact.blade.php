@extends('master')
@section('content')
<div class="contact-form">
    <form action="action_page.php">

        <label for="fname">Họ và tên</label>
        <input type="text" class="input-infor" id="fname" name="firstname" placeholder="Nhập họ và tên của bạn">

        <label for="lname">Email</label>
        <input type="text" class="input-infor" id="lname" name="lastname" placeholder="Nhập email của bạn">

        <label for="subject">Nội dung</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

        <input type="submit" class="btnlogin" value="Submit">

    </form>
</div>
@endsection