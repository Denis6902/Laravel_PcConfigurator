<header>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('pcConfigurator') }}" class="nav-link {{ Route::is('pcConfigurator') ? 'active' : '' }}
                        " aria-current="page">Konfigurátor</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}">O webu</a></li>
                <li class="nav-item {{ \Illuminate\Support\Facades\Session::get('theme') == 'white' ? 'hidden' : '' }}"><a href="{{ route('switchTheme') }}" class="nav-link">Přepnout na světlý režím</a></li>
                <li class="nav-item {{ \Illuminate\Support\Facades\Session::get('theme') == 'dark' ? 'hidden' : '' }}"><a href="{{ route('switchTheme') }}" class="nav-link">Přepnout na tmavý režím</a></li>
            </ul>
        </header>
    </div>
</header>
