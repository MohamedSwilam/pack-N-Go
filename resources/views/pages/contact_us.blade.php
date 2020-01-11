@extends('layouts.website')

@section('title') Contact Us |   @endsection

@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area jarallax" style="background-image:url(/images/website/bg/1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title">Contact Us</h1>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area End -->

    <!-- contact area End -->
    <div class="contact-area pd-top-108">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-lg-center text-left">
                        <h2 class="title">Get In Touch!</h2>
                        <p>Vestibulum blandit viverra convallis. Pellentesque ligula urna, fermentum ut semper in, tincidunt nec dui. Morbi mauris lacus, consequat eget justo in</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="thumb">
                        <img src="/images/website/others/11.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form class="tp-form-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="single-input-wrap style-two">
                                    <span class="single-input-title">Name</span>
                                    <input type="text">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="single-input-wrap style-two">
                                    <span class="single-input-title">Number</span>
                                    <input type="text">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label class="single-input-wrap style-two">
                                    <span class="single-input-title">Email</span>
                                    <input type="text">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label class="single-input-wrap style-two">
                                    <span class="single-input-title">Message</span>
                                    <textarea></textarea>
                                </label>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-yellow" href="#">Send Message</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area End -->

    <!-- contact info area End -->
    <div class="contact-info-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 order-lg-12">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55137.3051325513!2d-97.76825118838518!3d30.263256963734733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b599a0cc032f%3A0x5d9b464bd469d57a!2sAustin%2C%20TX%2C%20USA!5e0!3m2!1sen!2sbd!4v1572085289886!5m2!1sen!2sbd"></iframe>
                </div>
                <div class="col-xl-3 col-lg-4 order-lg-1">
                    <div class="contact-info bg-gray">
                        <p>
                            <i class="fa fa-map-marker"></i>
                            <span>Lavaca Street, Suite 2000 Austin, TX 24141</span>
                        </p>
                        <p>
                            <i class="fa fa-clock-o"></i>
                            <span>Office Hour 9:00 to 7:00 Sunday 10:00 to 5:00</span>
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <span>Email: <span>Travelpoint@gmail.com</span></span>
                        </p>
                        <p>
                            <i class="fa fa-phone"></i>
                            <span>
                                    sell phone: <span>(+88) 0172 570051</span> <br>
                                    telephone: <span>(+88) 07 528 7584</span>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area End -->
@endsection
