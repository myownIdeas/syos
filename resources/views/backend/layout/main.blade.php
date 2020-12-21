<!doctype html>
<html lang="en" class="fixed">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Syosset Pharmacy</title>
   
    <link rel="stylesheet" href="{{url('backend/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendor/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendor/animate.css/animate.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendor/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendor/data-table/media/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendor/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('backend/stylesheets/css/style.css')}}">
{{--    <link type="text/css" rel="stylesheet" href="{{url('backend/stylesheets/css/demo.css')}}">--}}
    <link type="text/css" rel="stylesheet" href="{{url('backend/stylesheets/css/jquery-te-1.4.0.css')}}">
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>

<body>
<div class="wrap">
    <div class="page-header">
        <div class="leftside-header">
            <div class="logo">
                <a href="index.html" class="on-click">
                    <img alt="logo" src="assets/images/main_logo.png" />
                </a>
            </div>
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <div class="rightside-header">
{{--            <div class="header-middle"></div>--}}
{{--            <div class="header-section" id="search-headerbox">--}}
{{--                <input type="text" name="search" id="search" placeholder="Search...">--}}
{{--                <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>--}}
{{--                <div class="header-separator"></div>--}}
{{--            </div>--}}
            <div class="header-section hidden-xs" id="notice-headerbox">
                <div class="notice" id="checklist-notice">
{{--                    <i class="fa fa-check-square-o" aria-hidden="true"></i>--}}
                    <div class="dropdown-box basic">
{{--                        <div class="drop-header">--}}
{{--                            <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> To-Do List</h3>--}}
{{--                        </div>--}}
                        <div class="drop-content">
                            <div class="widget-list list-to-do">
                                <ul>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s1" value="option1">
                                            <label for="check-s1">Accusantium eveniet ipsam neque</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s2" value="option1" checked>
                                            <label for="check-s2">Lorem ipsum dolor sit</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s3" value="option1">
                                            <label for="check-s3">Dolor eligendi in ipsum sapiente</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s4" value="option1">
                                            <label for="check-s4">Natus recusandae vel</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s5" value="option1">
                                            <label for="check-s5">Adipisci amet officia tempore ut</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="drop-footer">
                            <a>See all Items</a>
                        </div>
                    </div>
                </div>
{{--                <div class="notice" id="messages-notice">--}}
{{--                    <i class="fa fa-comments-o" aria-hidden="true"></i>--}}
{{--                    <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>--}}
{{--                    <div class="dropdown-box basic">--}}
{{--                        <div class="drop-header ">--}}
{{--                            <h3><i class="fa fa-comments-o" aria-hidden="true"></i> Messages</h3>--}}
{{--                            <span class="number">120</span>--}}
{{--                        </div>--}}
{{--                        <div class="drop-content">--}}
{{--                            <div class="widget-list list-left-element">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><img alt="John Doe" src="images/avatar_1.jpg" /></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">John Doe</span>--}}
{{--                                                <span class="subtitle">Lorem ipsum dolor sit.</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><img alt="Alice Smith" src="images/avatar_2.jpg" /></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">Alice Smith</span>--}}
{{--                                                <span class="subtitle">Deserunt, mollitia?</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><img alt="Klaus Wolf" src="images/avatar_3.jpg" /></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">Klaus Wolf</span>--}}
{{--                                                <span class="subtitle">Consectetur adipisicing elit.</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><img alt="Sun Li" src="images/avatar_4.jpg" /></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">Sun Li</span>--}}
{{--                                                <span class="subtitle">Tenetur tempora?</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><img alt="Sonia Valera" src="images/avatar_5.jpg" /></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">Sonia Valera</span>--}}
{{--                                                <span class="subtitle">Similique ad maxime.</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="drop-footer">--}}
{{--                            <a>See all messages</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="notice" id="alerts-notice">--}}
{{--                    <i class="fa fa-bell-o" aria-hidden="true"></i>--}}
{{--                    <span>4</span>--}}
{{--                    <div class="dropdown-box basic">--}}
{{--                        <div class="drop-header">--}}
{{--                            <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>--}}
{{--                            <span class="number">4</span>--}}
{{--                        </div>--}}
{{--                        <div class="drop-content">--}}
{{--                            <div class="widget-list list-left-element list-sm">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><i class="fa fa-warning color-warning"></i></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">8 Bugs</span>--}}
{{--                                                <span class="subtitle">reported today</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><i class="fa fa-flag color-danger"></i></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">Error</span>--}}
{{--                                                <span class="subtitle">sevidor C down</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><i class="fa fa-cog color-dark"></i></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">New Configuration</span>--}}
{{--                                                <span class="subtitle"></span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><i class="fa fa-tasks color-success"></i></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">14 Task</span>--}}
{{--                                                <span class="subtitle">completed</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>--}}
{{--                                            <div class="text">--}}
{{--                                                <span class="title">21 Menssage</span>--}}
{{--                                                <span class="subtitle"> (see more)</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="drop-footer">--}}
{{--                            <a>See all notifications</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="header-separator"></div>
            </div>
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img src="backend/images/user-avatar.jpg" alt="Jane Doe" />
                    </div>
                    <div class="user-info">
                        <span class="user-name">ZainUlAbidin</span>
                        <span class="user-profile">Admin</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
{{--                <div class="user-options dropdown-box">--}}
{{--                    <div class="drop-content basic">--}}
{{--                        <ul>--}}
{{--                            <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>--}}
{{--                            <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="header-separator"></div>
            <div class="header-section">
                <a href="{{url('sign-out')}}"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="left-sidebar">


            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Navigation</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav" id="main-nav">
{{--                            <li class="active-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>--}}
{{--                            <li class="has-child-item close-item">--}}
{{--                                <a><i class="fa fa-list" aria-hidden="true"></i><span>Brands / Category</span></a>--}}
{{--                                <ul class="nav child-nav level-1">--}}
{{--                                    <li><a href="{{url('/show-brand-category')}}">Manage Brand</a></li>--}}
{{--                                    <li><a href="{{url('/show-brand-category-list')}}">Brand List</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-table" aria-hidden="true"></i><span>Products</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/add-products')}}">Add Products</a></li>
                                    <li><a href="{{url('/list-products')}}">Products List</a></li>
{{--                                    <li class="has-child-item close-item">--}}
{{--                                        <a>Notifications</a>--}}
{{--                                        <ul class="nav child-nav level-2 ">--}}
{{--                                            <li><a href="ui-elements_notifications-pnotify.html">PNotify</a></li>--}}
{{--                                            <li><a href="ui-elements_notifications-toastr.html">Toastr</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="ui-elements_animations-appear.html">Animations</a></li>--}}
                                </ul>
                            </li>
{{--                            <li class="has-child-item close-item">--}}
{{--                                <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Partners Logo</span></a>--}}
{{--                                <ul class="nav child-nav level-1">--}}
{{--                                    <li><a href="{{url('/show-partner-page')}}">Add Partner</a></li>--}}
{{--                                    <li><a href="{{url('/show-partner-list')}}">Partner List</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>Order</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/list-orders')}}">Order List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-envelope" aria-hidden="true"></i><span>Contact Us</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/contact-us-record-show')}}">Contact Us List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>Inquiry</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/show-inquiry')}}">Inquiry List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>Testimonial</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/show-testimonial-page')}}">Add Testimonial</a></li>
                                    <li><a href="{{url('/list-testimonial')}}">Testimonial List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>Services</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/show-services-page')}}">Add Services</a></li>
                                    <li><a href="{{url('/list-services')}}">Services List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>Resources</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/show-resources-page')}}">Add Resources</a></li>
                                    <li><a href="{{url('/list-resources')}}">Resources List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>CBD</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/show-cbd-page')}}">Add CBD</a></li>
                                    <li><a href="{{url('/list-cbd')}}">CBD List</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-headphones" aria-hidden="true"></i><span>Let Get Started</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="{{url('/list-get-started')}}"> List</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">


            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Syosset Pharmacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInUp">

        @yield('content')


        </div>
        <div class="right-sidebar">
            <div class="right-sidebar-toggle" data-toggle-class="right-sidebar-opened" data-target="html">
                <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
            </div>
            <div id="right-nav" class="nano">
                <div class="nano-content">
                    <div class="template-settings">
                        <h4 class="text-center">Template Settings</h4>
                        <ul class="toggle-settings pv-xlg">
                            <li>
                                <h6 class="text">Header fixed</h6>
                                <label class="switch">
                                    <input id="header-fixed" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                            <li>
                                <h6 class="text">Left sidebar fixed</h6>
                                <label class="switch">
                                    <input id="left-sidebar-fixed" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                            <li>
                                <h6 class="text">Left sidebar collapsed</h6>
                                <label class="switch">
                                    <input id="left-sidebar-collapsed" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </li>
                            <li>
                                <h6 class="text">Content header fixed</h6>
                                <label class="switch">
                                    <input id="content-header-fixed" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                        </ul>
{{--                        <h4 class="text-center">Template Colors</h4>--}}
{{--                        <ul class="toggle-colors">--}}
{{--                            <li>--}}
{{--                                <a href="index.html" class="on-click"> <img alt="Helsinki-green" src="images/helsinki-green.png" /></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="http://myiideveloper.com/helsinki/helsinki-light/index.html" class="on-click"> <img alt="Helsinki-light" src="images/helsinki-light.png" /></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="http://myiideveloper.com/helsinki/helsinki-blue/index.html" class="on-click"> <img alt="Helsinki-blue" src="images/helsinki-blue.png" /></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="http://myiideveloper.com/helsinki/helsinki-red/index.html" class="on-click"> <img alt="Helsinki-red" src="images/helsinki-red.png" /></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
</div>


    <script src="{{url('backend/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
    <script src="{{url('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/vendor/nano-scroller/nano-scroller.js')}}"></script>
    <script src="{{url('backend/javascripts/template-script.min.js')}}"></script>
{{--    <script src="{{url('backend/javascripts/template-init.min.js')}}"></script>--}}
{{--    <script src="{{url('backend/vendor/toastr/toastr.min.js')}}"></script>--}}
{{--    <script src="{{url('backend/vendor/chart-js/chart.min.js')}}"></script>--}}
{{--    <script src="{{url('backend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>--}}
{{--    <script src="{{url('backend/javascripts/examples/dashboard.js')}}"></script>--}}




    <script src="{{url('backend/vendor/data-table/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('backend/vendor/data-table/media/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('backend/javascripts/examples/tables/data-tables.js')}}"></script>
    <script>
        CKEDITOR.replace( 'textarea' );

    </script>
</body>


</html>
