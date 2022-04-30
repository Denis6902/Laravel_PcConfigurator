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
        <h1>Vyberte si oparační systém</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Značka</th>
                <th scope="col">Název</th>
                <th scope="col">Verze</th>
                <th scope="col">Edice</th>
                <th scope="col">Typ W</th>
                <th scope="col">Maximální podporovaná velikost RAM</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováno</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allOs as $os)
                <tr>
                    <th scope="row">{{$os->id}}</th>
                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($os->brand_id)["id"])}}">{{\App\Models\Brand::Find($os->brand_id)["name"]}}</a></th>
                    <th scope="row">{{$os->name}}</th>
                    <th scope="row">{{$os->version}}</th>
                    <th scope="row">{{$os->edition}}</th>
                    <th scope="row">{{$os->mode}}</th>
                    <th scope="row">{{$os->maximumMemory}} GB</th>
                    <th scope="row">@for($i = 0; $i < $os->rating; $i++) * @endfor</th>
                    <th scope="row">{{$os->price}} Kč</th>
                    <th scope="row">{{$os->created_at}}</th>
                    <th scope="row">{{$os->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'os', 'id'=>$os->id])}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
