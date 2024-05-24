@extends('layouts.app')

@section('content')
<div class="body flex-grow-1 px-3 test mt-4">
    <div class="container-lg ">
        <div class="card p-5">
            <div class="container-fluid border my-3  ">
                <div class="row justify-content-center">
                    <div class="card-create-project pt-4 my-3 mx-5 px-5">
                        <h2 id="heading">{{ $page }}</h2>
                        <p id="pcreateProject">dashboard to manage all notifications</p>
                        <span id="ringing_bell" class="bi bi-bell-fill"></span>
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <div class="box shadow-sm rounded bg-white mt-3">
                                        <!--title-->
                                        <div class="box-title border-bottom p-3">
                                            <h6 class="text-secondary"></h6>
                                        </div>
                                        <!--notification items-->
                                        <div class="box-body p-0">
                                            @forelse ($notifications as $notification)
                                            @if($notification->type == 'App\Notifications\NewRegister')
                                            <!--notification item-->
                                            <div class="selector p-3 d-flex align-items-center bg-light border-bottom osahan-post-header" id="{{ $notification->id }}">
                                                <!--notification image-->
                                                <div class="dropdown-list-image-notification me-3">
                                                    <img class="rounded-circle" src="{{ asset('assets/images/TED.png') }}" alt="TEDxJumeirahBeachPark" />
                                                </div>
                                                <!-- notification content-->
                                                <div class="fw-bolder me-3">
                                                    <!--title-->
                                                    <div class="text-truncate">Register: NEW ONE</div>
                                                    <!--message-->
                                                    <div class="fw-normal">There is a new register <strong>{{ $notification->data['first_name'] }}</strong> for your in event <strong>{{ $notification->data['event'] }}</strong>, be productive and take notes about that</div>
                                                    <!--show register button-->
                                                    <a href="{{ route('admin.registers.show', $notification->data['register_id']) }}" style="text-decoration: none;" type="button" class="btn btn-outline-success btn-sm">View Register</a>
                                                </div>
                                                <span class="ml-auto mb-auto">
                                                    <div class="btn-group">
                                                        <!--drop down button-->
                                                        <button type="button" class="btn btn-light-notification btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <!--delete notificaiton-->
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="dropdown-item" type="button" onclick="marknotificationasread('{{ $notification->id }}')" data-id="{{ $notification->id }}"><i class="mdi mdi-delete"></i> Mard As Readed</button>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <!--notification date-->
                                                    <div class="text-right text-muted pt-1">{{ $notification->created_at->diffForHumans() }}</div>
                                                </span>
                                            </div>
                                            @elseif($notification->type == 'App\Notifications\NewVolunteer')
                                            <!--notification item-->
                                            <div class="selector p-3 d-flex align-items-center bg-light border-bottom osahan-post-header" id="{{ $notification->id }}">
                                                <!--notification image-->
                                                <div class="dropdown-list-image-notification me-3">
                                                    <img class="rounded-circle" src="{{ asset('assets/images/TED.png') }}" alt="TEDxJumeirahBeachPark" />
                                                </div>
                                                <!-- notification content-->
                                                <div class="fw-bolder me-3">
                                                    <!--title-->
                                                    <div class="text-truncate">Volunteer: NEW ONE</div>
                                                    <!--message-->
                                                    <div class="fw-normal">There is a new volunteer <strong>{{ $notification->data['first_name'] }}</strong> for your in event <strong>{{ $notification->data['event'] }}</strong>, be productive and take notes about that</div>
                                                    <!--show volunteer button-->
                                                    <a href="{{ route('admin.volunteers.show', $notification->data['volunteer_id']) }}" style="text-decoration: none;" type="button" class="btn btn-outline-success btn-sm">View Volunteer</a>
                                                </div>
                                                <span class="ml-auto mb-auto">
                                                    <div class="btn-group">
                                                        <!--drop down button-->
                                                        <button type="button" class="btn btn-light-notification btn-sm rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </button>
                                                        <!--delete notificaiton-->
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="dropdown-item" type="button" onclick="marknotificationasread('{{ $notification->id }}')" data-id="{{ $notification->id }}"><i class="mdi mdi-delete"></i> Mard As Readed</button>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <!--notification date-->
                                                    <div class="text-right text-muted pt-1">{{ $notification->created_at->diffForHumans() }}</div>
                                                </span>
                                            </div>
                                            @endif


                                            @if ($loop->last)
                                            <a id="mark_all" class=" btn text-secondary" onclick="markallread()">Mark all as read</a>
                                            @endif

                                            @empty
                                            <h5 class="text-center"> <span class="badge m-1" style="background: #673AB7;" id="no_notifications">There is no notification now!</span> </h5>
                                            @endforelse
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

<!--marknotificationasread / markallread-->
<script>
    function marknotificationasread(notificationId) {
        axios.post("{{ route('admin.notifications.markNotification') }}", {
                'notificationId': notificationId
            })
            .then(response => {
                //remove element
                document.getElementById(notificationId).remove();

                if (window.NumberOfNotifications - 1 == 0) {
                    $("#num_of_notification").remove();
                } else {
                    $("#num_of_notification").html(window.NumberOfNotifications - 1); //  is in the app.blade layout file
                    window.NumberOfNotifications = window.NumberOfNotifications - 1;
                }
            })
            .catch(errors => {
                if (errors.response.status == 401) {}
            });
    }

    function markallread() {
        axios.post("{{ route('admin.notifications.markNotification') }}")
            .then(response => {
                const alerts = document.querySelectorAll('.selector');
                alerts.forEach(alert => {
                    alert.remove();
                });
                $("#num_of_notification").remove();
                $("#mark_all").remove();
                $("#no_notifications").html("your notificaitons have been readed");
            })
            .catch(errors => {
                if (errors.response.status == 401) {}
            });
    }
</script>
@endsection