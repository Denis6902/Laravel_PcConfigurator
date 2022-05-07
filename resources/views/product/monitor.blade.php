@extends("app")

@section("content")
    @include("header")
    <h1>Monitor</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             alt="Monitor" style="height: 225px; width: 100%; display: block;"
                             src="/./img/products/monitor.jpg"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <p>
                                <a class="card-text"
                                   href="{{route('brand' ,$brandModel::Find($monitor->brand_id)["id"])}}">Značka: {{$brandModel::Find($monitor->brand_id)["name"]}}
                                </a>
                            </p>
                            <p class="card-text">Monitor: {{$monitor->name}}</p>
                            <p class="card-text">Velikost: {{$monitor->size}} palců</p>
                            <p class="card-text">Rozlišení: {{$monitor->resolution}} px</p>
                            <p class="card-text">Obnovovací frekvence: {{$monitor->refresh_rate}} Hz</p>
                            <p class="card-text">Typ panelu: {{$monitor->panel_type}}</p>

                            <p class="card-text">Hodnocení {{$monitor->rating}}%</p>
                            <p class="card-text">Cena: {{$monitor->price}} Kč</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary"
                                       href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a>
                                </div>
                                <small
                                    class="text-muted">{{ \Carbon\Carbon::parse($monitor->created_at)->format('d/m/Y')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("footer")
@endsection
