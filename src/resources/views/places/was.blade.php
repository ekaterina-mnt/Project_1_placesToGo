@extends('layout.layout')

@section('title')
Хочу пойти
@endsection('title')

@section('content')
<p>Здесь будут места, где я уже была.</p>
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
            <form action=" {{ url('/places/delete/' . $place->id) }}">
                @csrf
                @method('DELETE')
                <button class="smaller" type="submit">Удалить</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection('content')