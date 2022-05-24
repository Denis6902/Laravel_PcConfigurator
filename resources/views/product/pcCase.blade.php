@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$pcCase->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($pcCase->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($pcCase->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$pcCase->rating}}%</p>
            <p class="card-text">Náš kód: {{$pcCase->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 35%;">
                <img class="card-img-top"
                     alt="{{$illustrationImage["alt"]}}"
                     style="display: block;"
                     src="{{$illustrationImage["src"]}}"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Velikost skříně: {{$pcCase->type}}</p>
                <p class="card-text">Barva: {{$pcCase->color}}</p>
                <p class="card-text">{{$pcCase->internal_5_25_bays}} pozice pro interní disky</p>
                <p class="card-text">{{$pcCase->external_5_25_bays}} pozice pro externí disky</p>
                <p class="card-text">Cena: {{$pcCase->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'pccase', 'id'=>$pcCase->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($pcCase->brand_id)["id"])}}">{{$brandModel::Find($pcCase->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($pcCase->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($pcCase->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$pcCase->info}}</p>
    </main>
    @include("footer")
@endsection
