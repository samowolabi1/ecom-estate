<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cryptolaw') }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link href="ass/css/bootstrap.css" rel="stylesheet"> --}}
    <link href="{{asset('ass/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('ass/css/styles.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <script src="{{ asset('ass/js/app.js') }}" defer></script>
     <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('ass/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Cryptolaw') }}
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
        {{-- top --}}
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="{{url('/')}}"> Cryptolaw </a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Navbar Search -->
  
      <!-- Navbar -->
   
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">
            <i class="fa fa-fw fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('users')}}">
            <i class="fa fa-fw fa-user"></i>
            <span>Users</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('blog')}}">
            <i class="fa fa-fw fa-user"></i>
            <span>Post</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('blog.create')}}">
            <i class="fa fa-fw fa-user"></i>
            <span>Create Post</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('letters')}}">
            <i class="fa fa-fw fa-user"></i>
            <span>Letters</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">
            <i class="fa fa-fw fa-user"></i>
            <span>Messages</span>
          </a>
        </li>
<!-- 
          <li class="nav-item">
          <a class="nav-link" href="{{route('profile.edit',Auth::id())}}">
            <i class="fa fa-fw fa-user"></i>
            <span>Edit Profile</span></a>
        </li> -->

        
        <li class="nav-item"> 
          <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                    class="fa fa-sign-out"></i><span class="hide-menu"></span>Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
        <!--   <li class="nav-item">
          <a class="nav-link" href="{{route('categories')}}">
            <i class="fa fa-fw fa-bitcoin"></i>
            <span>User Wallets</span></a>
        </li> -->
      
      
      
      </ul>
   






    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Modals -->





{{-- bottom --}}
        <main id="content-wrapper">
          @include('sweetalert::alert')
          @include('inc.flash')
            @yield('content')
        </main>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/chart.min.js')}}"></script>
    <script src="{{asset('js/rc-pos.min.js')}}"></script>
    <script src="{{asset('js/chart-area-demo.js')}}"></script>
    <script>
        CKEDITOR.replace( 'content' );
</script>
</body>
</html>
