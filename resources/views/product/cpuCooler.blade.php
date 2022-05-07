@extends("app")

@section("content")
    @include("header")
    {{--  TODO: možná předělat vzhled stejně jak u product/cpu   --}}
    <h1>CPU chladič</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             alt="CPU Cooler" style="height: 225px; width: 100%; display: block;"
                             src="/./img/products/cpucooler.jpg"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <p>
                                <a class="card-text"
                                   href="{{route('brand' ,$brandModel::Find($cpuCooler->brand_id)["id"])}}">Značka: {{$brandModel::Find($cpuCooler->brand_id)["name"]}}
                                </a>
                            </p>
                            <p class="card-text">Chladič: {{$cpuCooler->name}}</p>
                            <p class="card-text">{{$cpuCooler->fan_rpm}} RPM</p>
                            <p class="card-text">{{$cpuCooler->noise_level}} dB</p>
                            <p class="card-text">Barva: {{$cpuCooler->color}}</p>
                            @if($cpuCooler->radiator_size != '0')
                                <p class="card-text">Velikost radiátoru {{$cpuCooler->radiator_size}} mm</p>
                            @endif
                            <p class="card-text">Výška {{$cpuCooler->height}} mm</p>
                            <p class="card-text">Hodnocení {{$cpuCooler->rating}}%</p>
                            <p class="card-text">Cena: {{$cpuCooler->price}} Kč</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary"
                                       href="{{route('addProduct', ['product'=>'cpucooler', 'id'=>$cpuCooler->id])}}">Přidat</a>
                                </div>
                                <small
                                    class="text-muted">{{ \Carbon\Carbon::parse($cpuCooler->created_at)->format('d/m/Y')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("footer")
@endsection
