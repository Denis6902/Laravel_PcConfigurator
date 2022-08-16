@extends("app")

@section("content")
    @include("header")
    <main>
        <h1><a target="_blank" href="https://github.com/Denis6902/Laravel_Aplikace">Odkaz na GitHub</a></h1>
        <h2 id="aplikace-v-php-frameworku-laravel">Aplikace v PHP frameworku Laravel</h2>
        <h3 id="body-zad-n-">Body zadání:</h3>
        <ul>
            <li>Navrhnout funkční administrační prostředí pro libovolnou aplikaci nebo pro fakturační systém případně
                konfigurátor PC
                sestav.
            </li>
            <li>Struktura DB spolu s migračními třídami, factory a seedery.</li>
            <li>Vytvořit modely pro správnou funkčnost.</li>
            <li>Vytvořit view pro všechny operace CRUD + využít layout templates a pomocných nástrojů BLADE.</li>
            <li>Vytvořit controllery pro ovládání administrace</li>
            <li>Vytvořit potřebné routy pro směrování uvnitř administrace</li>
            <li>Dodržet model MVC.</li>
        </ul>
        <h3 id="nutn-n-le-itosti-">Nutné náležitosti:</h3>
        <ul>
            <li>Minimální počet tabulek je (6)</li>
            <li>Minimálně 2 tabulky bude mít vazbu 1:N (N:1) pokud bude možnost využít vazbu N:N tak ji využít</li>
            <li>Vytvořit ukázkový seeder pro vložení minimálně 5 záznamů do každé tabulky</li>
            <li>Vytvořit design pomocí vlastního CSS, Bootstrap nebo jiných knihoven</li>
            <li>Každá část v administraci bude mít kompletní CRUD operace (Create, Read, Update, Delete)</li>
            <li>Budou existovat všechny View pro všechny CRUD operace</li>
        </ul>
        <h3 id="bonus">Bonus</h3>
        <ul>
            <li>Přihlašování a registrace uživatelů (v případě bonusu řešetě jako poslední)</li>
            <li>Implementace Soft Delete pro mazání skrze &quot;tabulkový koš&quot;</li>
        </ul>

    </main>
    @include("footer")
@endsection
