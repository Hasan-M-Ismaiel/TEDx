@extends('layouts.app')

@section('content')

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
                        <form id="msform" action='{{ route("admin.events.store") }}' method="POST">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar-create-project">
                                <li class="active li-create-project" id="account"><strong>Description</strong></li>
                                <li class="li-create-project" id="personal"><strong>Add social media</strong></li>
                                <li class="li-create-project" id="payment"><strong>Add speakers</strong></li>
                                <li class="li-create-project" id="sponsers"><strong>Add sponsers</strong></li>
                                <li class="li-create-project" id="members"><strong>Add members</strong></li>
                                <li class="li-create-project" id="volunteers"><strong>Add volunteers</strong></li>
                                <li class="li-create-project" id="registers"><strong>Add registers</strong></li>
                                <li class="li-create-project" id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <div class="progress-create-project">
                                <div class="progress-bar-create-project progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <br>
                            <!-- fieldsets -->
                            <!--stage one / basic information for the event-->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Event Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 7</h2>
                                        </div>
                                    </div>
                                    <div class="mt-3">

                                        <!--title-->
                                        <label class="fieldlabels" for="title">Title: *</label>
                                        <input id="title" type="text" name="title" placeholder="add the title of the Event" value="{{ old('title') }}"/>

                                        <!--description-->
                                        <label class="fieldlabels" for="description">Description: *</label>
                                        <input type="textarea" name="description" id="description" placeholder="Event's description here"  value="{{ old('description') }}"/>

                                        <!--date-->
                                        <label class="fieldlabels" for="deadline">Date: *</label>
                                        <input id="deadline" type="date" placeholder="Event's date..." name="deadline"/>

                                        <!--location-->
                                        <label class="fieldlabels" for="location">Location: *</label>
                                        <input id="location" type="text" placeholder="Event's location..." name="location"/>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>
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
                                            <h2 class="steps">Step 2 - 7</h2>
                                        </div>
                                    </div>
                                    <!--accounts-->
                                    <div class="card">
                                        <div class="row p-4 rounded mx-3 my-2 ">
                                            <!--facebook account-->
                                            <div class="col-md-6 my-2">
                                                <div class="row">
                                                    <div class="col-1 mt-2">
                                                        <label for="facebook_account" class="form-label">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                    <div class="col-11">
                                                        <input type="text" class="form-control" name="facebook_account" id="facebook_account" aria-describedby="facebook_addon3" placeholder="add the facebook account">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--linkedin account-->
                                            <div class="col-md-6 my-2">
                                                <div class="row">
                                                    <div class="col-1 mt-2">
                                                        <label for="linkedin_account" class="form-label">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                    <div class="col-11">
                                                        <input type="text" class="form-control" name="linkedin_account" id="linkedin_account" aria-describedby="linkedin_addon3" placeholder="add the linkedin account">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--twitter account-->
                                            <div class="col-md-6 my-2">
                                                <div class="row">
                                                    <div class="col-1 mt-2">
                                                        <label for="twitter_account" class="form-label">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                    <div class="col-11">
                                                        <input type="text" class="form-control" name="twitter_account" id="twitter_account" aria-describedby="twitter_addon3" placeholder="add the twitter account">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--instagram account-->
                                            <div class="col-md-6 my-2">
                                                <div class="row">
                                                    <div class="col-1 mt-2">
                                                        <label for="instagram_account" class="form-label">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                    <div class="col-11">
                                                        <input type="text" class="form-control" name="instagram_account" id="instagram_account" aria-describedby="instagram_addon3" placeholder="add the instagram account">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--website account-->
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-1 mt-2">
                                                        <label for="twitter_account" class="form-label">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                    <div class="col-11">
                                                        <input type="text" class="form-control" name="twitter_account" id="twitter_account" aria-describedby="twitter_addon3" placeholder="add the website account">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </fieldset>

                            <!--stage three / basic information for speakers-->
                            <fieldset>
                                <div class="form-card">
                                    <!--title for the stage-->
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Speakers Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 7</h2>
                                        </div>
                                    </div>

                                    <!--old speakers in the system - checkbox system-->
                                    <div class="row mt-4">
                                        @foreach($speakers as $speaker)
                                            <div class="col-md-4 text-center" >
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="d-flex justify-content-end assigned_speakers" type="checkbox" id="speaker-{{$speaker->id}}" name="assigned_speaker[]" value="{{$speaker->id}}">
                                                    </div>
                                                    <div class="col-9">
                                                        <label class="d-flex justify-content-start" for="speaker-{{$speaker->id}}"><a href="{{ route('admin.speakers.show', $speaker->id) }}" style="text-decoration: none;" >{{ $speaker->first_name }} </a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($loop->iteration % 3 == 0)
                                                </div>
                                                <div class="row">
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--add more speakers-->
                                    <div class="form-group mt-4">
                                        <div class="bodyflex">
                                            <div style="width:100%;">
                                                <div class="border pe-5">
                                                    <!--message for the user -->
                                                    <p id="pcreateProject" class="mt-4 ms-5 ">add more speakers to this event and the database
                                                        <span>
                                                            <svg width="25" height="25">
                                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-warning') }}"></use>
                                                            </svg>
                                                        </span>please add value to all added inputes
                                                    </p>
                                                    <!--the added speaker here-->
                                                    <div class="col-lg-12 p-4">
                                                        <div id="newinput_speaker"></div>   <!--the added one-->
                                                        <button id="rowAdder_speaker" type="button" class="btn btn-dark">
                                                            <span class="bi bi-plus-square-dotted">
                                                            </span> ADD
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </fieldset>
                            
                            <!--stage four / basic information for sponsers-->
                            <fieldset>
                                <div class="form-card">
                                    <!--title for the stage-->
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Sponsers Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 7</h2>
                                        </div>
                                    </div>

                                    <!--old sponsers in the system - checkbox system-->
                                    <div class="row mt-4">
                                        @foreach($sponsers as $sponser)
                                            <div class="col-md-4 text-center" >
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="d-flex justify-content-end assigned_sponsers" type="checkbox" id="sponser-{{$sponser->id}}" name="assigned_sponser[]" value="{{$sponser->id}}">
                                                    </div>
                                                    <div class="col-9">
                                                        <label class="d-flex justify-content-start" for="sponser-{{$sponser->id}}"><a href="{{ route('admin.sponsers.show', $sponser->id) }}" style="text-decoration: none;" >{{ $sponser->first_name }} </a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($loop->iteration % 3 == 0)
                                                </div>
                                                <div class="row">
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--add more sponsers-->
                                    <div class="form-group mt-4">
                                        <div class="bodyflex">
                                            <div style="width:100%;">
                                                <div class="border pe-5">
                                                    <!--message for the user -->
                                                    <p id="pcreateProject" class="mt-4 ms-5 ">add more sponsers to this event and the database
                                                        <span>
                                                            <svg width="25" height="25">
                                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-warning') }}"></use>
                                                            </svg>
                                                        </span>please add value to all added inputes
                                                    </p>
                                                    <!--the added sponser here-->
                                                    <div class="col-lg-12 p-4">
                                                        <div id="newinput_sponser"></div>   <!--the added one-->
                                                        <button id="rowAdder_sponser" type="button" class="btn btn-dark">
                                                            <span class="bi bi-plus-square-dotted">
                                                            </span> ADD
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </fieldset>

                            <!--stage five / basic information for members-->
                            <fieldset>
                                <div class="form-card">
                                    <!--title for the stage-->
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Members Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 5 - 7</h2>
                                        </div>
                                    </div>

                                    <!--old members in the system - checkbox system-->
                                    <div class="row mt-4">
                                        @foreach($members as $member)
                                            <div class="col-md-4 text-center" >
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="d-flex justify-content-end assigned_members" type="checkbox" id="member-{{$member->id}}" name="assigned_member[]" value="{{$member->id}}">
                                                    </div>
                                                    <div class="col-9">
                                                        <label class="d-flex justify-content-start" for="member-{{$member->id}}"><a href="{{ route('admin.members.show', $member->id) }}" style="text-decoration: none;" >{{ $member->first_name }} </a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($loop->iteration % 3 == 0)
                                                </div>
                                                <div class="row">
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--add more members-->
                                    <div class="form-group mt-4">
                                        <div class="bodyflex">
                                            <div style="width:100%;">
                                                <div class="border pe-5">
                                                    <!--message for the user -->
                                                    <p id="pcreateProject" class="mt-4 ms-5 ">add more members to this event and the database
                                                        <span>
                                                            <svg width="25" height="25">
                                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-warning') }}"></use>
                                                            </svg>
                                                        </span>please add value to all added inputes
                                                    </p>
                                                    <!--the added member here-->
                                                    <div class="col-lg-12 p-4">
                                                        <div id="newinput_member"></div>   <!--the added one-->
                                                        <button id="rowAdder_member" type="button" class="btn btn-dark">
                                                            <span class="bi bi-plus-square-dotted">
                                                            </span> ADD
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </fieldset>

                            <!--stage six / basic information for volunteers-->
                            <fieldset>
                                <div class="form-card">
                                    <!--title for the stage-->
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Volunteers Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 6 - 7</h2>
                                        </div>
                                    </div>

                                    <!--old members in the system - checkbox system-->
                                    <div class="row mt-4">
                                        @foreach($volunteers as $volunteer)
                                            <div class="col-md-4 text-center" >
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="d-flex justify-content-end assigned_volunteers" type="checkbox" id="volunteer-{{$volunteer->id}}" name="assigned_volunteer[]" value="{{$volunteer->id}}">
                                                    </div>
                                                    <div class="col-9">
                                                        <label class="d-flex justify-content-start" for="volunteer-{{$volunteer->id}}"><a href="{{ route('admin.volunteers.show', $volunteer->id) }}" style="text-decoration: none;" >{{ $volunteer->first_name }} </a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($loop->iteration % 3 == 0)
                                                </div>
                                                <div class="row">
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--add more volunteers-->
                                    <div class="form-group mt-4">
                                        <div class="bodyflex">
                                            <div style="width:100%;">
                                                <div class="border pe-5">
                                                    <!--message for the user -->
                                                    <p id="pcreateProject" class="mt-4 ms-5 ">add more volunteers to this event and the database
                                                        <span>
                                                            <svg width="25" height="25">
                                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-warning') }}"></use>
                                                            </svg>
                                                        </span>please add value to all added inputes
                                                    </p>
                                                    <!--the added volunteer here-->
                                                    <div class="col-lg-12 p-4">
                                                        <div id="newinput_volunteer"></div>   <!--the added one-->
                                                        <button id="rowAdder_volunteer" type="button" class="btn btn-dark">
                                                            <span class="bi bi-plus-square-dotted">
                                                            </span> ADD
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next"/>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </fieldset>

                            <!--stage seven / basic information for registers-->
                            <fieldset>
                                <div class="form-card">
                                    <!--title for the stage-->
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Registers Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 7 - 7</h2>
                                        </div>
                                    </div>

                                    <!--old registers in the system - checkbox system-->
                                    <div class="row mt-4">
                                        @foreach($registers as $register)
                                            <div class="col-md-4 text-center" >
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="d-flex justify-content-end assigned_registers" type="checkbox" id="register-{{$register->id}}" name="assigned_register[]" value="{{$register->id}}">
                                                    </div>
                                                    <div class="col-9">
                                                        <label class="d-flex justify-content-start" for="register-{{$register->id}}"><a href="{{ route('admin.registers.show', $register->id) }}" style="text-decoration: none;" >{{ $register->first_name }} </a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($loop->iteration % 3 == 0)
                                                </div>
                                                <div class="row">
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--add more registers-->
                                    <div class="form-group mt-4">
                                        <div class="bodyflex">
                                            <div style="width:100%;">
                                                <div class="border pe-5">
                                                    <!--message for the user -->
                                                    <p id="pcreateProject" class="mt-4 ms-5 ">add more registers to this event and the database
                                                        <span>
                                                            <svg width="25" height="25">
                                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-warning') }}"></use>
                                                            </svg>
                                                        </span>please add value to all added inputes
                                                    </p>
                                                    <!--the added register here-->
                                                    <div class="col-lg-12 p-4">
                                                        <div id="newinput_register"></div>   <!--the added one-->
                                                        <button id="rowAdder_register" type="button" class="btn btn-dark">
                                                            <span class="bi bi-plus-square-dotted">
                                                            </span> ADD
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id="createproject" type="submit" type="button" class="next action-button" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--this is for the users [checkbox button]  ----- this should be deleted-->
<style>
    .labelexpanded_ > input {
        display: none;
    }

    .labelexpanded_ input:checked + .checkbox-btns_ {
        border-style: solid;
        border-color: #50ef44;
    }

    .checkbox-btns_ {
        cursor: pointer;
        background-color: #eaeaea;
    }
</style>

<!--this is for the teamleader [redio button] ----- this should be deleted-->
<style>
    .labelexpanded_teamleader > input {
        display: none;
    }

    .labelexpanded_teamleader input:checked + .radio-btns_teamleader {
        border-style: solid;
        border-color: #50ef44;
    }

    .radio-btns_teamleader {
        cursor: pointer;
        background-color: #eaeaea;
    }
</style>

<!--for the main form -->
<script>
    $(document).ready(function(){
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar-create-project .li-create-project").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar-create-project .li-create-project").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar-create-project")
          .css("width",percent+"%")
    }

    $(".submit").click(function(){
        return false;
    })

    });
</script>

<!--for adding new /deleting speakers cards-->
<script type="text/javascript">
    counter = 2;
    $("#rowAdder_speaker").click(function () {
        newRowAdd =
            '<div id="row">' +
                '<div class="mb-3">' +
                    '<div class="card p-4 border-success">'
                        //the green light
                        +'<div class="text-right">'
                            +'<span>'
                                +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3cf10e" class="bi bi-circle-fill" viewBox="0 0 16 16">'
                                    +'<circle cx="8" cy="8" r="8"/>'
                                +'</svg>'
                            +'</span>'
                        +'</div>'
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                        //first name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="first_name_speaker"><strong>First Name</strong></label>'
                            +'<input type="texts" name="first_names_speaker[]" class="form-control" id="first_name_speaker" placeholder="add the first name for the speaker">'
                        +'</div>'
                        +'</div>'
                        //last name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="last_name_speaker"><strong>Last Name</strong></label>'
                            +'<input type="texts" name="last_names_speaker[]" class="form-control" id="last_name_speaker" placeholder="add the last name for the speaker">'
                        +'</div>'
                        +'</div>'
                        //email
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="emails_speaker"><strong>Email</strong></label>'
                            +'<input type="email" name="emails_speaker[]" class="form-control" id="emails_speaker" placeholder="add the email for the speaker">'
                        +'</div>'
                        +'</div>'
                        //phone number
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="phone_speaker"><strong>Phone</strong></label>'
                            +'<input type="texts" name="phones_speaker[]" class="form-control" id="phone_speaker" placeholder="add the phone number for the speaker">'
                        +'</div>'
                        +'</div>'
                        //about
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="about_speaker"><strong>About</strong></label>'
                            +'<input type="textarea" name="abouts_speaker[]" class="form-control" id="phone_speaker" placeholder="add the information about the speaker">'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        //---------------social accounts
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                            //facebook accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="facebook_accounts_speaker" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">'
                                                +'<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="facebook_accounts_speaker[]" id="facebook_accounts_speaker" aria-describedby="facebook_addon3" placeholder="add the facebook account about for the speaker">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //linkedin accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="linkedin_accounts_speaker" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">'
                                                +'<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="linkedin_accounts_speaker[]" id="linkedin_accounts_speaker" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the speaker">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //twitter accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="twitter_accounts_speaker" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">'
                                                +'<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="twitter_accounts_speaker[]" id="twitter_accounts_speaker" aria-describedby="linkedin_addon3" placeholder="add the twitter account about for the speaker">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //instagram accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="instagram_accounts_speaker" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">'
                                                +'<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="instagram_accounts_speaker[]" id="instagram_accounts_speaker" aria-describedby="instagram_addon3" placeholder="add the instagram account about for the speaker">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //website accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="websites_speaker" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">'
                                                +'<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="websites_speaker[]" id="instagram_accounts_speaker" aria-describedby="instagram_addon3" placeholder="add the website account about for the speaker">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        //-----------------end social accounts

                        //delete card button
                        +'<div class="mt-3">'
                            +'<div class="row">'
                            +'  <div class="col-4 text-center">'
                            +'      <div class="input-group-prepend">'
                            +'          <button class="btn btn-danger"'
                            +'                  id="DeleteRow_speaker"'
                            +'                  type="button">'
                            +'              <i class="bi bi-trash"></i>'
                            +'              Delete'
                            +'          </button>'
                            +'      </div>'
                            +'  </div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>';
        counter = counter + 1;
        $('#newinput_speaker').append(newRowAdd);
    });
    
    $(".bodyflex").on("click", "#DeleteRow_speaker", function () {
        $(this).parents("#row").remove();
    });
</script>

<!--for adding new /deleting sponsers cards-->
<script type="text/javascript">
    counter = 2;
    $("#rowAdder_sponser").click(function () {
        newRowAdd =
            '<div id="row">' +
                '<div class="mb-3">' +
                    '<div class="card p-4 border-success">'
                        //the green light
                        +'<div class="text-right">'
                            +'<span>'
                                +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3cf10e" class="bi bi-circle-fill" viewBox="0 0 16 16">'
                                    +'<circle cx="8" cy="8" r="8"/>'
                                +'</svg>'
                            +'</span>'
                        +'</div>'
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                        //first name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="first_name_sponser"><strong>First Name</strong></label>'
                            +'<input type="texts" name="first_names_sponser[]" class="form-control" id="first_name_sponser" placeholder="add the first name for the sponser">'
                        +'</div>'
                        +'</div>'
                        //last name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="last_name_sponser"><strong>Last Name</strong></label>'
                            +'<input type="texts" name="last_names_sponser[]" class="form-control" id="last_name_sponser" placeholder="add the last name for the sponser">'
                        +'</div>'
                        +'</div>'
                        //email
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="emails_sponser"><strong>Email</strong></label>'
                            +'<input type="email" name="emails_sponser[]" class="form-control" id="emails_sponser" placeholder="add the email for the sponser">'
                        +'</div>'
                        +'</div>'
                        //phone number
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="phone_sponser"><strong>Phone</strong></label>'
                            +'<input type="texts" name="phones_sponser[]" class="form-control" id="phone_sponser" placeholder="add the phone number for the sponser">'
                        +'</div>'
                        +'</div>'
                        //about
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="about_sponser"><strong>About</strong></label>'
                            +'<input type="textarea" name="abouts_sponser[]" class="form-control" id="phone_sponser" placeholder="add the information about the sponser">'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        //---------------social accounts
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                            //facebook accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="facebook_accounts_sponser" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">'
                                                +'<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="facebook_accounts_sponser[]" id="facebook_accounts_sponser" aria-describedby="facebook_addon3" placeholder="add the facebook account about for the sponser">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //linkedin accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="linkedin_accounts_sponser" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">'
                                                +'<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="linkedin_accounts_sponser[]" id="linkedin_accounts_sponser" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the sponser">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //twitter accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="twitter_accounts_sponser" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">'
                                                +'<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="twitter_accounts_sponser[]" id="twitter_accounts_sponser" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the sponser">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //instagram accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="instagram_accounts_sponser" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">'
                                                +'<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="instagram_accounts_sponser[]" id="instagram_accounts_sponser" aria-describedby="instagram_addon3" placeholder="add the instagram account about for the sponser">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //website accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="websites_sponser" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">'
                                                +'  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="websites_sponser[]" id="instagram_accounts_sponser" aria-describedby="instagram_addon3" placeholder="add the website account about for the sponser">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        //-----------------end social accounts

                        //delete card button
                        +'<div class="mt-3">'
                            +'<div class="row">'
                            +'  <div class="col-4 text-center">'
                            +'      <div class="input-group-prepend">'
                            +'          <button class="btn btn-danger"'
                            +'                  id="DeleteRow_sponser"'
                            +'                  type="button">'
                            +'              <i class="bi bi-trash"></i>'
                            +'              Delete'
                            +'          </button>'
                            +'      </div>'
                            +'  </div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>';
        counter = counter + 1;
        $('#newinput_sponser').append(newRowAdd);
    });
    
    $(".bodyflex").on("click", "#DeleteRow_sponser", function () {
        $(this).parents("#row").remove();
    });
</script>

<!--for adding new /deleting members cards-->
<script type="text/javascript">
    counter = 2;
    $("#rowAdder_member").click(function () {
        newRowAdd =
            '<div id="row">' +
                '<div class="mb-3">' +
                    '<div class="card p-4 border-success">'
                        //the green light
                        +'<div class="text-right">'
                            +'<span>'
                                +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3cf10e" class="bi bi-circle-fill" viewBox="0 0 16 16">'
                                    +'<circle cx="8" cy="8" r="8"/>'
                                +'</svg>'
                            +'</span>'
                        +'</div>'
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                        //first name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="first_name_member"><strong>First Name</strong></label>'
                            +'<input type="texts" name="first_names_member[]" class="form-control" id="first_name_member" placeholder="add the first name for the member">'
                        +'</div>'
                        +'</div>'
                        //last name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="last_name_member"><strong>Last Name</strong></label>'
                            +'<input type="texts" name="last_names_member[]" class="form-control" id="last_name_member" placeholder="add the last name for the member">'
                        +'</div>'
                        +'</div>'
                        //email
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="emails_member"><strong>Email</strong></label>'
                            +'<input type="email" name="emails_member[]" class="form-control" id="emails_member" placeholder="add the email for the member">'
                        +'</div>'
                        +'</div>'
                        //phone number
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="phone_member"><strong>Phone</strong></label>'
                            +'<input type="texts" name="phones_member[]" class="form-control" id="phone_member" placeholder="add the phone number for the member">'
                        +'</div>'
                        +'</div>'
                        //about
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="about_member"><strong>About</strong></label>'
                            +'<input type="textarea" name="abouts_member[]" class="form-control" id="phone_member" placeholder="add the information about the member">'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        //---------------social accounts
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                            //facebook accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="facebook_accounts_member" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">'
                                                +'<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="facebook_accounts_member[]" id="facebook_accounts_member" aria-describedby="facebook_addon3" placeholder="add the facebook account about for the member">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //linkedin accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="linkedin_accounts_member" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">'
                                                +'<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="linkedin_accounts_member[]" id="linkedin_accounts_member" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the member">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //twitter accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="twitter_accounts_member" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">'
                                                +'<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="twitter_accounts_member[]" id="twitter_accounts_member" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the member">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //instagram accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="instagram_accounts_member" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">'
                                                +'<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="instagram_accounts_member[]" id="instagram_accounts_member" aria-describedby="instagram_addon3" placeholder="add the instagram account about for the member">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //website accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="websites_member" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">'
                                                +'<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="websites_member[]" id="instagram_accounts_member" aria-describedby="instagram_addon3" placeholder="add the website account about for the member">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        //-----------------end social accounts

                        //delete card button
                        +'<div class="mt-3">'
                            +'<div class="row">'
                            +'  <div class="col-4 text-center">'
                            +'      <div class="input-group-prepend">'
                            +'          <button class="btn btn-danger"'
                            +'                  id="DeleteRow_member"'
                            +'                  type="button">'
                            +'              <i class="bi bi-trash"></i>'
                            +'              Delete'
                            +'          </button>'
                            +'      </div>'
                            +'  </div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>';
        counter = counter + 1;
        $('#newinput_member').append(newRowAdd);
    });
    
    $(".bodyflex").on("click", "#DeleteRow_member", function () {
        $(this).parents("#row").remove();
    });
</script>

<!--for adding new /deleting volunteers cards-->
<script type="text/javascript">
    counter = 2;
    $("#rowAdder_volunteer").click(function () {
        newRowAdd =
            '<div id="row">' +
                '<div class="mb-3">' +
                    '<div class="card p-4 border-success">'
                        //the green light
                        +'<div class="text-right">'
                            +'<span>'
                                +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3cf10e" class="bi bi-circle-fill" viewBox="0 0 16 16">'
                                    +'<circle cx="8" cy="8" r="8"/>'
                                +'</svg>'
                            +'</span>'
                        +'</div>'
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                        //first name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="first_name_volunteer"><strong>First Name</strong></label>'
                            +'<input type="texts" name="first_names_volunteer[]" class="form-control" id="first_name_volunteer" placeholder="add the first name for the volunteer">'
                        +'</div>'
                        +'</div>'
                        //last name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="last_name_volunteer"><strong>Last Name</strong></label>'
                            +'<input type="texts" name="last_names_volunteer[]" class="form-control" id="last_name_volunteer" placeholder="add the last name for the volunteer">'
                        +'</div>'
                        +'</div>'
                        //email
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="emails_volunteer"><strong>Email</strong></label>'
                            +'<input type="email" name="emails_volunteer[]" class="form-control" id="emails_volunteer" placeholder="add the email for the volunteer">'
                        +'</div>'
                        +'</div>'
                        //phone number
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="phone_volunteer"><strong>Phone</strong></label>'
                            +'<input type="texts" name="phones_volunteer[]" class="form-control" id="phone_volunteer" placeholder="add the phone number for the volunteer">'
                        +'</div>'
                        +'</div>'
                        //about
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="about_volunteer"><strong>About</strong></label>'
                            +'<input type="textarea" name="abouts_volunteer[]" class="form-control" id="phone_volunteer" placeholder="add the information about the volunteer">'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        //---------------social accounts
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                            //facebook accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="facebook_accounts_volunteer" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">'
                                                +'<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="facebook_accounts_volunteer[]" id="facebook_accounts_volunteer" aria-describedby="facebook_addon3" placeholder="add the facebook account about for the volunteer">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //linkedin accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="linkedin_accounts_volunteer" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">'
                                                +'<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="linkedin_accounts_volunteer[]" id="linkedin_accounts_volunteer" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the volunteer">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //twitter accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="twitter_accounts_volunteer" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">'
                                                +'<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="twitter_accounts_volunteer[]" id="twitter_accounts_volunteer" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the volunteer">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //instagram accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="instagram_accounts_volunteer" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">'
                                                +'<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="instagram_accounts_volunteer[]" id="instagram_accounts_volunteer" aria-describedby="instagram_addon3" placeholder="add the instagram account about for the volunteer">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //website accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="websites_volunteer" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">'
                                                +'<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="websites_volunteer[]" id="instagram_accounts_volunteer" aria-describedby="instagram_addon3" placeholder="add the website account about for the volunteer">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        //-----------------end social accounts

                        //delete card button
                        +'<div class="mt-3">'
                            +'<div class="row">'
                            +'  <div class="col-4 text-center">'
                            +'      <div class="input-group-prepend">'
                            +'          <button class="btn btn-danger"'
                            +'                  id="DeleteRow_volunteer"'
                            +'                  type="button">'
                            +'              <i class="bi bi-trash"></i>'
                            +'              Delete'
                            +'          </button>'
                            +'      </div>'
                            +'  </div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>';
        counter = counter + 1;
        $('#newinput_volunteer').append(newRowAdd);
    });
    
    $(".bodyflex").on("click", "#DeleteRow_volunteer", function () {
        $(this).parents("#row").remove();
    });
</script>

<!--for adding new /deleting registers cards-->
<script type="text/javascript">
    counter = 2;
    $("#rowAdder_register").click(function () {
        newRowAdd =
            '<div id="row">' +
                '<div class="mb-3">' +
                    '<div class="card p-4 border-success">'
                        //the green light
                        +'<div class="text-right">'
                            +'<span>'
                                +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3cf10e" class="bi bi-circle-fill" viewBox="0 0 16 16">'
                                    +'<circle cx="8" cy="8" r="8"/>'
                                +'</svg>'
                            +'</span>'
                        +'</div>'
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                        //first name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="first_name_register"><strong>First Name</strong></label>'
                            +'<input type="texts" name="first_names_register[]" class="form-control" id="first_name_register" placeholder="add the first name for the register">'
                        +'</div>'
                        +'</div>'
                        //last name
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="last_name_register"><strong>Last Name</strong></label>'
                            +'<input type="texts" name="last_names_register[]" class="form-control" id="last_name_register" placeholder="add the last name for the register">'
                        +'</div>'
                        +'</div>'
                        //email
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="emails_register"><strong>Email</strong></label>'
                            +'<input type="email" name="emails_register[]" class="form-control" id="emails_register" placeholder="add the email for the register">'
                        +'</div>'
                        +'</div>'
                        //phone number
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="phone_register"><strong>Phone</strong></label>'
                            +'<input type="texts" name="phones_register[]" class="form-control" id="phone_register" placeholder="add the phone number for the register">'
                        +'</div>'
                        +'</div>'
                        //about
                        +'<div class="col-md-6 my-2">'
                        +'<div class="form-group">'
                            +'<label for="about_register"><strong>About</strong></label>'
                            +'<input type="textarea" name="abouts_register[]" class="form-control" id="phone_register" placeholder="add the information about the register">'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        
                        //---------------social accounts
                        +'<div class="row border-bottom p-4 rounded mx-3 my-2 ">'
                            //facebook accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="facebook_accounts_register" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">'
                                                +'<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="facebook_accounts_register[]" id="facebook_accounts_register" aria-describedby="facebook_addon3" placeholder="add the facebook account about for the register">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //linkedin accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="linkedin_accounts_register" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">'
                                                +'<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="linkedin_accounts_register[]" id="linkedin_accounts_register" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the register">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //twitter accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="twitter_accounts_register" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">'
                                                +'<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="twitter_accounts_register[]" id="twitter_accounts_register" aria-describedby="linkedin_addon3" placeholder="add the linkedin account about for the register">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //instagram accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="instagram_accounts_register" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">'
                                                +'<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="instagram_accounts_register[]" id="instagram_accounts_register" aria-describedby="instagram_addon3" placeholder="add the instagram account about for the register">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                            //website accounts
                            +'<div class="col-md-6 my-2">'
                                +'<div class="row">'
                                    +'<div class="col-1 mt-2">'
                                        +'<label for="websites_register" class="form-label">'
                                            +'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">'
                                                +'<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>'
                                            +'</svg>'
                                        +'</label>'
                                    +'</div>'
                                    +'<div class="col-11">'
                                        +'<input type="text" class="form-control" name="websites_register[]" id="instagram_accounts_register" aria-describedby="instagram_addon3" placeholder="add the website account about for the register">'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        //-----------------end social accounts

                        //delete card button
                        +'<div class="mt-3">'
                            +'<div class="row">'
                            +'  <div class="col-4 text-center">'
                            +'      <div class="input-group-prepend">'
                            +'          <button class="btn btn-danger"'
                            +'                  id="DeleteRow_register"'
                            +'                  type="button">'
                            +'              <i class="bi bi-trash"></i>'
                            +'              Delete'
                            +'          </button>'
                            +'      </div>'
                            +'  </div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>'
            +'</div>';
        counter = counter + 1;
        $('#newinput_register').append(newRowAdd);
    });
    
    $(".bodyflex").on("click", "#DeleteRow_register", function () {
        $(this).parents("#row").remove();
    });
</script>

@endsection
