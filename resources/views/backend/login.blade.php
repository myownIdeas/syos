<!doctype html>
<html lang="en" class="fixed accounts sign-in">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Syosset Pharmacy</title>
   

    <link rel="stylesheet" href="{{ url('backend/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url('backend/vendor/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ url('backend/vendor/animate.css/animate.css')}}">
    <link rel="stylesheet" href="{{ url('backend/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ url('backend/vendor/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ url('backend/vendor/data-table/media/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('backend/stylesheets/css/style.css')}}">
</head>

<body>
<div class="wrap">
    <div class="page-body animated slideInDown">
        <div class="logo">
            <img alt="logo" src="assets/images/main_logo.png" />
        </div>
        <div class="box">
            <div class="panel mb-none">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <div class="panel-content bg-scale-0">
                    <form method="post" action="{{url('admin/login')}}">
                        @csrf
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                                <span class="input-with-icon">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                        <i class="fa fa-key"></i>
                                    </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary btn-block">Sign in</button>
                        </div>
{{--                        <div class="form-group text-center">--}}
{{--                            <a href="pages_forgot-password.html">Forgot password?</a>--}}
{{--                        </div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ url('backend/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
<script src="{{ url('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ url('backend/vendor/nano-scroller/nano-scroller.js')}}"></script>
<script src="{{ url('backend/javascripts/template-script.min.js')}}"></script>
<script src="{{ url('backend/javascripts/template-init.min.js')}}"></script>
</body>


</html>
