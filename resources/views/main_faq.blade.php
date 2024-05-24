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
                    <h1 class="page-title">FAQ</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>FAQ - frequently asked questions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start small message Area -->
<section id="" class="speakers section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">FAQ</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">We are the TEDx Jumeirah Beach Park team, bringing together inspiring ideas in UAE.</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Find the answers for the most frequently asked questions below.</p>
                </div>
                <section>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
                                question?</h6>
                            <p>
                                <strong><u>Absolutely!</u></strong> We work with top payment companies which guarantees
                                your
                                safety and
                                security. All billing information is stored on our payment processing partner.
                            </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> A question
                                that
                                is longer then the previous one?</h6>
                            <p>
                                <strong><u>Yes, it is possible!</u></strong> You can cancel your subscription anytime in
                                your
                                account. Once the subscription is
                                cancelled, you will not be charged next month.
                            </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> A simple
                                question?
                            </h6>
                            <p>
                                Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
                                account at any time with no further obligation.
                            </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> A simple
                                question?
                            </h6>
                            <p>
                                Yes. Go to the billing section of your dashboard and update your payment information.
                            </p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> A simple
                                question?
                            </h6>
                            <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
                                reason.</p>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Another
                                question that is longer than usual</h6>
                            <p>
                                Of course! We’re happy to offer a free plan to anyone who wants to try our service.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- /End FAQ Area -->


<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection