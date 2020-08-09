@extends('admin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">

        <div class="row">

            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">EDIT PRODUCT</h1>
                    </div>
                    <form class="user" action="{{URL::action('ProductController@postEditProduct',$product->id)}}"
                        method="post" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Category: </label>
                                <select class="form-control" name="txtcate_id">
                                    @foreach($cate as $cat)
                                    <option value="{{ $cat->cate_id }}"
                                        {{ $cat->cate_id == $product['cate_id']?'selected' : '' }}>
                                        {{ $cat->cate_name }}</option>
                                    @endforeach
                                </select>
                                <!-- <label for=""> Category: </label>
                                <select class="form-control" name="txtcate_id">
                                    @foreach($cate as $value)
                                    <option value="{{ $value->id }}"> {!! $value['cate_name']
                                        !!}</option>
                                    @endforeach
                                </select> -->
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Product Name: </label>
                                <input type="text" class="form-control" name="txtname"
                                    value="{!! old ('txtname',isset($product)?$product['prod_name']:NULL) !!}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Price Out: </label>
                                <input type="number" class="form-control" name="txtunit_price"
                                    value="{!! old ('txtunit_price',isset($product)?$product['price_out']:NULL) !!}">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Promotion Price: </label>
                                <input type="number" class="form-control" name="txtpromotion_price"
                                    value="{!! old ('txtpromotion_price',isset($product)?$product['promotion_price']:NULL) !!}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="file" name="txtimage" value="{!! $product->url_img!!}">
                                <img src="{!! asset('/source/image/'.$product['url_img']) !!}" width="100"
                                    name="img_current">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Quantity: </label>
                                <input type="number" class="form-control" name="txtquantity"
                                    value="{!! old ('txtquantity',isset($product)?$product['quantity']:NULL) !!}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Center Name: </label>
                                <input type="text" class="form-control" name="txtdisabled_center"
                                    value="{!! old ('txtdisabled_center',isset($product)?$product['center_name']:NULL) !!}">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Stastus: </label>
                                <input type="number" class="form-control" name="txtstatus"
                                    value="{!! old ('txtstatus',isset($product)?$product['status']:NULL) !!}">
                                <!--
                                <select class="form-control" name="txtstatus">

                                    <option>Còn hàng</option>

                                </select> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Start date: </label>
                                <input type="date" class="form-control" name="txtstart_date"
                                    value="{!! old ('txtstart_date',isset($product)?$product['date_start']:NULL) !!}">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> End date: </label>
                                <input type="date" class="form-control" name="txtend_date"
                                    value="{!! old ('txtennd_date',isset($product)?$product['date_end']:NULL) !!}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea class="form-control" name="txtdescription"
                                    rows="3">{!! old ('txtdescription',isset($product)?$product['description']:NULL) !!}</textarea>
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