@extends("app")

@section("content")
    @include("header")
        <h1>Vyberte si monitor</h1>
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">ID</th>--}}
{{--                <th scope="col">Značka</th>--}}
{{--                <th scope="col">Název</th>--}}
{{--                <th scope="col">Velikost</th>--}}
{{--                <th scope="col">Rozlišení</th>--}}
{{--                <th scope="col">Obnovovací frekvence</th>--}}
{{--                <th scope="col">Typ panelu</th>--}}
{{--                <th scope="col">Hodnocení</th>--}}
{{--                <th scope="col">Cena</th>--}}
{{--                <th scope="col">Vytvořeno</th>--}}
{{--                <th scope="col">Aktualizováno</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($allMonitor as $monitor)--}}
{{--                <tr>--}}
{{--                    <th scope="row">{{$monitor->id}}</th>--}}
{{--                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($monitor->brand_id)["id"])}}">{{\App\Models\Brand::Find($monitor->brand_id)["name"]}}</a></th>--}}
{{--                    <th scope="row">{{$monitor->name}}</th>--}}
{{--                    <th scope="row">{{$monitor->size}} palců</th>--}}
{{--                    <th scope="row">{{$monitor->resolution}}</th>--}}
{{--                    <th scope="row">{{$monitor->refresh_rate}} Hz</th>--}}
{{--                    <th scope="row">{{$monitor->panel_type}}</th>--}}
{{--                    <th scope="row">@for($i = 0; $i < $monitor->rating; $i++) * @endfor</th>--}}
{{--                    <th scope="row">{{$monitor->price}} Kč</th>--}}
{{--                    <th scope="row">{{$monitor->created_at}}</th>--}}
{{--                    <th scope="row">{{$monitor->updated_at}}</th>--}}
{{--                    <th scope="row"><a href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a></th>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allMonitor as $monitor)
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
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zobrazit
                                        </button>
                                        {{--TODO: Přidat cestu a blade a route /product/.../{id} - připadně upravit co zde půjde vidět a co půjde vidět v /product/.../{id}--}}
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a>
                                    </div>
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($monitor->created_at)->format('d/m/Y')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
