@extends("app")

@section("content")
    @include("header")
    <main>
        {{\Illuminate\Support\Facades\Session::put($product, $id)}}

        <script type="text/javascript">
            window.location =  '/' ;
        </script>
    </main>
    @include("footer")
@endsection