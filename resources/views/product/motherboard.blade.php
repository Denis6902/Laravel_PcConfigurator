@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$motherboard->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($motherboard->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($motherboard->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$motherboard->rating}}%</p>
            <p class="card-text">Náš kód: {{$motherboard->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 50%;">
                <img class="card-img-top"
                     alt="Motherboard" style="display: block;"
                     src="/./img/products/motherboard.jpg"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Podpora WiFi:
                    @if($motherboard->wifi == 1)
                        Ano
                    @else
                        Ne
                    @endif
                </p>
                <p class="card-text">Socket: {{$motherboard->socket}}</p>
                <p class="card-text">Velikost základní desky: {{$motherboard->type}}</p>
                <p class="card-text">Maximální podporovaná velikost paměti: {{$motherboard->maximumMemory}} GB</p>
                <p class="card-text">Počet slotů pro paměti: {{$motherboard->memorySlots}}</p>
                <p class="card-text">Barva: {{$motherboard->color    }}</p>
                <p class="card-text">Cena: {{$motherboard->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'motherboard', 'id'=>$motherboard->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($motherboard->brand_id)["id"])}}">{{$brandModel::Find($motherboard->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($motherboard->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce
                    od: {{ \Carbon\Carbon::parse($motherboard->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$motherboard->info}}</p>
    </main>
    @include("footer")
@endsection
