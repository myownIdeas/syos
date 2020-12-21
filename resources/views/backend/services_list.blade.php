@extends('backend.layout.main')
@section('content')

    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Search Products In List</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table " class="data-table table status_check table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Designation</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $list)
                            <tr>
                                <td>{{$list->name}}</td>
                                <td>{{$list->title}}</td>
                                <td>{{$list->description}}</td>
                                <td>
                                    @if(isset(unserialize($list->image)[0]))
                                    <img src="{{asset('/images').'/'.unserialize($list->image)[0]}}" width="30px" height="30px" /></td>
                                    @endif        

                                <td>
                                    <a href="{{url('show-service-update-page/'.$list->id)}}" class="btn btn-success">Update</a>
                                    <a href="{{url('delete-services/'.$list->id)}}" class="btn btn-success">Delete</a>

                                </td>
                                {{--                                <td>--}}
                                {{--                                    <a href="{{url('show-update-page'.'/'.$product->id)}}" class="btn btn-success">Update</a>--}}
                                {{--                                    <a href="{{url('delete-products'.'/'.$product->id)}}" onclick="return confirm(' you want to delete?');" class="btn btn-warning">Delete</a>--}}
                                {{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
