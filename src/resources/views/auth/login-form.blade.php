@extends('layout.layout')

@section('title')
Войти
@endsection('title')

@section('content')
<h1>Аутентификация</h1>
    <div class="text-block">
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div>
                <label for="login">Введите логин:</label>
                <input name="login" value="{{ old('login') }}">
            </div>
            <div class="validation_error">
                @error('login')
                    {{ $message }}
                @enderror
            </div>

            <div>
                <label for="password">Введите пароль:</label>
                <input name="password" type="password">
            </div>
            <div class="validation_error">
                @error('password')
                    {{ $message }}
                @enderror
            </div>

            <br>

            <div><button type="submit">Войти</button></div>
        </form>
@endsection('content')