@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 15px">
    
        <h2 class="page-header"> Add Category <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('CategoryController@postAddCategory')}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">  
                <label for="">Category Name: </label>
                <input type="text" class="form-control" name="txtname" placeholder="name" style="width: 300px">
            </div> 

            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
   
    </div>  
@endsection
