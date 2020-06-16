@extends('layouts.website')

@section('title') Visa |   @endsection

@section('content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area jarallax" style="background-image:url(/images/website/bg/1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Visa List</h1>
                        <ul class="page-list">
                            <li><a href="/">Home</a></li>
                            <li>Visa List</li>
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
            <div class="row justify-content-center">
                @foreach($visas as $visa)
                    <div class="col-lg-2" style="border-radius: 5px;margin: 10px;padding: 10px;background: #F5F5F5;">
                        <div>
                            <div class="single-destinations-list style-four" style="min-height: 200px !important;">
                                @if($visa->image)
                                    <div class="blur-thumb" style="background-image:url({{$visa->image->url}});"></div>
                                @else
                                    <div class="blur-thumb" style="background-image:url(/images/website/destination-list/5.png);"></div>
                                @endif
                                <div class="details">
                                    <h4 class="title">{{$visa->country_name}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="details" style="text-align: center;">
                            <a class="btn btn-yellow" href="{{route('visa_details', $visa->id)}}">View Details</a>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-12  text-md-center text-left">
                    <div class="tp-pagination text-md-center text-left d-inline-block mt-4">
                        {{ $visas->links() }}
                    </div>
                </div>
                <br><br>
                <br><br>
            </div>
        </div>
    </div>
    <!-- tour list area End -->
@endsection
