@extends('frontend.layout.lets_get_started')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="https://www.syossetpharmacy.com/assets/images/main_logo.png" style="width: 40%;"></a></div>
                                <div class="bg-lightest border-1px p-30 mb-0">
                                    <h3 class="text-theme-colored mt-0 pt-5"> Your shipping address</h3>
                                    <hr>
                                    <p>We ship your medication right to your door. Where would you like to receive your first shipment?</p>
                                    <form  action="{{url('/add-lets-get-started')}}" method="post" enctype="multipart/form-data">
                                       @csrf
                                        <input type="hidden" name="step" value="2">
                                        <input type="hidden" name="recordId" value="{{$recordId}}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Street Address 1 </label>
                                                    <input name="address_1" type="text" placeholder="Enter Address" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Street Address 2 (Optional) </label>
                                                    <input name="address_2" type="text" placeholder="Enter Address" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ZIP Code</label>
                                                    <input name="zip_code" class="form-control" type="zip_code" required="" placeholder="Enter ZIP Code">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input name="city" class="form-control" type="text" required="" placeholder="Enter City">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input name="state" class="form-control" type="text" placeholder="Enter State">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
{{--                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />--}}
                                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">{{--<a href="04_about_you.html" style="color: #fff;">--}} Next{{--</a>--}}</button>
                                        </div>
                                        <div class="form-group" style="text-align: center;">

{{--                                            <a href="02_intro.html"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
                                                    <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L3.207 8l2.647-2.646a.5.5 0 0 0 0-.708z"/>
                                                    <path fill-rule="evenodd" d="M10 8a.5.5 0 0 0-.5-.5H3a.5.5 0 0 0 0 1h6.5A.5.5 0 0 0 10 8zm2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z"/>
                                                </svg>
                                            </a></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection
