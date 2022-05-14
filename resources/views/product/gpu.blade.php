@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$gpu->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($gpu->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($gpu->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$gpu->rating}}%</p>
            <p class="card-text">Náš kód: {{$gpu->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 55%;">
                <img class="card-img-top"
                     alt="GPU" style="display: block;"
                     src="/./img/products/gpu.jpg"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Název čipu: {{$gpu->chipset}}</p>
                <p class="card-text">Velikost paměti {{$gpu->memory}} GB</p>
                <p class="card-text">Takt jádra {{$gpu->core_clock}} MHz</p>
                <p class="card-text">Boost taktu jádra {{$gpu->boost_clock}} MHz</p>
                <p class="card-text">Barva {{$gpu->color}}</p>
                <p class="card-text">Délka {{$gpu->length}} mm</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'gpu', 'id'=>$gpu->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($gpu->brand_id)["id"])}}">{{$brandModel::Find($gpu->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($gpu->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($gpu->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$gpu->info}}</p>
    </main>
    @include("footer")
@endsection
