@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 15px">
    
        <h2 class="page-header"> Add Slider <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('SliderController@postAddSlider')}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Image: </label>
                <input type="file" name="txtimage">
            </div>

            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
   
    </div>  
@endsection
