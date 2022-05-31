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
                    @if($allThisBrandCpu != null)
                        @foreach($allThisBrandCpu as $cpu)
                            <x-cpu-card :cpu="$cpu"></x-cpu-card>
                        @endforeach
                    @endif

                    @if($allThisBrandCpuCooler != null)
                        @foreach($allThisBrandCpuCooler as $cpuCooler)
                            <x-cpu-cooler-card :cpuCooler="$cpuCooler"></x-cpu-cooler-card>
                        @endforeach
                    @endif

                    @if($allThisBrandGpu != null)
                        @foreach($allThisBrandGpu as $gpu)
                            <x-gpu-card :gpu="$gpu"></x-gpu-card>
                        @endforeach
                    @endif

                    @if($allThisBrandMemory != null)
                        @foreach($allThisBrandMemory as $memory)
                            <x-memory-card :memory="$memory"></x-memory-card>
                        @endforeach
                    @endif

                    @if($allThisBrandMonitor != null)
                        @foreach($allThisBrandMonitor as $monitor)
                            <x-monitor-card :monitor="$monitor"></x-monitor-card>
                        @endforeach
                    @endif

                    @if($allThisBrandMotherboard != null)
                        @foreach($allThisBrandMotherboard as $motherboard)
                            <x-motherboard-card :motherboard="$motherboard"></x-motherboard-card>
                        @endforeach
                    @endif

                    @if($allThisBrandOs != null)
                        @foreach($allThisBrandOs as $os)
                            <x-os-card :os="$os"></x-os-card>
                        @endforeach
                    @endif

                    @if($allThisBrandPcCase != null)
                        @foreach($allThisBrandPcCase as $pcCase)
                            <x-pc-case-card :pcCase="$pcCase"></x-pc-case-card>
                        @endforeach
                    @endif

                    @if($allThisBrandPsu != null)
                        @foreach($allThisBrandPsu as $psu)
                            <x-psu-card :psu="$psu"></x-psu-card>
                        @endforeach
                    @endif

                    @if($allThisBrandStorage != null)
                        @foreach($allThisBrandStorage as $storage)
                            <x-storage-card :storage="$storage"></x-storage-card>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif
    @include("footer")
@endsection
