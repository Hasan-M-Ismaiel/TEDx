@extends('layouts.app_main')

@section('content')

<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->


<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Sponsors & opinions about us </h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Sponors</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Start Sponsors Area -->
<section class="sponsors section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Sponsors</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Offcial Sponsors</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">A huge thank you to our sponsors for their generous support in making TEDx JumierahBeachPark possible.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <!-- Start Single Sponsor -->
                <a href="javascript:void(0)" class="single-sponsor">
                    <img src="{{ asset('assets_main/assets/images/sponsors/sponsor1.svg') }}" alt="#">
                </a>
                <!-- End Single Sponsor -->
                <!-- Start Single Sponsor -->
                <a href="javascript:void(0)" class="single-sponsor">
                    <img src="{{ asset('assets_main/assets/images/sponsors/sponsor1.svg') }}" alt="#">
                </a>
                <!-- End Single Sponsor -->
                <!-- Start Single Sponsor -->
                <a href="javascript:void(0)" class="single-sponsor">
                    <img src="{{ asset('assets_main/assets/images/sponsors/sponsor1.svg') }}" alt="#">
                </a>
                <!-- End Single Sponsor -->
                <!-- Start Single Sponsor -->
                <a href="javascript:void(0)" class="single-sponsor">
                    <img src="{{ asset('assets_main/assets/images/sponsors/sponsor1.svg') }}" alt="#">
                </a>
                <!-- End Single Sponsor -->
                <!-- Start Single Sponsor -->
                <a href="javascript:void(0)" class="single-sponsor">
                    <img src="{{ asset('assets_main/assets/images/sponsors/sponsor1.svg') }}" alt="#">
                </a>
                <!-- End Single Sponsor -->
            </div>
        </div>
    </div>
</section>
<!-- End Sponsors Area -->

<!-- Start Testimonials Section -->
<section id="testimonials" class="section testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Testimonials</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">What people says about us</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Here, you'll hear the buzz about TEDx JumierahBeachPark! We're passionate about creating a space for inspiring ideas and sparking conversation, and it seems our attendees, speakers, and volunteers feel the same way.</p>
                </div>
            </div>
        </div>
        <div class="slider-head">
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            <h3>
                                Aaron Almaraz
                                <span>CEO & Founder at Gearat</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            <h3>
                                Marleah Eagleston
                                <span>Founder at Spicenet</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            <h3>
                                Phet Putrie
                                <span>Freelancer</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            <h3>
                                Prescott MacCaffery
                                <span>Writer</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            <h3>
                                Lara Madrigal
                                <span>Marketing Specialist</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <div class="top-section">
                            <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            <h3>
                                Waiapi Karaka
                                <span>Designer, Freelancer</span>
                            </h3>
                            <ul class="rating">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                        <p>Time is the most precious thing you have when bootstrapping. You can't take time to
                            ponder on
                            design…</p>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Testimonials Section -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection