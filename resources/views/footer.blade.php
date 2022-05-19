<footer class="mt-auto">
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('pcConfigurator') }}" class="nav-link px-2 text-muted">Konfigurátor</a>
                </li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-muted">O webu / Zadaní
                        úkolu</a></li>
                <li class="nav-item {{ \Illuminate\Support\Facades\Session::get('theme') == 'white' ? 'hidden' : '' }}">
                    <a href="{{ route('switchTheme') }}" class="nav-link text-muted">Přepnout na světlý režím</a></li>
                <li class="nav-item {{ \Illuminate\Support\Facades\Session::get('theme') == 'dark' ? 'hidden' : '' }}">
                    <a href="{{ route('switchTheme') }}" class="nav-link text-muted">Přepnout na tmavý režím</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Denis Baťa</p>
        </footer>
    </div>
</footer>
