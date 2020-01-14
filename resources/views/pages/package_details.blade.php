@extends('layouts.website')

@section('title') Package Details |   @endsection

@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area style-two jarallax" style="background-image:url(/images/website/bg/1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Package Details</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Package Details</li>
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
                <div class="container">
                    <div class="gallery-filter-area row">
                        <div class="gallery-sizer col-1"></div>
                        <!-- gallery-item -->
                        @if(sizeof($package->medias))
                            <div class="tp-gallery-item col-md-3 col-sm-6">
                                <div class="tp-gallery-item-img">
                                    <a href="#" data-effect="mfp-zoom-in">
                                        <img src="{{$package->medias[0]->url}}" alt="image">
                                    </a>
                                </div>
                            </div>
                        @endif
                        @foreach($package->medias as $index => $media)
                            @if($index != 0)
                                <div class="tp-gallery-item col-lg-2 col-md-4 col-sm-6">
                                    <div class="tp-gallery-item-img">
                                        <a href="#" data-effect="mfp-zoom-in">
                                            <img src="{{$media->url}}" alt="image">
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="details">
                                <h4 class="title">{{$package->title}}</h4>
                                <p class="content">{{$package->days}} Days / {{$package->nights}} Nights</p>
                                <div class="tp-review-meta">
                                    @for($i = 0; $i<$package->rate; $i++)
                                        <i class="ic-yellow fa fa-star"></i>
                                    @endfor
                                    @for($i = 0; $i<5-$package->rate; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    <span>{{$package->rate}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="book-list-warp">
                                <p class="book-list-content">Just booked! Get your spot before it's too late.</p>
                                <div class="tp-price-meta">
                                    <p>Price</p>
                                    <h2>{{$package->price}} {{$package->currency}}</h2>
                                </div>
                            </div>
                            <ul class="tp-list-meta border-tp-solid">
                                <li class="ml-0"><i class="fa fa-calendar-o"></i>{{date('t F Y', strtotime($package->date))}}</li>
                                <li><i class="fa fa-clock-o"></i> {{$package->days}} Days / {{$package->nights}} Nights</li>
                                <li><i class="fa fa-snowflake-o"></i> {{$package->season}}</li>
                                <li><i class="fa fa-star"></i>{{number_format($package->rate, 1)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 45px;">
            <div class="row">
                <h4 class="single-page-small-title">Accommodation</h4>
                <table>
                    <thead style="background-color: #0c112e;color: white;padding: 5px;">
                    <tr style="text-align: center;line-height: 17px;padding: 5px;">
                        <th style="width: 10%;padding: 15px;">City</th>
                        <th style="width: 5%;padding: 15px;">Nights</th>
                        <th style="width: 10%;padding: 15px;">Hotels / Standard</th>
                        <th style="width: 10%;padding: 15px;">Rate</th>
                        <th style="width: 15%;padding: 15px;">Per Person in Double inside Cabin</th>
                        <th style="width: 15%;padding: 15px;">Per Person in Single inside Cabin</th>
                        <th style="width: 15%;padding: 15px;">Per Person in Double balcony Cabin</th>
                        <th style="width: 15%;padding: 15px;">Per Person in Single balcony Cabin</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($package->accommodations as $accommodation)
                        <tr style="text-align: center;border-bottom: 1px solid #0c112e;">
                            <td style="padding: 15px;">{{$accommodation->city}}</td>
                            <td style="padding: 15px;">{{$accommodation->nights}}</td>
                            <td style="padding: 15px;">{{$accommodation->hotel}}</td>
                            <td style="padding: 15px;">
                                @for($i = 0; $i<$accommodation->rate; $i++)
                                    <i class="ic-yellow fa fa-star"></i>
                                @endfor
                                @for($i = 0; $i<5-$accommodation->rate; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor</td>
                            <td style="padding: 15px;">{{$accommodation->dbl}}</td>
                            <td style="padding: 15px;">{{$accommodation->sgl}}</td>
                            <td style="padding: 15px;">{{$accommodation->dbl_balcony}}</td>
                            <td style="padding: 15px;">{{$accommodation->sgl_balcony}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-details-wrap">
                        <h4 class="single-page-small-title">Description</h4>
                        <p>{{$package->description}}</p>
                        <hr>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-lg-6 col-md-6">
                                <h4 class="single-page-small-title">Inclusions</h4>
                                @foreach($package->inclusions as $inclusion)
                                    <p>
                                        <i style="display: table-cell;color: #071c55;" class="fa fa-check"></i>
                                        <span style="display: table-cell;">{{$inclusion->name}}</span>
                                    </p>
                                @endforeach
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <h4 class="single-page-small-title">Exclusions</h4>

                                @foreach($package->exclusions as $exclusion)
                                    <p>
                                        <i style="display: table-cell;color: #071c55;" class="fa fa-check"></i>
                                        <span style="display: table-cell;">{{$exclusion->name}}</span>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                        <div class="package-included-location">
                            <h4 class="single-page-small-title">Your Itinerary</h4>
                            <div class="row">
                                <div class="timeline">
                                    <div class="timeline__group">
                                        @foreach($package->schedules as $schedule)
                                        <div class="timeline__box">
                                            <div class="timeline__date">
                                                <span class="timeline__month">Day {{$schedule->day}}</span>
                                            </div>
                                            <div class="timeline__post">
                                                <div class="timeline__content">
                                                    <p>{{$schedule->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area sidebar-area-4">
                        <div class="widget tour-list-widget">
                            <div class="widget-tour-list-meta">
                                <form action="/booking" method="post">
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
                                    <div class="single-widget-search-input-title">#Adults <span style="color: red">*</span></div>
                                    <div class="single-widget-search-input">
                                        <input type="number" placeholder="Adults" name="adults" required>
                                    </div>
                                    <div class="single-widget-search-input-title">#Children  <span style="color: red">*</span></div>
                                    <div class="single-widget-search-input">
                                        <input type="number" placeholder="Children" name="children" required>
                                    </div>
                                    <div class="single-widget-search-input-title">#Infants  <span style="color: red">*</span></div>
                                    <div class="single-widget-search-input">
                                        <input type="number" placeholder="Infants" name="infants" required>
                                    </div>
                                    <input type="hidden" name="package_id" value="{{$package->id}}">
                                    <button class="text-lg-center text-left btn btn-yellow">
                                       Book Now <i class="fa fa-paper-plane"></i>
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

        .timeline{
            --uiTimelineMainColor: var(--timelineMainColor, #071c55);
            --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

            position: relative;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .timeline:before{
            content: "";
            width: 4px;
            height: 100%;
            background-color: var(--uiTimelineMainColor);

            position: absolute;
            top: 0;
        }

        .timeline__group{
            position: relative;
        }

        .timeline__group:not(:first-of-type){
            margin-top: 4rem;
        }

        .timeline__year{
            padding: .5rem 1.5rem;
            color: var(--uiTimelineSecondaryColor);
            background-color: var(--uiTimelineMainColor);

            position: absolute;
            left: 0;
            top: 0;
        }

        .timeline__box{
            position: relative;
        }

        .timeline__box:not(:last-of-type){
            margin-bottom: 30px;
        }

        .timeline__box:before{
            content: "";
            width: 100%;
            height: 2px;
            background-color: var(--uiTimelineMainColor);

            position: absolute;
            left: 0;
            z-index: -1;
        }

        .timeline__date{
            min-width: 65px;
            position: absolute;
            left: 0;

            box-sizing: border-box;
            padding: .5rem 1.5rem;
            text-align: center;

            background-color: var(--uiTimelineMainColor);
            color: var(--uiTimelineSecondaryColor);
        }

        .timeline__day{
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }

        .timeline__month{
            display: block;
            font-size: .8em;
            text-transform: uppercase;
        }

        .timeline__post{
            padding: 1.5rem 2rem;
            border-radius: 2px;
            border-left: 3px solid var(--uiTimelineMainColor);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
            background-color: var(--uiTimelineSecondaryColor);
        }

        @media screen and (min-width: 641px){

            .timeline:before{
                left: 30px;
            }

            .timeline__group{
                padding-top: 55px;
            }

            .timeline__box{
                padding-left: 80px;
            }

            .timeline__box:before{
                top: 50%;
                transform: translateY(-50%);
            }

            .timeline__date{
                top: 50%;
                margin-top: -27px;
            }
        }

        @media screen and (max-width: 640px){

            .timeline:before{
                left: 0;
            }

            .timeline__group{
                padding-top: 40px;
            }

            .timeline__box{
                padding-left: 20px;
                padding-top: 70px;
            }

            .timeline__box:before{
                top: 90px;
            }

            .timeline__date{
                top: 0;
            }
        }

        .timeline{
            --timelineMainColor: #071c55;
            font-size: 16px;
        }

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
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
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
    </style>
@endsection
