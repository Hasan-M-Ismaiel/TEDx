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
                    <h1 class="page-title">We Glade to join us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>As Volunteer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Features Area -->
<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Why join us?</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Your skills can make TEDx shine.</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Make a difference & Be the <u>spark</u> behind the stage.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row mx-0 justify-content-center">
                    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
                        <!-- Validation Errors -->
                        @if ($errors->any())
                        <div class="mb-4 mt-4">
                            <span class="pt-2 pb-2 pr-3 font-medium text-danger border border-danger border-rounded rounded">
                                <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' Something went wrong.') }}
                            </span>

                            <ul class="mt-3 list-group list-group-flush text-danger">
                                @foreach ($errors->all() as $error)
                                <li class="list-group-item text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeVolunteer") }}' method="POST">
                            @csrf
                            <!--first name-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">First Name</span>
                                <input name="first_name" type="text" class="form-control" placeholder="f-name" value="{{ old('first_name') }}" />
                            </label>

                            <!--last name-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Last Name</span>
                                <input name="last_name" type="text" class="form-control" placeholder="l-name" value="{{ old('last_name') }}" />
                            </label>

                            <!--email-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Email address</span>
                                <input name="email" type="email" class="form-control" placeholder="me@example.com" value="{{ old('email') }}" />
                            </label>

                            <!--phone-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">phone number</span>
                                <input name="phone_number" type="text" class="form-control" placeholder="+971-5555555" value="{{ old('phone_number') }}" />
                            </label>

                            <!--age-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">your age?</span>
                                <select class="form-select form-select mb-3" name="age" aria-label=".form-select-lg example">
                                    @for ($i = 18; $i <= 60; $i++) <option value="{{$i}}">{{ $i }}</option>
                                        @endfor
                                </select>
                            </label>

                            <!--question1-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Hours and availability to volunteer</span>
                                <textarea class="form-control" id="question1" name="question1" rows="4" cols="50" placeholder="add answer ..." value="{{ old('question1') }}"></textarea>
                            </label>

                            <!--question2-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Why do wish to volunteer with TEDx JumierahBeachPark?</span>
                                <textarea class="form-control" id="question2" name="question2" rows="4" cols="50" placeholder="add answer ..." value="{{ old('question2') }}"></textarea>
                            </label>

                            <!--question3-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Please list any previous event management experience, if any</span>
                                <textarea class="form-control" id="question3" name="question3" rows="4" cols="50" placeholder="add answer ..." value="{{ old('question3') }}"></textarea>
                            </label>

                            <!--t-shirt size-->
                            <label class="d-block mb-4">
                                <div class="form-group">
                                    <label for="location"><strong>T-shirt-size</strong></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_xs" value="xs">
                                        <label class="form-check-label" for="t_shirt_size_xs">
                                            XS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_s" value="s">
                                        <label class="form-check-label" for="t_shirt_size_s">
                                            S
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_m" value="m" checked>
                                        <label class="form-check-label" for="t_shirt_size_m">
                                            M
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_l" value="l">
                                        <label class="form-check-label" for="t_shirt_size_l">
                                            L
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_xl" value="xl">
                                        <label class="form-check-label" for="t_shirt_size_xl">
                                            XL
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_xxl" value="xxl">
                                        <label class="form-check-label" for="t_shirt_size_xxl">
                                            XXL
                                        </label>
                                    </div>
                                </div>
                            </label>

                            <!--speaker bio-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Bio about you</span>
                                <textarea class="form-control" id="bio" name="bio" rows="4" cols="50" placeholder="I like ..." value="{{ old('bio') }}"></textarea>
                            </label>

                            <!--for the al Jumeirah event-->
                            <input hidden name="event_id" type="text" class="form-control" placeholder="f-name" value="{{ $event->id }}" />

                            <!--the button-->
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- Start Call Action Area -->
@include('includes.call_action')
<!-- End Call Action Area -->

@endsection