@extends('frontend.layout.main')
@section('content')
        <!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <!--        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{URL::to('/')}}/assets/images/bg/bg6.jpg">-->
    <!--            <div class="container pt-60 pb-60">-->
    <!-- Section Content -->
    <!--                <div class="section-content">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-md-12 text-center">-->
    <!--                            <h2 class="title">Prouct Details</h2>-->
    <!--{{--                            <ol class="breadcrumb text-center text-black mt-10">--}}-->
    <!--{{--                                <li><a href="#">Home</a></li>--}}-->
    <!--{{--                                <li><a href="#">Pages</a></li>--}}-->
    <!--{{--                                <li class="active text-theme-colored">Page Title</li>--}}-->
    <!--{{--                            </ol>--}}-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
<!-- </section>-->

    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="product">
                        <div class="col-md-5">
                            <div class="product-image">

                                <ul class="owl-carousel-1col" data-nav="true">

                                    @foreach(unserialize($product[0]->images) as $image)
                                        <li data-thumb="https://placehold.it/750x750">
                                            <img src="{{URL::to('/').'/images/'.$image}}" alt=""></li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="product-summary">
                                <h2 class="product-title">{{$product[0]->title}}</h2>
                                {{--                                    <div class="product_review">--}}
                                {{--                                        <ul class="review_text list-inline">--}}
                                {{--                                            <li>--}}
                                {{--                                                <div title="Rated 4.50 out of 5" class="star-rating"><span data-width="90%">4.50</span></div>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li><a href="#"><span>2</span>Reviews</a></li>--}}
                                {{--                                            <li><a href="#">Add reviews</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                <div class="price"> {{--<del><span class="amount">$40.00</span></del> --}}<ins><span class="amount dd_price">${{$product[0]->price}}</span></ins> </div>
                                <div class="short-description">
                                    <p>{!!$product[0]->description!!}</p>
                                </div>
                                @foreach($productCodes as $code)
                                    <div class="tags"><strong>{{$code->name}}:</strong> {{$code->code}}</div>
                                @endforeach
                                <div class="category"><strong>Category:</strong> {{$product[0]->catName}}</div>
                                {{--                                    <div class="tags"><strong>Tags:</strong> <a href="#">Clothes</a>, <a href="#">Leather</a></div>--}}
                                <div class="cart-form-wrapper mt-30">
                                    <form enctype="multipart/form-data" method="post" class="cart">
                                        <input type="hidden" value="productID" name="add-to-cart">
                                        <table class="table variations no-border">
                                            <tbody>

                                            <tr>
                                                <td class="name"><!--Amount--></td>
                                                <td class="value">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" class="minus" onclick="decreaseQty({{$product[0]->price}})" value="-">
                                                        <input type="text" readonly size="4" class="input-text qty text" id="for_detail_page" title="Qty" value="1" name="quantity" min="1" step="1">
                                                        <input type="button" class="plus" onclick="increaseQty({{$product[0]->price}})" value="+">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a class="btn btn-success" href="{{url('/proceed-cart')}}">CheckOut</a>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="horizontal-tab product-tab">
                                <ul class="nav nav-tabs">
                                    <!--<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>-->
                                    <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                                    {{--                                        <li><a href="#tab3" data-toggle="tab">Reviews</a></li>--}}
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>{{$product[0]->title}}</h3>
                                        <!--<p>{!!$product[0]->description!!}</p>-->

                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <th>Category</th>
                                                <td><p>{{$product[0]->catName}}</p></td>
                                            </tr>
                                            <tr>
                                                <th>Size</th>
                                                <td><p>{{$product[0]->size}}</p></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-30">
                        <h4>Related Products</h4>
                        <div class="products related owl-carousel-4col" data-nav="true">
                            @foreach($relatedProducts as $related)
                                <div class="item">
                                    <div class="product">
                                        {{--                                        <span class="tag-sale">Sale!</span>--}}
                                        <div class="product-thumb">
                                            @if(isset(unserialize($related->images)[0]))
                                            <img alt="" src="{{URL::to('/')}}/images/{{unserialize($related->images)[0]}}" class="img-responsive img-fullwidth">
                                            @endif
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="{{url('product-detail/'.$related->slug)}}"><h5 class="product-title">{{$related->title}}</h5></a>
                                            {{--                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>--}}
                                            <div class="price">{{--<del><span class="amount">$520.00</span></del>--}}<ins><span class="amount">${{number_format($related->price,2)}}</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="single_add_to_cart_button btn btn-default" href="javascript:void(0)" onclick="addToCart({{$_SESSION["cart_temp_id"]}},{{$related->id}},{{"'$related->slug'"}})">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->


@endsection
