@extends('layout.layout')

@section('title')
Регистрация
@endsection('title')

@section('content')
<h1>Изменить профиль</h1>

<div class="text-block">
    <!-- Фото пользователя (если он добавлял) -->
    @if ($user->photo)
    <img src="{{ $user->photo }}" width=150>
    <br>
    <form action=" {{ url('/profile/photo/delete/' . $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="smaller" type="submit">Удалить фото</button>
    @endif
    </form>

    <form action="{{ url('/profile/edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <!-- Пустая аватарка -->
            @if (!$user->photo)
            <img src="{{ asset('empty-photo.jpg') }}" width=150><br>
            @endif
            <input class="photo" type="file" name="photo" accept=".png,.jpeg,.jpg" value="{{ $user->photo }}">
        </div>
        <div class="validation_error">
            @error('photo')
            {{ $message }}
            @enderror
        </div>

        <br>

        <div>
            <label for="name">Имя:</label>
            <input name="name" placeholder="не указано" value="{{ $user->name }}">
        </div>
        <div class="validation_error">
            @error('name')
            {{ $message }}
            @enderror
        </div>

        <br>

        <div>
            <label for="surname">Фамилия:</label>
            <input name="surname" placeholder="не указано" value="{{ $user->surname }}">
        </div>

        <br>

        <div>
            <label for="name">Дата рождения:</label>
            <input name="birthday" type="date" value="{{ $user->birthday }}">
        </div>

        <br>

        <fieldset>
            <legend>Выберите свой пол:*</legend>
            <label>
                @if ($user->gender === 'male')
                <input name="gender" placeholder="gender" type="radio" value="male" checked>
                @else
                <input name="gender" placeholder="gender" type="radio" value="male">
                @endif
                Мужской</label>
            <br>
            <label>
                @if ($user->gender === 'female')
                <input name="gender" placeholder="gender" type="radio" value="female" checked>
                @else
                <input name="gender" placeholder="gender" type="radio" value="female">
                @endif
                Женский</label>
            <div class="validation_error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </fieldset>

        <br><br>

        <div><button type="submit">Сохранить изменения</button></div>
    </form>
</div>
@endsection('content')