@extends("app")

@section("content")
    @include("header")
    {{\Illuminate\Support\Facades\Session::forget($product)}}

    <script type="text/javascript">
        window.location.href = "{{ route('pcConfigurator')}}";
    </script>
    @include("footer")
@endsection
