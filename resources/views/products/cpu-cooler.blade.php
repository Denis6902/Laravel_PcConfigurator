@extends("app")

@push("styles")
    <style>
        main {
            padding: 0 10%;
        }
    </style>
@endpush

@section("content")
    @include("header")
    <main>
        <h1>Vyberte CPU chladič</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Značka</th>
                <th scope="col">Název</th>
                <th scope="col">Počet otáček</th>
                <th scope="col">Hlučnost</th>
                <th scope="col">Barva</th>
                <th scope="col">Velikost radiátoru</th>
                <th scope="col">Výška chladiče</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováno</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allCpuCooler as $cpuCooler)
                <tr>
                    <th scope="row">{{$cpuCooler->id}}</th>
                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($cpuCooler->brand_id)["id"])}}">{{\App\Models\Brand::Find($cpuCooler->brand_id)["name"]}}</a></th>
                    <th scope="row">{{$cpuCooler->name}}</th>
                    <th scope="row">{{$cpuCooler->fan_rpm}} RPM</th>
                    <th scope="row">{{$cpuCooler->noise_level}} dB</th>
                    <th scope="row">{{$cpuCooler->color}}</th>
                    <th scope="row">@if($cpuCooler->radiator_size == '0')

                        @else
                            {{$cpuCooler->radiator_size}} mm
                        @endif</th>
                    <th scope="row">{{$cpuCooler->height}} mm</th>
                    <th scope="row">@for($i = 0; $i < $cpuCooler->rating; $i++) * @endfor</th>
                    <th scope="row">{{$cpuCooler->price}} Kč</th>
                    <th scope="row">{{$cpuCooler->created_at}}</th>
                    <th scope="row">{{$cpuCooler->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'cpu-cooler', 'id'=>$cpuCooler->id])}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
            </table>
    </main>
    @include("footer")
@endsection
