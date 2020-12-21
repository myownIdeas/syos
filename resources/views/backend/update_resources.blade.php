@extends('backend.layout.main')
@section('content')


    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Add Resources</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal form-stripe" method="post" action="{{url('update-resources')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="resource_id" value="{{$resource->id}}">
                            <div class="form-group">
                                <label for="placeholder" class="col-sm-2 control-label"> Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{$resource->name}}" required id="placeholder" placeholder=" Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="placeholder" class="col-sm-2 control-label"> Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="link" class="form-control" value="{{$resource->link}}" required id="placeholder" placeholder=" Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Upload Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image[]" multiple>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success"> Update </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function displayPrice(id) {
        if(id ==4){
            $('#price_con').show();

        }else{
            $('#price_con').hide();
        }
    }


    function getSubCategories(val) {
        $.ajax({
            url: '{{url('get-sub-categories')}}',
            type: 'GET',
            data: { id: val },
            success : function(response) {
                var html ='';
                $.each(response,function (index,value) {
                    html +='<option value="'+value.id+'">'+value.name+'</option>'
                })
                $('#product_category').empty();
                $('#product_category').append(html);
            },
            error : function(jqXHR, textStatus, errorThrown) {
                alert('Error: '+jqXHR.status);
            } // <-- remove the trailing comma you had here
        });
    }

    function appendMore() {
        var html ='';
         html +='<div class="form_group"> <div class="col-sm-2"></div> <div class="col-sm-5">\n' +
'            <input type="text" class="form-control" name="pr_name[]" placeholder="Name" >\n' +
            '                                </div>\n' +
            '                                <div class="col-sm-5">\n' +
            '                                    <input type="text" class="form-control" name="pr_code[]" placeholder="Code" >\n' +
            '                                </div><a href="javascript:void(0)" ><i class="fa fa-times-circle" aria-hidden="true"></i>\n</a> </div><br /><br /> ';
         $('#appendMoreCodes').append(html);
    }
</script>


@endsection
