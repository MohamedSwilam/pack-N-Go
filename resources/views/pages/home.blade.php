@extends('layouts.website')

@section('title') Home |   @endsection

@section('content')

    <!-- search popup start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="/" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup End -->

    <!-- banner area start -->
    <div class="main-banner-area jarallax travelus-area" id="background"
         style="background-image: url({{$background && isset($background[0])? $background[0]->url:''}});">
        <div class="content container">
            <div class="container">
                <h2>Explore, Discover, Travel</h2>
                <h1>ADVENTURE</h1>
                <h1 class="shadow">ADVENTURE</h1>
            </div>
        </div>

        <!-- package area end -->
        <div class="package-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title section-title-left-border style-two">
                            <h2 class="title">Featured Packages</h2>
                            {{--                                <p>Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices quis non mauris. Aenean scelerisque, sem eu dictum commodo, velit nisi</p>--}}
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($packages as $package)
                        <a  href="{{route('package_details', $package->id)}}">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-package-card style-two wow animated fadeInUp" data-wow-duration="0.1s" data-wow-delay="0.1s">
                                <div class="thumb">
                                    @if(count($package->medias))
                                        <img src="{{$package->medias[0]->url}}" alt="img">
                                    @else
                                        <img src="/images/website/destination-list/8.png" alt="img">
                                    @endif
                                </div>
                                <div class="details">

                                    <h3>{{$package->title}}</h3>
                                    <u  l class="package-meta">
                                        <li class="tp-price-meta">
                                            <p><i class="fa fa-clock-o"></i></p>
                                            <p>Duration</p>
                                            <h2>{{$package->days}} Days / {{$package->nights}} Nights</h2>
                                        </li>
                                        <br>
                                        <li class="tp-price-meta" style="position: relative;margin-top: 5px; right: 10px;">
                                            <p><i class="fa fa-tag"></i></p>
                                            <p>Price</p>
                                            <h2>{{$package->price}} {{$package->currency}} </h2>
                                        </li>
                                    </ul>
                                    <a class="btn btn-gray" href="{{route('package_details', $package->id)}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- package area end -->
    </div>
    <!-- banner area end -->

    <!-- intro area start -->
{{--    <div id="intro" class="intro-area pd-top-50">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-sm-6 single-intro-two bl-0">--}}
{{--                    <div class="single-intro style-two">--}}
{{--                        <div class="thumb">--}}
{{--                            <img src="/images/website/icons/9.png" alt="img">--}}
{{--                        </div>--}}
{{--                        <h4 class="intro-title">Private Transport</h4>--}}
{{--                        <p>Sponsorships are like unicorns or leprechauns, talked about often but they don’t exist. There is only dollars</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 single-intro-two">--}}
{{--                    <div class="single-intro style-two">--}}
{{--                        <div class="thumb">--}}
{{--                            <img src="/images/website/icons/10.png" alt="img">--}}
{{--                        </div>--}}
{{--                        <h4 class="intro-title">Diverse Destinations</h4>--}}
{{--                        <p>My response usually harsh. Offended at the that a career that’s taken more than a decade to create could be</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 single-intro-two">--}}
{{--                    <div class="single-intro style-two">--}}
{{--                        <div class="thumb">--}}
{{--                            <img src="/images/website/icons/11.png" alt="img">--}}
{{--                        </div>--}}
{{--                        <h4 class="intro-title">Great Hotels</h4>--}}
{{--                        <p>I have always made a living to make movies, never the other way around.I first I washed dishes in a seafood</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 single-intro-two">--}}
{{--                    <div class="single-intro style-two">--}}
{{--                        <div class="thumb">--}}
{{--                            <img src="/images/website/icons/12.png" alt="img">--}}
{{--                        </div>--}}
{{--                        <h4 class="intro-title">Fast Booking</h4>--}}
{{--                        <p>Aenean sed nibh a magna posuere tempor. Nunc faucibus nunc aliquet. Donec congue, nunc vel tempor</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- intro area End -->

    <!-- travelus area start -->
    <div class="travelus-area pd-top-120 pd-bottom-92 jarallax" style="background-image: url(/images/website/bg/9.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title section-title-left-border style-two">
                        <h2 class="title">Why Choose Pack'N Go</h2>
                    </div>
                </div>
            </div>
            <ul class="row single-travelus-wrap-area">
                <li class="col-lg-2 col-sm-4 single-travelus-wrap">
                    <div class="single-travelus text-center">
                        <div class="icons">
                            <img src="/images/website/icons/dollar.png" alt="img" style="margin-top: 35%">
                        </div>
                        <h4>Our Standard Trips Adorable Price</h4>
                    </div>
                </li>
                <li class="col-lg-2 col-sm-4 single-travelus-wrap">
                    <div class="single-travelus text-center">
                        <div class="icons">
                            <img src="/images/website/icons/team.png" alt="img" style="margin-top: 32%">
                        </div>
                        <h4>Expert Team</h4>
                        <br>
                    </div>
                </li>
                <li class="col-lg-2 col-sm-4 single-travelus-wrap">
                    <div class="single-travelus text-center">
                        <div class="icons">
                            <img src="/images/website/icons/247.png" alt="img" style="margin-top: 32%">
                        </div>
                        <h4>24/7 Support</h4>
                        <br>
                    </div>
                </li>
                <li class="col-lg-5 offset-xl-1 single-travelus-wrap">
                    <img src="/images/website/others/15.png" alt="img">
                </li>
            </ul>
        </div>
    </div>
    <!-- travelus area start -->

    <!-- video area start -->
    <div class="video-area tp-video-area pd-top-110" style="background-image: url('/images/website/bg/7.png');" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 align-self-center wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-title mb-lg-0 mb-4 text-center text-lg-left">
                        <h2 class="title">What Do You Know <br> About US</h2>
                        <p>We are young & sincere travel consultants, who are passionate about trips, possess profound knowledge & will gladly help you with tailored travel packages.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="video-popup-wrap">
                        <div class="thumb">
                            <img src="/images/website/video.png" alt="video">
                        </div>
                        <div class="video-popup-btn">
                            <a href="https://www.youtube.com/watch?v=c7XEhXZ_rsk" class="video-play-btn mfp-iframe"><i class="fa fa-play" style="margin-top: 35%;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->

    <!-- holiday plan area start -->
    <div class="holiday-plan-area tp-holiday-plan-area mg-top-96" style="background-image: url(/images/website/bg/8.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <div class="section-title text-center">
                        <h2 class="title wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">Latest Packages</h2>
                        </div>
                </div>
            </div>
            <div class="row">
                @foreach($latest_packages as $package)
                    <a  href="{{route('package_details', $package->id)}}">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-destinations-list style-two wow animated fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.1s">
                            <div class="thumb">
                                @if(count($package->medias))
                                    <img src="{{$package->medias[0]->url}}" alt="img">
                                @else
                                    <img src="/images/website/destination-list/8.png" alt="img">
                                @endif
                            </div>
                            <div class="details">
                                <a href="/package/{{$package->id}}"><h4 class="title">{{$package->title}}</h4></a>
                                <p class="content">{{$package->description}}</p>
                                <div class="tp-price-meta">
                                    <h2>{{$package->price}} {{$package->currency}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- holiday plan area end -->


    <!-- newslatter area Start -->

    <!-- newslatter area End -->
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript" ></script>
<script>
    var images = @json($background);
    $(document).ready(function () {
        var currentBackground = 0;

        function nextBackground() {
            $("#background").css("background-image", "url('" + images[currentBackground].url + "')");
            currentBackground++;
            currentBackground = currentBackground % images.length;
        }
        setInterval(nextBackground, 5000)
    });
</script>
