<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="{{\App\Models\IllustrationImage::find($cpu->illustration_image_id)["alt"]}}"
             style="height: 225px; width: 100%; display: block;"
             src="{{\App\Models\IllustrationImage::find($cpu->illustration_image_id)["src"]}}"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Procesor: {{$cpu->name}}</p>

            @if($cpu->smt_or_ht == '1')
                <p class="card-text">{{$cpu->cores}} jader ({{$cpu->cores * 2 }} vláken) s {{$cpu->clock}} GHz</p>
            @else
                <p class="card-text">{{$cpu->cores}} jader s {{$cpu->clock}} GHz</p>
            @endif
            <p class="card-text">TDP: {{$cpu->tdp}} W</p>
            <p class="card-text">Socket: {{ \App\Models\Socket::find($cpu->socket_id)["name"] }}</p>
            <p class="card-text">Podpora
                RAM: {{\App\Models\SupportedRamType::find($cpu->supported_ram_type_id)["type"]}}</p>
            <p class="card-text">Integrovaná grafická karta: {{$cpu->i_gpu}}</p>
            <p class="card-text">
                @if($cpu->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($cpu->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$cpu->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'cpu', 'id'=>$cpu->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div class="text-muted">
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'cpu', 'id'=>$cpu->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'cpu'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
