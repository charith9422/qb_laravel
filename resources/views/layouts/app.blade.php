<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="background-image: url('../storage/other_images/login-bg.jpg');height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'QUESTION BANK') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <!--style="background-image: url('../storage/other_images/login-bg.jpg');height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;"-->
    <div id="app" style="background-image: url('../storage/other_images/login-bg.jpg');height: 100%;" >
        @if (!Auth::guest())
            @include('inc.navbar')
         @endif   
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        
    </div>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    

</body>
</html>
