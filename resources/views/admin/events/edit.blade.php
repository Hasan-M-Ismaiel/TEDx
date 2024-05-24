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
                    <div class="container-fluid border my-3  ">
                        <div class="row justify-content-center">
                            <div class="card-create-project pt-4 my-3 mx-5 px-5">
                                <h2 id="heading">{{ $page }}</h2>
                                <p id="pcreateProject">Fill all neccessary form fields to go to next step</p>
                                <form id="msform" action='{{ route("admin.events.update", $event) }}' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <!-- progressbar -->
                                    <ul id="progressbar-create-project">
                                        <li class="active li-create-project" id="account"><strong>Description</strong></li>
                                        <li class="li-create-project" id="personal"><strong>Social Media & contact</strong></li>
                                        <li class="li-create-project" id="payment"><strong>Pictures </strong></li>
                                        <li class="li-create-project" id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    <div class="progress-create-project">
                                        <div class="progress-bar-create-project progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <!-- fieldsets -->
                                    <!--stage one / basic information (title, description, data, location) for the event-->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Event Information:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 1 - 4</h2>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <!--title-->
                                                <label class="fieldlabels" for="title">Title: *</label>
                                                <input id="title" type="text" name="title" placeholder="add the title of the Event" value="{{ $event->title }}" required />

                                                <!--description-->
                                                <label class="fieldlabels" for="description">Description: *</label>
                                                <input type="textarea" name="description" id="description" placeholder="Event's description here" value="{{ $event->description }}" required />

                                                <!--date-->
                                                <label class="fieldlabels" for="date">Date: *</label>
                                                <input id="date" type="date" placeholder="Event's date..." name="date" value="{{ $event->date }}" required />

                                                <!--location-->
                                                <label class="fieldlabels" for="location">Location: *</label>
                                                <input id="location" type="text" placeholder="Event's location..." name="location" value="{{ $event->location }}" required />
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                    </fieldset>

                                    <!--stage two / social media information for the event-->
                                    <fieldset>
                                        <div class="form-card">
                                            <!--title for the stage-->
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Social media for the event:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 2 - 4</h2>
                                                </div>
                                            </div>
                                            <!--accounts-->
                                            <div class="card">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <!--facebook account-->
                                                    <div class="col-md-6 my-2">
                                                        <div class="row">
                                                            <!--icon-->
                                                            <div class="col-1 mt-2">
                                                                <label for="facebook" class="form-label">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" name="facebook" id="facebook" aria-describedby="facebook_addon3" placeholder="add the facebook account" value="{{ $event->facebook }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--linkedin account-->
                                                    <div class="col-md-6 my-2">
                                                        <div class="row">
                                                            <!--icon-->
                                                            <div class="col-1 mt-2">
                                                                <label for="linkedin" class="form-label">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" name="linkedin" id="linkedin" aria-describedby="linkedin_addon3" placeholder="add the linkedin account" value="{{ $event->linkedin }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--twitter account-->
                                                    <div class="col-md-6 my-2">
                                                        <div class="row">
                                                            <div class="col-1 mt-2">
                                                                <label for="twitter" class="form-label">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" name="twitter" id="twitter" aria-describedby="twitter_addon3" placeholder="add the twitter account" value="{{ $event->twitter }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--instagram account-->
                                                    <div class="col-md-6 my-2">
                                                        <div class="row">
                                                            <div class="col-1 mt-2">
                                                                <label for="instagram" class="form-label">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" name="instagram" id="instagram" aria-describedby="instagram_addon3" placeholder="add the instagram account" value="{{ $event->instagram }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--website account-->
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-1 mt-2">
                                                                <label for="twitter_account" class="form-label">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" name="website" id="website" aria-describedby="website_addon3" placeholder="add the website account" value="{{ $event->website }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--contact number-->
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-1 mt-2">
                                                                <label for="phone" class="form-label">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <div class="col-11">
                                                                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone_addon3" placeholder="add phobe number" value="{{ $event->phone }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    </fieldset>

                                    <!--stage three / pictures for the event-->
                                    <fieldset>
                                        <div class="form-card">
                                            <!--title for the stage-->
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Pictures-Speakers-Sponsers-Members-volunteers-registers for event:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 3 - 4</h2>
                                                </div>
                                            </div>
                                            <!--Pictures for event:-->
                                            <div class="card">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <div class="form-card border border-success rounded pb-2 mt-3">
                                                        <div class="form-group p-5 mt-4">
                                                            <label class="form-label" for="image"><strong>Upload image</strong></label>
                                                            @if($event->getFirstMediaUrl("events"))
                                                            <img src="{{ $event->getFirstMediaUrl('events') }}" class="rounded float-start me-2" alt="event" width="100" height="100">
                                                            @else
                                                            <img src="{{ asset('assets/images/avatar.png') }}" class="rounded float-start me-2" alt="event" width="100" height="100">
                                                            @endif
                                                            <input type="file" name="image" id="image" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Speakers:-->
                                            <div class="card mt-2">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <div class="form-card border border-success rounded pb-2 mt-3">
                                                        <div class="form-group p-5 mt-4">
                                                            <label class="form-label" for="image"><strong>Assign/Deassign Speakers</strong></label>
                                                            <div class="form-card">
                                                                <div class="row">
                                                                    @foreach($speakers as $speaker)
                                                                    <div class="col-md-4 text-center">
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                <input class="d-flex justify-content-end assigned_speakers" type="checkbox" id="speaker-{{$speaker->id}}" name="assigned_speakers[]" value="{{$speaker->id}}" {{ $speaker->checkifAssignedToEvent($event) ? 'checked' : ''}}>
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <label class="d-flex justify-content-start" for="speaker-{{$speaker->id}}"><a href="{{ route('admin.speakers.show', $speaker->id) }}" style="text-decoration: none;">{{ $speaker->first_name }} </a></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if ($loop->iteration % 3 == 0)
                                                                </div>
                                                                <div class="row">
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Sponsers for event:-->
                                            <div class="card mt-2">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <div class="form-card border border-success rounded pb-2 mt-3">
                                                        <div class="form-group p-5 mt-4">
                                                            <label class="form-label" for="image"><strong>Assign/Deassign Sponsers</strong></label>
                                                            <div class="form-card">
                                                                <div class="row">
                                                                    @foreach($sponsers as $sponser)
                                                                    <div class="col-md-4 text-center">
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                <input class="d-flex justify-content-end assigned_sponsers" type="checkbox" id="sponser-{{$sponser->id}}" name="assigned_sponsers[]" value="{{$sponser->id}}" {{ $sponser->checkifAssignedToEvent($event) ? 'checked' : ''}}>
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <label class="d-flex justify-content-start" for="sponser-{{$sponser->id}}"><a href="{{ route('admin.sponsers.show', $sponser->id) }}" style="text-decoration: none;">{{ $sponser->first_name }} </a></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if ($loop->iteration % 3 == 0)
                                                                </div>
                                                                <div class="row">
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Members for event:-->
                                            <div class="card mt-2">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <div class="form-card border border-success rounded pb-2 mt-3">
                                                        <div class="form-group p-5 mt-4">
                                                            <label class="form-label" for="image"><strong>Assign/Deassign Members</strong></label>
                                                            <div class="form-card">
                                                                <div class="row">
                                                                    @foreach($members as $member)
                                                                    <div class="col-md-4 text-center">
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                <input class="d-flex justify-content-end assigned_members" type="checkbox" id="member-{{$member->id}}" name="assigned_members[]" value="{{$member->id}}" {{ $member->checkifAssignedToEvent($event) ? 'checked' : ''}}>
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <label class="d-flex justify-content-start" for="member-{{$member->id}}"><a href="{{ route('admin.members.show', $member->id) }}" style="text-decoration: none;">{{ $member->first_name }} </a></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if ($loop->iteration % 3 == 0)
                                                                </div>
                                                                <div class="row">
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Volunteers for event:-->
                                            <div class="card mt-2">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <div class="form-card border border-success rounded pb-2 mt-3">
                                                        <div class="form-group p-5 mt-4">
                                                            <label class="form-label" for="image"><strong>Assign/Deassign Volunteers</strong></label>
                                                            <div class="form-card">
                                                                <div class="row">
                                                                    @foreach($volunteers as $volunteer)
                                                                    <div class="col-md-4 text-center">
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                <input class="d-flex justify-content-end assigned_volunteers" type="checkbox" id="volunteer-{{$volunteer->id}}" name="assigned_volunteers[]" value="{{$volunteer->id}}" {{ $volunteer->checkifAssignedToEvent($event) ? 'checked' : ''}}>
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <label class="d-flex justify-content-start" for="volunteer-{{$volunteer->id}}"><a href="{{ route('admin.volunteers.show', $volunteer->id) }}" style="text-decoration: none;">{{ $volunteer->first_name }} </a></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if ($loop->iteration % 3 == 0)
                                                                </div>
                                                                <div class="row">
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Registers for event:-->
                                            <div class="card mt-2">
                                                <div class="row p-4 rounded mx-3 my-2 ">
                                                    <div class="form-card border border-success rounded pb-2 mt-3">
                                                        <div class="form-group p-5 mt-4">
                                                            <label class="form-label" for="image"><strong>Assign/Deassign Registers</strong></label>
                                                            <div class="form-card">
                                                                <div class="row">
                                                                    @foreach($registers as $register)
                                                                    <div class="col-md-4 text-center">
                                                                        <div class="row">
                                                                            <div class="col-3">
                                                                                <input class="d-flex justify-content-end assigned_registers" type="checkbox" id="register-{{$register->id}}" name="assigned_registers[]" value="{{$register->id}}" {{ $register->checkifAssignedToEvent($event) ? 'checked' : ''}}>
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <label class="d-flex justify-content-start" for="register-{{$register->id}}"><a href="{{ route('admin.registers.show', $register->id) }}" style="text-decoration: none;">{{ $register->first_name }} </a></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if ($loop->iteration % 3 == 0)
                                                                </div>
                                                                <div class="row">
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--buttons-->
                                        <input id="createproject" type="submit" type="button" class="next action-button" />
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--for the main form -->
<script>
    $(document).ready(function() {
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar-create-project .li-create-project").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar-create-project .li-create-project").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar-create-project")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })

    });
</script>

@endsection