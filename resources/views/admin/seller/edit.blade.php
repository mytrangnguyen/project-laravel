@extends('admin.master1')
@section('content1')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">EDIT SELLER</h1>
                    </div>
                    <form class="user" action="{{URL::action('SellerController@postEditSeller',$seller->id)}}"
                        method="post" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Full Name: </label>
                                <input type="text" class="form-control form-control-user" name="txtfullname"
                                    value="{!! old ('txtfullname',isset($seller)?$seller['fullname']:NULL) !!}">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Address: </label>
                                <input type="text" class="form-control form-control-user" name="txtaddress"
                                    value="{!! old ('txtaddress',isset($seller)?$seller['address']:NULL) !!}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Email: </label>
                                <input type="text" class="form-control form-control-user" name="txtemail"
                                    value="{!! old ('txtemail',isset($seller)?$seller['email']:NULL) !!}">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Phone: </label>
                                <input type="text" class="form-control form-control-user" name="txtphone"
                                    value="{!! old ('txtphone',isset($seller)?$seller['phone']:NULL) !!}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Password: </label>
                                <input type="password" class="form-control form-control-user" name="txtpassword">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Confirm Password: </label>
                                <input type="password" class="form-control form-control-user" name="confirm_password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for=""> Center Name: </label>
                                <input type="text" class="form-control form-control-user" name="txtcenter_name"
                                    value="{!! old ('txtcenter_name',isset($seller)?$seller['center_name']:NULL) !!}">
                            </div>
                            <div class="col-sm-6">
                                <label for=""> Paper Identication: </label>
                                <input type="file" name="txtimage" value="{!! $seller->paper_identication!!}">
                                <img src="{!! asset('public/avatar/'.$seller['paper_identication']) !!}" width="100"
                                    name="img_current">
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
