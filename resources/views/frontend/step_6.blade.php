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
                                    <h3 class="text-theme-colored mt-0 pt-5">Look up your insurance</h3>
                                    <hr>
                                    <p>DeliverMyMeds is compatible with most major plans, including most forms of Medicare Part D. </p>
                                    <form  id="wizard1" action="{{url('/add-lets-get-started')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="step" value="5">
                                        <input type="hidden" name="recordId" value="{{$recordId}}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ID Number </label>
                                                    <input name="ins_number" type="text" placeholder="Enter Id number" required="" class="form-control">
                                                    <small>Sometimes labeled Member ID</small>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Rx BIN</label>
                                                    <input name="ins_bin" type="text" placeholder="0" required="" class="form-control">
                                                    <small >6-digit number</small>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Rx Group</label>
                                                    <input name="ins_rx" type="text" placeholder="Rx Group" required="" class="form-control">
                                                    <small >Sometimes labeled RxGrp</small>
                                                </div>
                                            </div>



                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Rx PCN</label>
                                                    <input name="ins_pcn" type="text" placeholder="Rx PCN" required="" class="form-control">
                                                    <small >Sometimes labeled PCN</small>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input name="ins_phone" type="number" placeholder="(000) 000 0000" required="" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Insurance Card</label>
                                                    <input type="file" name="image[]">
                                                    {{--<img alt="" src="images/Insurance_card.png">--}}
                                                </div>
                                            </div>

                                        </div>




                                        <div class="form-group">
{{--                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />--}}
                                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10">Next</button>
                                        </div>


{{--                                        <div class="form-group" style="text-align: center;"><a href="07_Pharmacy.html"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L3.207 8l2.647-2.646a.5.5 0 0 0 0-.708z"/>--}}
{{--                                                    <path fill-rule="evenodd" d="M10 8a.5.5 0 0 0-.5-.5H3a.5.5 0 0 0 0 1h6.5A.5.5 0 0 0 10 8zm2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z"/>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
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
