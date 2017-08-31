@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

        <h2 class="text-center">Выпуски (editions)</h2><hr>

        <a class="btn btn-sm btn-default" href="{{ url('editions/create')}}" role="button"><i class="fa fa-btn fa-plus"></i> Добавить</a>
        <br><br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">Название (кол-во карт)</th>
                    <th class="text-center">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editions as $edition)
                    <tr>
                        <td>
                            <a href="{{ url('editions/' . $edition->id) }}">{{ $edition->name }}</a> ({{ $edition->amount }})
                        </td>

                        <td class="text-center">
                            <a class="btn btn-sm btn-default" href="{{ url('editions/' . $edition->id . '/edit') }}" title="Редактировать"><i class="fa fa-btn fa-edit"></i><span class="hidden-xs hidden-sm"> Редактировать</span></a>
                            <a class="btn btn-sm btn-default" href="{{ url('editions/' . $edition->id) }}" title="Удалить" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Действительно удалить запись: {{ $edition->name }}?"><i class="fa fa-btn fa-trash"></i><span class="hidden-xs hidden-sm"> Удалить</span></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection
