<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') {{ config('app.name', 'Pack\'N Go') }}</title>
        <!-- favicon -->
        <link rel="icon" href="/images/logo/logo 2.png" sizes="50x10" type="image/png">

        <!-- Additional plugin css -->
        <link rel="stylesheet" href="{{ asset('css/website/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/swiper.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/jquery-ui.min.css')}}">
        <!-- icons -->
        <link rel="stylesheet" href="{{ asset('css/website/font-awesome.min.css')}}">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="{{ asset('css/website/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/website/line-awesome.min.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/website/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/website/responsive.css')}}">
        <script src="{{ asset('js/website/jquery-2.2.4.min.js')}}"></script>
    </head>
    <body style="overflow: hidden">

        <div id="app">
            <!-- LOADER
            ====================================================== -->
            @include('partials.loader')

            <!-- HEADER NAVBAR
            ======================================================-->
            @include('partials.navbar')

            <!-- PAGE CONTENT
            ======================================================-->
            <div class="page-wrappers">

                @yield('content')

                <!-- FOOTER
                ======================================================-->
                @include('partials.footer')
            </div>
            <div style="position: fixed;left: 0;bottom: 0;width: 100%;">
                <a href="https://wa.me/0020096221116" style="text-align: center;float: left;margin: 50px;" target="_blank">
                    <i class="fab fa-4x fa-whatsapp" aria-hidden="true" style="background: #00E676;color: white;border-radius: 50%;height: 80px;width: 80px;line-height: 80px;"></i>
                </a>
                <a href="https://m.me/276869939156008" style="text-align: center;float: right;margin: 50px;" target="_blank">
                    <i class="fab fa-4x fa-facebook-messenger" aria-hidden="true" style="background: #4267B2;color: white;border-radius: 50%;height: 80px;width: 80px;line-height: 80px;"></i>
                </a>
            </div>
        </div>

        <!-- Additional plugin js -->
        <script src="{{ asset('js/website/popper.min.js') }}"></script>
        <script src="{{ asset('js/website/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/website/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('js/website/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/website/wow.min.js') }}"></script>
        <script src="{{ asset('js/website/slick.js') }}"></script>
        <script src="{{ asset('js/website/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/website/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/website/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/website/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/website/swiper.min.js') }}"></script>
        <script src="{{ asset('js/website/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/website/jquery-ui.min.js') }}"></script>

        <!-- main js -->
        <script src="{{ asset('js/website/main.js') }}"></script>

    </body>
</html>
