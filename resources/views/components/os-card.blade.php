<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="{{$illustrationImage["alt"]}}"
             style="height: 225px; width: 100%; display: block;"
             src="{{$illustrationImage["src"]}}"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Operační systém: {{$os->name}}</p>
            <p class="card-text">Typ: {{$os->version}} {{$os->edition}} {{$os->mode}}</p>
            <p class="card-text">Podporovaná velikost RAM: {{$os->maximumMemory}} GB</p>
            <p class="card-text">
                @if($os->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($os->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$os->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'os', 'id'=>$os->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'os', 'id'=>$os->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'os'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
