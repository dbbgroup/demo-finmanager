<header class="header">
    <div class="header-wrapper d-flex flex-row">
        <div class="logotype-wrapper">
            <span>DBB</span>
            <span>Финансы</span>
        </div>

        <div class="navbar-wrapper">
            <nav class="navbar d-flex flex-row">
                <a href="{{ URL::to('/') }}" class="header-link">Главная</a>
                <a href="{{ URL::to('auth') }}" class="header-link">Авторизация</a>
            </nav>
        </div>
    </div>
</header>
