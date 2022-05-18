@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$storage->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($storage->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($storage->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$storage->rating}}%</p>
            <p class="card-text">Náš kód: {{$storage->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 35%;">
                <img class="card-img-top"
                     alt="{{\App\Models\IllustrationImage::find($storage->illustration_image_id)["alt"]}}" style="display: block;"
                     src="{{\App\Models\IllustrationImage::find($storage->illustration_image_id)["src"]}}"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Kapacita: {{$storage->capacity}} GB ({{$storage->capacity/1024}} TB)</p>
                <p class="card-text">Typ disku: {{$storage->type}}</p>
                <p class="card-text">Způsob připojení disku: {{$storage->interface}}</p>
                <p class="card-text">Cena: {{$storage->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'storage', 'id'=>$storage->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($storage->brand_id)["id"])}}">{{$brandModel::Find($storage->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($storage->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($storage->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$storage->info}}</p>
    </main>
    @include("footer")
@endsection
