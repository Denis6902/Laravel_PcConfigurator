@extends("app")

@section("content")
    @include("header")
        <h1>Vyberte si grafickou kartu</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Značka</th>
                <th scope="col">Název modelu</th>
                <th scope="col">Název čipu</th>
                <th scope="col">Velikost paměti</th>
                <th scope="col">Takt jádra</th>
                <th scope="col">Takt boostu</th>
                <th scope="col">Barva</th>
                <th scope="col">Délka</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováno</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allGpu as $gpu)
                <tr>
                    <th scope="row">{{$gpu->id}}</th>
                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($gpu->brand_id)["id"])}}">{{\App\Models\Brand::Find($gpu->brand_id)["name"]}}</a></th>
                    <th scope="row">{{$gpu->name}}</th>
                    <th scope="row">{{$gpu->chipset}}</th>
                    <th scope="row">{{$gpu->memory}} GB</th>
                    <th scope="row">{{$gpu->core_clock}} MHz</th>
                    <th scope="row">{{$gpu->boost_clock}} MHz</th>
                    <th scope="row">{{$gpu->color}}</th>
                    <th scope="row">{{$gpu->length}} mm</th>
                    <th scope="row">@for($i = 0; $i < $gpu->rating; $i++) * @endfor</th>
                    <th scope="row">{{$gpu->price}} Kč</th>
                    <th scope="row">{{$gpu->created_at}}</th>
                    <th scope="row">{{$gpu->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'gpu', 'id'=>$gpu->id])}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    @include("footer")
@endsection
