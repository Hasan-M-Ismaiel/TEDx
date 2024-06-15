<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="TEDxJumeirahBeachPark">
    <meta name="author" content="eng.Hasan Ismaiel">
    <meta name="keyword" content="TED,TEDx,TEDxJumeirahBeachPark,Jumeirah,Beach,Park,conference">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_main/assets/icons/TED.png') }}" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.2/dist/js/coreui.bundle.min.js" integrity="sha384-yaqfDd6oGMfSWamMxEH/evLG9NWG7Q5GHtcIfz8Zg1mVyx2JJ/IRPrA28UOLwAhi" crossorigin="anonymous"></script>

    <!-- Vendors styles-->
    <link rel="stylesheet" href='{{ asset("css/vendors/simplebar.css") }}'>
    <link rel="stylesheet" href='{{ asset("vendors/simplebar/css/simplebar.css") }}'>
    <link href='{{ asset("css/style.css") }}' rel="stylesheet">

    <title>TEDxJumeirahBeachPark</title>
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/profile.css', 'resources/css/createProject.css', 'resources/sass/app.scss', 'resources/css/editProject.css', 'resources/css/radioButton.styl', 'resources/css/carddashboard.css','resources/css/notificationTemplate.css' ])
</head>

<body style>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        @yield('content')
    </div>
</body>

</html>