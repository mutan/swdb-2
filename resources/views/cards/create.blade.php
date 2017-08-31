@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12">

        <h2 class="text-center">Создать карту</h2><hr>

        <form action="{{ url('cards')}}" method="POST">
            {{ csrf_field() }}

            <div class="row">

                {{-- COLUMN 1 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="small">Название</label>
                        <input type="text" name="name" class="form-control input-sm" id="name" value="{{ old('name') }}" autofocus>
                        @if ($errors->has('name'))
                            <p class="help-block">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="image" class="small">Изображение</label>
                        <input type="text" name="image" class="form-control input-sm" id="image" value="{{ old('image') }}">
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <div class="form-group{{ $errors->has('edition_id') ? ' has-error' : '' }}">
                                <label for="edition_id" class="small">Выпуск</label>
                                <select name="edition_id" class="form-control input-sm" id="edition_id">
                                    <option></option>
                                    @foreach($editions as $edition)
                                        <option value="{{ $edition->id }}" @if($edition->id == old('edition_id') ) selected="selected" @endif>{{ $edition->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('edition_id'))
                                    <p class="help-block">{{ $errors->first('edition_id') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                <label for="number" class="small">Номер</label>
                                <input type="text" name="number" class="form-control input-sm" id="number" value="{{ old('number') }}">
                                @if ($errors->has('number'))
                                    <p class="help-block">{{ $errors->first('number') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('rarity_id') ? ' has-error' : '' }}">
                        <label for="rarity" class="small">Редкость</label>
                        <select name="rarity_id" class="form-control input-sm" id="rarity">
                            <option></option>
                            @foreach($rarities as $rarity)
                                <option value="{{ $rarity->id }}" @if($rarity->id == old('rarity_id') ) selected="selected" @endif>{{ $rarity->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('rarity_id'))
                            <p class="help-block">{{ $errors->first('rarity_id') }}</p>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('race') ? ' has-error' : '' }}">
                        <label for="race" class="small">Раса</label>
                        <select multiple name="race[]" class="form-control input-sm" id="race">
                            @foreach($races as $race)
                                <option value="{{ $race->id }}"
                                    @if( in_array($race->id, (old('race')) ? old('race') : []) ) selected="selected" @endif>
                                    {{ $race->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('race'))
                            <p class="help-block">{{ $errors->first('race') }}</p>
                        @endif
                    </div>

                  <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="type" class="small">Тип</label>
                        <select multiple name="type[]" class="form-control input-sm" id="type">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}"
                                    @if( in_array($type->id, (old('type')) ? old('type') : []) ) selected="selected" @endif>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('type'))
                            <p class="help-block">{{ $errors->first('type') }}</p>
                        @endif
                    </div>

                  <div class="form-group{{ $errors->has('artist') ? ' has-error' : '' }}">
                        <label for="artist" class="small">Художник</label>
                        <select multiple name="artist[]" class="form-control input-sm" id="artist">
                            @foreach($artists as $artist)
                                <option value="{{ $artist->id }}"
                                    @if( in_array($artist->id, (old('artist')) ? old('artist') : []) ) selected="selected" @endif>
                                    {{ $artist->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('artist'))
                            <p class="help-block">{{ $errors->first('artist') }}</p>
                        @endif
                    </div>

                </div>

                {{-- COLUMN 2 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="form-group{{ $errors->has('firepower') ? ' has-error' : '' }}">
                                <label for="firepower" class="small">Огневая мощь</label>
                                <input type="text" name="firepower" class="form-control input-sm" id="firepower" value="{{ old('firepower') }}">
                                @if ($errors->has('firepower'))
                                    <p class="help-block">{{ $errors->first('firepower') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="form-group{{ $errors->has('defence') ? ' has-error' : '' }}">
                                <label for="defence" class="small">Защита</label>
                                <input type="text" name="defence" class="form-control input-sm" id="defence" value="{{ old('defence') }}">
                                @if ($errors->has('defence'))
                                    <p class="help-block">{{ $errors->first('defence') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group{{ $errors->has('energy') ? ' has-error' : '' }}">
                                <label for="energy" class="small">Энергия</label>
                                <input type="text" name="energy" class="form-control input-sm" id="energy" value="{{ old('energy') }}">
                                @if ($errors->has('energy'))
                                    <p class="help-block">{{ $errors->first('energy') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group{{ $errors->has('strategy_points') ? ' has-error' : '' }}">
                                <label for="strategy_points" class="small">Страт. поб.</label>
                                <input type="text" name="strategy_points" class="form-control input-sm" id="strategy_points" value="{{ old('strategy_points') }}">
                                @if ($errors->has('strategy_points'))
                                    <p class="help-block">{{ $errors->first('strategy_points') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group{{ $errors->has('dopotsek') ? ' has-error' : '' }}">
                                <label for="dopotsek" class="small">Доп. отсек</label>
                                <input type="text" name="dopotsek" class="form-control input-sm" id="dopotsek" value="{{ old('dopotsek') }}">
                                @if ($errors->has('dopotsek'))
                                    <p class="help-block">{{ $errors->first('dopotsek') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                   <div class="form-group">
                        <label for="erratas" class="small">Эрраты</label>
                        <textarea name="erratas" class="form-control input-sm" id="erratas" rows="1">{{ old('erratas') }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="comments" class="small">Комментарии</label>
                        <textarea name="comments" class="form-control input-sm" id="comments" rows="1">{{ old('comments') }}</textarea>
                    </div>

                </div>

                {{-- COLUMN 3 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="form-group">
                        <label for="features_line" class="small">Строка особенностей</label>
                        <textarea name="features_line" class="form-control input-sm" id="features_line" rows="1">{{ old('features_line') }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="command_line_1" class="small">Командная строка 1</label>
                        <textarea name="command_line_1" class="form-control input-sm" id="command_line_1" rows="1">{{ old('command_line_1') }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="command_line_2" class="small">Командная строка 2</label>
                        <textarea name="command_line_2" class="form-control input-sm" id="command_line_2" rows="1">{{ old('command_line_2') }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="flavor" class="small">Художественный текст</label>
                        <textarea name="flavor" class="form-control input-sm" id="flavor" rows="1">{{ old('flavor') }}</textarea>
                    </div>

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
