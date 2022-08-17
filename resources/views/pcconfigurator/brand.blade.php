@extends("app")

@section("content")
    @include("header")
    <h1>{{$brand->name}}</h1>
    <p>Značka {{$brand->name}} pochází z {{$brand->headquarters}}</p>
    <p>Byla založena v roce {{$brand->founded_in}}</p>

    <h2>O značce</h2>
    <p>{{$brand->info}}</p>

    <h2>Produkty dané značky</h2>

    @include('pcconfigurator.paginator')

    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    @switch($product->tableName)
                        @case("cpu")
                            <x-cpu-card :cpu="$product"></x-cpu-card>
                            @break

                        @case("cpucooler")
                            <x-cpu-cooler-card :cpuCooler="$product"></x-cpu-cooler-card>
                            @break

                        @case("gpu")
                            <x-gpu-card :gpu="$product"></x-gpu-card>
                            @break

                        @case("memory")
                            <x-memory-card :memory="$product"></x-memory-card>
                            @break

                        @case("monitor")
                            <x-monitor-card :monitor="$product"></x-monitor-card>
                            @break

                        @case("motherboard")
                            <x-motherboard-card :motherboard="$product"></x-motherboard-card>
                            @break

                        @case("os")
                            <x-os-card :os="$product"></x-os-card>
                            @break

                        @case("pccase")
                            <x-pc-case-card :pcCase="$product"></x-pc-case-card>
                            @break

                        @case("psu")
                            <x-psu-card :psu="$product"></x-psu-card>
                            @break

                        @case("storage")
                            <x-storage-card :storage="$product"></x-storage-card>
                            @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </div>

    @include("footer")
@endsection
