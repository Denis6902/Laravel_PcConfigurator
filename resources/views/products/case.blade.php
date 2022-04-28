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
    <h1>Vyberte si skříň</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Název</th>
            <th scope="col">Tyo</th>
            <th scope="col">Barva</th>
            <th scope="col">Počty pozic interních disků</th>
            <th scope="col">Počty pozic externích disků</th>
            <th scope="col">Hodnocení</th>
            <th scope="col">Cena</th>
            <th scope="col">Vytvořeno</th>
            <th scope="col">Aktualizováné</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allCase as $case)
            <tr>
                <th scope="row">{{$case->id}}</th>
                <th scope="row">{{$case->name}}</th>
                <th scope="row">{{$case->type}}</th>
                <th scope="row">{{$case->color}}</th>
                <th scope="row">{{$case->internal_5_25_bays}}x</th>
                <th scope="row">{{$case->external_5_25_bays}}x</th>
                <th scope="row">@for($i = 0; $i < $case->rating; $i++) * @endfor</th>
                <th scope="row">{{$case->price}} Kč</th>
                <th scope="row">{{$case->created_at}}</th>
                <th scope="row">{{$case->updated_at}}</th>
                <th scope="row"><a href="{{route('pc-configurator')}}">Přidat</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
    @include("footer")
@endsection
