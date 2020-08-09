@extends('admin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
    
        <div class="row">
         
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">EDIT SLIDER</h1>
              </div>
              <form class="user" action="{{URL::action('SliderController@postEditSlider',$slider->id)}}" method="post" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
            
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" name="txtimage" value="{!! isset($slider)?$slider['image']:NULL !!}">
                    <img src="{!! asset('public/images/'.$slider['image']) !!}" width="100">
                  </div>
                </div>
        
                <div class="text-center">
                <button type="submit" class="btn btn-success">EDIT</button>
                </div> 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
