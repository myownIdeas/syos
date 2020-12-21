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
                            <h2 class="title">Resources</h2>
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

        <!-- Section: Blog -->

        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row blog-posts">
                    <div class="col-md-12">
                        <!-- Blog Masonry -->
                        <div id="grid" class="gallery-isotope default-animation-effect grid-2 masonry gutter-30 clearfix">
                            <!-- grid sizer for Masonry -->
                            <div class="gallery-item gallery-item-sizer"></div>
                        @foreach($resources as $resource)
                            <!-- Blog Item Start -->
                            <div class="gallery-item">
                                <article class="post clearfix mb-30 bg-lighter">
                                    <div class="entry-header">

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 pr-0 pr-sm-15">
                                            <div class="thumb p-15">
                                                <img class="img-fullwidth" src="{{URL::to('/').'/images/'.unserialize($resource->image)[0]}}" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-7 pl-0 pl-sm-15">
                                            <div class="event-details p-15 mt-10">
                                                <a href="{{$resource->link}}"> <h4 class="media-heading text-uppercase font-weight-500">{{$resource->name}}</h4></a>


                                            </div>
                                        </div>

                                    </div>


                                </article>
                            </div>
                            <!-- Blog Item End -->
                        @endforeach

                        </div>
                        <!-- Blog Masonry -->
                    </div>
                </div>
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <nav>--}}
{{--                            <ul class="pagination theme-colored xs-pull-center m-0">--}}
{{--                                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>--}}
{{--                                <li class="active"><a href="#">1</a></li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                                <li><a href="#">3</a></li>--}}
{{--                                <li><a href="#">4</a></li>--}}
{{--                                <li><a href="#">5</a></li>--}}
{{--                                <li><a href="#">...</a></li>--}}
{{--                                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
    </div>
    <!-- end main-content -->


@endsection
