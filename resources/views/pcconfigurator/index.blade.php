@extends("app")

@section("content")
    @include("header")
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @if($thisCpu == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="CPU" style="width: 100%; display: block;"
                                 src="/./img/products/cpu.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: CPU</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'cpu') }}">Vybrat CPU</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-cpu-card :cpu="$thisCpu"></x-cpu-card>
                @endif

                @if($thisCpuCooler == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="CPU Cooler" style="width: 100%; display: block;"
                                 src="/./img/products/cpucooler.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: CPU Chladič</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'cpucooler') }}">Vybrat CPU Cooler</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-cpu-cooler-card :cpu-cooler="$thisCpuCooler"></x-cpu-cooler-card>
                @endif

                @if($thisMotherboard == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Motherboard" style="width: 100%; display: block;"
                                 src="/./img/products/motherboard.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Základní deska</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'motherboard') }}">Vybrat základní desku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-motherboard-card :motherboard="$thisMotherboard"></x-motherboard-card>
                @endif

                @if($thisMemory == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Memory" style="width: 100%; display: block;"
                                 src="/./img/products/memory.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Paměť</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'memory') }}">Vybrat paměť</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-memory-card :memory="$thisMemory"></x-memory-card>
                @endif

                @if($thisStorage == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Storage" style="width: 100%; display: block;"
                                 src="/./img/products/storage.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Uložiště</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'storage') }}">Vybrat uložiště</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-storage-card :storage="$thisStorage"></x-storage-card>
                @endif

                @if($thisGpu == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="GPU" style="width: 100%; display: block;"
                                 src="/./img/products/gpu.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Grafická karta</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'gpu') }}">Vybrat grafickou kartu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-gpu-card :gpu="$thisGpu"></x-gpu-card>
                @endif

                @if($thisPcCase == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="PC Case" style="width: 100%; display: block;"
                                 src="/./img/products/pccase.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Skříň</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'pccase') }}">Vybrat skříň</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-pc-case-card :pc-case="$thisPcCase"></x-pc-case-card>
                @endif

                @if($thisPsu == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="PSU" style="width: 100%; display: block;"
                                 src="/./img/products/psu.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Zdroj</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'psu') }}">Vybrat zdroj</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-psu-card :psu="$thisPsu"></x-psu-card>
                @endif

                @if($thisOs == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="OS" style="width: 100%; display: block;"
                                 src="/./img/products/os.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Operační systém</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'os') }}">Vybrat operační systém</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-os-card :os="$thisOs"></x-os-card>
                @endif

                @if($thisMonitor == null)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Monitor" style="width: 100%; display: block;"
                                 src="/./img/products/monitor.jpg"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Typ produktu: Monitor</p>
                                <div
                                    class="text-muted">
                                    <a class="btn btn-sm btn-outline-primary"
                                       href="{{ route('products', 'monitor') }}">Vybrat monitor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <x-monitor-card :monitor="$thisMonitor"></x-monitor-card>
                @endif

            </div>
        </div>
    </div>
    @include("footer")
@endsection
