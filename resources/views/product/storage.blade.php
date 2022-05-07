@extends("app")

@section("content")
    @include("header")
    <h1>Uložiště</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             alt="Storage" style="height: 225px; width: 100%; display: block;"
                             src="/./img/products/storage.jpg"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <p>
                                <a class="card-text"
                                   href="{{route('brand' ,$brandModel::Find($storage->brand_id)["id"])}}">Značka: {{$brandModel::Find($storage->brand_id)["name"]}}
                                </a>
                            </p>
                            <p class="card-text">Disk: {{$storage->name}}</p>
                            <p class="card-text">Kapacita: {{$storage->capacity}} GB</p>
                            <p class="card-text">Typ: {{$storage->interface}} {{$storage->type}}</p>
                            <p class="card-text">Hodnocení {{$storage->rating}}%</p>
                            <p class="card-text">Cena: {{$storage->price}} Kč</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary"
                                       href="{{route('addProduct', ['product'=>'storage', 'id'=>$storage->id])}}">Přidat</a>
                                </div>
                                <small
                                    class="text-muted">{{ \Carbon\Carbon::parse($storage->created_at)->format('d/m/Y')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("footer")
@endsection
