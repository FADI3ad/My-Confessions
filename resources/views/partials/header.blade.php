<header class="top-navbar">
    <nav class="nav-links">
        <div>
            <ul class="navbars">
                <a href="{{ route('theme.index') }}" class="links @yield('home-active')"><i class="fas fa-home"></i></a>
                <a href="{{ route('theme.latecomers') }}" class="links  @yield('late-active')"><i class="fa-solid fa-clock"></i></a>
                <a href="{{ route('theme.birthdays') }}" class="links @yield('birthdays-active')"><i class="fa-solid fa-cake-candles"></i></a>
                <a href="{{ route('theme.served.index') }}" class="links @yield('allserved-active')"><i class="fas fa-user-group"></i></a>
                <a href="{{ route('theme.served.create') }}" class="links @yield('addnewserved-active')"><i class="fa-solid fa-user-plus"></i></a>
            </ul>
        </div>
    </nav>

</header>
