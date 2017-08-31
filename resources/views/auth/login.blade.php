@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">

        <h2 class="text-center">Вход</h2>
        <hr>

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-4 control-label input-sm">Эл. почта</label>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control input-sm" id="email" value="{{ old('email') }}" autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-4 control-label input-sm">Пароль</label>
                <div class="col-sm-8">
                    <input type="password" name="password" class="form-control input-sm" id="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="checkbox col-sm-8 col-sm-offset-4">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                    </label>
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Войти</button>
                <a class="btn btn-link" href="{{ route('password.request') }}">Забыли пароль?</a>
            </div>
        </form>

    </div>
</div>

@endsection
