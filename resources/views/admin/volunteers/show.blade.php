<!--title for the event-->
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
                                                        <u>V o l u n t e e r</u>
                                                    </h5>

                                                    <!--update volunteer-->
                                                    <a type="button" class="m-1" href="{{ route('admin.volunteers.edit', $volunteer->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="edit the volunteer information">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                        </svg>
                                                    </a>

                                                    <!--delete event-->
                                                    <a type="button" class="m-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete the volunteer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16" onclick="if (confirm('Are you sure?') == true) {
                                                            document.getElementById('delete-item-{{$volunteer->id}}').submit();
                                                            event.preventDefault();
                                                        } else {
                                                            return;
                                                        }
                                                        ">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                        </svg>
                                                    </a>

                                                    <!-- for the delete  -->
                                                    <form id="delete-item-{{$volunteer->id}}" action="{{ route('admin.volunteers.destroy', $volunteer) }}" class="d-none" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                                <!--card template-->
                                                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                                                    <!--for the content -->
                                                    <div class="p-4">
                                                        <div class=" image_profile d-flex flex-column justify-content-center align-items-center">

                                                            <!--name-->
                                                            <span class="name_profile mt-3">{{$volunteer->first_name}} {{$volunteer->last_name}}</span>

                                                            <!--email-->
                                                            <span class="idd_profile">{{ $volunteer->email }}</span>

                                                            <!--phone number-->
                                                            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                                <span class="idd1_profile">{{ $volunteer->phone_number }}</span>
                                                                <span><i class="bi bi-telephone-outbound-fill"></i></span>
                                                            </div>

                                                            <!--edit profile button-->
                                                            <div class=" d-flex mt-2">
                                                                <div class="border-dark border-top mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            </div>

                                                            <!--bio-->
                                                            <div class="text_profile mt-3">
                                                                <span>{{ $volunteer->bio }}</span>
                                                            </div>

                                                            <!--age-->
                                                            <span class="idd_profile mt-4">Age</span>
                                                            <div class="text_profile">
                                                                <span>{{ $volunteer->age }}</span>
                                                            </div>

                                                            <!--t-shirt-size-->
                                                            <span class="idd_profile mt-4">T-shirt-size</span>
                                                            <div class="text_profile">
                                                                <span>{{ strtoupper($volunteer->t_shirt_size) }}</span>
                                                            </div>

                                                            <!--question1 / Hours and availability to volunteer-->
                                                            <span class="idd_profile mt-4">Hours and availability to volunteer</span>
                                                            <div class="text_profile">
                                                                <span>{{ $volunteer->question1 }}</span>
                                                            </div>


                                                            <!--question2 / Why do wish to volunteer with TEDx Jumierah Beach Park?-->
                                                            <span class="idd_profile mt-4">Why do wish to volunteer with TEDx Jumierah Beach Park?</span>
                                                            <div class="text_profile">
                                                                <span>{{ $volunteer->question2 }}</span>
                                                            </div>


                                                            <!--question3 / Please list any previous event management experience, if any-->
                                                            <span class="idd_profile mt-4">Please list any previous event management experience, if any</span>
                                                            <div class="text_profile">
                                                                <span>{{ $volunteer->question3 }}</span>
                                                            </div>

                                                            <div class=" px-2 rounded mt-4 date_profile "> <span class="join_profile">Joined {{$volunteer->created_at->diffForHumans()}}</span> </div>
                                                            <a class="btn btn-primary me-2 mt-4" href="#" role="button">make he / she as team member</a>
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