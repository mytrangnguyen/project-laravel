@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 15px">
    
        <h2 class="page-header"> Add Product <small>&hearts; Flash &hearts;</small> </h2>
   
        <form action="{{URL::action('ProductController@postAddProduct')}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Cate_name:</label>
                    <select class="form-control" name="txtcate_id" style="width: 300px">
                        <option value="">:</option>
                        @foreach($category as $value)
                            <option value="{!! $value['id']!!}">-- {!! $value['cate_name'] !!}</option>
                        @endforeach
                    </select>
            </div>

            <div class="form-group">  
                <label for="">Name: </label>
                <input type="text" class="form-control" name="txtname" placeholder="name" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Description: </label>
                <textarea class="form-control" name="txtdescription" rows="3" style="width: 300px"></textarea>
            </div> 
            <div class="form-group">
                <label for="">Unit Price: </label>
                <input type="number" class="form-control" name="txtunit_price" placeholder="price" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> Promotion Price: </label>
                <input type="number" class="form-control" name="txtpromotion_price" placeholder="promotio price" style="width: 300px">
            </div> 
            <div class="form-group">
                <label for=""> Quantity: </label>
                <input type="number" class="form-control" name="txtquantity" style="width: 300px">
            </div>
            <div class="form-group">
                <label for="">Image: </label>
                <input type="file" name="txtimage">
            </div> 
            <div class="form-group">
                <label for=""> Disabled center: </label>
                <input type="text" class="form-control" name="txtdisabled_center" placeholder="disabled center" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> Status: </label>
                <input type="number" class="form-control" name="txtstatus" placeholder="status" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> Start date: </label>
                <input type="date" class="form-control" name="txtstart_date" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> End date: </label>
                <input type="date" class="form-control" name="txtend_date" style="width: 300px">
            </div>
            
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    
    </div>  
@endsection