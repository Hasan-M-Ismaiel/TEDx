@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col">
                                <div class="card p-3">
                                    <div class="card-body cardParentEditClass">

                                        <!--this for the deletion-->
                                        <form id="delete-item-{{$event->id}}" action="{{ route('admin.events.destroy', $event->id) }}" class="d-none" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <div style="display: flex;">

                                            <!--title for the event-->
                                            <h5 class="card-title col">
                                                {{ $event->title }}
                                            </h5>

                                            <!--update event-->
                                            <a type="button" class="m-1" href="{{ route('admin.events.edit', $event->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="edit the event information">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            <!--delete event-->
                                            <a type="button" class="m-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete the event">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16" onclick="if (confirm('Deleting event will cause removing all the informaiton related to it! Are you sure?') == true) {
                                                        document.getElementById('delete-item-{{$event->id}}').submit();
                                                        event.preventDefault();
                                                    } else {
                                                        return;
                                                    }
                                                    ">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                </svg>
                                            </a>

                                            <!-- for the delete  -->
                                            <form id="delete-item-{{$event->id}}" action="{{ route('admin.events.destroy', $event) }}" class="d-none" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>

                                        <!--green | red -->
                                        <x-event-status status="0" />

                                        <!--event date-->
                                        <span class="border-start border-3 border-primary ps-2 "> deadLine: {{ $event->date }}</span>

                                        <!--event location-->
                                        <span class="border-start border-3 border-primary ps-2 "> location: {{ $event->location }}</span>

                                        <!--event manager-->
                                        <br><strong>manager:</strong>
                                        <a href="{{ url('https://linkedin/in/amal-alnajjad') }}" style="text-decoration: none;">Amal Alnajjad </a>

                                        <!--created time-->
                                        <br><span class="text-muted h6 col">Created at <time>{{ $event->created_at->diffForHumans() }}</time></span>

                                        <!--statics and numbers-->
                                        <br><span id="number_of_speakers" class="badge m-1" style="background: #673AB7;">{{ $event->speakers->count()}}</span> <span class="text-muted h6 col"># of speakers </span>
                                        <br><span id="number_of_sponsers" class="badge m-1" style="background: #673AB7;">{{ $event->sponsers->count()}}</span> <span class="text-muted h6 col"># of sponsers </span>
                                        <br><span id="number_of_volunteers" class="badge m-1" style="background: #673AB7;">{{ $event->volunteers->count()}}</span> <span class="text-muted h6 col"># of volunteers</span>
                                        <br><span id="number_of_volunteers" class="badge m-1" style="background: #673AB7;">{{ $event->members->count()}}</span> <span class="text-muted h6 col"># of team members</span>

                                        <!--line-->
                                        <hr class="shadow-sm mb-1">

                                        <!--progress bar - time to get the date of the event -->
                                        <div class="progress blue">
                                            <div class="progress-bar" style="width:15%; background:#1a4966;">
                                                <div class="progress-value">15%</div>
                                            </div>
                                        </div>

                                        <!--description | speakers | sponsers | members | volunteers | registers -->
                                        <p class="card-text my-2">
                                            <!--description-->
                                        <div class="container mt-4">
                                            <div class="card pt-2 pb-2 px-3">
                                                <div class="bg-white px-0 py-2 ">
                                                    <div class="row">
                                                        <div class=" col-md-auto ">
                                                            <svg width="20" height="20">
                                                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-warning') }}"></use>
                                                            </svg>
                                                            <small>event description</small>
                                                            <span class="vl ml-3 ">|</span>
                                                        </div>
                                                        <div class="col-md-auto ">
                                                            <span class="text-primary">{{ $event->description }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--speakers-->
                                        <div class="container mt-2">
                                            <div class="card pt-2 pb-0 pb-3 px-3">
                                                <div class="bg-white px-0 ">
                                                    <div class="row mt-2">
                                                        <!--title-->
                                                        <div class=" col-md-auto ">
                                                            <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                                                    <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                                                    <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                                                                </svg>
                                                                <small>Speakers</small>
                                                            </a>
                                                            <span class="vl ml-3">|</span>
                                                        </div>
                                                        @if($event->speakers()->count() > 0)
                                                        <div class="col-md-auto ">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    @foreach ($event->speakers as $speaker)
                                                                    <a href="{{ route('admin.speakers.show', $speaker->id) }}" style="text-decoration: none;" class="position-relative py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$speaker->first_name}}">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="{{ asset('assets/images/person6.jpg') }}" alt="DP" class="avatar-img border border-success shadow mb-1">
                                                                        </div>
                                                                    </a>
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @else
                                                        <div class="col-md-auto py-2">
                                                            <span class="text-danger">no speakers yet.</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--sponsers-->
                                        <div class="container mt-2">
                                            <div class="card pt-2 pb-0 pb-3 px-3">
                                                <div class="bg-white px-0 ">
                                                    <div class="row mt-2">
                                                        <!--title-->
                                                        <div class=" col-md-auto ">
                                                            <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                                                </svg>
                                                                <small>Sponsers</small>
                                                            </a>
                                                            <span class="vl ml-3">|</span>
                                                        </div>
                                                        @if($event->sponsers()->count() > 0)
                                                        <div class="col-md-auto ">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    @foreach ($event->sponsers as $sponser)
                                                                    <a href="{{ route('admin.sponsers.show', $sponser->id) }}" style="text-decoration: none;" class="position-relative py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$sponser->first_name}}">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="{{ asset('assets/images/person7.jpg') }}" alt="DP" class="avatar-img border border-success shadow mb-1">
                                                                        </div>
                                                                    </a>
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @else
                                                        <div class="col-md-auto py-2">
                                                            <span class="text-danger">no sponsers yet.</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--members-->
                                        <div class="container mt-2">
                                            <div class="card pt-2 pb-0 pb-3 px-3">
                                                <div class="bg-white px-0 ">
                                                    <div class="row mt-2">
                                                        <!--title-->
                                                        <div class=" col-md-auto ">
                                                            <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                                                </svg>
                                                                <small>Members</small>
                                                            </a>
                                                            <span class="vl ml-3">|</span>
                                                        </div>
                                                        @if($event->members()->count() > 0)
                                                        <div class="col-md-auto ">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    @foreach ($event->members as $member)
                                                                    <a href="{{ route('admin.members.show', $member->id) }}" style="text-decoration: none;" class="position-relative py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$member->first_name}}">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="{{ asset('assets/images/person8.jpg') }}" alt="DP" class="avatar-img border border-success shadow mb-1">
                                                                        </div>
                                                                    </a>
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @else
                                                        <div class="col-md-auto py-2">
                                                            <span class="text-danger">no members yet.</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--volunteers-->
                                        <div class="container mt-2">
                                            <div class="card pt-2 pb-0 pb-3 px-3">
                                                <div class="bg-white px-0 ">
                                                    <div class="row mt-2">
                                                        <!--title-->
                                                        <div class=" col-md-auto ">
                                                            <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                                                                </svg>
                                                                <small>Volunteers</small>
                                                            </a>
                                                            <span class="vl ml-3">|</span>
                                                        </div>
                                                        @if($event->volunteers()->count() > 0)
                                                        <div class="col-md-auto ">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    @foreach ($event->volunteers as $volunteer)
                                                                    <a href="{{ route('admin.volunteers.show', $volunteer->id) }}" style="text-decoration: none;" class="position-relative py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$volunteer->first_name}}">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="{{ asset('assets/images/person6.jpg') }}" alt="DP" class="avatar-img border border-success shadow mb-1">
                                                                        </div>
                                                                    </a>
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @else
                                                        <div class="col-md-auto py-2">
                                                            <span class="text-danger">no volunteers yet.</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--registers-->
                                        <div class="container mt-2">
                                            <div class="card pt-2 pb-0 pb-3 px-3">
                                                <div class="bg-white px-0 ">
                                                    <div class="row mt-2">
                                                        <!--title-->
                                                        <div class=" col-md-auto ">
                                                            <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" />
                                                                </svg>
                                                                <small>Registers</small>
                                                            </a>
                                                            <span class="vl ml-3">|</span>
                                                        </div>
                                                        @if($event->registers()->count() > 0)
                                                        <div class="col-md-auto ">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    @foreach ($event->registers as $register)
                                                                    <a href="{{ route('admin.registers.show', $register->id) }}" style="text-decoration: none;" class="position-relative py-2 px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$register->first_name}}">
                                                                        <div class="avatar avatar-md">
                                                                            <img src="{{ asset('assets/images/person7.jpg') }}" alt="DP" class="avatar-img border border-success shadow mb-1">
                                                                        </div>
                                                                    </a>
                                                                    @endforeach
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @else
                                                        <div class="col-md-auto py-2">
                                                            <span class="text-danger">no registers yet.</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </p>
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