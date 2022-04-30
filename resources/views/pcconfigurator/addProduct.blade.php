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
       <p> Přidávám produkt {{$product}} s id {{$id}} </p>
        {{\Illuminate\Support\Facades\Session::put($product, $id)}}
    </main>
    @include("footer")
@endsection
