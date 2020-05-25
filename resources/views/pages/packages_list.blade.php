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
                            <li><a href="/">Home</a></li>
                            <li>Package List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <!-- tour list area End -->
    <div class="tour-list-area pd-top-50">
        <div class="container justify-content-center filters pd-bottom-50">
            Filters:
            <form method="get" action="/package/filter">
                <div class="row">
                    <div class="col-md-3">
                        <label class="single-input-wrap style-two">
                            <input type="number" name="min" value="{{request()->min}}" placeholder="Min Price">
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label class="single-input-wrap style-two">
                            <input type="number" name="max" value="{{request()->max}}" placeholder="Max Price">
                        </label>
                    </div>
                    <select class="col-md-3" style="height: 40px" name="season">
                        <option value=""></option>
                        <option value="winter">Winter</option>
                        <option value="summer">Summer</option>
                        <option value="fall">Fall</option>
                        <option value="spring">Spring</option>
                    </select>
                    <input type="hidden" name="paginate" value="9">
                    <button class="col-3 btn btn-yellow">
                        Search
                    </button>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @if(sizeof($packages) == 0)
                    <h1>No Data Found</h1>
                @endif
                @foreach($packages as $package)
                    <div class="col-lg-4">
                        <div class="single-destinations-list style-four">
                            @if(sizeof($package->medias) > 0)
                                <div class="blur-thumb" style="background-image:url({{$package->medias[0]->url}});"></div>
                            @else
                                <div class="blur-thumb" style="background-image:url(/images/website/destination-list/5.png);"></div>
                            @endif
                            <div class="details">
                                <h4 class="title"><a href="{{route('package_details', $package->id)}}">{{$package->title}}</a></h4>
                                <p class="content">{{$package->description}}</p>
                                <div class="list-price-meta">
                                    <ul class="tp-list-meta d-inline-block">
                                        <li><i class="fa fa-calendar-o"></i>{{date('t F Y', strtotime($package->date))}}</li>
                                        <li><i class="fa fa-clock-o"></i> {{$package->days}} Days / {{$package->nights}} Nights</li>
                                        <li><i class="fa fa-snowflake-o"></i> {{$package->season}}</li>
                                        <li><i class="fa fa-star"></i>{{number_format($package->rate, 1)}}</li>
                                    </ul>
                                    <div class="tp-price-meta d-inline-block">
                                        <p>Price</p>
                                        <h2>{{$package->price}} {{$package->currency}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12  text-md-center text-left">
                    <div class="tp-pagination text-md-center text-left d-inline-block mt-4">
                        {{ $packages->links() }}
                    </div>
                </div>
                <br><br>
                <br><br>
            </div>
        </div>
    </div>
    <!-- tour list area End -->
@endsection
