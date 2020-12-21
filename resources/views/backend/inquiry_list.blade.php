@extends('backend.layout.main')
@section('content')

    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Inquiry List</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>State</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($inquiries as $inquiry)
                            <tr>
                                <td>{{$inquiry->id}}</td>
                                <td>{{$inquiry->name}}</td>
                                <td>{{$inquiry->email}}</td>
                                <td>{{$inquiry->phone}}</td>
                                <td>{{$inquiry->state}}</td>
                                <td> {{ substr($inquiry->created_at,0,11) }}</td>
                                <td> {{ \Carbon\Carbon::parse($inquiry->created_at)->format('H:m:s') }}</td>
                                <td>
                                    <a href="{{url('deleteItems/?id='.$inquiry->id.'&table=inquiry&red=show-inquiry')}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-success">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
