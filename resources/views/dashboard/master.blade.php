<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Msaidizi') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('/js/modernizr.custom.79639.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" > -->
    <!-- Styles -->
    <!-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/dashboard-bootstrap.css') }}" rel="stylesheet">
               <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>    
              @include('dashboard.navs.header.auth_user')
             
    <div class="c-body">

        <main class="c-main">
      
          @yield('content') 

          
        </main>

      </div>
        
    @include('dashboard.footer') 

    <script type="text/javascript" src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!--     <script type="text/javascript" src="{{ URL::asset('/js/jquery.ba-cond.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.slitslider.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/my_custom.js') }}"></script> -->
    <script type="text/javascript" src="{{ URL::asset('/js/coreui.bundle.min.js') }}"></script>
</body>
</html>
