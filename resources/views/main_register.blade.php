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
                    <h1 class="page-title">Be With Us</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Register</li>
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
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Why join event?</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Why you should Join Event</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Ready to take the stage? Be a TEDx speaker, Make your voice heard. <u>Inspire the world</u>.</p>
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
                        <!--the form-->
                        <form method="POST" id="register_form" class="w-100 rounded-1 p-4 border bg-white" action='{{ route("storeRegister") }}' method="POST">
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

                            <!--speaker profession-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">what is your profession?</span>
                                <textarea class="form-control" id="profession" name="profession" rows="4" cols="50" placeholder="I'm  ...">{{ old('profession') }}</textarea>
                            </label>

                            <!--speaker bio-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Bio about you</span>
                                <textarea class="form-control" id="bio" name="bio" rows="4" cols="50" placeholder="I like ...">{{ old('bio') }}</textarea>
                            </label>

                            <!--talk idea-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Talk idea</span>
                                <textarea class="form-control" id="talk_idea" name="talk_idea" rows="4" cols="50" placeholder="is about ...">{{ old('talk_idea') }}</textarea>
                            </label>

                            <!--talk idea out line-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Talk idea out line</span>
                                <textarea class="form-control" id="talk_idea_outline" name="talk_idea_outline" rows="4" cols="50" placeholder="talk outline ...">{{ old('talk_idea_outline') }}</textarea>
                            </label>

                            <!--Audience takeaway message-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Audience takeaway message</span>
                                <textarea class="form-control" id="audience_takeaway_message" name="audience_takeaway_message" rows="4" cols="50" placeholder="talk outline ..."> {{ old('audience_takeaway_message') }} </textarea>
                            </label>

                            <!--Location-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Are you a resident of UAE??</span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="location" id="location_true" value="yes" checked>
                                    <label class="form-check-label" for="location_true">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="location" id="location_false" value="no">
                                    <label class="form-check-label" for="location_false">
                                        No
                                    </label>
                                </div>
                            </label>

                            <!--question1-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">If you are not in UAE, are you willing to make your way to Dubai to speak at our TEDx?</span>
                                <input name="question1" type="text" class="form-control" placeholder="yes" value="{{ old('question1') }}" />
                            </label>

                            <!--question2-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Why should we choose you for this idea and not anyone else?</span>
                                <input name="question2" type="text" class="form-control" placeholder="because ..." value="{{ old('question2') }}" />
                            </label>

                            <!--question3-->
                            <label class="d-block mb-4">
                                <span class="form-label d-block">Previous speaking experience? Yes / No</span>
                                <input name="question3" type="text" class="form-control" placeholder="yes/no" value="{{ old('question3') }}" />
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