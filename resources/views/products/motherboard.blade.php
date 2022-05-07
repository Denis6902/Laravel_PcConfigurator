@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si základní desku</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allMotherboard as $motherboard)
                    <x-motherboard-card :motherboard="$motherboard"></x-motherboard-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
