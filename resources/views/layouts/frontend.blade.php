<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>E-mate | @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('academy/img/emate-logo4.png') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('academy/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

    {{--  <!-- live chat -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  --}}

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('academy/img/emate-logo2.png') }}" alt=""></a>
                            </div>
                            <div class="login-content">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> |

                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            @endif
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('account_page') }}">
                                                        {{ __('Account') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('course_page') }}">Books</a></li>
                                    <li><a href="{{ route('about_page') }}">About Us</a></li>
                                    <li><a href="{{ route('contact_page') }}">Contact</a></li>
                                    @auth
                                    @if(auth()->user()->is_admin)
                                    <li><a href="#">Admin Management</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            <li><a href="{{ route('admin.users') }}">Users</a></li>
                                            <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                            <li><a href="{{ route('admin.books') }}">Books</a></li>
                                        </ul>
                                    </li>
                                    @endif
                                    @endauth

                                </ul>
                            </div>

                         </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+233275087619"><i class="icon-telephone-2"></i> <span>(+233) 27 508 7619 </span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="{{ asset('academy/img/emate-logo3.png') }}" alt=""></a>
                            </div>
                            <p>“The real key to learning something quickly is to take a deliberate, intelligent approach to your learning.”
                                – Lindsay Kolowich
                                “Develop a passion for learning. If you do, you will never cease to grow.”
                                {{ '– Anthony J. D\'Angelo' }}
                            </p>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Ayensu, Ucc, Cape Coast, GH</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: 027 508 7619 <br>Office: 027 508 7619</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>customerservice@emate.com/gh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Group 2 &copy;<script>document.write(new Date().getFullYear());</script> </i>  <a href="https://emate.com" target="_blank"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('academy/js/jquery/jquery-2.2.4.min.js') }}"></script>

    <script src= "script.js" type="text/javascript') }}"></script>

    <!-- Popper js -->
    <script src="{{ asset('academy/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->

    <script src="{{ asset('academy/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('academy/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('academy/js/active.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
            @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                "positionClass": "toast-top-right",
                timeOut: 5000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

            });
        @endforeach

        @if (Session::has('success'))
            toastr.success('{{ Session::get('success') }}','Success',{
                "positionClass": "toast-top-right",
                timeOut: 5000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

                });
        @endif

        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}','Error',{
                "positionClass": "toast-top-right",
                timeOut: 5000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

                });

        @endif
    </script>
</body>

</html>
