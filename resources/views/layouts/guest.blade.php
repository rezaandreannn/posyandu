<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style type="text/css" media="screen">
            html,
            body {
                height: 100%;
            }

            body {
                display: flex;
                align-items: center;
            }

            .form-signin {
                width: 100%;
                max-width: 450px;
                margin: auto;
            }
            .form-signin .checkbox {
                font-weight: 400;
            }
            .form-signin .form-control {
                position: relative;
                box-sizing: border-box;
                height: auto;
                font-size: 16px;
            }
            .form-signin .form-control:focus {
                z-index: 2;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="form-signin">
            {{ $slot }}
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('quixlab/images/favicon.png') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('quixlab/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->



    {{ $slot }}






    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('quixlab/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('quixlab/js/custom.min.js') }}"></script>
    <script src="{{ asset('quixlab/js/settings.js') }}"></script>
    <script src="{{ asset('quixlab/js/gleek.js') }}"></script>
    <script src="{{ asset('quixlab/js/styleSwitcher.js') }}"></script>
</body>

</html>
