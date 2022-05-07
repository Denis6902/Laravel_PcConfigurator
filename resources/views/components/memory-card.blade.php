<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="Memory" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/memory.jpg"
             data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">Paměť: {{$memory->name}}</p>
            <p class="card-text">Typ: {{$memory->modules}} {{$memory->type}} {{$memory->speed}} MHz
                CL {{$memory->latency}}</p>
            <p class="card-text">Barva: {{$memory->color}}</p>
            <p class="card-text">
                @for($i = 0; $i < (($memory->rating)+2)/20 && $i < 5; $i++)
                    <img class="bigStar" src="/./img/star.svg" alt="Star">
                @endfor
            </p>                                <p class="card-text">Cena: {{$memory->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'memory', 'id'=>$memory->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('addProduct', ['product'=>'memory', 'id'=>$memory->id])}}">Přidat</a>
                </div>
                <small
                    class="text-muted">{{ \Carbon\Carbon::parse($memory->created_at)->format('d/m/Y')}}</small>
            </div>
        </div>
    </div>
</div>
