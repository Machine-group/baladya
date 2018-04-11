<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Baladya</title>


    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/style.css')}}"> <!-- Resource style -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/style.css')}} ">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    @yield('styles')




    @yield('scripts')
</head>
<body>

<!--Start header-search  area-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search Something">
                            <button type="submit"><span class="flaticon-magnifying-glass"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End header-search  area-->

<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="{{asset('RM')}}"><img src="{{asset('img/resources/logo.png')}}" alt="Awesome Logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <ul class="contact-info">
                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-signs"></span>
                        </div>
                        <div class="content">
                            <h5>Tunis ,<br>Ariana</h5>
                        </div>
                    </li>
                    <li>
                        <div class="icon-holder">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="content">
                            <h5>Lundi - Samedi 8.00 - 20.00 <br>Dimanche FERMER</h5>
                        </div>
                    </li>
                    <li class="pdleft">
                        <div class="icon-holder">
                            <span class="flaticon-phone-call"></span>
                        </div>
                        <div class="content">
                            <h5>50 622 014<br>Appelez nous</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmeu-area stricky">
    <div class="container">
        <nav class="main-menu pull-left">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
                <ul class="navigation">
                    <li><a href="{{asset('')}}">Accueil</a></li>

                    <li  class="dropdown"><a href="#">Rapports</a>
                        <ul>
                            <li class="dropdown">
                                <a href="{{route('RM')}}">Rapport municipal</a>
                            </li>
                            <li>
                                <a href="{{route('RPL')}}"> Rapport législatif</a>
                            </li>
                            <li>
                                <a href="{{route('RPP')}}"> Rapport présidentiel</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="{{route('carteIntelligente.index')}}">Carte intelligente</a></li>
                    <li><a href="{{route('representativite.index')}}">Représentativité</a></li>

                    {{--<li class="dropdown"><a href="#">Projets</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Project Gallery</a></li>--}}
                            {{--<li><a href="#">Project Grid</a></li>--}}
                            {{--<li><a href="#">Projects Grid With Filter</a></li>--}}
                            {{--<li><a href="#">Project With Sidebar</a></li>--}}
                            {{--<li><a href="#">Project Manasory</a></li>--}}
                            {{--<li><a href="#">Project Single Detail</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    <li class="dropdown"><a href="#">Profile</a>
                        <ul>
                            @if (Route::has('login'))
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}"><span>Login</span></a></li>

                                @else
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                            <span>Se déconnecter</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @if($user->name == 'daruom')
                                        <li><a href="{{ route('register') }}"><span>Enregistrer</span></a></li>
                                    @endif
                                @endif
                            @endif
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
        <div class="social-links pull-right">
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        {{--<div class="search-button pull-right">--}}
            {{--<div class="toggle-search">--}}
                {{--<button><span class="flaticon-magnifying-glass"></span></button>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</section>





    <div class="content">
        @yield('content')
    </div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--            scripts              -->

<!-- main jQuery -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- bx slider -->
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<!-- count to -->
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- validate -->
<script src="{{asset('js/validate.js')}}"></script>
<!-- mixit up -->
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<!-- easing -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!--gmap script-->
<script src="{{asset('js/gmaps.js')}}"></script>
<script src="{{asset('js/map-helper.js')}}"></script>
<!-- video responsive script -->
<script src="{{asset('js/jquery.fitvids.js')}}"></script>



<!-- fancy box -->
<script src="{{asset('assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js')}}"></script>
<!-- revolution slider js -->
<script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>



<!-- thm custom script -->
<script src="{{asset('js/custom.js')}}"></script>
{{--<script src="{{asset('js/main.js')}}"></script>--}}
@yield('customScripts')

</body>
</html>
