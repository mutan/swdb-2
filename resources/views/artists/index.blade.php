@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

        <h2 class="text-center">Художники (artists)</h2><hr>

        <a class="btn btn-sm btn-default" href="{{ url('artists/create')}}" role="button"><i class="fa fa-btn fa-plus"></i> Добавить</a>
        <br><br>

        <table class="table table-sm">
            <thead>
                <tr>
                    <th class="text-center">Название</th>
                    <th class="text-center">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>
                            <a href="{{ url('artists/' . $artist->id) }}">{{ $artist->name }}</a>
                        </td>

                        <td class="text-center">
                            <a class="btn btn-sm btn-default" href="{{ url('artists/' . $artist->id . '/edit') }}" title="Редактировать"><i class="fa fa-btn fa-edit"></i><span class="hidden-xs hidden-sm"> Редактировать</span></a>
                            <a class="btn btn-sm btn-default" href="{{ url('artists/' . $artist->id) }}" title="Удалить" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Действительно удалить запись: {{ $artist->name }}?"><i class="fa fa-btn fa-trash"></i><span class="hidden-xs hidden-sm"> Удалить</span></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection
