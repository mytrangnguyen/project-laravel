@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 30px">
    
        <h2 class="page-header"> Edit Category <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('CategoryController@postEditCategory',$category->id)}}" method="post" role="form">
            {{ csrf_field() }}

            <div class="form-group">  
                <label for="">Category Name: </label>
                <input type="text" class="form-control" name="txtcate_name" value="{!! old ('txtcate_name',isset($category)?$category['cate_name']:NULL) !!}" style="width: 300px">
            </div> 
            
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>
    </div>  
@endsection
