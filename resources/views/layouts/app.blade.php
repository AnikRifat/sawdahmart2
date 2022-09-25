<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/auth/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/auth/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/auth/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}assets/auth/css/iofrm-theme12.css">
</head>

<body>
    <div class="form-body">
        @yield('content')
    </div>
    <script src="{{ asset('/') }}/assets/aut/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}/assets/aut/js/popper.min.js"></script>
    <script src="{{ asset('/') }}/assets/aut/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}/assets/aut/js/main.js"></script>
</body>

</html>

