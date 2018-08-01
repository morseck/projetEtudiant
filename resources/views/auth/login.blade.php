@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4" style="margin-top: 40px;">
            <div class="panel panel-default" style="background: rgba(0,0,0,0.7); border: 2px solid transparent; box-shadow: 1px 10px 20px 2px #000;">
                <div class="text-center" style="margin-top: 5px;">

                    <a href="{{url('/language/en')}}" style="margin-right: 10px;">
                        <img width="30px" src="{{asset('img/drapeau/en.png')}}"></i>
                    </a>
                    <a href="{{url('/language/fr')}}">
                        <img width="30px" src="{{asset('img/drapeau/fr.png')}}"></i>
                    </a>

                </div>
                <div class="panel-body">
                    <p class="text-center" style=""><img src="{{asset('img/etudiant.03_transparent.png')}}" style="width: 60%;"></p>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom: 30px;">
                            <label for="email" class="col-md-4 " style="margin-bottom: -10px;"><i class="material-icons">person</i></label>


                            <div class="col-md-6">
                                <input style="color: #fff;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{trans('file.email')}}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4"><i class="material-icons">lock</i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" style="color: #fff;" class="form-control" name="password" placeholder="{{trans('file.motDePasse')}}" required >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    {{trans('file.connexion')}}
                                </button>

                            </div>
                        </div>

                        <div class="form-inline">
                            <div class="col-md-12">
                                <div class="checkbox pull-left">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span style="color: #DFDFDF;">{{trans('file.souvenir')}}</span>
                                    </label>
                                </div>

                                <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                                    {{trans('file.motDePasseOublie')}} ?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
