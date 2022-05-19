@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$psu->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($psu->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($psu->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$psu->rating}}%</p>
            <p class="card-text">Náš kód: {{$psu->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 35%;">
                <img class="card-img-top"
                     alt="{{\App\Models\IllustrationImage::find($psu->illustration_image_id)["alt"]}}"
                     style="display: block;"
                     src="{{\App\Models\IllustrationImage::find($psu->illustration_image_id)["srrc"]}}"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Velikost: {{$psu->formFactor}}</p>
                <p class="card-text">Certifikace: 80+ {{$psu->efficiencyRating}}</p>
                <p class="card-text">Výkonnost: {{$psu->wattage}} W</p>
                <p class="card-text">Modulárnost: {{$psu->modular}} modulární</p>
                <p class="card-text">Cena: {{$psu->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'psu', 'id'=>$psu->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($psu->brand_id)["id"])}}">{{$brandModel::Find($psu->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($psu->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($psu->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$psu->info}}</p>
    </main>
    @include("footer")
@endsection
