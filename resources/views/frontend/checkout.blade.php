@extends('frontend.layout.main')
@section('content')

 <style>
            .modal-dialog {
  height: 90%; /* = 90% of the .modal-backdrop block = %90 of the screen */
}
.modal-content {
  height: 100%; /* = 100% of the .modal-dialog block */
}
.payment__method iframe{
    width:100%;
}
            
        </style>
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/bg6.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Checkout</h2>
{{--                            <ol class="breadcrumb text-center text-black mt-10">--}}
{{--                                <li><a href="#">Home</a></li>--}}
{{--                                <li><a href="#">Pages</a></li>--}}
{{--                                <li class="active text-theme-colored">Page Title</li>--}}
{{--                            </ol>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row mt-30">
                        <form accept-charset="UTF-8" action="{{url('/create_payment')}}" class="require-validation"  id="payment-form" method="post">
                            @csrf
                            <div class="col-md-12">
                                <div class="billing-details">
                                    <h3 class="mb-30">Billing Details</h3>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="checkuot-form-fname">First Name</label>
                                            <input name="first_name" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="checkuot-form-lname">Last Name</label>
                                            <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="checkuot-form-cname">Company Name</label>
                                                <input name="company_name" type="text" class="form-control" placeholder="Company Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="checkuot-form-email">Email Address</label>
                                                <input name="email" type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">
                                                <label for="checkuot-form-address">Address</label>
                                                <input name="address" type="text" class="form-control" placeholder="Street address">
                                            </div>
{{--                                            <div class="form-group">--}}
{{--                                                <input type="email" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <select class="form-control" name="country_id" required onchange="getState(this.value)">
                                                <option>Select Country</option>
                                             @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                             @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>State/Province</label>
                                            <select class="form-control" name="state_id" required id="states" onchange="getCities(this.value)">

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <select class="form-control" required name="city_id" id="cities">

                                            </select>
                                        </div>
{{--                                        <div class="form-group col-md-6">--}}
{{--                                            <label for="checkuot-form-city">City</label>--}}
{{--                                            <input id="checkuot-form-city" type="email" class="form-control" placeholder="City">--}}
{{--                                        </div>--}}
{{--                                        --}}
{{--                                        <div class="form-group col-md-6">--}}
{{--                                            <label for="checkuot-form-zip">Zip/Postal Code</label>--}}
{{--                                            <input id="checkuot-form-zip" type="email" class="form-control" placeholder="Zip/Postal Code">--}}
{{--                                        </div>--}}

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shipping-details">
                                    <h3 class="mb-30">
                                        <span class="checkbox pull-right mt-0">
{{--                      <label>--}}
{{--                        <input type="checkbox" name="" value="option1" aria-label="...">--}}
{{--                      </label>--}}
                    </span>
                                    </h3>

                                    <div class="form-group">
                                        <label>Order Notes</label>
                                        <textarea class="form-control" name="order_note" placeholder="Notes about your order, e.g. special notes for delivery." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Your order</h3>
                                <table class="table table-striped table-bordered tbl-shopping-cart">
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $totalPrice = 0 ?>
                                    @foreach($items as $item)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img alt="member" src="public/images/{{unserialize($item->images)[0]}}"></a></td>
                                        <td><a href="#">{{$item->name}}</a></td>
                                        <td><span class="amount">${{number_format($item->price,2)}}</span></td>
                                    </tr>
                                    <?php $totalPrice = $totalPrice + ($item->qty * $item->price) ?>
                                    @endforeach
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>&nbsp;</td>
                                        <td>${{number_format($totalPrice,2)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handling</td>
                                        <td>&nbsp;</td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td>Order Total</td>
                                        <td>&nbsp;</td>
                                        <td>${{number_format($totalPrice,2)}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform">
                            </script>
                            <link rel="stylesheet" type="text/css" href="{{url('assets/css/squre.css')}}">
                            <div class="col-md-12">
                                <h3>Payment Information</h3>
                                <div class="payment-method">


                                    <div class="container">
                                        <div class='row'>
                                            <div class='col-md-4'></div>
                                            <div class='col-md-4'>
                                            <div class="payment__method">
                                                <input type="hidden" id="nonc_amount" name="amount" value="{{$totalPrice}}">

                                                <div id="sq-card-number"></div>
                                                <div id="card" style="color:red;"></div>
                                                <div class="third" id="sq-expiration-date"></div>
                                                <div id="exp_date" style="color:red;"></div>
                                                <div class="third" id="sq-cvv"></div>
                                                <div id="cvv" style="color:red;"></div>
                                                <div class="third" id="sq-postal-code"></div>
                                                <div id="post_code" style="color:red;"></div>
                                                <button id="sq-creditcard" class="button-credit-card" onclick="onGetCardNonce(event)">Pay ${{number_format($totalPrice,2)}}</button>
                                                <div class='col-md-4'></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

 <script type="text/javascript">
     const paymentForm = new SqPaymentForm({
         applicationId: 'sandbox-sq0idb-1K6JE1rsbDtYYmKYoxuAmg',
         inputClass: 'sq-input',
         inputStyles: [{

             fontSize: '16px',
             lineHeight: '24px',
             padding: '16px',
             placeholderColor: '#a0a0a0',
             backgroundColor: 'transparent',
         }],
         cardNumber: {
             elementId: 'sq-card-number',
             placeholder: 'Card Number'
         },
         cvv: {
             elementId: 'sq-cvv',
             placeholder: 'CVV'
         },
         expirationDate: {
             elementId: 'sq-expiration-date',
             placeholder: 'MM/YY'
         },
         postalCode: {
             elementId: 'sq-postal-code',
             placeholder: 'Postal'
         },
         // SqPaymentForm callback functions
         callbacks: {
             cardNonceResponseReceived: function (errors, nonce, cardData) {

                 $('#card').text('');
                 $('#cvv').text('');
                 $('#exp_date').text('');
                 $('#post_code').text('');
                 if (errors) {
                     console.log(errors);


                     errors.forEach(function(error) {
                         if(error.field =="cardNumber"){
                             $('#card').text(error.message)
                         }
                         if(error.field =="cvv"){
                             $('#cvv').text(error.message)
                         }
                         if(error.field =="expirationDate"){
                             $('#exp_date').text(error.message)
                         }
                         if(error.field =="postalCode"){
                             $('#post_code').text(error.message)
                         }
                         //alert('  ' + error.message);
                     });

                 } else {
                     var form = $("#payment-form");
                         form.append("<input type='hidden' id='nonc_token' name='nonce_toke_for_payment' value='" + nonce + "' >");

                     form.get(0).submit();

//                     $.ajax({
//                         url: mainUrl + "/create_payment",
//                         type: 'get',
//                         data: {nonce: nonce,amount:$('#nonc_amount').val()},
//                         success: function (response) {
//                             swal("Success!", "your payment has been captured", "success");
//                             //  alert('');
//                             // window.location.reload();
//                         },
//                         error: function (jqXHR, textStatus, errorThrown) {
//
//                             swal("Error!", "something went wrong with the payment", "warning");
//                             //alert('Error: ' + jqXHR.status);
//                         } // <-- remove the trailing comma you had here
//                     });
                     //$('#nonce_keu').val(nonce);
                     //alert('Nonce received: ' + nonce);

                 }
             }
         }
     });

     function onGetCardNonce(event) {

         paymentForm.requestCardNonce();
     }

 </script>



 <!-- end main-content -->
{{--<script>--}}
    {{--$(function() {--}}
        {{--$('form.require-validation').bind('submit', function(e) {--}}
            {{--var $form         = $(e.target).closest('form'),--}}
                {{--inputSelector = ['input[type=email]', 'input[type=password]',--}}
                    {{--'input[type=text]', 'input[type=file]',--}}
                    {{--'textarea'].join(', '),--}}
                {{--$inputs       = $form.find('.required').find(inputSelector),--}}
                {{--$errorMessage = $form.find('div.error'),--}}
                {{--valid         = true;--}}

            {{--$errorMessage.addClass('hide');--}}
            {{--$('.has-error').removeClass('has-error');--}}
            {{--$inputs.each(function(i, el) {--}}
                {{--var $input = $(el);--}}
                {{--if ($input.val() === '') {--}}
                    {{--$input.parent().addClass('has-error');--}}
                    {{--$errorMessage.removeClass('hide');--}}
                    {{--e.preventDefault(); // cancel on first error--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}

    {{--$(function() {--}}

        {{--var $form = $("#payment-form");--}}

        {{--$form.on('submit', function(e) {--}}
            {{--if (!$form.data('cc-on-file')) {--}}
                {{--e.preventDefault();--}}
                {{--Stripe.setPublishableKey($form.data('stripe-publishable-key'));--}}
                {{--Stripe.createToken({--}}
                    {{--number: $('.card-number').val(),--}}
                    {{--cvc: $('.card-cvc').val(),--}}
                    {{--exp_month: $('.card-expiry-month').val(),--}}
                    {{--exp_year: $('.card-expiry-year').val()--}}
                {{--}, stripeResponseHandler);--}}
            {{--}--}}
        {{--});--}}

        {{--function stripeResponseHandler(status, response) {--}}
            {{--if (response.error) {--}}
                {{--$('.error')--}}
                    {{--.removeClass('hide')--}}
                    {{--.find('.alert')--}}
                    {{--.text(response.error.message);--}}
            {{--} else {--}}
                {{--// token contains id, last4, and card type--}}
                {{--var token = response['id'];--}}
                {{--// insert the token into the form so it gets submitted to the server--}}
                {{--$form.find('input[type=text]').empty();--}}
                {{--$form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");--}}
                {{--$form.get(0).submit();--}}
            {{--}--}}
        {{--}--}}
    {{--})--}}
{{--</script>--}}
@endsection
