@extends("app")

@section("content")
    @include("header")
    {{\Illuminate\Support\Facades\Session::put($product, $id)}}
    <h1 class="text-center">{{mb_strtoupper("Přidávám produkt typu $product s id $id")}}</h1>

    <script type="text/javascript">
        window.location.href = "{{ route('pcConfigurator')}}";
    </script>
    @include("footer")
@endsection
