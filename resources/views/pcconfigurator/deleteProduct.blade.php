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
       <p> Mažu produkt {{$product}}</p>
        {{\Illuminate\Support\Facades\Session::forget($product)}}
    </main>
    @include("footer")
@endsection
