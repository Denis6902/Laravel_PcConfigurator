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
        <h1>Vyberte si paměť</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Název</th>
                <th scope="col">Typ</th>
                <th scope="col">Rychlost</th>
                <th scope="col">Latence</th>
                <th scope="col">Moduly</th>
                <th scope="col">Barva</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováné</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allMemory as $memory)
                <tr>
                    <th scope="row">{{$memory->id}}</th>
                    <th scope="row">{{$memory->name}}</th>
                    <th scope="row">{{$memory->type}}</th>
                    <th scope="row">{{$memory->speed}} MHz</th>
                    <th scope="row">{{$memory->latency}}</th>
                    <th scope="row">{{$memory->modules}}</th>
                    <th scope="row">{{$memory->color}}</th>
                    <th scope="row">@for($i = 0; $i < $memory->rating; $i++) * @endfor</th>
                    <th scope="row">{{$memory->price}} Kč</th>
                    <th scope="row">{{$memory->created_at}}</th>
                    <th scope="row">{{$memory->updated_at}}</th>
                    <th scope="row"><a href="{{route('pc-configurator')}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
