<header>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('pc-configurator') }}" class="nav-link {{ Route::is('pc-configurator') ? 'active' : '' }}
                        " aria-current="page">Konfigurátor</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}">O webu</a></li>
            </ul>
        </header>
    </div>
</header>
