@extends('layouts.main')

@section('content')

<div class="row ">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">

        <h2 class="text-center">Создать редкость</h2>
        <hr>

        <form class="form-horizontal" action="{{ url('rarities')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-4 control-label input-sm">Название</label>
                <div class="col-sm-8">
                    <input type="text" name="name" class="form-control input-sm" id="name" value="{{ old('name') }}" autofocus>
                    @if ($errors->has('name'))
                        <p class="help-block">{{ $errors->first('name') }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-sm btn-default">
                    <i class="fa fa-btn fa-save"></i> Сохранить
                </button>
            </div>
        </form>

    </div>
</div>

@endsection
