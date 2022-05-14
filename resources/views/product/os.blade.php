@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$os->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($os->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($os->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$os->rating}}%</p>
            <p class="card-text">Náš kód: {{$os->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 55%;">
                <img class="card-img-top"
                     alt="OS" style="display: block;"
                     src="/./img/products/OS.jpg"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Verze: {{$os->version}}</p>
                <p class="card-text">Edice: {{$os->edition}}</p>
                <p class="card-text">Typ [bitový]: {{$os->mode}}</p>
                <p class="card-text">Maximální podporovaná velikost paměti: {{$os->maximumMemory}} GB ({{$os->maximumMemory/1024}} TB)</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'os', 'id'=>$os->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($os->brand_id)["id"])}}">{{$brandModel::Find($os->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($os->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($os->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$os->info}}</p>
    </main>
    @include("footer")
@endsection
