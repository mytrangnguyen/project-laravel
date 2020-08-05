@extends('admin.master')
@section('content')
    <div class="container-fluid" style="margin-top: 30px">
    
        <h2 class="page-header"> Add Product <small>&hearts; Th &hearts;</small> </h2>
   
        <form action="{{URL::action('ProductController@postEditProduct',$product->id)}}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Cate_name:</label>
                    <select class="form-control" name="txtcate_id" style="width: 300px">
                        @foreach($cate as $value)
                            <option value="{!! $value['id'] !!}" {!! $value['id'] == $product['cate_id']?'selected' : '' !!}> {!! $value['cate_name'] !!}</option>
                        @endforeach
                    </select>
            </div>

            <div class="form-group">  
                <label for="">Name: </label>
                <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($product)?$product['name']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">  
                <label for="">Description: </label>
                <textarea class="form-control" name="txtdescription" value="{!! old ('txtdescription',isset($product)?$product['description']:NULL) !!}" rows="3" style="width: 300px"></textarea>
            </div> 
            <div class="form-group">
                <label for="">Unit Price: </label>
                <input type="number" class="form-control" name="txtunit_price" value="{!! old ('txtunit_price',isset($product)?$product['unit_price']:NULL) !!}" style="width: 300px">
            </div> 
            <div class="form-group">
                <label for=""> Promotion Price: </label>
                <input type="number" class="form-control" name="txtpromotion_price" value="{!! old ('txtpromotion_price',isset($product)?$product['promotion_price']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> Quantity: </label>
                <input type="number" class="form-control" name="txtquantity" value="{!! old ('txtquantity',isset($product)?$product['quantity']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">
                <label for="">Image: </label>
                <input type="file" name="txtimage" value="{!! isset($product)?$product['image']:NULL !!}">
                <img src="{!! asset('public/images/'.$product['image']) !!}" width="100">
            </div> 
            <div class="form-group">
                <label for=""> Disabled center: </label>
                <input type="text" class="form-control" name="txtdisabled_center" value="{!! old ('txtdisabled_center',isset($product)?$product['disabled_center']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> Status: </label>
                <input type="number" class="form-control" name="txtstatus" value="{!! old ('txtstatus',isset($product)?$product['status']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> Start date: </label>
                <input type="date" class="form-control" name="txtstart_date" value="{!! old ('txtstart_date',isset($product)?$product['start_date']:NULL) !!}" style="width: 300px">
            </div>
            <div class="form-group">
                <label for=""> End date: </label>
                <input type="date" class="form-control" name="txtend_date" value="{!! old ('txtennd_date',isset($product)?$product['end_date']:NULL) !!}" style="width: 300px">
            </div>
            
            
             
            
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>
    
    </div>  
@endsection
