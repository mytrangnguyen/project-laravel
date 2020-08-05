@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 30px">
    
        <h2 class="page-header"> Edit Slider <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('SliderController@postEditSlider',$slider->id)}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Image: </label>
                <input type="file" name="txtimage" value="{!! isset($slider)?$slider['image']:NULL !!}">
                <img src="{!! asset('public/images/'.$slider['image']) !!}" width="100">
            </div>  
            
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>
    </div>  
@endsection
