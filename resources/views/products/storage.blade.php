@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si uložiště</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allStorage as $storage)
                    <x-storage-card :storage="$storage"></x-storage-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
