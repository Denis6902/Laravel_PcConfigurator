@extends("app")

@section("content")
    @include("header")
    <h1>Operační systém</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             alt="OS" style="height: 225px; width: 100%; display: block;"
                             src="/./img/products/os.jpg"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <p>
                                <a class="card-text"
                                   href="{{route('brand' ,$brandModel::Find($os->brand_id)["id"])}}">Značka: {{$brandModel::Find($os->brand_id)["name"]}}
                                </a>
                            </p>
                            <p class="card-text">Operační systém: {{$os->name}}</p>
                            <p class="card-text">Typ: {{$os->version}} {{$os->edition}} {{$os->mode}}</p>
                            <p class="card-text">Podporovaná velikost RAM: {{$os->maximumMemory}} GB</p>
                            <p class="card-text">Hodnocení {{$os->rating}}%</p>
                            <p class="card-text">Cena: {{$os->price}} Kč</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary"
                                       href="{{route('addProduct', ['product'=>'os', 'id'=>$os->id])}}">Přidat</a>
                                </div>
                                <small
                                    class="text-muted">{{ \Carbon\Carbon::parse($os->created_at)->format('d/m/Y')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("footer")
@endsection
