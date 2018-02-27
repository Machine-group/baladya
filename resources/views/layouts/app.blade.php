<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>baladya</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap-clearmin.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/roboto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/material-design.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/small-n-flat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/c3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('menu/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/mycss/style.css')}}">


    <link href="{{URL::asset('menu/styles.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')

    <!-- Scripts -->

    <script src="{{URL::asset('menu/script.js')}}"></script>

    @yield('scripts')

</head>
<body>

<div id='cssmenu'>
    <ul>
        <li><a href='{{ route('home') }}'>Accueil</a></li>
        <li><a href='{{ route('RM') }}'>Rapport municipal</a></li>
        <li><a class='active' href='{{ route('RP') }}'>Rapport politique</a></li>
        <li><a href='#'>Plan de mobilisaion</a></li>
        <li><a href='#'>Contact</a></li>
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </div>
        @endif

    </ul>
</div>


<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
    </div>
</div>
<!--            scripts              -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('customScripts')

</body>
</html>
