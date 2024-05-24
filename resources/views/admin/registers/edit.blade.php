@extends('layouts.app')

@section('content')

<div class="body flex-grow-1 px-3 test mt-4">
    <div class="container-lg ">
        <div class="container mb-3">
            <div class="row justify-content-center">
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
                <div class="card p-5">
                    <div class="row border">
                        <!--header section-->
                        <div class="col">
                            <div class="container-fluid my-3  ">
                                <div class="row justify-content-center">
                                    <div class="card-create-project pt-4 my-3 mx-5 px-5">
                                        <h2 id="heading">{{ $page }}</h2>
                                        <p id="pcreateProject">edit new register for your events</p>

                                        <form class="" action='{{ route("admin.registers.update", $register) }}' method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="bodyflex">
                                                <div style="width:100%;">
                                                    <div class="form-card border-success border rounded">
                                                        <div class="border px-2 pb-2 pt-3 rounded" style="background-color: #b9c9e5; background-image: linear-gradient(to bottom right, #b9c9e5, #e4eaf5);">
                                                            <h2 class="fs-title">Edit register:</h2>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div id="row">
                                                                <div class="card p-4">
                                                                    <!-- the green light -->
                                                                    <div class="col-md-6 my-2">
                                                                        <div class="text-right">
                                                                            <span>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3cf10e" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                                                                    <circle cx="8" cy="8" r="8" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row border-bottom p-4 rounded mx-3 my-2 ">
                                                                        <!-- //first name -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="first_name"><strong>First Name</strong></label>
                                                                                <input type="texts" name="first_name" class="form-control" id="first_name" placeholder="add the first name" value="{{ $register->first_name }}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- //last name -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="last_name"><strong>Last Name</strong></label>
                                                                                <input type="texts" name="last_name" class="form-control" id="last_name" placeholder="add the last name" value="{{ $register->last_name }}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- //email -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="email"><strong>Email</strong></label>
                                                                                <input type="email" name="email" class="form-control" id="email" placeholder="add the email" value="{{ $register->email }}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- //phone number -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="phone_number"><strong>Phone</strong></label>
                                                                                <input type="texts" name="phone_number" class="form-control" id="phone_number" placeholder="add phone number" value="{{ $register->phone_number }}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- //profession -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="profession"><strong>Profession</strong></label>
                                                                                <input type="text" name="profession" class="form-control" id="profession" placeholder="add profession" value="{{ $register->profession }}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- //bio -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="bio"><strong>Bio</strong></label>
                                                                                <input type="textarea" name="bio" class="form-control" id="bio" placeholder="add Bio" rows="4" cols="50" value="{{ $register->bio }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- //talk idea -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="talk_idea"><strong>Idea</strong></label>
                                                                                <input type="textarea" name="talk_idea" class="form-control" id="talk_idea" placeholder="add talk idea" rows="4" cols="50" value="{{ $register->talk_idea }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- //Talk idea out line -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="talk_idea_outline"><strong>Talk idea out line</strong></label>
                                                                                <input type="textarea" name="talk_idea_outline" class="form-control" id="talk_idea_outline" placeholder="add talk idea outline" rows="4" cols="50" value="{{ $register->talk_idea_outline }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- //Audience takeaway message -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="audience_takeaway_message"><strong>Audience takeaway message</strong></label>
                                                                                <input type="textarea" name="audience_takeaway_message" class="form-control" id="audience_takeaway_message" placeholder="add audience takeaway message" rows="4" cols="50" talk_idea_outline value="{{ $register->audience_takeaway_message }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Are you a resident of UAE?-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="location"><strong>Are you a resident of UAE?</strong></label>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="location" id="location_true" value="yes" {{ $register->location=="yes" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="location_true">
                                                                                        Yes
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="location" id="location_false" value="no" {{ $register->location=="no" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="location_false">
                                                                                        No
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- If not, are you willing to make your way to Dubai to speak at our TEDx?-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="question1"><strong>If you are not in UAE, are you willing to make your way to Dubai to speak at our TEDx?</strong></label>
                                                                                <input type="textarea" name="question1" class="form-control" id="question1" placeholder="add answer" rows="4" cols="50" value="{{ $register->question1 }}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- Why should we choose you for this idea and not anyone else? -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="question2"><strong>Why should we choose you for this idea and not anyone else?</strong></label>
                                                                                <input type="textarea" name="question2" class="form-control" id="question2" placeholder="add answer" rows="4" cols="50" value="{{ $register->question2 }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Previous speaking experience? Yes / No-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="question3"><strong>Previous speaking experience? Yes / No</strong></label>
                                                                                <input type="textarea" name="question3" class="form-control" id="question3" placeholder="add answer" rows="4" cols="50" value="{{ $register->question3 }}">
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <!--choosing an event to attach-->
                                                                    <div class="row p-4 rounded mx-3 my-2 ">
                                                                        <label class="event_id" for="event_id"><strong>Event</strong></label>
                                                                        <select name="event_id" id="event_id" class="form-control">
                                                                            <option value="{{$register->events()->first()->id}}" selected>{{$register->events()->first()->title}}</option>
                                                                            @foreach ( $events as $event )
                                                                            @if ($event->title != $register->events()->first()->title)
                                                                            <option value="{{$event->id}}">{{ $event->title }}</option>
                                                                            @endif
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <x-forms.update-button />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection