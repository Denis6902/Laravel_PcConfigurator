@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>Skříň</h1>
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="PcCase" style="height: 225px; width: 100%; display: block;"
                                 src="/./img/products/pccase.jpg"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p>
                                    <a class="card-text"
                                       href="{{route('brand' ,$brandModel::Find($pcCase->brand_id)["id"])}}">Značka: {{$pcCase::Find($pcCase->brand_id)["name"]}}
                                    </a>
                                </p>
                                <p class="card-text">Skříň: {{$pcCase->name}}</p>
                                <p class="card-text">Velikost: {{$pcCase->type}}</p>
                                <p class="card-text">Barva: {{$pcCase->color}}</p>
                                <p class="card-text">Pozic interních disků: {{$pcCase->internal_5_25_bays}}x </p>
                                <p class="card-text">Pozic externích disků: {{$pcCase->external_5_25_bays}}x </p>
                                <p class="card-text">Hodnocení {{$pcCase->rating}}%</p>
                                <p class="card-text">Cena: {{$pcCase->price}} Kč</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('addProduct', ['product'=>'pccase', 'id'=>$pcCase->id])}}">Přidat</a>
                                    </div>
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($pcCase->created_at)->format('d/m/Y')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include("footer")
@endsection
