<header class="header header-sticky">
    <div class="container-fluid">

        <!--side menu icon-->
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
        </button>

        <!--logo-->
        <a class="header-brand d-md-none" href="{{route('home')}}">
            <svg width="118" height="46" alt="TED logo">
                <use xlink:href="{{ asset('assets/brand/TeamWorkOKWhite.svg#full') }}"></use>
            </svg>
        </a>

        <!--pages links left-->
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item" data-bs-placement="top" title="dashboard"><a class="nav-link" href="{{ route('home') }}">Dashboard</a></li>
            <li class="nav-item" data-bs-placement="top" title="all speakers"><a class="nav-link" href="{{ route('admin.speakers.index') }}">Speakers</a></li>
            <li class="nav-item" data-bs-placement="top" title="all sponsers"><a class="nav-link" href="{{ route('admin.sponsers.index') }}">Sponsers</a></li>
            <li class="nav-item" data-bs-placement="top" title="all events"><a class="nav-link" href="{{ route('admin.events.index') }}">Events</a></li>
            <li class="nav-item" data-bs-placement="top" title="all volunteers"><a class="nav-link" href="{{ route('admin.volunteers.index') }}">Volunteers</a></li>
            <li class="nav-item" data-bs-placement="top" title="all registers"><a class="nav-link" href="{{ route('admin.registers.index') }}">Registers</a></li>
            <li class="nav-item" data-bs-placement="top" title="all member of the team"><a class="nav-link" href="{{ route('admin.members.index') }}">Members</a></li>
        </ul>
        <!--pages links icons right-->
        <ul class="header-nav ms-auto">
            <!--create event-->
            <li class="nav-item">
                <a class="nav-link iconClass" href="{{ route('admin.events.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="add new event">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                </a>
            </li>

            <!--# of notifications this is good when new volunteer or register do register in the event-->
            <li class="nav-item" data-bs-placement="top" title="number of notifications">
                <a class="nav-link iconClass" href="{{ route('admin.notifications.index') }}">
                    @if(auth()->user()->unreadNotifications->count()==0)
                        <!--dont show-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                        </svg>
                        <em id ="num_of_notification" class="badge bg-danger text-white px-2 rounded-4"></em>
                    @else 
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                        </svg>
                        <em id ="num_of_notification" class="badge bg-danger text-white px-2 rounded-4">{{ auth()->user()->unreadNotifications->count() }}</em>
                    @endif
                </a>
            </li>
        </ul>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <!--image-->
                <a class="nav-link py-0 imageParentClass" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="{{auth()->user()->name}}">
                    <div class="avatar avatar-md">
                        <img class="avatar-img shadow mb-1" src="{{ asset('assets/images/TED.png') }}" alt="" />
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <span>Hello, {{auth()->user()->name}}</span>
                </li>
                <li class="breadcrumb-item active">
                    <span> Alone we can do so little, together we can do so much</span>
                </li>
            </ol>
        </nav>
    </div>
</header>