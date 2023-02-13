@extends('layout.layout')

@section('title')
Регистрация
@endsection('title')

@section('content')
<h1>Регистрация</h1>

<div class="text-block">
    <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <br>

        <div>
            <label for="name">Имя:</label>
            <input name="name" value="{{ old('name') }}">
        </div>
        <div class="validation_error">
            @error('name')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="surname">Фамилия:</label>
            <input name="surname" value="{{ old('surname') }}">
        </div>

        <div>
            <label for="name">Дата рождения:</label>
            <input name="birthday" type="date" value="{{ old('birthday') }}">
        </div>

        <br>

        <fieldset>
            <legend>Выберите свой пол:*</legend>
            <label>
                <input name="gender" type="radio" value="male">
                Мужской</label>
            <br>
            <label>
                <input name="gender" type="radio" value="female">
                Женский</label>
            <div class="validation_error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </fieldset>

        <br><br>

        <div>
        <label class="photo" for="photo">Фото:</label>
        <input type="file" name="photo" accept=".png,.jpeg,.jpg" value="{{ old('photo') }}">
        </div>
        <div class="validation_error">
            @error('photo')
            {{ $message }}
            @enderror
        </div>


        <br>

        <div>
            <label for="name">Email:*</label>
            <input name="email" value="{{ old('email') }}">
        </div>
        <div class="validation_error">
            @error('email')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="login">Придумайте логин:*</label>
            <input name="login" value="{{ old('login') }}">
        </div>
        <div class="validation_error">
            @error('login')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="password">Придумайте пароль:*</label>
            <input name="password" type="password">
        </div>
        <div class="validation_error">
            @error('password')
            {{ $message }}
            @enderror
        </div>

        <br>

        <div><button type="submit">Зарегистрироваться</button></div>
    </form>
</div>
@endsection('content')