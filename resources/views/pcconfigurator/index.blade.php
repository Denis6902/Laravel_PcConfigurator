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
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Komponenta</th>
                <th scope="col">Název</th>
                <th scope="col">Cena</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>CPU</td>
                <td>Intel Core i5 12600KF</td>
                <td>1111 Kč</td>
                <td><a href="">Koupit</a></td>
                <td><a href="">Odebrat</a></td>
            </tr>
            <tr>
                <td>CPU Chladič</td>
                <td><a href="{{ route('product', 'cpu-cooler') }}">+ Vybrat CPU chladič</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Základní Deska</td>
                @if($motherboard == null)
                    <td><a href="{{ route('product', 'motherboard') }}">+ Vybrat základní desku</a></td>
                    <td></td>
                    <td></td>
                @else
                    <td>{{$motherboard["name"]}}</td>
                    <td>{{$motherboard["price"]}} Kč</td>
                    <td><a href="#">Koupit</a></td>
                    <td><a href="#">Odebrat</a></td>
                @endif
{{--                // TODO: DODĚLAT VÝPIS KOMPONENT POMOCÍ SESSION--}}
            </tr>
            <tr>
                <td>Paměť</td>
                <td><a href="{{ route('product', 'memory') }}">+ Vybrat paměť</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Uložiště</td>
                <td><a href="{{ route('product', 'storage') }}">+ Vybrat uložiště</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Grafická karta</td>
                <td><a href="{{ route('product', 'gpu') }}">+ Vybrat grafickou kartu</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Skříň</td>
                <td><a href="{{ route('product', 'case') }}">+ Vybrat skříň</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Zdroj</td>
                <td><a href="{{ route('product', 'psu') }}">+ Vybrat zdroj</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Operační systém</td>
                <td><a href="{{ route('product', 'os') }}">+ Vybrat operační systém</a></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Monitor</td>
                <td><a href="{{ route('product', 'monitor') }}">+ Vybrat monitor</a></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
