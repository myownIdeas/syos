@extends('frontend.layout.lets_get_started')
@section('content')
<style>
    .modal-dialog {
        height: 50%; /* = 90% of the .modal-backdrop block = %90 of the screen */
    }
    .modal-content {
        height: 100%; /* = 100% of the .modal-dialog block */
    }
</style>
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
                                    <h3 class="text-theme-colored mt-0 pt-5">Add your medication</h3>
                                    <hr>
                                    <p>Add any medications your doctor has prescribed to you. We’ll reach out to your previous pharmacy or your doctor to transfer your prescriptions to DeliverMyMeds.
                                    </p>
                                    <form  id="wizard1" action="{{url('/add-lets-get-started')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="step" value="6">
                                        <input type="hidden" name="recordId" value="{{$recordId}}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Medication Name </label>
                                                    <input name="med_name" type="text" placeholder="Search" required="" class="form-control">
                                                    <small>Sometimes labeled Member ID</small>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Strength / Form</label><label class="checkbox-inline " style="float: right;">
                                                        <input type="checkbox" name="do_not_know" id="inlineCheckbox4"  value="1">

                                                        I don’t know</label>
                                                    <input name="med_str" type="text" placeholder="10MG (TABLET)" required="" class="form-control">
                                                    <small >6-digit number</small>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <label for="sel1">Daily Dose:</label>
                                                    <select class="form-control" name="med_dose" id="sel1">
                                                        <option>Select daily medication quantity taken</option>
                                                        <option> Once a day </option>
                                                        <option>twice a day</option>
                                                        <option> three times a day</option>
                                                        <option>4 times a day</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Dose Time</label><br>
                                                    <label class="checkbox-inline"><input type="checkbox" name="med_time" id="inlineCheckbox4"  value="Morning">Morning</label>
                                                    <label class="checkbox-inline"><input type="checkbox" name="med_time" id="inlineCheckbox4"  value="Afternoon">Afternoon</label>
                                                    <label class="checkbox-inline"><input type="checkbox" name="med_time" id="inlineCheckbox4"  value="Evening">Evening</label>
                                                    <label class="checkbox-inline"><input type="checkbox" name="med_time" id="inlineCheckbox4"  value="Bedtime">Bedtime</label>
                                                </div>
                                            </div>



                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Upload prescription</label><br>
                                                    {{--<img alt="" src="images/Insurance_card.png">--}}
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>


                                            {{--<h4 class="text-uppercase mb-1">Prescribe</h4>--}}

                                            {{--<small>Which doctor prescribes this medication to you?</small>--}}
                                            <div class="col-sm-12">
                                                {{--<div class="form-group">--}}
                                                    {{--<img alt="" src="images/Prescriber.png" style="width: 100%;">--}}

                                                {{--</div>--}}

                                                <div class="row">
                                                    <hr>
                                                    <ul class="action-links">
                                                        <li><a href="javascript:void(0)"  data-toggle="modal" data-target="#exampleModal" class="action-add"><i class="fa fa-plus-square"></i> Add another doctor</a></li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#examplepharmacy" data-url=""><i class="fa fa-plus-square"></i> Add another pharmacy</a>

                                                        </li>
                                                    </ul>


                                                </div>


                                            </div>
                                        </div>



                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Doctor</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Doctor Name </label>
                                                                <input name="doctor_name[]" type="text" placeholder="Enter Last Name" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input name="doctor_phone[]" type="number" placeholder="(000) 000 0000" required="" class="form-control">
                                                                {{--                                                    <small style="float: right;"><a data-toggle="modal" data-target="#myModal">Add doctor manually</a></small>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="examplepharmacy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Pharmacy</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Pharmacy Name </label>
                                                                <input name="pharmacy_name[]" type="text" placeholder="Enter Last Name" required="" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <input name="pharmacy_phone[]" type="number" placeholder="(000) 000 0000" required="" class="form-control">
                                                                {{--                                                    <small style="float: right;"><a data-toggle="modal" data-target="#myModal">Add doctor manually</a></small>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
{{--                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />--}}
                                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10"> Next</button>
                                        </div>


                                        <div class="form-group" style="text-align: center;">
{{--                                            <a href="08_Insurance.html"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">--}}
                                                    <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L3.207 8l2.647-2.646a.5.5 0 0 0 0-.708z"/>
                                                    <path fill-rule="evenodd" d="M10 8a.5.5 0 0 0-.5-.5H3a.5.5 0 0 0 0 1h6.5A.5.5 0 0 0 10 8zm2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z"/>
                                                </svg>
                                            </a>
                                        </div>
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
<script>
    $('#exampleModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });

    $('#examplepharmacy').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>

@endsection
