@extends('layouts.website')

@section('title') Create Package |   @endsection

@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area jarallax" style="background-image:url(/images/website/bg/1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Create Package</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Create Package</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <!-- blog area start -->
    <div class="blog-details-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- blog-comment-area start -->
                    <div class="blog-comment-area">
                        <form class="tp-form-wrap bg-gray tp-form-wrap-one">
                            <h3>Personal Information</h3>
                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-user"></i> Name</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-envelope"></i> Email</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-phone"></i> Telephone</span>
                                        <input type="text">
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <br>

                            <h3>Preferences</h3>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-widget-search-input-title"><i class="fa fa-calendar-minus-o"></i> Travel Date</div>
                                    <div class="single-widget-search-input">
                                        <input type="text" class="returning-date custom-select" placeholder="Travel Date">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-adjust"></i> Flexibility</span>
                                        <input type="number">
                                    </label>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-male"></i> Adults (+12 Years)</span>
                                        <input type="number">
                                    </label>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-child"></i> Children (2-12 Years)</span>
                                        <input type="number">
                                    </label>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-child"></i> Infants (0-2 Years)</span>
                                        <input type="number">
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap">
                                        <span class="single-input-title"><i class="fa fa-money"></i> Budget</span>
                                        <input type="text">
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap style-two">
                                        <span class="single-input-title"><i class="fa fa-bed"></i> Room Type</span>
                                        <select class="nice-select custom-select">
                                            <option>Single</option>
                                            <option>Double</option>
                                            <option>Triple</option>
                                            <option>Quadruple</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap style-two">
                                        <span class="single-input-title"><i class="fa fa-star"></i> Hotel Rating</span>
                                        <select class="nice-select custom-select">
                                            <option>Any</option>
                                            <option>1 Star</option>
                                            <option>2 Star</option>
                                            <option>3 Star</option>
                                            <option>4 Star</option>
                                            <option>5 Star</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="single-input-wrap style-two">
                                        <span class="single-input-title"><i class="fa fa-map-marker"></i> Hotel Location</span>
                                        <select class="nice-select custom-select">
                                            <option>City Center</option>
                                            <option>Beach</option>
                                            <option>Airport</option>
                                        </select>
                                    </label>
                                </div>

                                <div class="col-12">
                                    <a class="btn btn-yellow" href="#">Build Package</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-comment-area start -->
@endsection
