@extends('backend.layout.main')
@section('content')

    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Search Products In List</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table status_check table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Famous Brand</th>
                            <th>Update</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$brand->name}}</td>
                                <td>
                                    @if($brand->famous_brand == 0)
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    @endif

                                </td>
                                <td>
                                    <a href="javascript:void(0)" id="btn-update" onclick="showTextBox({{$brand->id}})" class="btn btn-success">Update</a>
                                    <div id="main{{$brand->id}}" style="display: none" >
                                    <input type="text" name="update_record" id="record-value" class="form-control" placeholder="add Name">
                                    <a href="javascript:void(0)" onclick="updateRecord({{$brand->id}})" class="btn btn-success">Update Record</a>
                                    </div>
                                </td>
                               <td>
                                   <select class="form-control" onchange="changeBrandStatus(this.value,{{$brand->id}})">
                                       <option value="">Please Select Action</option>
                                       <option value="1">Famous Brand</option>
                                       <option value="0">Remove Famous Brand</option>
                                   </select>
                                    <a href="{{url('delete-partner'.'/'.$brand->id)}}" onclick="return confirm(' you want to delete?');" class="btn btn-warning">Delete</a>
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
    function changeBrandStatus(val,brandId) {
        $.ajax({
            url: '{{url('change-status-for-brand')}}',
            type: 'GET',
            data: { id: val ,brandId:brandId},
            success : function(response) {
                window.location.reload();
            },
            error : function(jqXHR, textStatus, errorThrown) {
                alert('Error: '+jqXHR.status);
            } // <-- remove the trailing comma you had here
        });
    }
    function showTextBox(value) {
        $('#main'+value).show();
        $('#btn-update').hide();
    }
    function updateRecord(brandId) {
        var value = $('#record-value').val();
        $.ajax({
            url: '{{url('change-name-for-brand')}}',
            type: 'GET',
            data: {value:value,brandId:brandId},
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
