@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$monitor->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($monitor->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($monitor->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$monitor->rating}}%</p>
            <p class="card-text">Náš kód: {{$monitor->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 50%;">
                <img class="card-img-top"
                     alt="{{\App\Models\IllustrationImage::find($monitor->illustration_image_id)["alt"]}}" style="display: block;"
                     src="{{\App\Models\IllustrationImage::find($monitor->illustration_image_id)["src"]}}"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Velikost: {{$monitor->size}} palců</p>
                <p class="card-text">Rozlišení: {{$monitor->resolution}} px</p>
                <p class="card-text">Obnovovací frekvence: {{$monitor->refresh_rate}} Hz</p>
                <p class="card-text">Typ panelu: {{$monitor->panel_type}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($monitor->brand_id)["id"])}}">{{$brandModel::Find($monitor->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($monitor->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($monitor->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$monitor->info}}</p>
    </main>
    @include("footer")
@endsection
