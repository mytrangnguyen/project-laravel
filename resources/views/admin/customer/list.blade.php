@extends('admin.master')
@section('content')

 <a href="{!! url('admin/customer/add') !!}">Add more Customer</a>
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-success">Customer Data</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Note</th>
                    <th>Phone</th>
                    <th>Action</th>
                   </tr>
                 </thead>
           
                 <tbody>
                 @foreach($customer as $value)
                    <tr>
                        <td> {!! $value["id"] !!} </td>
                        <td> {!! $value["name"] !!} </td>
                        <td> {!! $value["gender"] !!} </td>
                        <td> {!! $value["email"] !!} </td>
                        <td> {!! $value["address"] !!} </td>
                        <td> {!! $value["note"] !!} </td>
                        <td> {!! $value["phone_number"] !!} </td>
                        <td>
                            <a href="{!! url('admin/customer/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                            <a href="{!! url('admin/customer/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
                        </td>
                        </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>

@endsection
