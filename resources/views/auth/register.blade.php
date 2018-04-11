@extends('layouts.app')

@section('content')
    {{--<section class="breadcrumb-area" style="background-image: url({{asset('img/breadcrumb/breadcrumb-bg.jpg')}});">--}}
        {{--<div class="container text-center">--}}
            {{--<h1>Demande d'adhération</h1>--}}
            {{--<span class="border"></span>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--End breadcrumb area-->--}}

    {{--<!--Start breadcrumb bottom area-->--}}
    {{--<section class="account-area" style="">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
    {{--<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">--}}
        {{--<div class="form register">--}}
            {{--<div class="sec-title two">--}}
                {{--<h1>Register Here</h1>--}}
                {{--<span class="border"></span>--}}
            {{--</div>--}}
            {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
            {{--{{ csrf_field() }}--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                        {{--<div class="field-label">Nom complet</div>--}}
                        {{--<div class="field-input">--}}
                            {{--<input type="text" name="name" placeholder="foulen ben foulen">--}}

                            {{--@if ($errors->has('name'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                            {{--<div class="icon-holder">--}}
                                {{--<span class="flaticon-user-shape"></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<div class="field-label">Email Address</div>--}}
                        {{--<div class="field-input">--}}
                            {{--<input type="text" name="email" placeholder="mail@mail.tn">--}}

                            {{--@if ($errors->has('email'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                            {{--<div class="icon-holder">--}}
                                {{--<span class="flaticon-e-mail-envelope"></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<div class="field-label">Password</div>--}}
                        {{--<div class="field-input">--}}
                            {{--<input type="password" name="password" placeholder="">--}}

                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}

                            {{--<div class="icon-holder">--}}
                                {{--<span class="flaticon-padlock"></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="field-label">Confirm Password</div>--}}
                        {{--<div class="field-input">--}}
                            {{--<input type="password" name="password_confirmation" placeholder="">--}}
                            {{--<div class="icon-holder">--}}
                                {{--<span class="flaticon-unblocked-padlock"></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<button class="cre-acc" type="submit">Create Account</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa--}}
<div class="container" style="padding-top: 100px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body" >
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
