<header>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('pcConfigurator') }}"
                                        class="nav-link {{ Route::is('pcConfigurator') ? 'active' : '' }}
                                            " aria-current="page">Konfigurátor</a></li>
                <li class="nav-item">
                    <a href="{{route('productTypes')}}"
                       class="nav-link {{ Route::is('productTypes') ? 'active' : '' }}">
                        Produkty
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('brands')}}"
                       class="nav-link {{ Route::is('brands') ? 'active' : '' }}">
                        Značky
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}"
                    class="nav-link {{ Route::is('about') ? 'active' : '' }}">
                        O webu / Zadaní úkolu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="darkmode-button-header-id">Změnit režim</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('cart')}}"
                       class="nav-link {{ Route::is('cart') ? 'active' : '' }}">
                        Košík: {{ \Illuminate\Support\Facades\Session::get('totalPrice')}}&nbsp;Kč
                    </a>
                </li>
            </ul>
        </header>
    </div>
</header>
