@extends('frontend.layout.main')
@section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-white-8" data-bg-img="{{URL::to('/')}}/assets/images/bg/bg6.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-8 text-left flip xs-text-center">
                        <h2 class="title">Service Detail</h2>
                    </div>
{{--                    <div class="col-sm-4">--}}
{{--                        <ol class="breadcrumb text-right sm-text-center text-black mt-10">--}}
{{--                            <li><a href="#">Home</a></li>--}}
{{--                            <li><a href="#">Pages</a></li>--}}
{{--                            <li class="active text-theme-colored">Page Title</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="pull-left flip mr-15 thumbnail" width="20%" height="5%" src="{{URL::to('/').'/images/'.unserialize($detail[0]->image)[0]}}" alt="">
                    <p>{{$detail[0]->name}}</p>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
@endsection
