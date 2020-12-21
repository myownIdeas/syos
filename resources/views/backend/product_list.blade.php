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
                            <th>image</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->title}}</td>
                                <td><img src="{{asset('/images').'/'.unserialize($product->images)[0]}}" width="30px" height="30px" /></td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->stock}}</td>
                                <td>{{$product->price}}</td>


                                <td>
                                    <a href="{{url('show-update-page/'.$product->id)}}" class="btn btn-success">Update</a>

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
        var result = confirm('Are you sure you want change precede this request?');
        if(result){

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
    }
</script>

@endsection
