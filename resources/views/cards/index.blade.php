@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

        <h2 class="text-center">Карты (cards)</h2>
        <hr>

        <a class="btn btn-sm btn-default" href="{{ url('cards/create')}}" role="button"><i class="fa fa-btn fa-plus"></i> Добавить</a>
        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Номер</th>
                        <th class="text-center">Название</th>
                        <th class="text-center">Выпуск</th>
                        <th class="text-center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cards as $card)
                        <tr>
                            <td>{{ $card->number }}</td>
                            <td><a href="{{ url('cards/' . $card->id) }}">{{ $card->name }}</a></td>
                            <td>{{ $card->edition->name }}</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-default" href="{{ url('cards/' . $card->id . '/edit') }}" title="Редактировать"><i class="fa fa-btn fa-edit"></i><span class="hidden-xs hidden-sm"> Редактировать</span></a>
                                <a class="btn btn-sm btn-default" href="{{ url('cards/' . $card->id) }}" title="Удалить" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Действительно удалить запись: {{ $card->name }}?"><i class="fa fa-btn fa-trash"></i><span class="hidden-xs hidden-sm"> Удалить</span></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
