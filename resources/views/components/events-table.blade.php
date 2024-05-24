@props(['events'])

<!--this is for searched users result-->
<div id="searchedProjectsTable" class="mt-4">
</div>

<!--this is for sorted users result-->
<div id="sortedProjectsTableSorted" class="mt-4">
</div>

<!--this is for basic users result-->
<div id="sortedProjectsTable" class="mt-4">
    <table class="table table-striped mt-2 border border-1" style="height: 100px;">
        <thead>
            <tr>
                <th scope="col" class="align-middle" id="pcreateProject">#</th>
                <th scope="col" class="align-middle" id="pcreateProject">Title</th>
                <th scope="col" class="align-middle" id="pcreateProject">Date</th>
                <th scope="col" class="align-middle" id="pcreateProject">Location</th>
                <th scope="col" class="align-middle" id="pcreateProject" width="100px">Description</th>
                <th scope="col" class="align-middle" id="pcreateProject">#Members</th>
                <th scope="col" class="align-middle" id="pcreateProject">#Sponsers</th>
                <th scope="col" class="align-middle" id="pcreateProject">#Registers</th>
                <th scope="col" class="align-middle" id="pcreateProject">#Speakers</th>
                <th scope="col" class="align-middle" id="pcreateProject">#Volunteers</th>
                <th scope="col" class="align-middle" id="pcreateProject">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <!--Iteration-->
                    <th scope="row" class="align-middle">{{ $event->id }}</th>

                    <!--Event title-->
                    <td class="align-middle">
                        <a href="{{ route('admin.events.show', $event->id) }}" 
                            style="text-decoration: none;" >{{ $event->title }} 
                        </a>
                    </td>

                    <!--Date-->
                    <td class="align-middle">
                        {{ $event->date }}
                    </td>

                    <!--Location-->
                    <td class="align-middle">
                        {{ $event->location }}
                    </td>

                    <!--Description-->
                    <td class="align-middle">
                        {{ $event->description }}
                    </td>

                    <!--# of team members-->
                    <td class="align-middle">
                        @if($event->members()->count() > 0)
                            <span class="badge m-1" style="background: #41be70;">{{  $event->members->count() }}</span>
                            <br>
                            @foreach ($event->members as $member)
                                <span class="badge m-1" style="background: #673AB7;">{{ $member->first_name }}</span>
                            @endforeach
                        @else
                            #
                        @endif
                    </td>

                    <!--# of team sponsers-->
                    <td class="align-middle">
                        @if($event->sponsers()->count() > 0)
                            <span class="badge m-1" style="background: #41be70;">{{  $event->sponsers->count() }}</span>
                            <br>
                            @foreach ($event->sponsers as $sponser)
                                <span class="badge m-1" style="background: #673AB7;">{{ $sponser->first_name }}</span>
                            @endforeach
                        @else
                            #
                        @endif
                    </td>

                    <!--# of team registers-->
                    <td class="align-middle">
                        @if($event->registers()->count() > 0)
                            <span class="badge m-1" style="background: #41be70;">{{  $event->registers->count() }}</span>
                            <br>
                            @foreach ($event->registers as $register)
                                <span class="badge m-1" style="background: #673AB7;">{{ $register->first_name }}</span>
                            @endforeach
                        @else
                            #
                        @endif
                    </td>

                    <!--# of team speakers-->
                    <td class="align-middle">
                        @if($event->speakers()->count() > 0)
                            <span class="badge m-1" style="background: #41be70;">{{  $event->speakers->count() }}</span>
                            <br>
                            @foreach ($event->speakers as $speaker)
                                <span class="badge m-1" style="background: #673AB7;">{{ $speaker->first_name }}</span>
                            @endforeach
                        @else
                            #
                        @endif
                    </td>

                    <!--# of team volunteers-->
                    <td class="align-middle">
                        @if($event->volunteers()->count() > 0)
                            <span class="badge m-1" style="background: #41be70;">{{  $event->volunteers->count() }}</span>
                            <br>
                            @foreach ($event->volunteers as $volunteer)
                                <span class="badge m-1" style="background: #673AB7;">{{ $volunteer->first_name }}</span>
                            @endforeach
                        @else
                            #
                        @endif
                    </td>

                    <!--controll buttons-->
                    <td class="align-middle" >
                        <div style="display: flex;">

                            <!--show event-->
                            <a type="button" class="m-1" href="{{ route('admin.events.show', $event->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="show event details">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                </svg>
                            </a>
                          
                            <!--update event-->
                            <a type="button" class="m-1" href="{{ route('admin.events.edit', $event->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="edit the event information">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>

                            <!--delete event-->
                            <a type="button" class="m-1" data-bs-toggle="tooltip" data-bs-placement="top" title="delete the event">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16"
                                    onclick="if (confirm('Deleting event will cause removing all the informaiton related to it! Are you sure?') == true) {
                                                        document.getElementById('delete-item-{{$event->id}}').submit();
                                                        event.preventDefault();
                                                    } else {
                                                        return;
                                                    }
                                                    ">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                </svg>
                            </a>

                            <!-- for the delete  -->
                            <form id="delete-item-{{$event->id}}" action="{{ route('admin.events.destroy', $event) }}" class="d-none" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

