@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$cpuCooler->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($cpuCooler->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($cpuCooler->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$cpuCooler->rating}}%</p>
            <p class="card-text">Náš kód: {{$cpuCooler->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 40%;">
                <img class="card-img-top"
                     alt="{{\App\Models\IllustrationImage::find($cpuCooler->illustration_image_id)["alt"]}}"
                     style="display: block;"
                     src="{{\App\Models\IllustrationImage::find($cpuCooler->illustration_image_id)["src"]}}"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Počet otáček za minutu: {{$cpuCooler->fan_rpm}} </p>
                <p class="card-text">Hlučnost: {{$cpuCooler->noise_level}} dB</p>
                <p class="card-text">Barva: {{$cpuCooler->color}}</p>
                @if($cpuCooler->radiator_size != 0)
                    <p class="card-text">Typ chladiče: Vodní (All in One)</p>
                    <p class="card-text">Velikost radiátoru: {{$cpuCooler->radiator_size}} mm</p>
                @else
                    <p class="card-text">Typ chladiče: Vzduchový</p>
                @endif
                <p class="card-text">Výška chladice: {{$cpuCooler->height}} mm</p>
                <p class="card-text">Cena: {{$cpuCooler->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'cpucooler', 'id'=>$cpuCooler->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($cpuCooler->brand_id)["id"])}}">{{$brandModel::Find($cpuCooler->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($cpuCooler->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($cpuCooler->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$cpuCooler->info}}</p>
    </main>
    @include("footer")
@endsection
