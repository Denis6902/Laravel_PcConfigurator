@extends("app")

<style>
    .displayFlex {
        display: flex;
    }

    .displayFlex p {
        margin-right: 1em;
    }

    .displayFlexDVA {
        display: flex;
    }

    .displayFlexDVA p {
        margin-right: 1em;
        margin-bottom: 0;
    }

    .margin {
        margin-right: 1em;
        margin-bottom: 1em;
    }

    h2{
        padding-top: 1em
    }
</style>

@section("content")
    @include("header")
    <main>
        <h1>{{$cpu->name}}</h1>
        <div class="displayFlexDVA margin">
            @for($i = 1; $i < ($cpu->rating)/20; $i++)
                <img class="smallStar" src="/./img/star.svg" alt="Star">
            @endfor
            <p class="card-text">{{$cpu->rating}}%</p>
            <p class="card-text">Náš kód: {{$cpu->id}}</p>
        </div>
        <div class="displayFlex">
            <img class="card-img-top"
                 alt="CPU" style="width: 50%; display: block;"
                 src="/./img/products/cpu.jpg"
                 data-holder-rendered="true">
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
                    <div class="btn-group margin">
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
