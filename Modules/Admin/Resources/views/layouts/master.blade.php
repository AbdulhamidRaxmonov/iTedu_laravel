<!doctype html>
<html class="no-js" lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Web Admin | iTprom  </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
  <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('backend/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
        <!-- Theme initialization -->
        @yield('css')
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-search">
                       @yield('header')
                    </div>
                   
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('{{asset(Auth::user()->photo)}}')"> </div>
                                    <span class="name"> {{Auth::user()->name}} </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-user icon"></i> Profile </a> 
                                    <a class="dropdown-item" href="{{route('user.reset')}}">
                                        <i class="fa fa-reply icon"></i> Reset Password </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('user.logout')}}">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                   <img src="{{asset('backend/logo.png')}}" alt="" width="120">
                                </div></div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li id="menu_home">
                                    <a href="{{url('admin/')}}">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li id="menu_message">
                                    <a href="{{route('message.index')}}">
                                        <i class="fa fa-star"></i> Messages </a>
                                </li>
                                <li id="menu_slide">
                                    <a href="{{route('slide.index')}}">
                                        <i class="fa fa-star"></i> Slides </a>
                                </li>
                                <li id="menu_page">
                                    <a href="{{route('page.index')}}">
                                        <i class="fa fa-file"></i> Pages </a>
                                </li>
                                <li id="menu_feature">
                                    <a href="{{route('feature.index')}}">
                                        <i class="fa fa-bell"></i> Features </a>
                                </li>
                                <li id="menu_config">
                                    <a href="">
                                        <i class="fa fa-cog"></i> Settings
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav" id="collapse_config">
                                        <li id="menu_company">
                                            <a href="{{route('company.index')}}">
                                             <i class="fa fa-arrow-right"></i>Company  
                                            </a>
                                        </li>
                                        <li id="menu_category">
                                            <a href="{{route('category.index')}}">
                                             <i class="fa fa-arrow-right"></i>Categories  
                                            </a>
                                        </li>
                                        <li id="menu_social">
                                            <a href="{{route('social.index')}}">
                                             <i class="fa fa-arrow-right"></i>Socials  
                                            </a>
                                        </li>
                                        <li id="menu_user">
                                            <a href="{{route('user.index')}}">
                                             <i class="fa fa-arrow-right"></i>Users  
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content dashboard-page">
                    <section class="section">
                        @yield('content')
                    </section>
                </article>
                <!-- /.modal -->       
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="{{asset('backend/js/vendor.js')}}"></script>
        <script src="{{asset('backend/js/app.js')}}"></script>
        <script>
            var burl="{{url('/')}}";
        </script>
        @yield('js')
    </body>

</html>