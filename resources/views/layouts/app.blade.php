<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('images/core/logo.png') }}">
    <title>Social_Network @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Main.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>  
    <![endif]-->
</head>
<body>
   

        @yield('content')
    
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Main.js') }}"></script>
</body>
</html>
