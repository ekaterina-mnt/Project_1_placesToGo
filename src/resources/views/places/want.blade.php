@extends('layout.layout')

@section('title')
Хочу пойти
@endsection('title')

@section('content')

@if (auth()->user())

<h1>Хочу пойти</h1>

@if ($places != null) 

<table>
    <tr>
        <th class="places_1">Название</th>
        <th class="places_2">Дата</th>
        <th class="places_3">Цена</th>
        <th class="places_4">Комментарий</th>
        <th class="places_5"></th>
    </tr>
    @foreach ($places as $place)
    <tr>
        <td class="places_1">
            <a href="{{ $place->link }}" target="_blank">
                {{ $place->name }}
            </a>
        </td>
        <td class="places_2">
            @if ($place->date)
            {{ $place->date }}
            @else
            -
            @endif
        </td>
        <td class="places_3">
            @if ($place->price)
            {{ $place->price }}
            @else
            -
            @endif
        </td>
        <td class="places_4">
            @if ($place->comment)
            {{ $place->comment }}
            @else
            -
            @endif
        </td>
        <td class="places_5">
            <form action=" {{ url('/places/move/' . $place->id) }}" method="POST">
                @csrf
                <button class="smaller" type="submit">Уже был(а)</button>
            </form>
        </td>
        <td class="places_6">
            <form action=" {{ url('/places/delete/' . $place->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="smaller" type="submit">Удалить</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@else

<p>Здесь будут места, куда я хочу пойти.</p>

@endif

<br>

<form action=" {{ url('/places/add') }}">
    <button class="smaller" type="submit">Добавить новое место</button>
</form>

<form action=" {{ url('/places/was') }}">
    <button class="smaller" type="submit">Посмотреть мои старые места</button>
</form>

@else 

<h2>Доступ ограничен</h2>

<p>Для посещения этой страницы необходимо авторизоваться.</p>

@endif

@endsection('content')