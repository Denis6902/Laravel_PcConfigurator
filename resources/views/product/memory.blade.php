@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$memory->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($memory->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($memory->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$memory->rating}}%</p>
            <p class="card-text">Náš kód: {{$memory->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 50%">
                <img class="card-img-top"
                     alt="{{$illustrationImage["alt"]}}"
                     style="display: block;"
                     src="{{$illustrationImage["src"]}}"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Typ: {{$supportedRamType["type"]}}</p>
                <p class="card-text">Rychlost: {{$memory->speed}} MHz</p>
                <p class="card-text">Počet kusů x Kapacita jednoho kusu: {{$memory->modules}}
                    x {{$memory->capacity}}</p>
                <p class="card-text">Barva: {{$memory->color}}</p>
                <p class="card-text">Latence: CL {{$memory->latency}}</p>
                <p class="card-text">Cena: {{$memory->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'memory', 'id'=>$memory->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($memory->brand_id)["id"])}}">{{$brandModel::Find($memory->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($memory->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce od: {{ \Carbon\Carbon::parse($memory->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$memory->info}}</p>
    </main>
    @include("footer")
@endsection
