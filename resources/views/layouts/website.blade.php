<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Search Engine -->
        <meta name="google-site-verification" content="hHSOmFG7pSQp16_ld2Hx5G4OmZwndYDbQaG2qI1o6H4" />
        <meta name="title" content="Pack'N Go">
        <meta name="description" content="We are young & sincere travel consultants, who are passionate about trips, possess profound knowledge & will gladly help you with tailored travel packages.">
        <meta name="keywords" content="Pack, and, go, pack and go, Pack'N, Go, Pack'N Go, Travel, Trip, Trips, Packages">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="1 days">
        <meta name="image" content="https://pack-n-go.test/images/logo/logo%201.png">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Pack'N Go">
        <meta itemprop="description" content="We are young & sincere travel consultants, who are passionate about trips, possess profound knowledge & will gladly help you with tailored travel packages.">
        <meta itemprop="image" content="https://pack-n-go.test/images/logo/logo%201.png">
        <!-- Open Graph general (Facebook, Pinterest & LinkedIn) -->
        <meta property="og:title" content="Pack'N Go">
        <meta property="og:description" content="We are young & sincere travel consultants, who are passionate abou..">
        <meta property="og:image" content="https://packandgo-me.com/images/logo/logo%201.png">
        <meta property="og:url" content="https://packandgo-me.com/">
        <meta property="og:site_name" content="Pack'N Go">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <!-- Twitter -->
        <meta property="twitter:card" content="summary">
        <meta property="twitter:title" content="Pack'N Go">
        <meta property="twitter:description" content="We are young & sincere travel consultants, who are passionate about trips, possess profound knowledge & will gladly he..">
        <meta property="twitter:image:src" content="https://packandgo-me.com/images/logo/logo%201.png">


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
{{--        <script src='https://kit.fontawesome.com/a076d05399.js'></script>--}}
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
            <a href="https://wa.me/0020096221116" target="_blank" style="background: #00E676;color: white;position: fixed;width: 60px;height: 60px;padding:10px;bottom: 25px;left:25px;border-radius: 50%;">
                <i class="fa fa-3x fa-whatsapp" aria-hidden="true" style="position: relative;top: -3px;"></i>
            </a>
            <a href="https://m.me/276869939156008" target="_blank" style="background: #4267B2;color: white;position: fixed;width: 60px;height: 60px;padding:10px;bottom: 25px;right:25px;border-radius: 50%;">
                <i class="fa fa-3x fa-facebook" aria-hidden="true" style="position: relative;top: -1px;left: 4px;"></i>
            </a>
{{--            <a href="https://m.me/276869939156008" target="_blank" style="background: #4267B2;color: white;position: fixed;padding:10px;bottom: 25px;right:25px;border-radius: 50%;">--}}
{{--                <i class="fa fa-3x fa-facebook" aria-hidden="true"></i>--}}
{{--            </a>--}}
{{--            <a style="position: fixed;padding:5px;bottom: 5px; text-align: center;left: 10px;margin: 50px;" target="_blank">--}}
{{--                <i class="fa fa-3x fa-whatsapp" aria-hidden="true" style="background: #00E676;color: white;border-radius: 50%;height: 60px;width: 60px;"></i>--}}
{{--            </a>--}}
{{--            <div style="left: 0;bottom: 0;width: 100%;">--}}

{{--                <a href="https://m.me/276869939156008" style="bottom: -24px; text-align: center;float: right;right: -35px;position: relative;margin: 50px;" target="_blank">--}}
{{--                    <i class="fab fa-4x fa-facebook-messenger" aria-hidden="true" style="background: #4267B2;color: white;border-radius: 50%;height: 80px;width: 80px;line-height: 80px;"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
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
