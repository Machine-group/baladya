@extends('layouts.app')



@section('styles')
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
    @endsection

@section('content')

    {{--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa--}}
    <body class="cm-login">
    <div class="text-center" style="padding-top: 100px;background:#fff;border-bottom:1px solid #ddd">
        <img src="{{asset('assets/img/logo-baladya.PNG')}}">
    </div>
<div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="col-xs-12">
            <div class="form-group">
                <div class="input-group">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                             <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Adresse mail">
                              @if ($errors->has('email'))
                               <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                               </span>
                             @endif
                         </div>
                     </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
                    <input class="form-control" type="password" class="form-control" name="password" required placeholder="Mot de passe">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                         </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-6">
            <button type="submit" class="btn btn-block btn-primary" style="float: right">Se connecter</button>
        </div>
    </form>
</div>

    </body>

@endsection
