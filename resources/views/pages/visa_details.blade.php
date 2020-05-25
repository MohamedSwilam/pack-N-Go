@extends('layouts.website')

@section('title') Visa Details |   @endsection

@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area style-two jarallax" style="background-image:url(/images/website/bg/1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Visa Details</h1>
                        <ul class="page-list">
                            <li><a href="/">Home</a></li>
                            <li>Visa Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <!-- tour details area End -->
    <div class="tour-details-area mg-top--70">
        <div class="tour-details-gallery">
            <div class="container-bg bg-dark-blue">
                <div class="container pl-5">
                    <div class="row">
                        <div class="col-xs-9">
                            <div class="details">
                                <h4 class="title">Required Documents to get {{$visa->country_name}} Visa</h4>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="book-list-warp">
                                <p class="book-list-content">Price: {{$visa->price}}{{$visa->currency}}</p><br>
                                <p class="book-list-content">Extraction Time: {{$visa->extraction_time}}</p><br>
                                <p class="book-list-content">Visit Time: {{$visa->visit_time}}</p><br>
                                <p class="book-list-content">Expires in: {{$visa->expiry}}</p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tour-details-wrap">
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-lg-6 col-md-6">
                                <h4 class="single-page-small-title">Required Documents</h4>
                                @foreach($visa->documents as $document)
                                    <p>
                                        <i style="display: table-cell;color: #40a0d0;" class="fa fa-check"></i>
                                        <span style="display: table-cell;">{{$document->description}}</span>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sidebar-area sidebar-area-4">
                        <div class="widget tour-list-widget">
                            <h3>Extraction Form</h3>
                            <div class="widget-tour-list-meta">
                                <form action="/visa-demand" method="post">
                                    {{csrf_field()}}
                                    <div class="single-widget-search-input-title"><i class="fa fa-user"></i> Name <span style="color: red">*</span></div>
                                    <div class="single-widget-search-input">
                                        <input type="text" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="single-widget-search-input-title"><i class="fa fa-envelope"></i> Email  <span style="color: red">*</span></div>
                                    <div class="single-widget-search-input">
                                        <input type="email" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="single-widget-search-input-title"><i class="fa fa-phone"></i> Phone  <span style="color: red">*</span></div>
                                    <div class="single-widget-search-input">
                                        <input type="text" placeholder="Phone" name="phone" required>
                                    </div>
                                    <div class="single-widget-search-input-title"><i class="fa fa-phone"></i> Comments</div>
                                    <div class="single-widget-search-input">
                                        <textarea name="description" placeholder="Comments" required></textarea>                                    </div>
                                    <input type="hidden" name="visa_id" value="{{$visa->id}}">
                                    <button class="text-lg-center text-left btn btn-yellow">
                                       Send <i class="fa fa-paper-plane"></i>
                                    </button>
                                    <div class="row">
                                        @foreach($errors->all() as $error)
                                            <div class="col-md-12" style="color: red;">
                                                *{{$error}}<br>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tour details area End -->
    <style>


        /*
        =====
        DEMO
        =====
        */

        @media (min-width: 768px){

            html{
                font-size: 62.5%;
            }
        }

        @media (max-width: 767px){

            html{
                font-size: 55%;
            }
        }

        body{
            font-size: 1.6rem;
            color: #222;

            background-color: #f0f0f0;
            margin: 0;
            -webkit-overflow-scrolling: touch;
            overflow-y: scroll;

            display: flex;
            flex-direction: column;
        }

        p{
            margin-top: 0;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        p:last-child{
            margin-bottom: 0;
        }

        .timeline {
            list-style: none;
            margin: 25px 0 22px 50px;
            padding: 0;
            position: relative;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .timeline:after {
            border: 6px solid;
            border-top-width: 13px;
            border-color: #40a0d0 transparent transparent transparent;
            content: "";
            display: block;
            position: absolute;
            bottom: -19px;
            left: 15px;
        }

        .timeline-horizontal:after {
            border-top-width: 6px;
            border-left-width: 13px;
            border-color: transparent transparent transparent #40a0d0;
            top: 15px;
            right: 0;
            bottom: auto;
            left: auto;
        }
        .timeline-horizontal .timeline-milestone {
            border-top: 2px solid #40a0d0;
            display: inline;
            float: left;
            margin: 20px 0 0 0;
            padding: 40px 0 0 0;
        }
        .timeline-horizontal .timeline-milestone:before {
            top: -17px;
            left: auto;
        }
        .timeline-horizontal .timeline-milestone.is-completed:after {
            top: -17px;
            left: 0;
        }

        .timeline-milestone {
            border-left: 2px solid #40a0d0;
            margin: 0 0 0 20px;
            padding: 0 0 5px 25px;
            position: relative;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .timeline-milestone:before {
            border: 7px solid #40a0d0;
            border-radius: 50%;
            content: "";
            display: block;
            position: absolute;
            left: -17px;
            width: 32px;
            height: 32px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .timeline-milestone.is-completed:before {
            background-color: #40a0d0;
        }
        .timeline-milestone.is-completed:after {
            color: #FFF;
            content: "\f00c";
            display: block;
            font-family: "FontAwesome";
            line-height: 32px;
            position: absolute;
            top: 0;
            left: -17px;
            text-align: center;
            width: 32px;
            height: 32px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .timeline-milestone.is-current:before {
            background-color: #EEE;
        }
        .timeline-milestone.is-future:before {
            background-color: #8DACB8;
            border: 0;
        }
        .timeline-milestone.is-future .timeline-action .title {
            color: #8DACB8;
        }

        .timeline-action {
            background-color: #FFF;
            padding: 12px 10px 12px 20px;
            position: relative;
            top: -15px;
        }
        .timeline-action.is-expandable .title {
            cursor: pointer;
            position: relative;
        }
        .timeline-action.is-expandable .title:focus {
            outline: 0;
            text-decoration: underline;
        }
        .timeline-action.is-expandable .title:after {
            border: 6px solid #666;
            border-color: transparent transparent transparent #666;
            content: "";
            display: block;
            position: absolute;
            top: 6px;
            right: 0;
        }
        .timeline-action.is-expandable .content {
            display: none;
        }
        .timeline-action.is-expandable.is-expanded .title:after {
            border-color: #666 transparent transparent transparent;
            top: 10px;
            right: 5px;
        }
        .timeline-action.is-expandable.is-expanded .content {
            display: block;
        }
        .timeline-action .title, .timeline-action .content {
            word-wrap: break-word;
        }
        .timeline-action .title {
            color: #40a0d0;
            font-size: 18px;
            margin: 0;
        }
        .timeline-action .date {
            display: block;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .timeline-action .content {
            font-size: 14px;
        }

        #title{
            position: absolute;
            left: -85px;
            font-size: 25px;
        }

        .file-list {
            line-height: 1.4;
            list-style: none;
            padding-left: 10px;
        }

        body {
            background-color: #EEE;
            font-family: Helvetica, Arial, Verdana, sans-serif;
        }

        h1, h2, h3{
            font-family: var(--body-font);
        }

        .page {
            max-width: 1200px;
            margin: 40px 30px;
        }

        a {
            color: #40a0d0;
            text-decoration: none;
        }
        a:hover, a:focus {
            text-decoration: underline;
        }

        .video-link:before {
            content: "\f03d";
            display: inline-block;
            font-family: "FontAwesome";
            margin-right: 5px;
        }

        a[href*=".pdf"]:before {
            content: "\f0f6";
            display: inline-block;
            font-family: "FontAwesome";
            margin-right: 8px;
        }


    </style>
@endsection
