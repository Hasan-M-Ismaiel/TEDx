<!-- Start Header Area -->
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets_main/assets/images/logo/logo-white.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item ">
                                    <a href="{{ route('main') }}"  aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">About</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="{{ route('about') }}"> About us</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('aboutTed') }}">About TED,TEDx</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('main') }}#speakers" aria-label="Toggle navigation">Speakers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('sponsers') }}" aria-label="Toggle navigation">Sponsors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('main') }}#members" aria-label="Toggle navigation">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Be with Us</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="{{ route('register') }}">As Speaker</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('volunteer') }}">As Volunteer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('faq') }}" aria-label="Toggle navigation">Be in Event</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#footer" aria-label="Toggle navigation">Contact</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        <div class="button">
                            <a href="https://www.ted.com/about/programs-initiatives/tedx-program" class="btn">about TEDx<svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg></a>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</header>
<!-- End Header Area -->