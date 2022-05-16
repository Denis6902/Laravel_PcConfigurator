<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="Gpu" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/gpu.jpg"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Grafická karta: {{$gpu->name}}</p>
            <p class="card-text">Grafický čip: {{$gpu->chipset}}</p>
            <p class="card-text">Velikost paměti: {{$gpu->memory}} GB</p>
            <p class="card-text">Takt jádra: {{$gpu->core_clock}} MHz</p>
            <p class="card-text">Doporučený výkon zdroje: {{$gpu->recommendedWattage}} W</p>
            <p class="card-text">Délka: {{$gpu->length}} mm</p>
            <p class="card-text">
                @if($gpu->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($gpu->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$gpu->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'gpu', 'id'=>$gpu->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'gpu', 'id'=>$gpu->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'gpu'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
