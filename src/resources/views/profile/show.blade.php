@extends('layout.layout')

@section('title')
Профиль
@endsection('title')

@section('content')
<h1>Мой профиль</h1>

<p><img src="{{ $user->photo }}" width=150></p>

<p><b>Имя:</b>
    @if ($user->name)
    {{ $user->name }}
    @else
    не указано
    @endif
</p>
<p><b>Фамилия:</b>
    @if ($user->surname)
    {{ $user->surname }}
    @else
    не указано
    @endif
</p>
<p><b>Дата рождения:</b>
    @if ($user->birthday)
    {{ date('d.m.Y', strtotime($user->birthday)) }}
    @else
    не указано
    @endif
</p>
<p><b>Пол:</b>
    @if ($user->gender == 'female')
    женский
    @elseif ($user->gender == 'male')
    мужской
    @endif
</p>
<p><b>Email:</b> {{ $user->email }}</p>

<br>
<form action="{{ url('profile/edit') }}">
    <button type="submit">Изменить профиль</button>
</form>
@endsection('content')