<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Baladya</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> <!-- Resource style -->
    <link rel="stylesheet" href="{{asset('css/circle.css')}}"> <!-- Demo style -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap-clearmin.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/roboto.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/mycss/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component2.css') }}" />
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    @yield('styles')



    <script src="{{URL::asset('menu/script.js')}}"></script>
    @yield('scripts')
</head>
<body>
<a href="#0" class="cd-top js-cd-top">Top</a>
{{--<div class="se-pre-con"></div>--}}


<div class="component">
    <div>
        <a href="{{route('RM')}}"><img src="{{asset('assets/img/logo-baladya.gif')}}"  style="margin-top: 50px;margin-left: 50px"></a>
    </div>
    <!-- Start Nav Structure -->
    <button class="cn-button" id="cn-button">Menu</button>
    <div class="cn-wrapper" id="cn-wrapper">
        <ul>
            <li><a href="#"><span>Accueil</span></a></li>
            <li><a href="{{ route('RM') }}"><span>Municipal</span></a></li>
            <li><a href="{{ route('RP') }}"><span>Politique</span></a></li>
            <li><a href="#"><span>Carte Int</span></a></li>
            <li><a href="#"><span>Projets</span></a></li>
                    @if (Route::has('login'))
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span>Login</span></a></li>
                            <li><a href="{{ route('register') }}"><span>Adhérer</span></a></li>
                        @else
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    @endif
        </ul>
    </div>
    <!-- End of Nav Structure -->
</div>



{{--<div class="menu">--}}
    {{--<ul>--}}
        {{--<li><a href="{{route('accueil')}}">Accueil</a></li>--}}

        {{--<li> Rapport--}}
            {{--<ul>--}}

                {{--<li><a href="{{route('RM')}}">Rapport municipal</a></li>--}}
                {{--<li><a href="{{route('RP')}}">Rapport politique</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class='contact'>Carte intelligente</li>--}}
        {{--<li class='contact'>Prédiction politique</li>--}}
        {{--<li>Projets</li>--}}
        {{--<li><a href="{{route('login')}}">Authentification</a>--}}
            {{--<ul>--}}
                {{--@if (Route::has('login'))--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Adhération</a></li>--}}
                    {{--@else--}}
                        {{--<li>--}}
                            {{--<a href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                {{--Logout--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}





{{--end menu--}}

<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
    </div>
</div>
<!--            scripts              -->
<script>

    $(window).load(function() {
        $(".se-pre-con").fadeOut("slow");
    });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/polyfills.js')}}"></script>
<script src="{{asset('js/demo2.js')}}"></script>
@yield('customScripts')

</body>
</html>
