@extends('layouts.website')

@section('title') Home |   @endsection


@section('content')

    <!-- search popup start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup End -->

    <!-- banner area start -->
    <div class="banner-area">
        <div class="banner-slider">
            <div class="banner-slider-item banner-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 offset-xl-2 offset-lg-1">
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div class="banner-inner">
                                        <p class="banner-cat s-animate-1">Hot Places</p>
                                        <h2 class="banner-title s-animate-2">Navagio <br> Beach</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="video-popup-btn s-animate-video">
                                        <a href="https://www.youtube.com/watch?v=c7XEhXZ_rsk" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-12 banner-tour-package">
                                    <div class="row">
                                        <div class="col-sm-4 s-animate-3">
                                            <div class="tp-price-meta">
                                                <p>Price</p>
                                                <h2>620 <small>$</small></h2>
                                                <p class="tp-price-meta-details">7 Days Tour <span>on 2 person</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-4">
                                            <div class="tp-price-meta">
                                                <p>5 Star</p>
                                                <h2>Hotel</h2>
                                                <p class="tp-price-meta-details">Hotels <span>to choice</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-5">
                                            <div class="tp-price-meta">
                                                <p>Flight date</p>
                                                <h2>17</h2>
                                                <p class="tp-price-meta-details">September <span>or later</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-item banner-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 offset-xl-2 offset-lg-1">
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div class="banner-inner">
                                        <p class="banner-cat s-animate-1">Hot Places</p>
                                        <h2 class="banner-title s-animate-2">Mykonos <br> island</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="video-popup-btn s-animate-video">
                                        <a href="https://www.youtube.com/watch?v=c7XEhXZ_rsk" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-12 banner-tour-package">
                                    <div class="row">
                                        <div class="col-sm-4 s-animate-3">
                                            <div class="tp-price-meta">
                                                <p>Price</p>
                                                <h2>720 <span>$</span></h2>
                                                <p class="tp-price-meta-details">7 Days Tour <span>on 2 person</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-4">
                                            <div class="tp-price-meta">
                                                <p>5 Star</p>
                                                <h2>Hotel</h2>
                                                <p class="tp-price-meta-details">Hotels <span>to choice</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-5">
                                            <div class="tp-price-meta">
                                                <p>Flight date</p>
                                                <h2>17</h2>
                                                <p class="tp-price-meta-details">September <span>or later</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-item banner-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 offset-xl-2 offset-lg-1">
                            <div class="row">
                                <div class="col-lg-9 col-sm-8">
                                    <div class="banner-inner">
                                        <p class="banner-cat s-animate-1">Hot Places</p>
                                        <h2 class="banner-title s-animate-2">Navagio <br> Beach</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="video-popup-btn s-animate-video">
                                        <a href="https://www.youtube.com/watch?v=c7XEhXZ_rsk" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-12 banner-tour-package">
                                    <div class="row">
                                        <div class="col-sm-4 s-animate-3">
                                            <div class="tp-price-meta">
                                                <p>Price</p>
                                                <h2>620 <small>$</small></h2>
                                                <p class="tp-price-meta-details">7 Days Tour <span>on 2 person</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-4">
                                            <div class="tp-price-meta">
                                                <p>5 Star</p>
                                                <h2>Hotel</h2>
                                                <p class="tp-price-meta-details">Hotels <span>to choice</span></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 s-animate-5">
                                            <div class="tp-price-meta">
                                                <p>Flight date</p>
                                                <h2>17</h2>
                                                <p class="tp-price-meta-details">September <span>or later</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-social-meta">
            <div class="banner-slider-dots"></div>
            <ul class="social-icon">
                <li>
                    <a class="facebook" href="https://www.facebook.com/codingeek.net/" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="twitter" href="https://twitter.com/codingeeknet" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a class="pinterest" href="https://www.instagram.com/codingeeknet/" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="banner-slider-controls">
                <div class="slider-nav tp-control-nav"></div>
                <!--slider-nav-->
                <div class="tp-slider-extra slider-extra">
                    <div class="text">
                        <span class="first">01</span>
                        <span class="devider">/</span>
                        <span class="last"></span>
                    </div>
                </div>
                <!--slider-extra-->
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- search area start -->
    <div class="search-area tp-main-search-area">
        <div class="container">
            <div class="tp-main-search">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-search-single-wrap">
                            <input class="w-100" type="text" placeholder="Bangladesh,Dhaka">
                            <i class="ti-location-pin"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="tp-search-single-wrap">
                            <input class="w-100" type="text" placeholder="Where From?">
                            <i class="fa fa-dot-circle-o"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 order-lg-9">
                        <div class="tp-search-single-wrap float-left w-100">
                            <select class="select w-100">
                                <option value="1">Travel Type</option>
                                <option value="2">Event Travel</option>
                                <option value="3">Weekend Break</option>
                                <option value="4">Package Holiday</option>
                                <option value="5">Business Travel</option>
                            </select>
                            <i class="fa fa-plus-circle"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8 order-lg-6">
                        <div class="tp-search-single-wrap float-left">
                            <div class="tp-search-date tp-departing-date-wrap w-50 float-left">
                                <input type="text" class="departing-date" placeholder="Departing">
                                <i class="fa fa-calendar-minus-o"></i>
                            </div>
                            <div class="tp-search-date tp-returning-date-wrap w-50 float-left">
                                <input type="text" class="returning-date" placeholder="Returning">
                                <img src="/images/website/icons/2.png" alt="icons">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 order-12">
                        <a class="btn btn-yellow" href="#"><i class="ti-search"></i> Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search area end -->

    <!-- intro area start -->
    <div class="intro-area pd-top-112">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-intro wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">
                        <h4 class="intro-title">
                            <span class="intro-count">01</span>
                            <a class="intro-cat" href="#">Travel</a>
                        </h4>
                        <p>Sponsorships are like unicorns or leprechauns, talked about often but they don’t actually exist. There is only dollars and cents, the ...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-intro wow animated fadeInUp" data-wow-duration="1.0s" data-wow-delay="0.2s">
                        <h4 class="intro-title">
                            <span class="intro-count">02</span>
                            <a class="intro-cat" href="#">Experience</a>
                        </h4>
                        <p>My response is usually harsh. Offended at the suggestion that a career that’s taken more than a decade to create could be...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-intro wow animated fadeInUp" data-wow-duration="1.6s" data-wow-delay="0.3s">
                        <h4 class="intro-title">
                            <span class="intro-count">03</span>
                            <a class="intro-cat" href="#">Relax</a>
                        </h4>
                        <p>I have always made a living to make movies, never the other way around. When I first started I washed in a seafood restaurant....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro area end -->

    <!-- offer area start -->
    <div class="offer-area pd-top-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">Special offers & Discounts</h2>
                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="destinations-list-slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 offset-xl-1 order-lg-12">
                        <div class="destinations-list-slider">
                            <div class="d-list-slider-item">
                                <div class="single-destinations-list text-center">
                                    <div class="thumb">
                                        <span class="d-list-tag">Special Offer</span>
                                        <img src="/images/website/destination-list/1.png" alt="list">
                                        <div class="d-list-btn-wrap">
                                            <div class="d-list-btn">
                                                <a class="btn btn-yellow" href="#">Book Now <i class="fa fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title">Greece</h4>
                                        <p class="content">Atmosphere of the sunny country</p>
                                        <ul class="tp-list-meta border-bt-dot">
                                            <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                            <li><i class="fa fa-clock-o"></i> 4 days</li>
                                            <li><i class="fa fa-star"></i> 4.3</li>
                                        </ul>
                                        <div class="tp-price-meta tp-price-meta-cl">
                                            <p>Price</p>
                                            <h2>620 <small>$</small></h2>
                                            <del>620<span>$</span></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-list-slider-item">
                                <div class="single-destinations-list text-center">
                                    <div class="thumb">
                                        <img src="/images/website/destination-list/2.png" alt="list">
                                        <div class="d-list-btn-wrap">
                                            <div class="d-list-btn">
                                                <a class="btn btn-yellow" href="#">Book Now <i class="fa fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title">Italy</h4>
                                        <p class="content">Atmosphere of the sunny country</p>
                                        <ul class="tp-list-meta border-bt-dot">
                                            <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                            <li><i class="fa fa-clock-o"></i> 4 days</li>
                                            <li><i class="fa fa-star"></i> 4.3</li>
                                        </ul>
                                        <div class="tp-price-meta tp-price-meta-cl">
                                            <p>Price</p>
                                            <h2>620 <small>$</small></h2>
                                            <del>620<span>$</span></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-list-slider-item">
                                <div class="single-destinations-list text-center">
                                    <div class="thumb">
                                        <span class="d-list-tag">Special Offer</span>
                                        <img src="/images/website/destination-list/3.png" alt="list">
                                        <div class="d-list-btn-wrap">
                                            <div class="d-list-btn">
                                                <a class="btn btn-yellow" href="#">Book Now <i class="fa fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title">Canada</h4>
                                        <p class="content">Atmosphere of the sunny country</p>
                                        <ul class="tp-list-meta border-bt-dot">
                                            <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                            <li><i class="fa fa-clock-o"></i> 4 days</li>
                                            <li><i class="fa fa-star"></i> 4.3</li>
                                        </ul>
                                        <div class="tp-price-meta tp-price-meta-cl">
                                            <p>Price</p>
                                            <h2>620 <small>$</small></h2>
                                            <del>620<span>$</span></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-list-slider-item">
                                <div class="single-destinations-list text-center">
                                    <div class="thumb">
                                        <span class="d-list-tag">Special Offer</span>
                                        <img src="/images/website/destination-list/1.png" alt="list">
                                        <div class="d-list-btn-wrap">
                                            <div class="d-list-btn">
                                                <a class="btn btn-yellow" href="#">Book Now <i class="fa fa-paper-plane"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4 class="title">Greece</h4>
                                        <p class="content">Atmosphere of the sunny country</p>
                                        <ul class="tp-list-meta border-bt-dot">
                                            <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                            <li><i class="fa fa-clock-o"></i> 4 days</li>
                                            <li><i class="fa fa-star"></i> 4.3</li>
                                        </ul>
                                        <div class="tp-price-meta tp-price-meta-cl">
                                            <p>Price</p>
                                            <h2>620 <small>$</small></h2>
                                            <del>620<span>$</span></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 align-self-center order-lg-11">
                        <div class="container">
                            <div class="destinations-slider-controls">
                                <div class="slider-nav tp-control-nav"></div>
                                <!--slider-nav-->
                                <div class="tp-slider-extra slider-extra">
                                    <div class="text">
                                        <span class="first">01 </span>
                                        <span class="last"></span>
                                    </div>
                                    <!--text-->
                                    <div class="d-list-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                        <span class="slider__label sr-only"></span>
                                    </div>
                                </div>
                                <!--slider-extra-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer area end -->

    <!-- video area start -->
    <div class="video-area tp-video-area pd-top-110" style="background-image: url('/images/website/bg/7.png');">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 align-self-center wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-title mb-lg-0 mb-4 text-center text-lg-left">
                        <h2 class="title">What Do You Know <br> About US</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown printer took a galley of type and scrambled it to make a type specimen book. It has not only five centuries</p>
                        <a class="btn btn-yellow" href="#"><span>Read More<i class="la la-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="video-popup-wrap">
                        <div class="thumb">
                            <img src="/images/website/video.png" alt="video">
                        </div>
                        <div class="video-popup-btn">
                            <a href="https://www.youtube.com/watch?v=c7XEhXZ_rsk" class="video-play-btn mfp-iframe"><i class="fa fa-play"></i></a>
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
                        <h2 class="title wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.1s">Perfect Holiday Plan</h2>
                        <p class="wow animated fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">No vis fastidii accumsan, ignota postulant ea mea. Vis et prima integre, ei vis ridens moderatius reformidans cu vim doctus accumsan ignota.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-destinations-list style-two wow animated fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.1s">
                        <div class="thumb">
                            <img src="/images/website/destination-list/4.png" alt="list">
                        </div>
                        <div class="details">
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Maldives</p>
                            <h4 class="title">Hurawalhi Island</h4>
                            <p class="content">7 Days Tour on 2 person</p>
                            <div class="tp-price-meta">
                                <h2>620 <small>$</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-destinations-list style-two wow animated fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.2s">
                        <div class="thumb">
                            <img src="/images/website/destination-list/5.png" alt="list">
                        </div>
                        <div class="details">
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Indonesia</p>
                            <h4 class="title">Bali Province</h4>
                            <p class="content">4 days 2 person</p>
                            <div class="tp-price-meta">
                                <h2>780 <small>$</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-destinations-list style-two wow animated fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
                        <div class="thumb">
                            <img src="/images/website/destination-list/6.png" alt="list">
                        </div>
                        <div class="details">
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Bangladesh</p>
                            <h4 class="title">Cox's bazar Sea Beach</h4>
                            <p class="content">4 days 4 person</p>
                            <div class="tp-price-meta">
                                <h2>850 <small>$</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-destinations-list style-two wow animated fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.4s">
                        <div class="thumb">
                            <img src="/images/website/destination-list/7.png" alt="list">
                        </div>
                        <div class="details">
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Spain</p>
                            <h4 class="title">Barcelona city beach</h4>
                            <p class="content">3 days 2 person</p>
                            <div class="tp-price-meta">
                                <h2>620 <small>$</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- holiday plan area end -->

    <!-- client review area start -->
    <div class="client-review-area client-review-area-home pd-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="thumb wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="client-review-thumb">
                            <img src="/images/website/others/client-review.png" alt="review">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-client-review wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <p class="sub-title">Travel Reviews</p>
                        <h3 class="location-name">Russia</h3>
                        <div class="tp-review-meta">
                            <i class="ic-yellow fa fa-star"></i>
                            <i class="ic-yellow fa fa-star"></i>
                            <i class="ic-yellow fa fa-star"></i>
                            <i class="ic-yellow fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>4.0</span>
                        </div>
                        <p>The largest country in the world, Russia offers a broad array of travel experiences, from treks up the slopes of glacier-capped mountains to strolls along the shoreline of Earth’s oldest lake. Historical sites and cultural activities in the country’s great cities abound as well. Whether you’re exploring the grounds of Moscow’s Kremlin or wandering through the steppes of Mongolia, a visit to Russia is an adventure not soon forgotten. These top tourists attractions in Russia can inspire a great Russian itinerary for a memorable trip.</p>
                        <div class="media">
                            <div class="media-left">
                                <img src="/images/website/client/1.png" alt="client">
                            </div>
                            <div class="media-body">
                                <h6>Jasmine Woodkin</h6>
                                <p>Tourist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client review area End -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-blog single-blog-wrap style-two">
                        <div class="thumb single-blog-left-wrap">
                            <img src="/images/website/blog/10.png" alt="blog">
                        </div>
                        <div class="single-blog-details single-blog-right-wrap">
                            <a class="tag" href="#">Europe</a>
                            <p class="date">19 September 2019</p>
                            <h4 class="title">Why You Shouldn’t Ride Elephants In France.</h4>
                            <p class="content">Kava contains 30 demos as for now, and we’re planning to release more! Except demos, Kava theme has more and more features for.. users, business, companies, developers, bloggers and other categories of users. Even if you are an absolute beginner</p>
                            <a class="btn btn-yellow" href="#"><span>Read More<i class="la la-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="/images/website/blog/11.png" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">
                                        <a class="tag" href="#">Europe</a>
                                        <p class="date">19 September 2019</p>
                                        <h4 class="title">Why You Shouldn’t Ride Elephants In Thailand</h4>
                                        <a class="btn btn-yellow" href="#"><span>Read More<i class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="/images/website/blog/12.png" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">
                                        <a class="tag" href="#">Europe</a>
                                        <p class="date">18 September 2019</p>
                                        <h4 class="title">10 Best Highways for Romantic Long Drive</h4>
                                        <a class="btn btn-yellow" href="#"><span>Read More<i class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="/images/website/blog/13.png" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">
                                        <a class="tag" href="#">Europe</a>
                                        <p class="date">18 September 2019</p>
                                        <h4 class="title">Rock Climbing Limestone Cliffs At Railay Beach</h4>
                                        <a class="btn btn-yellow" href="#"><span>Read More<i class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-blog style-three">
                                <div class="thumb">
                                    <img src="/images/website/blog/14.png" alt="blog">
                                </div>
                                <div class="single-blog-details-wrap">
                                    <div class="single-blog-details text-center">
                                        <a class="tag" href="#">Europe</a>
                                        <p class="date">19 September 2019</p>
                                        <h4 class="title">Magic In The Sky: Chasing Iceland’s Lights</h4>
                                        <a class="btn btn-yellow" href="#"><span>Read More<i class="la la-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area End -->

    <!-- ads area start -->
    <div class="ads-area pd-top-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <a class="ads-thumb" href="#">
                        <img src="/images/website/others/1.png" alt="ads">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ads area End -->

    <!-- newslatter area Start -->
    <div class="newslatter-area pd-top-120">
        <div class="container">
            <div class="newslatter-area-wrap border-tp-solid">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-5 offset-xl-2">
                        <div class="section-title mb-md-0">
                            <h2 class="title">Newsletter</h2>
                            <p>Sign up to receive the best offers</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 align-self-center offset-xl-1">
                        <div class="input-group newslatter-wrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <button class="btn btn-yellow" type="button">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newslatter area End -->



    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

@endsection