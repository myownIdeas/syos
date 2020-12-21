@extends('backend.layout.main')
@section('content')


    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Add Partner</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal form-stripe" method="post" action="{{url('save-partner')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disabled" class="col-sm-2 control-label">Upload Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success"> Save </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
