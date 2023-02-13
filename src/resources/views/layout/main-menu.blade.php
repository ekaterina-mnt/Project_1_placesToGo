<div class="header">
    <ul>
        <li><a href="{{ url('/') }}">Главная</a></li>
        <li><a href="{{ url('/ideas') }}">Найти идею</a></li>
        <li><a href="{{ url('/places/add') }}">Добавить место</a></li>


        @if (auth()->user())

        <!-- Хочу пойти -->
        <li><a href="{{ url('places/want') }}">Хочу пойти</a></li>
        
        <!-- Уже посетил(а) -->
        <li><a href="{{ url('places/was') }}">
                @if (auth()->user()->gender == 'female')
                Уже посетила
                @else
                Уже посетил
                @endif
            </a></li>

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