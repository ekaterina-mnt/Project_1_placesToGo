<div class="header">
    <ul>
        <li><a href="{{ url('/') }}">Главная</a></li>
        <li><a href="{{ url('/ideas') }}">Найти идею</a></li>

        <!-- Хочу пойти -->
        <li><a href="{{ url('places/want') }}">Мои места</a></li>

        @if (auth()->user())

        <!-- Аккаунт -->
        <li class="menu_item">
            <a href="{{ url('/profile') }}">{{ auth()->user()->login }}</a>
        </li>

        <!-- Выйти -->
        <li class="menu_item">
            <a href="{{ url('/logout') }}">Выйти</a>
        </li>

        @else
        <!-- Войти -->
        <li class="menu_item">
            <a href="{{ url('login') }}">Войти</a>
        </li>

        <!-- Зарегистрироваться -->
        <li class="menu_item">
            <a href="{{ url('/register') }}">Зарегистрироваться</a>
        </li>
        @endif
    </ul>
</div>