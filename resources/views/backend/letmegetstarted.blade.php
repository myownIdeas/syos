@extends('backend.layout.main')
@section('content')

    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Lets Get List</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $list)
                            <tr>
                                <td>{{$list->first_name.' '.$list->last_name}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->phone_number}}</td>
                                <td>{{$list->address_1}}</td>
                                {{--<td><img src="{{asset('/images').'/'.$list->image}}" width="30px" height="30px" /></td>--}}

                                <td>
                                    <a href="{{url('delete-partner'.'/'.$list->id)}}" onclick="return confirm(' you want to delete?');" class="btn btn-warning">Delete</a>
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
<script>
    function changeStatusProduct(val,productId) {
        $.ajax({
            url: '{{url('change-status-for-product')}}',
            type: 'GET',
            data: { id: val ,productId:productId},
            success : function(response) {
                window.location.reload();
            },
            error : function(jqXHR, textStatus, errorThrown) {
                alert('Error: '+jqXHR.status);
            } // <-- remove the trailing comma you had here
        });
    }
</script>

@endsection
