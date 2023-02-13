<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/resources/css/app.css" />
    <title>@yield('title')</title>
</head>
<header>
    @include('layout.main-menu')
</header>

<body>
    <div class="content">

        <!-- Флэш-успех -->
        @if (Session::has('success'))
        <div class="success">
            {{ Session::get('success') }}
        </div>
        @endif

        <!-- Флэш-ошибка -->
        @if (Session::has('fail'))
        <div class="fail">
            {{ Session::get('fail') }}
        </div>
        @endif

        @yield('content')
    </div>
</body>

</html>