@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12">

        <h2 class="text-center">Редактировать карту</h2><hr>

        <form action="{{ url('cards/' . $card->id)}}" method="POST">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="row">

                {{-- COLUMN 1 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="form-group">
                        <label for="name" class="small">Название</label>
                        <input type="text" name="name" class="form-control input-sm" id="name" value="{{ old('name', $card->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="image" class="small">Изображение</label>
                        <input type="text" name="image" class="form-control input-sm" id="image" value="{{ old('image', $card->image) }}">
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <div class="form-group">
                                <label for="edition" class="small">Выпуск</label>
                                <select name="edition_id" class="form-control input-sm" id="edition">
                                    <option></option>
                                    @foreach($editions as $edition)
                                        <option value="{{ $edition->id }}" @if($edition->id == $card->edition->id) selected="selected" @endif>{{ $edition->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group">
                                <label for="number" class="small">Номер</label>
                                <input type="text" name="number" class="form-control input-sm" id="number" value="{{ old('number', $card->number) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rarity" class="small">Редкость</label>
                        <select name="rarity_id" class="form-control input-sm" id="rarity">
                            <option></option>
                            @foreach($rarities as $rarity)
                                <option value="{{ $rarity->id }}" @if($rarity->id == $card->rarity->id) selected="selected" @endif>{{ $rarity->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="race" class="small">Раса</label>
                        <select multiple name="race[]" class="form-control input-sm" id="race">
                            @foreach($races as $race)
                                <option value="{{ $race->id }}"
                                    @if( in_array($race->id, (old('race')) ? old('race') : $card->races->pluck('id')->toArray() ) ) selected="selected" @endif>
                                    {{ $race->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type" class="small">Тип</label>
                        <select multiple name="type[]" class="form-control input-sm" id="type">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}"
                                    @if( in_array($type->id, (old('type')) ? old('type') : $card->types->pluck('id')->toArray() ) ) selected="selected" @endif>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="artist" class="small">Художник</label>
                        <select multiple name="artist[]" class="form-control input-sm" id="artist">
                            @foreach($artists as $artist)
                                <option value="{{ $artist->id }}"
                                    @if( in_array($artist->id, (old('artist')) ? old('artist') : $card->artists->pluck('id')->toArray() ) ) selected="selected" @endif>
                                    {{ $artist->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                {{-- COLUMN 2 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="form-group">
                                <label for="firepower" class="small">Огневая мощь</label>
                                <input type="text" name="firepower" class="form-control input-sm" id="firepower" value="{{ old('firepower', $card->firepower) }}">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="form-group">
                                <label for="defence" class="small">Защита</label>
                                <input type="text" name="defence" class="form-control input-sm" id="defence" value="{{ old('defence', $card->defence) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group">
                                <label for="energy" class="small">Энергия</label>
                                <input type="text" name="energy" class="form-control input-sm" id="energy" value="{{ old('energy', $card->energy) }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group">
                                <label for="strategy_points" class="small">Страт. поб.</label>
                                <input type="text" name="strategy_points" class="form-control input-sm" id="strategy_points" value="{{ old('strategy_points', $card->strategy_points) }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="form-group">
                                <label for="dopotsek" class="small">Доп. отсек</label>
                                <input type="text" name="dopotsek" class="form-control input-sm" id="dopotsek" value="{{ old('dopotsek', $card->dopotsek) }}">
                            </div>
                        </div>
                    </div>

                   <div class="form-group">
                        <label for="erratas" class="small">Эрраты</label>
                        <textarea name="erratas" class="form-control input-sm" id="erratas" rows="1">{{ old('erratas', $card->erratas) }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="comments" class="small">Комментарии</label>
                        <textarea name="comments" class="form-control input-sm" id="comments" rows="1">{{ old('comments', $card->comments) }}</textarea>
                    </div>

                </div>

                {{-- COLUMN 3 --}}
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="form-group">
                        <label for="features_line" class="small">Строка особенностей</label>
                        <textarea name="features_line" class="form-control input-sm" id="features_line" rows="1">{{ old('features_line', $card->features_line) }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="command_line_1" class="small">Командная строка 1</label>
                        <textarea name="command_line_1" class="form-control input-sm" id="command_line_1" rows="1">{{ old('command_line_1', $card->command_line_1) }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="command_line_2" class="small">Командная строка 2</label>
                        <textarea name="command_line_2" class="form-control input-sm" id="command_line_2" rows="1">{{ old('command_line_2', $card->command_line_2) }}</textarea>
                    </div>

                   <div class="form-group">
                        <label for="flavor" class="small">Художественный текст</label>
                        <textarea name="flavor" class="form-control input-sm" id="flavor" rows="1">{{ old('flavor', $card->flavor) }}</textarea>
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
