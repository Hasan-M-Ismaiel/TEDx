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
                    <h1 class="page-title">About Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Speakers Area -->
<section id="speakers" class="speakers section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Who we are?</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">We are the TEDx Jumeirah Beach Park team, bringing together inspiring ideas in UAE.</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Passionate about sparking conversation. Welcome! We're your TEDx Jumeirah Beach Park hosts, here to ignite your curiosity.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Speakers Area -->


<!-- Start about Area -->
@include('includes.aboutEvent')
<!-- /End about Area -->

<!-- Start members Table Area -->
@include('includes.members')
<!--/ End Pricing Table Area -->


<!-- Start Features Area -->
@include('includes.features_area')
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection