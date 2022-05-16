<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="PcCase" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/pccase.jpg"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Skříň: {{$pcCase->name}}</p>
            <p class="card-text">Velikost: {{$pcCase->type}}</p>
            <p class="card-text">Barva: {{$pcCase->color}}</p>
            <p class="card-text">Pozic interních disků: {{$pcCase->internal_5_25_bays}}x </p>
            <p class="card-text">Pozic externích disků: {{$pcCase->external_5_25_bays}}x </p>
            <p class="card-text">
                @if($pcCase->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($pcCase->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$pcCase->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'pccase', 'id'=>$pcCase->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'pccase', 'id'=>$pcCase->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'pccase'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
