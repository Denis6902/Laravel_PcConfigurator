@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si paměť</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allMemory as $memory)
                    <x-memory-card :memory="$memory"></x-memory-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
