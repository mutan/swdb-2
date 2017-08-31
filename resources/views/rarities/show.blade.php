@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

            <h2 class="text-center">Редкость: {{ $rarity->name }}</h2><hr>

            <div class="text-center">
                <a class="btn btn-sm btn-default" href="{{ url('rarities')}}" role="button"><i class="fa fa-btn fa-arrow-left"></i> Список редкостей</a>

                <a class="btn btn-sm btn-default" alt="Редактировать" title="Редактировать" href="{{ url('rarities/' . $rarity->id . '/edit') }}"><i class="fa fa-btn fa-edit"></i> Редактировать</a>
            </div>

            <hr>

            <dl class="row">
                <dt class="col-sm-4">Название</dt>
                <dd class="col-sm-8">{{ $rarity->name }}</dd>
            </dl>

        </div>
    </div>
    
@endsection
