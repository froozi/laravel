<!-- Header -->
<header id="header">
    <div class="header_logo"><img src="images/logo.jpeg" alt=""/></div>
    <h1><a href="index.html">9 мая</a></h1>
    <nav class="links">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>

            @guest

                <li ><a href="{{ route('signup') }}">Регистрация</a></li>
                <li ><a href="{{ route('signin') }}">Авторизация</a></li>
            @endguest

            @auth
                <li ><a href="">{{ Auth::user()->username }}</a></li>
                <li  ><a href="{{ route('auth.logout') }}">Выход</a></li>
            @endauth
        </ul>
    </nav>
</header>
