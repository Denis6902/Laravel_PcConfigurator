@extends("app")

@section("content")
    @include("header")
    {{\Illuminate\Support\Facades\Session::put('theme', $theme)}}
    <h1 class="text-center">{{mb_strtoupper("Měním režím na $theme")}}</h1>

    <script type="text/javascript">
        window.location.href = "{{ $currentRoute }}";
    </script>
    @include("footer")
@endsection
