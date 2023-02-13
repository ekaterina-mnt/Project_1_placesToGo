@extends('layout.layout')

@section('title')
Регистрация
@endsection('title')

@section('content')
<h1>Добавить место</h1>

<form action="{{ url('places/add') }}" method="POST">
    @csrf

    <br>

    <div>
        <label for="name">Название:*</label>
        <input name="name" value="{{ old('name') }}">
    </div>
    <div class="validation_error">
        @error('name')
        {{ $message }}
        @enderror
    </div>

    <br>

    <div>
        <label for="price">Цена:</label>
        <input name="price" value="{{ old('price') }}">
    </div>
    <div class="validation_error">
        @error('price')
        {{ $message }}
        @enderror
    </div>

    <br>

    <div>
        <label for="date">Дата:</label>
        <input name="date" value="{{ old('date') }}">
    </div>
    <div class="validation_error">
        @error('date')
        {{ $message }}
        @enderror
    </div>

    <br>

    <div>
        <label for="link">Ссылка:*</label>
        <input name="link" value="{{ old('link') }}">
    </div>
    <div class="validation_error">
        @error('link')
        {{ $message }}
        @enderror
    </div>

    <br>

    <div>
        <label for="comment">Комментарий:</label>
        <input name="comment" value="{{ old('comment') }}" type="text">
    </div>
    <div class="validation_error">
        @error('comment')
        {{ $message }}
        @enderror
    </div>

    <br>

    <div>
        <select name="type">
            <option value="want">Хочу пойти</option>
            <option value="was">Уже посетил(а)</option>
        </select>
    </div>
    <div class="validation_error">
        @error('comment')
        {{ $message }}
        @enderror
    </div>

    <br>

    <div><button type="submit">Добавить место</button></div>
</form>

@endsection('content')