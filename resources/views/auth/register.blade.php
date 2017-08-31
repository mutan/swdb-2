@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">

        <h2 class="text-center">Регистрация</h2>
        <hr>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-4 control-label input-sm">Имя</label>
                <div class="col-sm-8">
                    <input type="text" name="name" class="form-control input-sm" id="name" value="{{ old('name') }}" autofocus>
                    @if ($errors->has('name'))
                        <p class="help-block">{{ $errors->first('name') }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-4 control-label input-sm">Эл. почта</label>
                <div class="col-sm-8">
                    <input type="text" name="email" class="form-control input-sm" id="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <p class="help-block">{{ $errors->first('email') }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-4 control-label input-sm">Пароль</label>
                <div class="col-sm-8">
                    <input type="password" name="password" class="form-control input-sm" id="password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <p class="help-block">{{ $errors->first('password') }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-sm-4 control-label input-sm">Повтор пароля</label>
                <div class="col-sm-8">
                    <input id="password-confirm" type="password" class="form-control input-sm" name="password_confirmation">
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>

        </form>

    </div>
</div>

@endsection
