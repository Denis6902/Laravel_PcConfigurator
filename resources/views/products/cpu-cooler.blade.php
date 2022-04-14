@extends("app")

@push("styles")
    <style>
        main {
            padding: 0 10%;
        }
    </style>
@endpush

@section("content")
    @include("header")
    <main>
        <h1>Vyberte CPU chladič</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Název</th>
                <th scope="col">Hlučnost</th>
                <th scope="col">RPM</th>
                <th scope="col">Velikost</th>
                <th scope="col">Barva</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>NZXT chladič</td>
                <td>8-25 db</td>
                <td>600 - 1800</td>
                <td>240mm</td>
                <td>Černá</td>
                <td>10/10</td>
                <td>1111 Kč</td>
                <td><a href="">Přidat</a></td>
            </tr>
            </tbody>
            </table>
    </main>
    @include("footer")
@endsection
