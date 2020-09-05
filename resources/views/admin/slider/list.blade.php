@extends('admin.master')
@section('content')

<button type="submit" class="btn-add btn btn-success"><a class="add-button"
        href="{!! url('admin/slider/add') !!}">Add</a>
    <i class="menu-icon fa fa-plus"></i></button>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Slider Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($slider as $value)
                    <tr>
                        <td> {!! $value["id"] !!} </td>
                        <td>
                            <img src="{{ asset('/source/image/'.$value->img_url)}}" width="100px"
                                alt="{{$value->img_url}}">

                        </td>

                        <td>
                            <a href="{!! url('admin/slider/edit',$value->id) !!}"> <i
                                    class="menu-icon fa fa-edit"></i></a>
                            <a onclick="return confirm('Bạn có muốn xóa không?')"
                                href="{!! url('admin/slider/delete',$value->id) !!}"> <i
                                    class="menu-icon fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
