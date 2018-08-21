<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://www.zipwise.com/javascripts/weblocator.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @yield('content')
    </div>
    <footer>
        <center><a href="https://www.youtube.com/channel/UCGQAMypDtEerS58ozz0ZoQA" target="_blank"><span><i class="fab fa-youtube"></i></span></a> <a href="https://www.facebook.com/inTechRV/" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a> <a href="https://www.instagram.com/inTechRV/" target="_blank"><span><i class="fab fa-instagram"></i></span></a></center>
        <center>Copyright &copy; {{ date('Y') }} inTech RV | All Rights Reserved.</center>
    </footer>
</body>
</html>
