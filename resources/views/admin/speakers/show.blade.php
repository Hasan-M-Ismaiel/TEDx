@extends('layouts.app')

@section('content')
<div class="body flex-grow-1 px-3 test mt-4">
    <div class="container-lg ">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row">
                            <div class="col">
                                <div class="card  p-3">
                                    <div class="card-body">
                                        <!--for the buttons-->
                                        <div style="display: flex;">

                                            <!--title for the event-->
                                            <h5 class="card-title col">
                                                <u>S p e a k e r</u>
                                            </h5>

                                            <!--update speaker-->
                                            <a type="button" class="m-1" href="{{ route('admin.speakers.edit', $speaker->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="edit the speaker information">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            <!--delete event-->
                                            <a type="button" class="m-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete the speaker">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16" onclick="if (confirm('Are you sure?') == true) {
                                                            document.getElementById('delete-item-{{$speaker->id}}').submit();
                                                            event.preventDefault();
                                                        } else {
                                                            return;
                                                        }
                                                        ">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                </svg>
                                            </a>

                                            <!-- for the delete  -->
                                            <form id="delete-item-{{$speaker->id}}" action="{{ route('admin.speakers.destroy', $speaker) }}" class="d-none" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                        <!--card template-->
                                        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                                            <!--for the content -->
                                            <div class="p-4">
                                                <div class=" image_profile d-flex flex-column justify-content-center align-items-center">
                                                    <!--image-->
                                                    @if($speaker->getFirstMediaUrl("speakers"))
                                                    <img src="{{ $speaker->getFirstMediaUrl('speakers') }}" class="rounded float-start me-2" alt="speaker" width="200" height="200">
                                                    @else
                                                    <img src="{{ asset('assets/images/avatar.png') }}" class="rounded float-start me-2" alt="speaker" width="200" height="200">
                                                    @endif

                                                    <!--name-->
                                                    <span class="name_profile mt-3">{{$speaker->first_name}} {{$speaker->last_name}}</span>
                                                    
                                                    <!--email-->
                                                    <span class="idd_profile">{{ $speaker->email }}</span>
                                                    
                                                    <!--phone number-->
                                                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                        <span class="idd1_profile">{{ $speaker->phone_number }}</span>
                                                        <span><i class="bi bi-telephone-outbound-fill"></i></span>
                                                    </div>

                                                    <!--follow-->
                                                    <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                                                        <span class="number_profile">{{ $speaker->profession }}</span>
                                                    </div>

                                                    <!--edit profile button-->
                                                    <div class=" d-flex mt-2">
                                                        <div class="border-dark border-top mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                    </div>

                                                    <div class="text_profile mt-3">
                                                        <span>{{ $speaker->bio }}</span>
                                                    </div>

                                                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                                        <span><a href="{{ $speaker->twitter }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                                                </svg></a>
                                                        </span>
                                                        <span><a href="{{ $speaker->facebook }}"> <i class="bi bi-facebook"></i></a></span>
                                                        <span><a href="{{ $speaker->instagram }}"> <i class="bi bi-instagram"></i></a></span>
                                                        <span><a href="{{ $speaker->linkedin }}"> <i class="bi bi-linkedin"></i></a></span>
                                                    </div>
                                                    <div class=" px-2 rounded mt-4 date_profile "> <span class="join_profile">Joined {{$speaker->created_at->diffForHumans()}}</span> </div>
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
        </div>
    </div>
</div>
    </div>
</div>
@endsection