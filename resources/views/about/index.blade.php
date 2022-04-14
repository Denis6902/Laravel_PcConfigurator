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
    <h1>Stránka o konfigurátoru</h1>
</main>
    @include("footer")
@endsection
