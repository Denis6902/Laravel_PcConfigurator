<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="Memory" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/memory.jpg"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Paměť: {{$memory->name}}</p>
            <p class="card-text">Typ: {{$memory->modules}} x {{$memory->capacity}} {{$memory->type}} {{$memory->speed}}
                MHz
                CL {{$memory->latency}}</p>
            <p class="card-text">Barva: {{$memory->color}}</p>
            <p class="card-text">
                @if($memory->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($memory->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$memory->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'memory', 'id'=>$memory->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'memory', 'id'=>$memory->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'memory'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
