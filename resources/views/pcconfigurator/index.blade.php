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
                @php
                    $thisCpu = \App\Models\CPU::Find($cpu);
                    $totalPrice += $thisCpu["price"];
                @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisCpu["brand_id"]))}}">
                        {{$brandModel::Find($thisCpu["brand_id"])["name"]}}
                    </a>
                </td>
                <td>{{$thisCpu["name"]}}</td>
                <td>{{$thisCpu["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'cpu'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>CPU Chladič</td>
            @if($cpuCooler == null)
                <td><a href="{{ route('product', 'cpu-cooler') }}">+ Vybrat CPU chladič</a></td>
            @else
                @php
                    $thisCpuCooler = \App\Models\CpuCooler::Find($cpuCooler);
                    $totalPrice += $thisCpuCooler["price"];
                @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisCpuCooler["brand_id"]))}}">
                        {{$brandModel::Find($thisCpuCooler["brand_id"])["name"]}}
                    </a>
                <td>{{$thisCpuCooler["name"]}}</td>
                <td>{{$thisCpuCooler["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'cpu-cooler'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Základní Deska</td>
            @if($motherboard == null)
                <td><a href="{{ route('product', 'motherboard') }}">+ Vybrat základní desku</a></td>
            @else
                @php
                    $thisMotherboard = \App\Models\Motherboard::Find($motherboard);
                    $totalPrice += $thisMotherboard["price"];
                @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisMotherboard["brand_id"]))}}">
                        {{$brandModel::Find($thisMotherboard["brand_id"])["name"]}}
                    </a>
                <td>{{$thisMotherboard["name"]}}</td>
                <td>{{$thisMotherboard["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'motherboard'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Paměť</td>
            @if($memory == null)
                <td><a href="{{ route('product', 'memory') }}">+ Vybrat paměť</a></td>
            @else
                @php
                    $thisMemory = \App\Models\Memory::Find($memory);
                    $totalPrice += $thisMemory["price"];
                @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisMemory["brand_id"]))}}">
                        {{$brandModel::Find($thisMemory["brand_id"])["name"]}}
                    </a>
                <td>{{$thisMemory["name"]}}</td>
                <td>{{$thisMemory["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'memory'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Uložiště</td>
            @if($storage == null)
                <td><a href="{{ route('product', 'storage') }}">+ Vybrat uložiště</a></td>
            @else
                @php
                    $thisStorage = \App\Models\Storage::Find($storage);
                    $totalPrice += $thisStorage["price"]; @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisStorage["brand_id"]))}}">
                        {{$brandModel::Find($thisStorage["brand_id"])["name"]}}
                    </a>
                <td>{{$thisStorage["name"]}}</td>
                <td>{{$thisStorage["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'storage'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Grafická karta</td>
            @if($gpu == null)
                <td><a href="{{ route('product', 'gpu') }}">+ Vybrat grafickou kartu</a></td>
            @else
                @php
                    $thisGpu = \App\Models\GPU::Find($gpu);
                    $totalPrice += $thisGpu["price"]; @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisGpu["brand_id"]))}}">
                        {{$brandModel::Find($thisGpu["brand_id"])["name"]}}
                    </a>
                <td>{{$thisGpu["name"]}}</td>
                <td>{{$thisGpu["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'gpu'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Skříň</td>
            @if($pcCase == null)
                <td><a href="{{ route('product', 'pcCase') }}">+ Vybrat skříň</a></td>
            @else
                @php
                    $thisPcCase = \App\Models\PcCase::Find($pcCase);
                    $totalPrice += $thisPcCase["price"]; @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisPcCase["brand_id"]))}}">
                        {{$brandModel::Find($thisPcCase["brand_id"])["name"]}}
                    </a>
                <td>{{$thisPcCase["name"]}}</td>
                <td>{{$thisPcCase["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'pcCase'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Zdroj</td>
            @if($psu == null)
                <td><a href="{{ route('product', 'psu') }}">+ Vybrat zdroj</a></td>
            @else
                @php
                    $thisPsu = \App\Models\PSU::Find($psu);
                    $totalPrice += $thisPsu["price"]; @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisPsu["brand_id"]))}}">
                        {{$brandModel::Find($thisPsu["brand_id"])["name"]}}
                    </a>
                <td>{{$thisPsu["name"]}}</td>
                <td>{{$thisPsu["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'psu'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Operační systém</td>
            @if($os == null)
                <td><a href="{{ route('product', 'os') }}">+ Vybrat operační systém</a></td>
            @else
                @php
                    $thisOs = \App\Models\OS::Find($os);
                    $totalPrice += $thisOs["price"]; @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisOs["brand_id"]))}}">
                        {{$brandModel::Find($thisOs["brand_id"])["name"]}}
                    </a>
                <td>{{$thisOs["name"]}}</td>
                <td>{{$thisOs["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'os'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td>Monitor</td>
            @if($monitor == null)
                <td><a href="{{ route('product', 'monitor') }}">+ Vybrat monitor</a></td>
            @else
                @php
                    $thisMonitor = \App\Models\Monitor::Find($monitor);
                    $totalPrice += $thisMonitor["price"];
                @endphp
                <td>
                    <a href="{{route('brand', $brandModel::Find($thisMonitor["brand_id"]))}}">
                        {{$brandModel::Find($thisMonitor["brand_id"])["name"]}}
                    </a>
                <td>{{$thisMonitor["name"]}}</td>
                <td>{{$thisMonitor["price"]}} Kč</td>
                <td><a href="{{route('deleteProduct', ['product'=>'monitor'])}}">Smazat</a></td>
            @endif
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            @if($totalPrice == 0)
                <td></td>
            @else
                <td><strong>Celková cena: {{ $totalPrice}} Kč</strong></td>
            @endif
            <td></td>
        </tr>
        </tbody>
    </table>
    @include("footer")
@endsection
