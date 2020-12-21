@extends('frontend.layout.main')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/bg6.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Order Detail</h2>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered tbl-shopping-cart">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form action="{{url('update-cart')}}" method="post" >
                                        @csrf
                                    <?php $totalPrice = 0 ?>
                                    @foreach($items as $item)

                                    <tr class="cart_item">
                                        <td class="product-remove"><a title="Remove this item" class="remove" href="javascript:void(0)" ></a></td>
                                        <td class="product-thumbnail"><a href="#"><img alt="member" src="images/{{unserialize($item->images)[0]}}"></a></td>
                                        <td class="product-name"><a href="#">{{$item->name}}</a>
{{--                                            <ul class="variation">--}}
{{--                                                <li class="variation-size">Size: <span>Medium</span></li>--}}
{{--                                            </ul>--}}
                                        </td>
                                        <td class="product-price"><span class="amount">${{number_format($item->p_price,2)}}</span></td>
                                        <td class="product-quantity"><div class="quantity buttons_added">

                                                <input type="button" class="minus" value="-">
                                                <input type="number" size="4" class="input-text qty text" readonly title="Qty" value="{{$item->qty}}" name="quantity[]" min="1" step="1">
                                                <input type="button" class="plus" value="+">
                                            </div></td>
                                        <td class="product-subtotal"><span class="amount">${{number_format(($item->qty*$item->p_price),2)}}</span></td>
                                    </tr>

                                    <?php $totalPrice = $totalPrice + ($item->qty * $item->p_price) ?>
                                    @endforeach
                                    <tr class="cart_item">
                                        <td colspan="3">
{{--                                            <div class="coupon">--}}
{{--                                                <label for="cart-coupon">Coupon: </label>--}}
{{--                                                <input id="cart-coupon" type="text" placeholder="Coupon code" value="" name="coupon_code">--}}
{{--                                                <button type="button" class="btn">Apply Coupon</button>--}}
{{--                                            </div>--}}
                                        </td>
{{--                                        <td colspan="2">&nbsp;</td>--}}
{{--                                        <td><button type="submit" class="btn btn-success">Update Cart</button></td>--}}
                                    </tr>
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 mt-30">
                            <div class="row">

                                <div class="col-md-6" >
                                    <h4>Order Totals</h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td>${{number_format($totalPrice,2)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping and Handling</td>
                                            <td>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Order Total</td>
                                            <td>${{number_format($totalPrice,2)}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
{{--                                    <a class="btn btn-success" href="{{url('/proceed-cart')}}">Proceed to Checkout</a> </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection
