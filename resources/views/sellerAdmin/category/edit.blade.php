@extends('sellerAdmin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">EDIT CATEGORY</h1>
                    </div>
                    <form class="user"
                        action="{{URL::action('sellerCategoryController@postEditCategory',$cate->cate_id)}}"
                        method="post" role="form">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control form-control-user" name="txtname"
                                    value="{!! $cate['cate_name']!!}">
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
