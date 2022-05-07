<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="OS" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/os.jpg"
             data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">Operační systém: {{$os->name}}</p>
            <p class="card-text">Typ: {{$os->version}} {{$os->edition}} {{$os->mode}}</p>
            <p class="card-text">Podporovaná velikost RAM: {{$os->maximumMemory}} GB</p>
            <p class="card-text">
                @for($i = 0; $i < (($os->rating)+2)/20 && $i < 5; $i++)
                    <img class="bigStar" src="/./img/star.svg" alt="Star">
                @endfor
            </p>
            <p class="card-text">Cena: {{$os->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'os', 'id'=>$os->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('addProduct', ['product'=>'os', 'id'=>$os->id])}}">Přidat</a>
                </div>
            </div>
        </div>
    </div>
</div>
