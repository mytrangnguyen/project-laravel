@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 30px">
    
        <h2 class="page-header"> Add User <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('UserController@postEditUser',$user->id)}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">  
                <label for="">Username: </label>
                <input type="text" class="form-control" name="txtusername" value="{!! old ('txtusername',isset($user)?$user['username']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Email: </label>
                <input type="text" class="form-control" name="txtemail" value="{!! old ('txtemail',isset($user)?$user['email']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Address: </label>
                <input type="text" class="form-control" name="txtaddress" value="{!! old ('txtaddress',isset($user)?$user['address']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">  
                <label for="">Phone: </label>
                <input type="text" class="form-control" name="txtphone" value="{!! old ('txtphone',isset($user)?$user['phone']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">
                <label for="exampleFormControlSelect1">User Role</label>
                <select class="form-control" name="txtuser_role" value="{!! old ('txtuser_role',isset($user)?$user['user_role']:NULL) !!}">
                    <option>Seller</option>
                    <option>Customer</option>
                    <option>Common User</option>
                </select>
            </div>
            <div class="form-group">  
                <label for="">Password: </label>
                <input type="password" class="form-control" name="txtpassword" value="{!! old ('txtpassword',isset($user)?$user['password']:NULL) !!}" style="width: 300px">
            </div>

        
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>
    
    </div>  
@endsection
