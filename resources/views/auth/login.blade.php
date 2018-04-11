@extends('layouts.app')



@section('styles')

@endsection

@section('nav')
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

        <li class="dropdown"><a href="#">Projets</a>
            <ul>
                <li><a href="#">Project Gallery</a></li>
                <li><a href="#">Project Grid</a></li>
                <li><a href="#">Projects Grid With Filter</a></li>
                <li><a href="#">Project With Sidebar</a></li>
                <li><a href="#">Project Manasory</a></li>
                <li><a href="#">Project Single Detail</a></li>
            </ul>
        </li>

        <li class="dropdown"><a href="#">Profile</a>
            <ul>
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
        </li>
    </ul>
@endsection

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{asset('img/breadcrumb/breadcrumb-bg.jpg')}});">
        <div class="container text-center">
            <h1>Se connecter</h1>
            <span class="border"></span>
        </div>
    </section>


    <section class="account-area">
        <div class="container">
            <div class="row">
    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12"style="margin-left: 400px">
        <div class="form login-form">
            <div class="sec-title two">
                <h1>Login Now</h1>
                <span class="border"></span>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="field-label">Username or Email</div>
                        <div class="field-input">
                            <input id="email" type="text" name="email" placeholder="foulen@gmail.com">
                            <div class="icon-holder">
                                <span class="flaticon-user-shape"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="field-label">Password</div>
                        <div class="field-input">
                            <input class="password" type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                            <div class="icon-holder">
                                <span class="flaticon-padlock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="remember-me pull-left">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"><span>Remember me</span>
                                </label>
                            </div>
                        </div>
                        <div class="forgot-password pull-right">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="login-btn" type="submit">Login now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </section>
    {{--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa--}}
    {{--<body class="cm-login">--}}
    {{--<div class="text-center" style="padding-top: 100px;background:#fff;border-bottom:1px solid #ddd">--}}
        {{--<img src="{{asset('assets/img/logo-baladya.PNG')}}">--}}
    {{--</div>--}}
{{--<div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">--}}
    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
        {{--{{ csrf_field() }}--}}
        {{--<div class="col-xs-12">--}}
            {{--<div class="form-group">--}}
                {{--<div class="input-group">--}}
                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<div class="input-group">--}}
                             {{--<div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>--}}
                            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Adresse mail">--}}
                              {{--@if ($errors->has('email'))--}}
                               {{--<span class="help-block">--}}
                                 {{--<strong>{{ $errors->first('email') }}</strong>--}}
                               {{--</span>--}}
                             {{--@endif--}}
                         {{--</div>--}}
                     {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<div class="input-group">--}}

                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<div class="input-group">--}}
                          {{--<div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>--}}
                    {{--<input class="form-control" type="password" class="form-control" name="password" required placeholder="Mot de passe">--}}

                    {{--@if ($errors->has('password'))--}}
                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}
                         {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-xs-6">--}}
            {{--<button type="submit" class="btn btn-block btn-primary" style="float: right">Se connecter</button>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}

    {{--</body>--}}

@endsection
