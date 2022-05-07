@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si zdroj</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allPsu as $psu)
                    <x-psu-card :psu="$psu"></x-psu-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
