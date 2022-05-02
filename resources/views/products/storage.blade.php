@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>Vyberte si uložiště</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Značka</th>
                <th scope="col">Název</th>
                <th scope="col">Kapacita</th>
                <th scope="col">Typ</th>
                <th scope="col">Interface</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováno</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allStorage as $storage)
                <tr>
                    <th scope="row">{{$storage->id}}</th>
                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($storage->brand_id)["id"])}}">{{\App\Models\Brand::Find($storage->brand_id)["name"]}}</a></th>
                    <th scope="row">{{$storage->name}}</th>
                    <th scope="row">{{$storage->capacity}} GB</th>
                    <th scope="row">{{$storage->type}}</th>
                    <th scope="row">{{$storage->interface}}</th>
                    <th scope="row">@for($i = 0; $i < $storage->rating; $i++) * @endfor</th>
                    <th scope="row">{{$storage->price}} Kč</th>
                    <th scope="row">{{$storage->created_at}}</th>
                    <th scope="row">{{$storage->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'storage', 'id'=>$storage->id])}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
