@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si grafickou kartu</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allGpu as $gpu)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Gpu" style="height: 225px; width: 100%; display: block;"
                                 src="/./img/products/gpu.jpg"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p>
                                    <a class="card-text"
                                       href="{{route('brand' ,$brandModel::Find($gpu->brand_id)["id"])}}">Značka: {{$brandModel::Find($gpu->brand_id)["name"]}}
                                    </a>
                                </p>
                                <p class="card-text">Grafická karta: {{$gpu->name}}</p>
                                <p class="card-text">Čip: {{$gpu->chipset}}</p>
                                <p class="card-text">Velikost paměti: {{$gpu->memory}} GB</p>
                                <p class="card-text">Takt jádra: {{$gpu->core_clock}} MHz s boostem až
                                    na {{$gpu->boost_clock}} MHz</p>
                                <p class="card-text">Barva: {{$gpu->color}}</p>
                                <p class="card-text">Délka: {{$gpu->length}} mm</p>
                                <p class="card-text">Hodnocení {{$gpu->rating}}%</p>
                                <p class="card-text">Cena: {{$gpu->price}} Kč</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zobrazit</button>
                                        {{--TODO: Přidat cestu a blade a route /product/.../{id} - připadně upravit co zde půjde vidět a co půjde vidět v /product/.../{id}--}}
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('addProduct', ['product'=>'gpu', 'id'=>$gpu->id])}}">Přidat</a>
                                    </div>
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($gpu->created_at)->format('d/m/Y')}}</small>
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
