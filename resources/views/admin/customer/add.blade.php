@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 15px">
    
        <h2 class="page-header text-center"> Add Customer <small>&hearts; Flash &hearts;</small> </h2>
        
        <form action="{{URL::action('CustomerController@postAddCustomer')}}" method="post" role="form" enctype="multipart/form-data">   
            {{ csrf_field() }}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">  
                        <label class="font-weight-bold" for="">Name: </label>    
                        <input type="text" class="form-control" name="txtname" placeholder="Name">
                    </div> 
                    <div class="form-group">  
                        <label for="">Gender: </label>
                        <div class="row">
                        <div class="form-check col-3">
                                <input class="checkbox-inline" type="radio" name="txtgender" value="Male" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check col-3">
                                <input class="checkbox-inline" type="radio" name="txtgender" value="Female" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Female
                                </label>
                            </div>
                        </div>
                            
                    </div>
                    <div class="form-group">  
                        <label for="">Email: </label>
                        <input type="text" class="form-control" name="txtemail" placeholder="Email">
                    </div> 
                    <div class="form-group">  
                <label for="">Phone: </label>
                <input type="text" class="form-control" name="txtphone_number" placeholder="Phone number">
            </div> 
                </div>
                <div class="col-6">
                <div class="form-group">  
                <label for="">Address: </label>
                <input type="text" class="form-control" name="txtaddress" placeholder="Address">
            </div>
            <div class="form-group">  
                <label for="">Note: </label>
                <textarea type="text" class="form-control" name="txtnote" rows="5" placeholder="Note"></textarea>
            </div> 
            
            <button type="submit" class="btn btn-success float-right">ADD</button>
                </div>
            </div>
            
           
            
            
        </form>
    
    </div>  
@endsection