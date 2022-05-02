@extends("app")

@section("content")
    @include("header")
        {{\Illuminate\Support\Facades\Session::forget($product)}}

        <script type="text/javascript">
            window.location =  '/' ;
        </script>
    @include("footer")
@endsection
