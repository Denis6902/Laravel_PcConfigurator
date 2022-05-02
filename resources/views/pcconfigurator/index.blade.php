@inject('brand_model', 'App\Models\Brand')
@inject('session', '\Illuminate\Support\Facades\Session')

@extends("app")

@section("content")
    @include("header")
    <main>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Komponenta</th>
                {{--                TODO: PŘIDAT SEM <a href="znacka" ... --}}
                @if($isEmpty == 0)
                    <th scope="col">Značka</th>
                @endif
                <th scope="col">Název</th>
                @if($isEmpty == 0)
                    <th scope="col">Cena</th>
                @endif
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>CPU</td>
                @if($session::get('cpu') == null)
                    <td><a href="{{ route('product', 'cpu') }}">+ Vybrat procesor</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\CPU::Find($session::get('cpu'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\CPU::Find($session::get('cpu'))["brand_id"])["name"]}}
                        </a>
                    </td>
                    <td>{{\App\Models\CPU::Find($session::get('cpu'))["name"]}}</td>
                    <td>{{\App\Models\CPU::Find($session::get('cpu'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'cpu'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>CPU Chladič</td>
                @if($session::get('cpu-cooler') == null)
                    <td><a href="{{ route('product', 'cpu-cooler') }}">+ Vybrat CPU chladič</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\CpuCooler::Find($session::get('cpu-cooler'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\CpuCooler::Find($session::get('cpu-cooler'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\CpuCooler::Find($session::get('cpu-cooler'))["name"]}}</td>
                    <td>{{\App\Models\CpuCooler::Find($session::get('cpu-cooler'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'cpu-cooler'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Základní Deska</td>
                @if($session::get('motherboard') == null)
                    <td><a href="{{ route('product', 'motherboard') }}">+ Vybrat základní desku</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\Motherboard::Find($session::get('motherboard'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\Motherboard::Find($session::get('motherboard'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\Motherboard::Find($session::get('motherboard'))["name"]}}</td>
                    <td>{{\App\Models\Motherboard::Find($session::get('motherboard'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'motherboard'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Paměť</td>
                @if($session::get('memory') == null)

                    <td><a href="{{ route('product', 'memory') }}">+ Vybrat paměť</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\Motherboard::Find($session::get('memory'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\Memory::Find($session::get('memory'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\Memory::Find($session::get('memory'))["name"]}}</td>
                    <td>{{\App\Models\Memory::Find($session::get('memory'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'memory'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Uložiště</td>
                @if($session::get('storage') == null)

                    <td><a href="{{ route('product', 'storage') }}">+ Vybrat uložiště</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\Storage::Find($session::get('storage'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\Storage::Find($session::get('storage'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\Storage::Find($session::get('storage'))["name"]}}</td>
                    <td>{{\App\Models\Storage::Find($session::get('storage'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'storage'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Grafická karta</td>
                @if($session::get('gpu') == null)

                    <td><a href="{{ route('product', 'gpu') }}">+ Vybrat grafickou kartu</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\GPU::Find($session::get('gpu'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\GPU::Find($session::get('gpu'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\GPU::Find($session::get('gpu'))["name"]}}</td>
                    <td>{{\App\Models\GPU::Find($session::get('gpu'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'gpu'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Skříň</td>
                @if($session::get('case') == null)

                    <td><a href="{{ route('product', 'case') }}">+ Vybrat skříň</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\PcCase::Find($session::get('case'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\PcCase::Find($session::get('case'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\PcCase::Find($session::get('case'))["name"]}}</td>
                    <td>{{\App\Models\PcCase::Find($session::get('case'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'case'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Zdroj</td>
                @if($session::get('psu') == null)

                    <td><a href="{{ route('product', 'psu') }}">+ Vybrat zdroj</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\PSU::Find($session::get('psu'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\PSU::Find($session::get('psu'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\PSU::Find($session::get('psu'))["name"]}}</td>
                    <td>{{\App\Models\PSU::Find($session::get('psu'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'psu'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Operační systém</td>
                @if($session::get('os') == null)

                    <td><a href="{{ route('product', 'os') }}">+ Vybrat operační systém</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\OS::Find($session::get('os'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\OS::Find($session::get('os'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\OS::Find($session::get('os'))["name"]}}</td>
                    <td>{{\App\Models\OS::Find($session::get('os'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'os'])}}">Smazat</a></td>
                @endif
            </tr>
            <tr>
                <td>Monitor</td>
                @if($session::get('monitor') == null)

                    <td><a href="{{ route('product', 'monitor') }}">+ Vybrat monitor</a></td>
                @else
                    <td>
                        <a href="{{route('brand', $brand_model::Find(\App\Models\Monitor::Find($session::get('monitor'))["brand_id"]))}}">
                            {{$brand_model::Find(\App\Models\Monitor::Find($session::get('monitor'))["brand_id"])["name"]}}
                        </a>
                    <td>{{\App\Models\Monitor::Find($session::get('monitor'))["name"]}}</td>
                    <td>{{\App\Models\Monitor::Find($session::get('monitor'))["price"]}} Kč</td>
                    <td><a href="{{route('deleteProduct', ['product'=>'monitor'])}}">Smazat</a></td>
                @endif
            </tr>
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
