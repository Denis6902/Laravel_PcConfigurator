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
{{--                TODO: PŘIDAT SEM <a href="znacka" ... --}}
                <th scope="col">Název</th>
                <th scope="col">Cena</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>CPU</td>
                @if(\Illuminate\Support\Facades\Session::get('cpu') == null)
                    <td><a href="{{ route('product', 'cpu') }}">+ Vybrat procesor</a></td>
                    @else
                    <td>{{\App\Models\CPU::Find(\Illuminate\Support\Facades\Session::get('cpu'))["name"]}}</td>
                    <td>{{\App\Models\CPU::Find(\Illuminate\Support\Facades\Session::get('cpu'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'cpu'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>CPU Chladič</td>
                @if(\Illuminate\Support\Facades\Session::get('cpu-cooler') == null)
                <td><a href="{{ route('product', 'cpu-cooler') }}">+ Vybrat CPU chladič</a></td>
                @else
                    <td>{{\App\Models\CpuCooler::Find(\Illuminate\Support\Facades\Session::get('cpu-cooler'))["name"]}}</td>
                    <td>{{\App\Models\CpuCooler::Find(\Illuminate\Support\Facades\Session::get('cpu-cooler'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'cpu-cooler'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Základní Deska</td>
                @if(\Illuminate\Support\Facades\Session::get('motherboard') == null)
                <td><a href="{{ route('product', 'motherboard') }}">+ Vybrat základní desku</a></td>
                @else
                    <td>{{\App\Models\Motherboard::Find(\Illuminate\Support\Facades\Session::get('motherboard'))["name"]}}</td>
                    <td>{{\App\Models\Motherboard::Find(\Illuminate\Support\Facades\Session::get('motherboard'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'motherboard'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Paměť</td>
                @if(\Illuminate\Support\Facades\Session::get('memory') == null)

                <td><a href="{{ route('product', 'memory') }}">+ Vybrat paměť</a></td>
                @else
                    <td>{{\App\Models\Memory::Find(\Illuminate\Support\Facades\Session::get('memory'))["name"]}}</td>
                    <td>{{\App\Models\Memory::Find(\Illuminate\Support\Facades\Session::get('memory'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'memory'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Uložiště</td>
                @if(\Illuminate\Support\Facades\Session::get('storage') == null)

                <td><a href="{{ route('product', 'storage') }}">+ Vybrat uložiště</a></td>
                @else
                    <td>{{\App\Models\Storage::Find(\Illuminate\Support\Facades\Session::get('storage'))["name"]}}</td>
                    <td>{{\App\Models\Storage::Find(\Illuminate\Support\Facades\Session::get('storage'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'storage'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Grafická karta</td>
                @if(\Illuminate\Support\Facades\Session::get('gpu') == null)

                <td><a href="{{ route('product', 'gpu') }}">+ Vybrat grafickou kartu</a></td>
                @else
                    <td>{{\App\Models\GPU::Find(\Illuminate\Support\Facades\Session::get('gpu'))["name"]}}</td>
                    <td>{{\App\Models\GPU::Find(\Illuminate\Support\Facades\Session::get('gpu'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'gpu'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Skříň</td>
                @if(\Illuminate\Support\Facades\Session::get('case') == null)

                <td><a href="{{ route('product', 'case') }}">+ Vybrat skříň</a></td>
                @else
                    <td>{{\App\Models\PcCase::Find(\Illuminate\Support\Facades\Session::get('case'))["name"]}}</td>
                    <td>{{\App\Models\PcCase::Find(\Illuminate\Support\Facades\Session::get('case'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'case'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Zdroj</td>
                @if(\Illuminate\Support\Facades\Session::get('psu') == null)

                <td><a href="{{ route('product', 'psu') }}">+ Vybrat zdroj</a></td>
                @else
                    <td>{{\App\Models\PSU::Find(\Illuminate\Support\Facades\Session::get('psu'))["name"]}}</td>
                    <td>{{\App\Models\PSU::Find(\Illuminate\Support\Facades\Session::get('psu'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'psu'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Operační systém</td>
                @if(\Illuminate\Support\Facades\Session::get('os') == null)

                <td><a href="{{ route('product', 'os') }}">+ Vybrat operační systém</a></td>
                @else
                    <td>{{\App\Models\OS::Find(\Illuminate\Support\Facades\Session::get('os'))["name"]}}</td>
                    <td>{{\App\Models\OS::Find(\Illuminate\Support\Facades\Session::get('os'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'os'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Monitor</td>
                @if(\Illuminate\Support\Facades\Session::get('monitor') == null)

                <td><a href="{{ route('product', 'monitor') }}">+ Vybrat monitor</a></td>
                @else
                    <td>{{\App\Models\Monitor::Find(\Illuminate\Support\Facades\Session::get('monitor'))["name"]}}</td>
                    <td>{{\App\Models\Monitor::Find(\Illuminate\Support\Facades\Session::get('monitor'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'monitor'])}}">Smazat</a></td>
                @endif
            </tr>
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
