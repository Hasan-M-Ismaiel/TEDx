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
                                        <p id="pcreateProject">edit volunteer for your events</p>

                                        <form class="" action='{{ route("admin.volunteers.update", $volunteer) }}' method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="bodyflex">
                                                <div style="width:100%;">
                                                    <div class="form-card border-success border rounded ">
                                                        <div class="border px-2 pb-2 pt-3 rounded" style="background-color: #b9c9e5; background-image: linear-gradient(to bottom right, #b9c9e5, #e4eaf5);">
                                                            <h2 class="fs-title">Edit volunteer:</h2>
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

                                                                        <!-- first name -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="first_name"><strong>First Name</strong></label>
                                                                                <input type="texts" name="first_name" class="form-control" id="first_name" placeholder="add the first name" value="{{ $volunteer->first_name }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- last name -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="last_name"><strong>Last Name</strong></label>
                                                                                <input type="texts" name="last_name" class="form-control" id="last_name" placeholder="add the last name" value="{{ $volunteer->last_name }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- email -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="email"><strong>Email</strong></label>
                                                                                <input type="email" name="email" class="form-control" id="email" placeholder="add the email" value="{{ $volunteer->email }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- phone number -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="phone_number"><strong>Phone</strong></label>
                                                                                <input type="texts" name="phone_number" class="form-control" id="phone_number" placeholder="add the phone number" value="{{ $volunteer->phone_number }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- age -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="age"><strong>Age</strong></label>
                                                                                <select class="form-select form-select mb-3" name="age" aria-label=".form-select-lg example">
                                                                                    <option value="{{$volunteer->age}}" selected>{{$volunteer->age}}</option>
                                                                                    @for ($i = 18; $i <= 60; $i++) @if ($volunteer->age != $i)
                                                                                        <option value="{{$i}}">{{ $i }}</option>
                                                                                        @endif
                                                                                        @endfor
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Hours and availability to volunteer-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="question1"><strong>Hours and availability to volunteer</strong></label>
                                                                                <input type="textarea" name="question1" class="form-control" id="question1" placeholder="add answer" rows="4" cols="50" value="{{ $volunteer->question1 }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Why do wish to volunteer with TEDx JumierahBeachPark?-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="question2"><strong>Why do wish to volunteer with TEDx Jumierah Beach Park?</strong></label>
                                                                                <input type="textarea" name="question2" class="form-control" id="question2" placeholder="add answer" rows="4" cols="50" value="{{ $volunteer->question2 }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- Please list any previous event management experience, if any-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="question3"><strong>Please list any previous event management experience, if any</strong></label>
                                                                                <input type="textarea" name="question3" class="form-control" id="question3" placeholder="add answer" rows="4" cols="50" value="{{ $volunteer->question3 }}">
                                                                            </div>
                                                                        </div>

                                                                        <!-- t-shirt-size -->
                                                                        <!-- Are you a resident of UAE?-->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="location"><strong>T-shirt-size</strong></label>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_xs" value="xs" {{ $volunteer->t_shirt_size=="xs" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="t_shirt_size_xs">
                                                                                        XS
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_s" value="s" {{ $volunteer->t_shirt_size=="s" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="t_shirt_size_s">
                                                                                        S
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_m" value="m" {{ $volunteer->t_shirt_size=="m" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="t_shirt_size_m">
                                                                                        M
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_l" value="l" {{ $volunteer->t_shirt_size=="l" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="t_shirt_size_l">
                                                                                        L
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_xl" value="xl" {{ $volunteer->t_shirt_size=="xl" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="t_shirt_size_xl">
                                                                                        XL
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="t_shirt_size" id="t_shirt_size_xxl" value="xxl" {{ $volunteer->t_shirt_size=="xxl" ? 'checked' : ''}}>
                                                                                    <label class="form-check-label" for="t_shirt_size_xxl">
                                                                                        XXL
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- bio -->
                                                                        <div class="col-md-6 my-2">
                                                                            <div class="form-group">
                                                                                <label for="bio"><strong>Bio</strong></label>
                                                                                <input type="textarea" name="bio" class="form-control" id="bio" placeholder="add the information" rows="4" cols="50" value="{{ $volunteer->bio }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--choosing an event to attach-->
                                                                    <div class="row p-4 rounded mx-3 my-2 ">
                                                                        <label class="event_id" for="event_id"><strong>Event</strong></label>
                                                                        <select name="event_id" id="event_id" class="form-control">
                                                                            <option value="{{$volunteer->events()->first()->id}}" selected>{{$volunteer->events()->first()->title}}</option>
                                                                            @foreach ( $events as $event )
                                                                            @if ($event->id != $volunteer->events()->first()->id)
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