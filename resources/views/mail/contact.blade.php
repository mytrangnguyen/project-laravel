<base href="{{ asset('') }}">
<div marginheight="0" marginwidth="0" style="background:#f0f0f0; padding:10px" >
    <div id="wrapper" style="background-color:#f0f0f0">
        <h2>Bạn đã có một email mới từ {{$contact->name}} </h2>
        <label>Email người gửi</label>
        <p>Email người gửi: {{$contact->email}}</p>
        <label>Nội dung</label>
        <p>{{$contact->content}}</p>
    </div>
</div>
