@extends('backend.layout.main')
@section('content')

    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Partner List</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>order Id</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->first_name.' '.$order->last_name}}</td>
                                <td>{{$order->company_name}}</td>
                                <td>{{$order->address}}</td>
                                <td><span class="icon fa fa-check"></span></td>
                                <td>
                                    <select class="form-control" style="width: 200px" onchange="changeStatusOrder(this.value,{{$order->id}})">
                                        <option value="0">Please Select any action</option>
                                        @foreach($status as $stat)
                                            <option value="{{$stat->id}}" @if($stat->id == $order->status_id) selected @endif >{{$stat->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <a href="{{url('order_detail'.'/'.$order->id)}}" class="btn btn-warning">Detail</a>
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
    function changeStatusOrder(val,productId) {
        $.ajax({
            url: '{{url('change-status-for-order')}}',
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
