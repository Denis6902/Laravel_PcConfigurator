@extends("app")

@section("content")
    @include("header")
    @if($brand == null)
        <script type="text/javascript">
            window.location = '/';
        </script>
    @else
        <h1>{{$brand->name}}</h1>
        <p>Značka {{$brand->name}} pochází z {{$brand->headquarters}}</p>
        <p>Byla založena v roce {{$brand->founded_in}}</p>
        <h2>O značce</h2>
        <p>{{$brand->info}}</p>
    @endif
    @include("footer")
@endsection
