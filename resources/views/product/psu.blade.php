@extends("app")

@section("content")
    @include("header")
    <h1>Zdroj</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             alt="PSU" style="height: 225px; width: 100%; display: block;"
                             src="/./img/products/psu.jpg"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <p>
                                <a class="card-text"
                                   href="{{route('brand' ,$brandModel::Find($psu->brand_id)["id"])}}">Značka: {{$brandModel::Find($psu->brand_id)["name"]}}
                                </a>
                            </p>
                            <p class="card-text">Zdroj: {{$psu->name}}</p>
                            <p class="card-text">Velikost: {{$psu->formFactor}}</p>
                            <p class="card-text">Certifikace: 80+ {{$psu->efficiencyRating}}</p>
                            <p class="card-text">Výkon: {{$psu->wattage}} W</p>
                            <p class="card-text">{{$psu->modular}} modularní</p>
                            <p class="card-text">Hodnocení {{$psu->rating}}%</p>
                            <p class="card-text">Cena: {{$psu->price}} Kč</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary"
                                       href="{{route('addProduct', ['product'=>'psu', 'id'=>$psu->id])}}">Přidat</a>
                                </div>
                                <small
                                    class="text-muted">{{ \Carbon\Carbon::parse($psu->created_at)->format('d/m/Y')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("footer")
@endsection
