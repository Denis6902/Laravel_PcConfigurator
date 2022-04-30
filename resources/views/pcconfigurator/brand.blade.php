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
        <h1>{{$brand->name}}</h1>
        <p>Značka {{$brand->name}} pochází z {{$brand->headquarters}}</p>
        <p>Byla založena v roce {{$brand->founded_in}}</p>
        <h2>O značce</h2>
        <p>{{$brand->info}}</p>
    </main>
    @include("footer")
@endsection
