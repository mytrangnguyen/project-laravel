@extends('sellerAdmin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">

        <div class="row">

            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">ADD PRODUCT</h1>
                    </div>
                    <form class="user" action="{{URL::action('sellerProductController@postAddProduct')}}" method="post"
                        role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select class="form-control" name="txtcate_id">
                                    <option value="">Category name</option>
                                    @foreach($category as $value)
                                    <option value="{!! $value['cate_id']!!}">{!! $value['cate_name'] !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="txtname" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control" name="txtunit_price" placeholder="Unit Price">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="txtpromotion_price"
                                    placeholder="Promotion Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="file" name="txtimage">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="txtquantity" placeholder="Quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="txtdescription" placeholder="Description"
                                        rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" name="txtstatus">
                                    <option>Status</option>
                                    <option value="1">Còn hàng</option>
                                    <option value="0">Hết hàng</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Start date: </label>
                                <input type="date" class="form-control" name="txtstart_date"
                                    value="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> End date: </label>
                                <input type="date" class="form-control" name="txtend_date"
                                    value="<?php echo date("Y-m-d"); ?>">
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-success">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection