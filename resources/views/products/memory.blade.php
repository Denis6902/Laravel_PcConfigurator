@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si paměť</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allMemory as $memory)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Memory" style="height: 225px; width: 100%; display: block;"
                                 src="/./img/products/memory.jpg"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p>
                                    <a class="card-text"
                                       href="{{route('brand' ,$brandModel::Find($memory->brand_id)["id"])}}">Značka: {{$brandModel::Find($memory->brand_id)["name"]}}
                                    </a>
                                </p>
                                <p class="card-text">Paměť: {{$memory->name}}</p>
                                <p class="card-text">Typ: {{$memory->modules}} {{$memory->type}} {{$memory->speed}} MHz
                                    CL {{$memory->latency}}</p>
                                <p class="card-text">Barva: {{$memory->color}}</p>
                                <p class="card-text">Hodnocení {{$memory->rating}}%</p>
                                <p class="card-text">Cena: {{$memory->price}} Kč</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zobrazit</button>
                                        {{--TODO: Přidat cestu a blade a route /product/.../{id} - připadně upravit co zde půjde vidět a co půjde vidět v /product/.../{id}--}}
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('addProduct', ['product'=>'memory', 'id'=>$memory->id])}}">Přidat</a>
                                    </div>
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($memory->created_at)->format('d/m/Y')}}</small>
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
