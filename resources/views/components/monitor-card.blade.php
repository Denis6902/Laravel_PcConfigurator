<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="{{$illustrationImage["alt"]}}"
             style="height: 225px; width: 100%; display: block;"
             src="{{$illustrationImage["src"]}}"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Monitor: {{$monitor->name}}</p>
            <p class="card-text">Velikost: {{$monitor->size}} palců</p>
            <p class="card-text">Rozlišení: {{$monitor->resolution}} px</p>
            <p class="card-text">Obnovovací frekvence: {{$monitor->refresh_rate}} Hz</p>
            <p class="card-text">Typ panelu: {{$monitor->panel_type}}</p>
            <p class="card-text">
                @if($monitor->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($monitor->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$monitor->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'monitor', 'id'=>$monitor->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'monitor'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
