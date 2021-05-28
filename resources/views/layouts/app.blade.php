<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> AGILE Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"> </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"> </script>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

</head>

<body>

    <div id="app" class="text-justify">
      <div class="jumbotron text-center h1 font-weight-bold" style="margin-bottom:0">
         The AGILE Development Framework
      </div>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand text-info font-weight-bolder" href="{{ url('/') }}">
                    AGILE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse h5" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                

                    </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-info font-weight-bolder" href="{{ route('login') }}"> Login </a>
                            </li>
            
                            <!--
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                                </li>
                            @endif

                             -->
                        @else
                         <!--                      
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('projects') }}">AGILECRUD</a>
                            </li>
                        -->
                        <li class="nav-item">
                             <a class="nav-link text-info font-weight-bolder" href="{{url('posts')}}">Post</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-info font-weight-bolder" href="{{url('about')}}">About</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link text-info font-weight-bolder" href="{{url('method')}}">Methodology</a>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link text-info font-weight-bolder" href="{{url('stages')}}">Stages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info font-weight-bolder" href="{{url('principle')}}">Principle</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-info font-weight-bolder" href="{{url('process')}}">Process</a>
                        </li>
                   
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-warning  font-weight-bolder" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item font-weight-bolder" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-3 px-3 bg-primary">
            @yield('content')
        </main>

        <div class="jumbotron text-center h5 font-weight-bold" style="margin-bottom:0">
            © Copyright 2021
        </div>
  
    </div>

</body>
</html>
