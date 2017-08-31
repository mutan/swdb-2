@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

        <h2 class="text-center">Карта: {{ $card->name }}</h2>
        <hr>

        <div class="text-center">
            <a class="btn btn-sm btn-default" href="{{ url('cards')}}" role="button"><i class="fa fa-btn fa-arrow-left"></i> Список карт</a>

            <a class="btn btn-sm btn-default" alt="Редактировать" title="Редактировать" href="{{ url('cards/' . $card->id . '/edit') }}"><i class="fa fa-btn fa-edit"></i> Редактировать</a>
        </div>

        <hr>

        <dl class="row">
            <dt class="col-sm-4">Название</dt>
            <dd class="col-sm-8">{{ $card->name }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Изображение</dt>
            <dd class="col-sm-8">{{ $card->image }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Номер</dt>
            <dd class="col-sm-8">{{ $card->number }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Выпуск</dt>
            <dd class="col-sm-8">{{ $card->edition->name }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Редкость</dt>
            <dd class="col-sm-8">{{ $card->rarity->name }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Раса</dt>
            <dd class="col-sm-8">
                @foreach($card->races as $race)
                    {{ $race->name }}@if(! $loop->last),@endif
                @endforeach
            </dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Тип</dt>
            <dd class="col-sm-8">
                @foreach($card->types as $type)
                    {{ $type->name }}@if(! $loop->last),@endif
                @endforeach
            </dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Художник</dt>
            <dd class="col-sm-8">
                @foreach($card->artists as $artist)
                    {{ $artist->name }}@if(! $loop->last),@endif
                @endforeach
            </dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Огн. сила / Защита</dt>
            <dd class="col-sm-8">{{ $card->firepower }} / {{ $card->defence }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Энергия</dt>
            <dd class="col-sm-8">{{ $card->energy }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Доп. отсек</dt>
            <dd class="col-sm-8">{{ $card->dopotsek }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Страт. победа</dt>
            <dd class="col-sm-8">{{ $card->strategy_points }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Строка особенностей</dt>
            <dd class="col-sm-8">{{ $card->features_line }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Командная строка 1</dt>
            <dd class="col-sm-8">{{ $card->command_line_1 }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Командная строка 2</dt>
            <dd class="col-sm-8">{{ $card->command_line_2 }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Худ. текст</dt>
            <dd class="col-sm-8">{{ $card->flavor }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Эрраты</dt>
            <dd class="col-sm-8">{{ $card->erratas }}</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-4">Комментарии</dt>
            <dd class="col-sm-8">{{ $card->comments }}</dd>
        </dl>

    </div>
</div>
    
@endsection
