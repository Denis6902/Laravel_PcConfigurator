<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="CPU Cooler" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/cpucooler.jpg"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Chladič: {{$cpuCooler->name}}</p>
            <p class="card-text">{{$cpuCooler->fan_rpm}} RPM</p>
            <p class="card-text">{{$cpuCooler->noise_level}} dB</p>
            <p class="card-text">Barva: {{$cpuCooler->color}}</p>
            @if($cpuCooler->radiator_size != '0')
                <p class="card-text">Velikost radiátoru {{$cpuCooler->radiator_size}} mm</p>
            @endif
            <p class="card-text">Výška {{$cpuCooler->height}} mm</p>
            <p class="card-text">
                @if($cpuCooler->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 0; $i < (($cpuCooler->rating)+2)/20 && $i < 5; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$cpuCooler->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'cpucooler', 'id'=>$cpuCooler->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('addProduct', ['product'=>'cpucooler', 'id'=>$cpuCooler->id])}}">Přidat</a>
                </div>
            </div>
        </div>
    </div>
</div>