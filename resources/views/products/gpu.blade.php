@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si grafickou kartu</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allGpu as $gpu)
                    <x-gpu-card :gpu="$gpu"></x-gpu-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
