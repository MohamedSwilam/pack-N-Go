@extends('layouts.website')

@section('title') Package List |   @endsection

@section('content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area jarallax" style="background-image:url(/images/website/bg/1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Package List</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Package List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <!-- tour list area End -->
    <div class="tour-list-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-destinations-list style-four">
                        <div class="blur-thumb" style="background-image:url(/images/website/destination-list/16.png);"></div>
                        <div class="details">
                            <div class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Dubai</p>
                            <h4 class="title"><a href="{{route('package_details', 1)}}">Dubai City</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <div class="list-price-meta">
                                <ul class="tp-list-meta d-inline-block">
                                    <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                    <li><i class="fa fa-clock-o"></i> 4 days</li>
                                    <li><i class="fa fa-star"></i> 4.3</li>
                                </ul>
                                <div class="tp-price-meta d-inline-block">
                                    <p>Price</p>
                                    <h2>620 <span>$</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-destinations-list style-four">
                        <div class="blur-thumb" style="background-image:url(/images/website/destination-list/11.png);"></div>
                        <div class="details">
                            <div class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">France</p>
                            <h4 class="title"><a href="{{route('package_details',1)}}">Eiffel Tower</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <div class="list-price-meta">
                                <ul class="tp-list-meta d-inline-block">
                                    <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                    <li><i class="fa fa-clock-o"></i> 4 days</li>
                                    <li><i class="fa fa-star"></i> 4.3</li>
                                </ul>
                                <div class="tp-price-meta d-inline-block">
                                    <p>Price</p>
                                    <h2>620 <span>$</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-destinations-list style-four">
                        <div class="blur-thumb" style="background-image:url(/images/website/destination-list/12.png);"></div>
                        <div class="details">
                            <div class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Italy</p>
                            <h4 class="title"><a href="{{route('package_details',1)}}">Colosseum, Rome</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <div class="list-price-meta">
                                <ul class="tp-list-meta d-inline-block">
                                    <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                    <li><i class="fa fa-clock-o"></i> 4 days</li>
                                    <li><i class="fa fa-star"></i> 4.3</li>
                                </ul>
                                <div class="tp-price-meta d-inline-block">
                                    <p>Price</p>
                                    <h2>620 <span>$</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-destinations-list style-four">
                        <div class="blur-thumb" style="background-image:url(/images/website/destination-list/5.png);"></div>
                        <div class="details">
                            <div class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Indonesia</p>
                            <h4 class="title"><a href="{{route('package_details',1)}}">Bali Province</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <div class="list-price-meta">
                                <ul class="tp-list-meta d-inline-block">
                                    <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                    <li><i class="fa fa-clock-o"></i> 4 days</li>
                                    <li><i class="fa fa-star"></i> 4.3</li>
                                </ul>
                                <div class="tp-price-meta d-inline-block">
                                    <p>Price</p>
                                    <h2>620 <span>$</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-destinations-list style-four">
                        <div class="blur-thumb" style="background-image:url(/images/website/destination-list/7.png);"></div>
                        <div class="details">
                            <div class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Spain</p>
                            <h4 class="title"><a href="{{route('package_details',1)}}">Barcelona city beach</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <div class="list-price-meta">
                                <ul class="tp-list-meta d-inline-block">
                                    <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                    <li><i class="fa fa-clock-o"></i> 4 days</li>
                                    <li><i class="fa fa-star"></i> 4.3</li>
                                </ul>
                                <div class="tp-price-meta d-inline-block">
                                    <p>Price</p>
                                    <h2>620 <span>$</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-destinations-list style-four">
                        <div class="blur-thumb" style="background-image:url(/images/website/destination-list/9.png);"></div>
                        <div class="details">
                            <div class="tp-review-meta">
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="ic-yellow fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <p class="location"><img src="/images/website/icons/1.png" alt="map">Maldives</p>
                            <h4 class="title"><a href="{{route('package_details',1)}}">Hurawalhi Island</a></h4>
                            <p class="content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                            <div class="list-price-meta">
                                <ul class="tp-list-meta d-inline-block">
                                    <li><i class="fa fa-calendar-o"></i> 8oct</li>
                                    <li><i class="fa fa-clock-o"></i> 4 days</li>
                                    <li><i class="fa fa-star"></i> 4.3</li>
                                </ul>
                                <div class="tp-price-meta d-inline-block">
                                    <p>Price</p>
                                    <h2>620 <span>$</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-md-center text-left">
                    <div class="tp-pagination text-md-center text-left d-inline-block mt-4">
                        <ul>
                            <li><a class="prev page-numbers" href="#"><i class="la la-long-arrow-left"></i></a></li>
                            <li><span class="page-numbers">1</span></li>
                            <li><span class="page-numbers current">2</span></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#">4</a></li>
                            <li><a class="next page-numbers" href="#"><i class="la la-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tour list area End -->
@endsection
