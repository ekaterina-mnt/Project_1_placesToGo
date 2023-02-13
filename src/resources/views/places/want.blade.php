@extends('layout.layout')

@section('title')
Хочу пойти
@endsection('title')

@section('content')
<p>Здесь будут места, куда я хочу пойти.</p>

<!-- <form action="{{ url('places/add') }}">
    <button type="submit">Добавить новое место</button>
</form> -->

<table>
    <tr>
        <th>Название</th>
        <th>Дата</th>
        <th>Цена</th>
        <th>Комментарий</th>
        <th></th>
    </tr>
    @foreach ($places as $place)
    <tr>
        <td>
            <a href="{{ $place->link }}" target="_blank">
                {{ $place->name }}
            </a>
        </td>
        <td>
            @if ($place->date)
            {{ $place->date }}
            @else
            -
            @endif
        </td>
        <td>
            @if ($place->price)
            {{ $place->price }}
            @else
            -
            @endif
        </td>
        <td>
            @if ($place->comment)
            {{ $place->comment }}
            @else
            -
            @endif
        </td>
        <td>
            <form action=" {{ url('/places/move/' . $place->id) }}" method="POST">
                {!! csrf_field() !!}
                <button class="smaller" type="submit">Уже был(а)</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection('content')