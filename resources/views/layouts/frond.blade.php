<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frond/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('frond/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frond/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frond/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frond/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frond/') }}css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('frond/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frond/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('frond/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('frond/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frond/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-md-3 col-xl-4  d-block">
                        <h1 class="mb-0 site-logo"><a href="index.html"
                                class="text-black h2 mb-0">{{ config('app.name') }}<span class="text-primary">.</span>
                            </a></h1>
                    </div>

                    <div class="col-12 col-md-9 col-xl-8 main-menu">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                                <li><a href="/"
                                        class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                                <li><a href="#features-section" class="nav-link">Fitur</a></li>
                                <li><a href="{{ route('balita.index') }}"
                                        class="nav-link {{ Request::is('balita*') ? 'active' : '' }}">Balita</a></li>
                                <li><a href="" class="nav-link">Ibu Hamil</a></li>

                                @auth
                                    <li class="has-children">
                                        <a href="#about-section" class="nav-link">
                                            <h5>{{ Auth::user()->name }}
                                            </h5>
                                        </a>
                                        <ul class="dropdown arrow-top">

                                            <li><a href="#our-team-section" class="nav-link">Profil</a></li>
                                            <hr class="my-2">
                                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                                @csrf
                                                <li>
                                                    <button type="submit"
                                                        class="icon-key btn btn-danger btn-block rounded-0 btn-sm">
                                                        <span>Keluar</span>
                                                    </button>
                                                </li>
                                            </form>

                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}" class="btn btn-primary btn-sm text-white">Masuk</a>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0"><a href="#"
                            class="site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>


        {{ $slot }}








        <div class="footer py-5 text-center">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <p class="mb-0">
                            <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="p-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="p-3"><span class="icon-linkedin"></span></a>
                            <a href="#" class="p-3"><span class="icon-pinterest"></span></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .site-wrap -->

    <script src="{{ asset('frond/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frond/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frond/js/popper.min.js') }}"></script>
    <script src="{{ asset('frond/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frond/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frond/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frond/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frond/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frond/js/aos.js') }}"></script>
    <script src="{{ asset('frond/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frond/js/jquery.sticky.js') }}"></script>


    <script src="{{ asset('frond/js/main.js') }}"></script>

</body>

</html>
