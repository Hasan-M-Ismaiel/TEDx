@extends('layouts.app_main')

@section('content')

<!--[if lte IE 9]>
    <p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
    </p>
<![endif]-->

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="main__circle"></div>
    <div class="main__circle2"></div>
    <div class="main__circle3"></div>
    <div class="main__circle4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="hero-content">
                    <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Dubai,
                        UAE</h5>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">The largest Talk conference in UAE 2024</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">It is located on Jumeirah Road, Jumeirah, Dubai.
                    </p>
                    <div class="button wow fadeInUp" data-wow-delay=".8s">
                        <a href="pricing.html" class="btn ">Buy Ticket Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Count Down Area -->
<div class="count-down">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-head">
                    <div class="box-content">
                        <div class="box">
                            <h1 id="days">000</h1>
                            <h2 id="daystxt">Days</h2>
                        </div>
                        <div class="box">
                            <h1 id="hours">00</h1>
                            <h2 id="hourstxt">Hours</h2>
                        </div>
                        <div class="box">
                            <h1 id="minutes">00</h1>
                            <h2 id="minutestxt">Minutes</h2>
                        </div>
                        <div class="box">
                            <h1 id="seconds">00</h1>
                            <h2 id="secondstxt">Secondes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Count Down Area -->

<!-- Start Features Area -->
@include('includes.features_area')
<!-- /End Features Area -->

<!-- Start about Area -->
@include('includes.aboutEvent')
<!-- /End about Area -->

<!-- Start Speakers Area -->
<section id="speakers" class="speakers section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Speakers</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Todays Performers</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Each speaker brings a unique perspective and a passion for sparking change.  Get ready to be challenged, motivated, and leave TEDxJumeirah feeling empowered to make a difference.</p>
                </div>
            </div>
        </div>
        <div class="all-speakers">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker1.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Fredric Martinsson</a></h3>
                            <span>Founder, Edilta</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker2.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Melisa Lundryn</a></h3>
                            <span>Lead Designer</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker3.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Andrio Limuya</a></h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker4.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Agaton Johnsson</a></h3>
                            <span>Expert Developer</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker5.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Rebecca Henrikon</a></h3>
                            <span>Founder, Cards</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker6.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Lundryn Melisa</a></h3>
                            <span>Graphics Designer</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker7.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Julia Milon</a></h3>
                            <span>Ui/Ux Designer</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Speaker -->
                    <div class="single-speaker">
                        <div class="top-content">
                            <div class="image">
                                <img src="{{ asset('assets_main/assets/images/speakers/speaker8.png') }}" alt="#">
                            </div>
                            <ul class="social">
                                <li class="facebook"><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="twitter"><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="linkedin"><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li class="instagram"><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="name">
                            <h3><a href="javascript:void(0)">Digolia Sujiyan</a></h3>
                            <span>Founder, Edilta</span>
                        </div>
                    </div>
                    <!-- End Single Speaker -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Speakers Area -->

<!-- Start Sponsors Area -->
<section class="sponsors section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Sponsors</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Offcial Sponsors</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
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

<!-- Start members Table Area -->
@include('includes.members')
<!--/ End Pricing Table Area -->

<!-- Start Testimonials Section -->
<section id="testimonials" class="section testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Testimonials</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">What people says about us</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
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
<section class="call-action overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="inner-content">
                    <div class="text">
                        <h5 class="wow zoomIn" data-wow-delay=".2s">tell me more about tedx</h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">What is TEDx?
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDx[name], where x = independently organized TED event. At our TEDx[name] event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.</p>
                    </div>
                    <div class="button wow fadeInUp" data-wow-delay=".8s">
                        <a href="https://www.ted.com/about/programs-initiatives/tedx-program" target="_blank" class="btn">TEDx program</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

<!--countdown timer-->
<script>

    var eventDate="{{ $event->date }}" ;
    // Set the date we're counting down to
    var countDownDate = new Date(eventDate).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days; 
        document.getElementById("hours").innerHTML = hours; 
        document.getElementById("minutes").innerHTML = minutes; 
        document.getElementById("seconds").innerHTML = seconds; 

        // If the count down is finished, write some text
        // if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        // }
    }, 1000);

</script>

@endsection