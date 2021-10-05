<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lux Dental | Comming Soon</title>
        <meta name="description" content="Lux Dental Clinic website and portal comming soon. One of the best dental clinic in The Gambia.">
        <meta name="keywords" content="Lux Dental Clinic, Dental clinic in The Gambia, Thruth Dental Clinic">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tbj.css') }}">
    </head>

    <body>
        <header id="header" class="d-flex align-items-center">
            @yield('header')
        </header>

        <main id="main">
            @include('sweetalert::alert')
            @yield('content')
        </main>

        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <a href="https://backend-backboners.github.io/portfolio" style="font-size: 15px;color: rgba(19, 186, 216, 0.582)" ><Strong>Lux Dental Clinic</Strong></a>. All Rights Reserved
                    <br> <a href="https://backend-backboners.github.io/portfolio" style="color: rgba(19, 186, 216, 0.582)"><strong><span>TBJ</span></strong></a>
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('js/tbj.js') }}"></script>
    </body>
</html>
