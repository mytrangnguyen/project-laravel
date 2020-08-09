@extends('admin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">ADD CUSTOMER</h1>
              </div>
              <form class="user" action="{{URL::action('CustomerController@postAddCustomer')}}" method="post" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="txtname" placeholder="Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="txtphone_number" placeholder="Phone Number">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="txtemail" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="txtaddress" placeholder="Address">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-12">
                    <textarea type="text" class="form-control" name="txtnote" rows="5" placeholder="Note"></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
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