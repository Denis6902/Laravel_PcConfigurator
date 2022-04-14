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
    </main>
    @include("footer")
@endsection
