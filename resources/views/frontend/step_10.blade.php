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
                                    <h3 class="text-theme-colored mt-0 pt-5">Choose a dispenser</h3>
                                    <hr>
                                    <p>Our dispenser keeps your medication right on your countertop. Select a premium dispenser in the color of your choice, or opt for a recyclable dispenser sent with every shipment.</p>
                                    <form  id="wizard1" action="{{url('/add-lets-get-started')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="step" value="8">
                                        <input type="hidden" name="recordId" value="{{$recordId}}">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group">
{{--                                                    <img alt="" src="images/vials.png" style="width: 100%;">--}}
{{--                                                    <img alt="" src="images/vials1.png" style="width: 100%;">--}}
{{--                                                    <img alt="" src="images/vials2.png" style="width: 100%;">--}}
                                                    <input type="radio" name="dispancer" value="vial" >
                                                    <input type="radio" name="dispancer" value="disposibal" >
                                                    <input type="radio" name="dispancer" value="blister" >
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
{{--                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />--}}
                                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">Next</button>
                                        </div>


                                        <div class="form-group" style="text-align: center;"><a href="11_add_vitamins.html"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
