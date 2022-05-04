@extends("app")

@section("content")
    @include("header")
    {{\Illuminate\Support\Facades\Session::forget($product)}}
    <h1 class="text-center">{{mb_strtoupper("Mažu produkt typu $product")}}</h1>

    <script type="text/javascript">
        window.location.href = "{{ route('pcConfigurator')}}";
    </script>
    @include("footer")
@endsection
