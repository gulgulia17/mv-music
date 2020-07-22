<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Welcome') -- MV-Music</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('title','Welcome') -- MV-Music">
    <meta name="description" content="MV Music is a studio where you can compose your songs, and we also publish our albums frequently so subscribe to our site now.

    Powered by IT Plus">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://mv-music.herokuapp.com/">
    <meta property="og:title" content="@yield('title','Welcome') -- MV-Music">
    <meta property="og:description" content="MV Music is a studio where you can compose your songs, and we also publish our albums frequently so subscribe to our site now.

    Powered by IT Plus">
    <meta property="og:image" content="{{asset('images/logo/logo_single.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://mv-music.herokuapp.com/">
    <meta property="twitter:title" content="@yield('title','Welcome') -- MV-Music">
    <meta property="twitter:description" content="MV Music is a studio where you can compose your songs, and we also publish our albums frequently so subscribe to our site now.

    Powered by IT Plus">
    <meta property="twitter:image" content="{{asset('images/logo/logo_single.png')}}">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('favicon/android-chrome-512x512.png')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('favicon/android-chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="shortcut icon" {{asset('favicon/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('plugins/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('style')
    <style>
        .invalid-feedback {
            display: unset;
        }
    </style>
</head>

<body>
    @include('layouts.navigation')
    @yield('content')
    <section class="dark center"
    style="background: linear-gradient(rgb(34 37 43 / 90%), rgb(11 21 39 / 90%)), url({{asset('images/background/8.jpg')}}) fixed center center;">
    @yield('contentdark')
    </section>
    @include('layouts.cto')
    @include('layouts.footer')
    <script src="{{asset('plugins/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('plugins/js/popper.min.js')}}"></script>
    <script src="{{asset('plugins/js/bootstrap.min.js')}}"></script>
    {{-- <script>
        $(".dropdown").hover(function () {
            $('.dropdown-menu').toggleClass('show');
        });
        
        $(".dropdown").click(function (e) { 
            e.preventDefault();
            $('.dropdown-menu').toggleClass('show');
        });
    </script> --}}
    @yield('script')
</body>

</html>