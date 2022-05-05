@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>Vyberte si procesor</h1>
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    @foreach($allCpu as $cpu)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top"
                                     alt="CPU" style="height: 225px; width: 100%; display: block;"
                                     src="/./img/cpu.jpg"
                                     data-holder-rendered="true">
                                <div class="card-body">
                                    <p>
                                        <a class="card-text"
                                          href="{{route('brand' ,\App\Models\Brand::Find($cpu->brand_id)["id"])}}">Značka: {{\App\Models\Brand::Find($cpu->brand_id)["name"]}}
                                        </a>
                                    </p>
                                    <p class="card-text">Procesor: {{$cpu->name}}</p>
                                    <p class="card-text">{{$cpu->clock}} GHz</p>
                                    <p class="card-text">{{$cpu->cores}} jader</p>
                                    <p class="card-text">{{$cpu->tdp}} W</p>
                                    <p class="card-text">Integrovaná grafická karta: {{$cpu->i_gpu}}</p>
                                    @if($cpu->smt_or_ht == '1')
                                        <p class="card-text">Podpora SMT/HT</p>
                                    @endif
                                    <p class="card-text">Hodnocení {{$cpu->rating * 10}}%</p>
                                    <p class="card-text">Cena: {{$cpu->price}} Kč</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Zobrazit
                                            </button>
                                            {{--TODO: Přidat cestu a blade a route /product/.../{id} - připadně upravit co zde půjde vidět a co půjde vidět v /product/.../{id}--}}
                                            <a class="btn btn-sm btn-outline-secondary"
                                               href="{{route('addProduct', ['product'=>'cpu', 'id'=>$cpu->id])}}">Přidat</a>
                                        </div>
                                        <small class="text-muted">{{$cpu->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include("footer")
@endsection
