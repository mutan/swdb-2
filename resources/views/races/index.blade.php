@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

        <h2 class="text-center">Расы (races)</h2>
        <hr>

        <a class="btn btn-sm btn-default" href="{{ url('races/create')}}" role="button"><i class="fa fa-btn fa-plus"></i> Добавить</a>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Название</th>
                    <th class="text-center">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($races as $race)
                    <tr>
                        <td>
                            <a href="{{ url('races/' . $race->id) }}">{{ $race->name }}</a>
                        </td>

                        <td class="text-center">
                            <a class="btn btn-sm btn-default" href="{{ url('races/' . $race->id . '/edit') }}" title="Редактировать"><i class="fa fa-btn fa-edit"></i><span class="hidden-xs hidden-sm"> Редактировать</span></a>
                            <a class="btn btn-sm btn-default" href="{{ url('races/' . $race->id) }}" title="Удалить" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Действительно удалить запись: {{ $race->name }}?"><i class="fa fa-btn fa-trash"></i><span class="hidden-xs hidden-sm"> Удалить</span></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection
