@extends("app")

@section("content")
    @include("header")
    {{\Illuminate\Support\Facades\Session::put($product, $id)}}
    <h1 class="text-center">
        {{"Přidávám do košíku produkt " . $productName . "."}}
    </h1>

    <script type="text/javascript">
        window.location.href = "{{ route('cart')}}";
    </script>
    @include("footer")
@endsection
