@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si základní desku</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allMotherboard as $motherboard)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="Motherboard" style="height: 225px; width: 100%; display: block;"
                                 src="/./img/products/motherboard.jpg"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p>
                                    <a class="card-text"
                                       href="{{route('brand' ,$brandModel::Find($motherboard->brand_id)["id"])}}">Značka: {{$brandModel::Find($motherboard->brand_id)["name"]}}
                                    </a>
                                </p>
                                <p class="card-text">Základní deska: {{$motherboard->name}}</p>
                                <p class="card-text">Socket: {{$motherboard->socket}}</p>
                                <p class="card-text">Velikost: {{$motherboard->type}}</p>
                                <p class="card-text">Počet slotů na RAM: {{$motherboard->memorySlots}}</p>
                                <p class="card-text">Podporovaná velikost RAM: {{$motherboard->maximumMemory}} GB</p>
                                @if($motherboard->wifi == '1') <p class="card-text">Podpora WiFi</p> @endif
                                <p class="card-text">Barva: {{$motherboard->color}}</p>
                                <p class="card-text">Hodnocení {{$motherboard->rating}}%</p>
                                <p class="card-text">Cena: {{$motherboard->price}} Kč</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zobrazit
                                        </button>
                                        {{--TODO: Přidat cestu a blade a route /product/.../{id} - připadně upravit co zde půjde vidět a co půjde vidět v /product/.../{id}--}}
                                        <a class="btn btn-sm btn-outline-secondary"
                                           href="{{route('addProduct', ['product'=>'motherboard', 'id'=>$motherboard->id])}}">Přidat</a>
                                    </div>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($motherboard->created_at)->format('d/m/Y')}}</small>
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
