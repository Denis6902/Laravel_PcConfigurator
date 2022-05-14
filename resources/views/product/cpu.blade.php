@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>{{$cpu->name}}</h1>
        <div class="underHeaderOfProduct productMargin">
            @if($cpu->rating < 20)
                <img class="smallStar" src="/./img/halfstar.svg" alt="nostar">
            @else
                @for($i = 1; $i < ($cpu->rating)/20; $i++)
                    <img class="smallStar" src="/./img/star.svg" alt="Star">
                @endfor
            @endif
            <p class="card-text">{{$cpu->rating}}%</p>
            <p class="card-text">Náš kód: {{$cpu->id}}</p>
        </div>
        <div class="productInfo">
            <figure style="width: 50%">
                <img class="card-img-top"
                     alt="CPU" style="display: block;"
                     src="/./img/products/cpu.jpg"
                     data-holder-rendered="true">
                <p class="text-center">Ilustrační foto</p>
            </figure>
            <div class="card-body">
                <p class="card-text">Takt: {{$cpu->clock}} GHz</p>
                <p class="card-text">Počet jader: {{$cpu->cores}}</p>
                <p class="card-text">TDP: {{$cpu->tdp}} W</p>
                <p class="card-text">Integrovaná grafická karta: {{$cpu->i_gpu}}</p>
                <p class="card-text">Podpora SMT/HT:
                    @if($cpu->smt_or_ht == '1')
                        Ano
                    @else
                        Ne
                    @endif
                </p>
                <p class="card-text">Cena: {{$cpu->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group productMargin">
                        <a class="btn btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'cpu', 'id'=>$cpu->id])}}">Přidat</a>
                    </div>
                </div>
                <p class="card-text"> Značka:
                    <a class="card-text"
                       href="{{route('brand' ,$brandModel::Find($cpu->brand_id)["id"])}}">{{$brandModel::Find($cpu->brand_id)["name"]}}
                    </a>
                <p class="card-text">Kód značky: {{$brandModel::Find($cpu->brand_id)["id"]}}</p>
                <p class="card-text">V nabídce od: {{ \Carbon\Carbon::parse($cpu->created_at)->format('d.m.Y')}}</p>
            </div>
        </div>
        <h2>Popis produktu</h2>
        <p class="card-text">{{$cpu->info}}</p>
    </main>
    @include("footer")
@endsection
