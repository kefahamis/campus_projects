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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.min.css') }}" rel="stylesheet">
               <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm custom_nav" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img alt="{{ config('app.name', 'Msaidizi') }}" src="{{ asset('images/Free_Sample_By_Wix.jpg')}}" width="50"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto site-nav">
                       @guest
                       <?php
                       if(Route::has('login'))
                        ?>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('About us') }}</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Services ') }}</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Domestic Agencies ') }}</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Contact Us') }}</a>
                        </li>
                        @endif
                        

                    </ul>
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto right-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<!--            @if (Auth::guest())
                  @include('layouts.frontend.menu')
          @endif -->


        <main>
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.ba-cond.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/jquery.slitslider.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/my_custom.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/slick.min.js') }}"></script>
    <script>
    
$(document).ready(function() {
  $(".testimonial-carousel").slick({
    infinite: true,
    slidesToShow: 1,
    speed: 500,
    slidesToScroll: 1,
    centerMode: 1,
    autoplaySpeed: 3e3,
    autoplay: true,
    arrows: true,
    prevArrow: $(".testimonial-carousel-controls .prev"),
    nextArrow: $(".testimonial-carousel-controls .next")
  });
});

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    </script>

</body>
</html>
