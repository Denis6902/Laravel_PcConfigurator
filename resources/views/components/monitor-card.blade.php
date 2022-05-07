 <div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="Monitor" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/monitor.jpg"
             data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">Monitor: {{$monitor->name}}</p>
            <p class="card-text">Velikost: {{$monitor->size}} palců</p>
            <p class="card-text">Rozlišení: {{$monitor->resolution}} px</p>
            <p class="card-text">Obnovovací frekvence: {{$monitor->refresh_rate}} Hz</p>
            <p class="card-text">Typ panelu: {{$monitor->panel_type}}</p>
            <p class="card-text">
                @for($i = 0; $i < (($monitor->rating)+2)/20 && $i < 5; $i++)
                    <img class="bigStar" src="/./img/star.svg" alt="Star">
                @endfor
            </p>
            <p class="card-text">Cena: {{$monitor->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'monitor', 'id'=>$monitor->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a>
                </div>
            </div>
        </div>
    </div>
</div>
