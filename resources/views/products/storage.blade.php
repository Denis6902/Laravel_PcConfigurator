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
        <h1>Vyberte si uložiště</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Název</th>
                <th scope="col">Kapacita</th>
                <th scope="col">Typ</th>
                <th scope="col">Interface</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováné</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allStorage as $storage)
                <tr>
                    <th scope="row">{{$storage->id}}</th>
                    <th scope="row">{{$storage->name}}</th>
                    <th scope="row">{{$storage->capacity}}</th>
                    <th scope="row">{{$storage->type}}</th>
                    <th scope="row">{{$storage->interface}}</th>
                    <th scope="row">{{$storage->rating}}</th>
                    <th scope="row">{{$storage->price}}</th>
                    <th scope="row">{{$storage->created_at}}</th>
                    <th scope="row">{{$storage->updated_at}}</th>
                    <th scope="row"><a href="{{route('pc-configurator')}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
