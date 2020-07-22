<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MV-Music -- Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/css/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/css/adminlte.min.css')}}"">
    <style>
        .font-sm{
            font-size: .75rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }
        .invalid-feedback {
            display: unset;
        }
    </style>
    @yield('style')
<link href=" https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="content-wrapper">
            <div class="content py-3">
                @yield('content')
            </div>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Admin MV Music
            </div>
            <strong>Copyright &copy; {{date('Y')}} <a href="https://itplus.co.in">IT Plus</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <script src="{{asset('plugins/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('plugins/js/popper.min.js')}}"></script>
    <script src="{{asset('plugins/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/js/adminlte.min.js')}}"></script>
    <script>
        $(function () {
            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            $('#customFile').change(function (e) {
                e.preventDefault();
                $('#preview').attr('src', URL.createObjectURL(event.target.files[0]));
            });

            $('#musicThumb').change(function (e) {
                e.preventDefault();
                $('#previewThum').attr('src', URL.createObjectURL(event.target.files[0]));
            });
        });
    </script>
    @yield('script')
</body>

</html>