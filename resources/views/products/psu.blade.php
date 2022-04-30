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
        <h1>Vyberte si zdroj</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Značka</th>
                <th scope="col">Název</th>
                <th scope="col">Velikost</th>
                <th scope="col">Certifikace</th>
                <th scope="col">Počet W</th>
                <th scope="col">Modulárnost</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováno</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allPsu as $psu)
                <tr>
                    <th scope="row">{{$psu->id}}</th>
                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($psu->brand_id)["id"])}}">{{\App\Models\Brand::Find($psu->brand_id)["name"]}}</a></th>
                    <th scope="row">{{$psu->name}}</th>
                    <th scope="row">{{$psu->formFactor}}</th>
                    <th scope="row">80+ {{$psu->efficiencyRating}}</th>
                    <th scope="row">{{$psu->wattage}} W</th>
                    <th scope="row">{{$psu->modular}}</th>
                    <th scope="row">@for($i = 0; $i < $psu->rating; $i++) * @endfor</th>
                    <th scope="row">{{$psu->price}} Kč</th>
                    <th scope="row">{{$psu->created_at}}</th>
                    <th scope="row">{{$psu->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'psu', 'id'=>$psu->id])}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
