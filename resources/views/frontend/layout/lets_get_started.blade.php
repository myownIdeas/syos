<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Pharmacy in New York | Oceana Pharmacy" />
    <meta name="keywords" content="Pharmacy in New York | Oceana Pharmacy" />

    <!-- Page Title -->
    <title>Pharmacy in New York | Syosset Pharmacy</title>


    <!-- Stylesheet -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{url('assets/css/menuzord-megamenu.css')}}" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="{{url('assets/css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{url('assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{url('assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{url('assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/utility-classes.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{url('assets/css/responsive.css" rel="stylesheet" type="text/css')}}">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{url('assets/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{url('assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css')}}"/>
    <link  href="{{url('assets/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{url('assets/css/colors/theme-skin-color-set3.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{url('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{url('assets/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{url('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/jquery.validate.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    {{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}

    <script>
        var mainUrl ="";
        mainUrl = '<?php echo e(URL::to('/')); ?>';
    </script>
    <![endif]-->
</head>
<body class="">

@yield('content')



<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#wizard1').validate({
            rules: {
                doctor_name: {
                    required: true,
                    doctor_name: true,
                    remote: {
                        url: '/agent/check-emailreg',
                        type: "get"
                    }
                }
            },
            messages: {

                doctor_name: {
                    remote: "Email already taken.",
                }

            },


        });
    })
    function addDoctor(){
        alert('hi');
    }
</script>
</body>

</html>




