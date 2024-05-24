<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="TEDxJumeirahBeachPark, TED, TEDx, talk, event, conference, UAE, dubai, jumeirah, park">
    <meta name="author" content="eng.Hasan Ismaiel">
    <meta name="keyword" content="TED,TEDx,TEDxJumeirahBeachPark,Jumeirah,Beach,Park,conference">
    <title>TEDx JumierahBeachPark</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_main/assets/icons/TED.png') }}" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Option 1: CoreUI for Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.2/dist/js/coreui.bundle.min.js" integrity="sha384-yaqfDd6oGMfSWamMxEH/evLG9NWG7Q5GHtcIfz8Zg1mVyx2JJ/IRPrA28UOLwAhi" crossorigin="anonymous"></script>

    <!--alpine js library for the flash message-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!--ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--for the create project multible steps-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>

    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors styles-->
    <link rel="stylesheet" href='{{ asset("css/vendors/simplebar.css") }}'>
    <link rel="stylesheet" href='{{ asset("vendors/simplebar/css/simplebar.css") }}'>
    <link href='{{ asset("css/style.css") }}' rel="stylesheet">

    <!--for file pond-->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    <!--for the notification template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <title>TEDxJumeirahBeachPark</title>
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/profile.css', 'resources/css/createProject.css', 'resources/sass/app.scss', 'resources/css/editProject.css', 'resources/css/radioButton.styl', 'resources/css/carddashboard.css','resources/css/notificationTemplate.css' ])

    <!--this is for the dashboard bg imge-->
    <style>
        .main-img {
            background: url('../../../assets/images/road.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body class="area">
    @include('partials.menu')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('partials.header')

        @yield('content')
        <x-toast-notification />
        <x-loader />

        <footer class="footer">
            <div><a href="http://account.infinityfreeapp.com/index.php?i=2">TEDx</a>/<a href="http://account.infinityfreeapp.com/index.php?i=2">TEDx talks</a> © 2024 Be Impact.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="http://account.infinityfreeapp.com/index.php?i=2">Hasan Ismaiel</a></div>
        </footer>
    </div>

    <!--for file pond-->
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[id="image"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
            server: {
                url: '/admin/upload',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }

            }
        });
    </script>

    <!--get the logged in user id for the notifications-->
    <script>
        // user loged in id 
        window.userID = {{ auth()->id() }};
        // number of general notifications 
        window.NumberOfNotifications = {!!auth()->user()->unreadNotifications->count() !!};
    </script>
</body>

</html>