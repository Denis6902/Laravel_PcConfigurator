@extends("app")

@section("content")
    @include("header")
        <h1>Vyberte CPU chladič</h1>
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">ID</th>--}}
{{--                <th scope="col">Značka</th>--}}
{{--                <th scope="col">Název</th>--}}
{{--                <th scope="col">Počet otáček</th>--}}
{{--                <th scope="col">Hlučnost</th>--}}
{{--                <th scope="col">Barva</th>--}}
{{--                <th scope="col">Velikost radiátoru</th>--}}
{{--                <th scope="col">Výška chladiče</th>--}}
{{--                <th scope="col">Hodnocení</th>--}}
{{--                <th scope="col">Cena</th>--}}
{{--                <th scope="col">Vytvořeno</th>--}}
{{--                <th scope="col">Aktualizováno</th>--}}
{{--                <th scope="col"></th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($allCpuCooler as $cpuCooler)--}}
{{--                <tr>--}}
{{--                    <th scope="row">{{$cpuCooler->id}}</th>--}}
{{--                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($cpuCooler->brand_id)["id"])}}">{{\App\Models\Brand::Find($cpuCooler->brand_id)["name"]}}</a></th>--}}
{{--                    <th scope="row">{{$cpuCooler->name}}</th>--}}
{{--                    <th scope="row">{{$cpuCooler->fan_rpm}} RPM</th>--}}
{{--                    <th scope="row">{{$cpuCooler->noise_level}} dB</th>--}}
{{--                    <th scope="row">{{$cpuCooler->color}}</th>--}}
{{--                    <th scope="row">@if($cpuCooler->radiator_size == '0')--}}
{{--                        @else--}}
{{--                            {{$cpuCooler->radiator_size}} mm--}}
{{--                        @endif</th>--}}
{{--                    <th scope="row">{{$cpuCooler->height}} mm</th>--}}
{{--                    <th scope="row">@for($i = 0; $i < $cpuCooler->rating; $i++) * @endfor</th>--}}
{{--                    <th scope="row">{{$cpuCooler->price}} Kč</th>--}}
{{--                    <th scope="row">{{$cpuCooler->created_at}}</th>--}}
{{--                    <th scope="row">{{$cpuCooler->updated_at}}</th>--}}
{{--                    <th scope="row"><a href="{{route('addProduct', ['product'=>'cpu-cooler', 'id'=>$cpuCooler->id])}}">Přidat</a></th>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--            </table>--}}
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allCpuCooler as $cpuCooler)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="CPU" style="height: 225px; width: 100%; display: block;"
                                 src="/./img/cpucooler.jpg"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p>
                                    <a class="card-text"
                                       href="{{route('brand' ,\App\Models\Brand::Find($cpuCooler->brand_id)["id"])}}">Značka: {{\App\Models\Brand::Find($cpuCooler->brand_id)["name"]}}
                                    </a>
                                </p>
                                <p class="card-text">Chladič: {{$cpuCooler->name}}</p>
                                <p class="card-text">{{$cpuCooler->fan_rpm}} RPM</p>
                                <p class="card-text">{{$cpuCooler->noise_level}} dB</p>
                                <p class="card-text">Barva: {{$cpuCooler->color}}</p>
                                @if($cpuCooler->radiator_size != '0') <p class="card-text">Velikost radiátoru {{$cpuCooler->radiator_size}} mm</p> @endif
                                <p class="card-text">Výška {{$cpuCooler->height}} mm</p>
                                <p class="card-text">Hodnocení {{$cpuCooler->rating * 10}}%</p>
                                <p class="card-text">Cena: {{$cpuCooler->price}} Kč</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zobrazit</button>
                                        {{--TODO: Přidat cestu a blade a route /product/.../{id} - připadně upravit co zde půjde vidět a co půjde vidět v /product/.../{id}--}}
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('addProduct', ['product'=>'cpu-cooler', 'id'=>$cpuCooler->id])}}">Přidat</a>
                                    </div>
                                    <small class="text-muted">{{$cpuCooler->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
