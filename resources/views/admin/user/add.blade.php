@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 15px">
    
        <h2 class="page-header"> Add User <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('UserController@postAddUser')}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">  
                <label for="">Username: </label>
                <input type="text" class="form-control" name="txtusername" placeholder="Username" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Email: </label>
                <input type="text" class="form-control" name="txtemail" placeholder="Email" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Address: </label>
                <input type="text" class="form-control" name="txtaddress" placeholder="Address" style="width: 300px">
            </div>
            <div class="form-group">  
                <label for="">Phone: </label>
                <input type="text" class="form-control" name="txtphone" placeholder="Phone" style="width: 300px">
            </div> 
            <div class="form-group">
                <label for="exampleFormControlSelect1">User Role</label>
                <select class="form-control" name="txtuser_role">
                    <option>Seller</option>
                    <option>Customer</option>
                    <option>Common User</option>
                </select>
            </div>
            <div class="form-group">  
                <label for="">Password: </label>
                <input type="password" class="form-control" name="txtpassword" placeholder="Password" style="width: 300px">
            </div>
            
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    
    </div>  
@endsection