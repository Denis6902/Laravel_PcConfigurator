@extends("app")

@section("content")
    @include("header")
    <main>
        <h1><a href="{{route("oldAbout")}}">Staré zadání úkolu</a></h1>
        <h1><a target="_blank" href="https://github.com/Denis6902/Laravel_PcConfigurator/tree/v2">Odkaz na GitHub</a></h1>
        <h2 id="aplikace-v-php-frameworku-laravel">Aplikace v PHP frameworku Laravel v2</h2>
        <h3 id="body-zad-n-">Body zadání:</h3>
        <ul>
            <li>
                Vylepšit staré zadání...
            </li>
        </ul>
    </main>
    @include("footer")
@endsection
