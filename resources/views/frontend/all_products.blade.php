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
                        <h2 class="title">All Products</h2>
<!--                        <ol class="breadcrumb text-center text-black mt-10">-->
<!--                            <li><a href="#">Home</a></li>-->
<!--                            <li><a href="#">Pages</a></li>-->
<!--                            <li class="active text-theme-colored">Page Title</li>-->
<!--                        </ol>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(Session::has('msg'))
        <p class="alert alert-info">{{ Session::get('msg') }}</p>
        @elseif(Session::has('error'))
         <p class="alert alert-info">{{ Session::get('error') }}</p>
    @endif

    <section class="">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="products">
                            <div class="row multi-row-clearfix">
                               @foreach($products as $product)
                                <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                                    <div class="product">
{{--                                        <span class="tag-sale">Sale!</span>--}}
                                        <div class="product-thumb"> <img alt="" src="{{URL::to('/')}}/public/images/{{unserialize($product->images)[0]}}" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="{{url('product-detail/'.$product->slug)}}"><h5 class="product-title">{{$product->name}}</h5></a>
{{--                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>--}}
                                            <div class="price">{{--<del><span class="amount">$520.00</span></del>--}}<ins><span class="amount">${{number_format($product->price,2)}}</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" onclick="addToCart({{$_SESSION["cart_temp_id"]}},{{$product->id}} ,{{"'$product->slug'"}} )" href="javascript:void(0)">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$products->links()}}
{{--                                    <nav>--}}
{{--                                        <ul class="pagination theme-colored">--}}
{{--                                            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>--}}
{{--                                            <li class="active"><a href="#">1</a></li>--}}
{{--                                            <li><a href="#">2</a></li>--}}
{{--                                            <li><a href="#">3</a></li>--}}
{{--                                            <li><a href="#">4</a></li>--}}
{{--                                            <li><a href="#">5</a></li>--}}
{{--                                            <li><a href="#">...</a></li>--}}
{{--                                            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>--}}
{{--                                        </ul>--}}
{{--                                    </nav>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title">Search box</h5>
                                <div class="search-form">
                                    <form action="search_product" method="">
                                        <div class="input-group">
                                            <input type="text" placeholder="Click to Search" class="form-control search-input">
                                            <span class="input-group-btn">
                                             <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Categories</h4>
                                <div class="categories">
                                    <ul class="list list-border angle-double-right">
                                        @foreach($categories as $category)
                                            <li><a href="{{url('get-products-by-category_id/'.$category['id'])}}">{{$category['name']}}<span>({{$category['count']}})</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
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
