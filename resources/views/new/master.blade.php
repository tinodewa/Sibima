<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- title -->
    <title>@yield('title') &mdash; {{ config('app.name') }}</title>
    
    <!-- link -->
    <link rel="stylesheet" href="{{asset('assets/new/vendor/bootstrap-4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/new/vendor/lightbox2-2.11.1/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{{asset('assets/new/css/chosen.css')}}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/new/css/style.css')}}">
    @yield('css')
</head>

<body>


@yield('content')


</body>

    <script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/new/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('assets/new/js/init.js')}}"></script>
    <script src="{{asset('assets/new/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/new/vendor/lightbox2-2.11.1/js/lightbox.min.js') }}"></script>

    @yield('js')
</html>

