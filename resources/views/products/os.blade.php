@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si operační systém</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allOs as $os)
                    <x-os-card :os="$os"></x-os-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
