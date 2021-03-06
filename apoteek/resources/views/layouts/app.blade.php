<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" id="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token en en comment voor de push -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App Name - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="http://cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.js"></script>
        <script src="{{asset('js/scrollifypy.js')}}"></script>
        <script src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script src="{{ asset('js/kaas.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kaas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/try.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



</head>
<body id="body" style="overflow: hidden;" class="@yield('body')">
    <div id="app" >
      <div id="navcontainer" class="sticky">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky tryFont" id="navbar">
            <div class="container">
              <a class = "Main deLinks navbarLink" href="main">
                <p class="LinkBoven">
                    Home
                </p>
              </a>
              <a class = "Test deLinks navbarLink" href="home">
                <p class="LinkBoven">
                    Test
                </p>
              </a>
              <a class = "Faq deLinks navbarLink" href="Faq">
                <p class="LinkBoven">
                    Faq
                </p>
              </a>
              <a class = " Contact deLinks navbarLink" href="contact">
                <p class="LinkBoven">
                  Contact
                </p>
              </a>
              <a class = "Theme deLinks navbarLink" id="Theme" style="z-index: 200;">
                <p class="LinkBoven">
                    <img style="height: auto; width: 30px;" id="ThemeImg" src="{{ asset('images/zon.svg')}}">
                </p>
              </a>
              <div id="dePercent" class = "deLinks navbarLink" style="display: none">
                <p id="inpercent" class="LinkBoven">
                  0%
                </p>
              </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                            <div class="underline">
                              <div id="inhoudLine">
                              </div>
                            </div>
</div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
