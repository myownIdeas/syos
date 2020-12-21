@extends('backend.layout.main')
@section('content')


    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Update Products</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal form-stripe" method="post" action="{{url('update-products')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product['id']}}">
                            <div class="form-group">
                                <label for="placeholder" class="col-sm-2 control-label">Product Category</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if($category->id == $product['category_id']) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="placeholder" class="col-sm-2 control-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{$product['name']}}"  required id="placeholder" placeholder="Product Name">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Product Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" value="{{$product['title']}}" required placeholder="Product Title" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Product Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="price" value="{{$product['price']}}" required placeholder="Product Price" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Product Stock</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="stock" value="{{$product['stock']}}" placeholder="Product Stock" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Product Size</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="size" value="{{$product['size']}}" placeholder="size / weight " >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Availability</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="availability" value="{{$product['avaliabilty']}}" placeholder="Ships in 1 Business Day" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Variable</label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pr_name[]"  value="{{(isset($productCodes[0]))?$productCodes[0]->name:''}}" placeholder="lable" >
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="pr_code[]"  value="{{(isset($productCodes[0]))?$productCodes[0]->code:''}}" placeholder="value" >
                                </div>

                            </div>
                            <div id="appendMoreCodes">
                                @foreach($productCodes as $key=>$code)
                                    @if($key !=0)
                                    <div class="form_group" id="row{{$code->id}}"> <div class="col-sm-2"></div> <div class="col-sm-5">
                                            <input type="text" class="form-control" name="pr_name[]" value="{{$code->name}}" placeholder="Name" >
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="pr_code[]" value="{{$code->code}}" placeholder="Code" >
                                        </div>
                                        <a href="javascript:void(0)" onclick="deleteRow({{$code->id}})" ><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                    </div>
                                    <br /><br />
                                    @endif
                                @endforeach
                            </div>
                            <div class="form-group text-right">
                                <div class="col-sm-12">
                                    <a class="btn btn-success" href="javascript:void(0)" onclick="appendMore()">Add More</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="readonly" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="textarea" class="jqte-test">{{$product['description']}}</textarea>
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
                                    <button type="submit" class="btn btn-success"> Save </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>


        function deleteRow(id) {
            $('#row'+id).remove();
        }
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
            let unNumber =0;
            var html ='';
            html +='<div class="form_group" id="row'+unNumber+'"> <div class="col-sm-2"></div> <div class="col-sm-5">\n' +
                '            <input type="text" class="form-control" name="pr_name[]" placeholder="Name" >\n' +
                '                                </div>\n' +
                '                                <div class="col-sm-5">\n' +
                '                                    <input type="text" class="form-control" name="pr_code[]" placeholder="Code" >\n' +
                '                                </div><a href="javascript:void(0)" onclick="deleteRow('+unNumber+')" ><i class="fa fa-times-circle" aria-hidden="true"></i>\n</a> </div><br /><br /> ';
            $('#appendMoreCodes').append(html);
            unNumber++;
        }
    </script>


@endsection
