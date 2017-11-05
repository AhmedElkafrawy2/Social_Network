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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fileuploader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/crop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Main.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>  
    <![endif]-->
</head>
<body>
   
        <div class="create-post-opacity"></div>
        @yield('content')
    
    
    <!-- Scripts -->
    <script
       src="https://code.jquery.com/jquery-1.12.4.js"
       integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
       crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('js/jquery.fileuploader.min.js') }}"></script>
    <script src="{{ asset('js/notify.min.js') }}"></script>
    <script src="{{ asset('js/crop.js') }}"></script>
    <script src="{{ asset('js/Main.js') }}"></script>
</body>
</html>
