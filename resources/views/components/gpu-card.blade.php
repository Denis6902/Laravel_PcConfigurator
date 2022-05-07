<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="Gpu" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/gpu.jpg"
             data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">Grafická karta: {{$gpu->name}}</p>
            <p class="card-text">Čip: {{$gpu->chipset}}</p>
            <p class="card-text">Velikost paměti: {{$gpu->memory}} GB</p>
            <p class="card-text">Takt jádra: {{$gpu->core_clock}} MHz s boostem až
                na {{$gpu->boost_clock}} MHz</p>
            <p class="card-text">Barva: {{$gpu->color}}</p>
            <p class="card-text">Délka: {{$gpu->length}} mm</p>
            <p class="card-text">
                @for($i = 0; $i < (($gpu->rating)+2)/20 && $i < 5; $i++)
                    <img class="bigStar" src="/./img/star.svg" alt="Star">
                @endfor
            </p>
            <p class="card-text">Cena: {{$gpu->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'gpu', 'id'=>$gpu->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('addProduct', ['product'=>'gpu', 'id'=>$gpu->id])}}">Přidat</a>
                </div>
                <small
                    class="text-muted">{{ \Carbon\Carbon::parse($gpu->created_at)->format('d/m/Y')}}</small>
            </div>
        </div>
    </div>
</div>
