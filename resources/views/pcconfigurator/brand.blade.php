@extends("app")

@section("content")
    @include("header")
    @if($brand == null)
        <script type="text/javascript">
            window.location = '/';
        </script>
    @else
        <h1>{{$brand->name}}</h1>
        <p>Značka {{$brand->name}} pochází z {{$brand->headquarters}}</p>
        <p>Byla založena v roce {{$brand->founded_in}}</p>

        <h2>O značce</h2>
        <p>{{$brand->info}}</p>

        <h2>Produkty dané značky</h2>

        <div class="album py-5">
            <div class="container">
                <div class="row">
                    @foreach($allThisBrandCpu as $cpu)
                        <x-cpu-card :cpu="$cpu"></x-cpu-card>
                    @endforeach

                    @foreach($allThisBrandCpuCooler as $cpuCooler)
                        <x-cpu-cooler-card :cpuCooler="$cpuCooler"></x-cpu-cooler-card>
                    @endforeach

                    @foreach($allThisBrandGpu as $gpu)
                        <x-gpu-card :gpu="$gpu"></x-gpu-card>
                    @endforeach

                    @foreach($allThisBrandMemory as $memory)
                        <x-memory-card :memory="$memory"></x-memory-card>
                    @endforeach

                    @foreach($allThisBrandMonitor as $monitor)
                        <x-monitor-card :monitor="$monitor"></x-monitor-card>
                    @endforeach

                    @foreach($allThisBrandMotherboard as $motherboard)
                        <x-motherboard-card :motherboard="$motherboard"></x-motherboard-card>
                    @endforeach

                    @foreach($allThisBrandOs as $os)
                        <x-os-card :os="$os"></x-os-card>
                    @endforeach

                    @foreach($allThisBrandPcCase as $pcCase)
                        <x-pc-case-card :pcCase="$pcCase"></x-pc-case-card>
                    @endforeach

                    @foreach($allThisBrandPsu as $psu)
                        <x-psu-card :psu="$psu"></x-psu-card>
                    @endforeach

                    @foreach($allThisBrandStorage as $storage)
                        <x-storage-card :storage="$storage"></x-storage-card>
                    @endforeach

                    @php
                        print_r(json_encode($allComponents));
                    @endphp
                </div>
            </div>
        </div>
    @endif
    @include("footer")
@endsection
