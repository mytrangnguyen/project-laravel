@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 30px">
    
        <h2 class="page-header"> EDIT CUSTOMER <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('CustomerController@postEditCustomer',$customer->id)}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">  
                <label for="">Name: </label>
                <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($customer)?$customer['name']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">  
            <label for="">Gender: </label>
                <div class="form-check">
                    <input class="form-check form-check-inline" type="radio" name="txtgender" value="Male" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check form-check-inline" type="radio" name="txtgender" value="Female" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">  
                <label for="">Email: </label>
                <input type="text" class="form-control" name="txtemail" value="{!! old ('txtemail',isset($customer)?$customer['email']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Address: </label>
                <input type="text" class="form-control" name="txtaddress" value="{!! old ('txtaddress',isset($customer)?$customer['address']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">  
                <label for="">Note: </label>
                <input type="text" class="form-control" name="txtnote" value="{!! old ('txtnote',isset($customer)?$customer['note']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Phone: </label>
                <input type="text" class="form-control" name="txtphone_number" value="{!! old ('txtphone_number',isset($customer)?$customer['phone_number']:NULL) !!}" style="width: 300px">
            </div> 
  
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>
    
    </div>  
@endsection
