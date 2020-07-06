<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}@yield('front_title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" id="navbar_top">
            <div class="container">
                <a class="navbar-brand" href="{{route('front.homepage')}}">
                    {{ config('app.name', 'Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('front.homepage')}}">{{ __('Home') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('front.blog')}}">{{ __('Blog') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('front.about')}}">{{ __('About') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('front.contact')}}">{{ __('Contact') }}</a>
                      </li>
                        <!-- Authentication Links -->
                        @guest

                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard.index')}}">{{ __('Dashboard') }}</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('front')
        </main>

        <div class="social_row row">
          <div id="copyright" class="col-6">
            <label id="copyr">© Blog 2020</label>
          </div>
          <div id="copyright" class="col-6">
            <ul id="social_footer">
              <li id="fb_li"><a href="#"><i class="fa fa-facebook footer_fa" aria-hidden="true"></i></a></li>
              <li id="tw_li"><a href="#"><i class="fa fa-instagram footer_fa" aria-hidden="true"></i></a></li>
              <li id="ig_li"><a href="#"><i class="fa fa-twitter footer_fa" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>

    </div>
</body>
</html>
