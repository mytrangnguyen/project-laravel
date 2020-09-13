@extends('master')
@section('content')
<div class="contact-form">
  <form action="{{route('add-contact')}}" method="POST">
    @if(count($errors)>0)
    <div class="alert alert-danger" id="err">
      <ul class="error-message">
        <a class="close-error"><i class="fa fa-times-circle"></i></a>
        @foreach ($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label for="fname">Họ và tên</label>
    <input type="text" class="input-infor" id="fname" name="name" placeholder="Nhập họ và tên của bạn">

    <label for="lname">Email</label>
    <input type="text" class="input-infor" id="lname" name="email" placeholder="Nhập email của bạn">

    <label for="subject">Nội dung</label>
    <textarea id="subject" name="content" placeholder="Write something.." style="height:100px"></textarea>

    <button type="submit" class="btnlogin">Submit</button>
    <!-- <a></a> -->
    <!-- <input type="submit" class="btnlogin" value="Submit"> -->

  </form>
</div>
@endsection
