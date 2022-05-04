@extends("app")

@section("content")
    @include("header")
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Komponenta</th>
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
            @if($cpu == null)
                <td><a href="{{ route('product', 'cpu') }}">+ Vybrat procesor</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\CPU::Find($cpu)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\CPU::Find($cpu)["brand_id"])["name"]}}
                    </a>
                </td>
                <td>{{\App\Models\CPU::Find($cpu)["name"]}}</td>
                <td>{{$totalPrice += \App\Models\CPU::Find($cpu)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'cpu'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>CPU Chladič</td>
            @if($cpuCooler == null)
                <td><a href="{{ route('product', 'cpu-cooler') }}">+ Vybrat CPU chladič</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\CpuCooler::Find($cpuCooler)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\CpuCooler::Find($cpuCooler)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\CpuCooler::Find($cpuCooler)["name"]}}</td>
                <td>{{\App\Models\CpuCooler::Find($cpuCooler)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'cpu-cooler'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Základní Deska</td>
            @if($motherboard == null)
                <td><a href="{{ route('product', 'motherboard') }}">+ Vybrat základní desku</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\Motherboard::Find($motherboard)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\Motherboard::Find($motherboard)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\Motherboard::Find($motherboard)["name"]}}</td>
                <td>{{\App\Models\Motherboard::Find($motherboard)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'motherboard'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Paměť</td>
            @if($memory == null)
                <td><a href="{{ route('product', 'memory') }}">+ Vybrat paměť</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\Motherboard::Find($memory)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\Memory::Find($memory)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\Memory::Find($memory)["name"]}}</td>
                <td>{{\App\Models\Memory::Find($memory)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'memory'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Uložiště</td>
            @if($storage == null)
                <td><a href="{{ route('product', 'storage') }}">+ Vybrat uložiště</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\Storage::Find($storage)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\Storage::Find($storage)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\Storage::Find($storage)["name"]}}</td>
                <td>{{$totalPrice += App\Models\Storage::Find($storage)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'storage'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Grafická karta</td>
            @if($gpu == null)
                <td><a href="{{ route('product', 'gpu') }}">+ Vybrat grafickou kartu</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\GPU::Find($gpu)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\GPU::Find($gpu)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\GPU::Find($gpu)["name"]}}</td>
                <td>{{$totalPrice = \App\Models\GPU::Find($gpu)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'gpu'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Skříň</td>
            @if($case == null)
                <td><a href="{{ route('product', 'case') }}">+ Vybrat skříň</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\PcCase::Find($case)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\PcCase::Find($case)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\PcCase::Find($case)["name"]}}</td>
                <td>{{\App\Models\PcCase::Find($case)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'case'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Zdroj</td>
            @if($psu == null)
                <td><a href="{{ route('product', 'psu') }}">+ Vybrat zdroj</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\PSU::Find($psu)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\PSU::Find($psu)["brand_id"])["name"]}}
{{--                        //TODO: Doplnit to samé u všech řádků--}}
{{--                        {{$brandModel::Find(\App\Models\PSU::Find($psu)["brand_id"])["name"] = Str::limit($brandModel::Find(\App\Models\PSU::Find($psu)["brand_id"])["name"], strlen($brandModel::Find(\App\Models\PSU::Find($psu)["brand_id"])["name"]) - 1, '');}}--}}
                    </a>
                <td>{{\App\Models\PSU::Find($psu)["name"]}}</td>
                <td>{{\App\Models\PSU::Find($psu)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'psu'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Operační systém</td>
            @if($os == null)
                <td><a href="{{ route('product', 'os') }}">+ Vybrat operační systém</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\OS::Find($os)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\OS::Find($os)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\OS::Find($os)["name"]}}</td>
                <td>{{\App\Models\OS::Find($os)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'os'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Monitor</td>
            @if($monitor == null)
                <td><a href="{{ route('product', 'monitor') }}">+ Vybrat monitor</a></td>
            @else
                <td>
                    <a href="{{route('brand', $brandModel::Find(\App\Models\Monitor::Find($monitor)["brand_id"]))}}">
                        {{$brandModel::Find(\App\Models\Monitor::Find($monitor)["brand_id"])["name"]}}
                    </a>
                <td>{{\App\Models\Monitor::Find($monitor)["name"]}}</td>
                <td>{{\App\Models\Monitor::Find($monitor)["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'monitor'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>Celková cena xx</strong></td>
{{--            <td><strong>Celková cena xx // TODO: Doplnit</strong></td>--}}
            <td></td>
        </tr>
        </tbody>
    </table>
    @include("footer")
@endsection
