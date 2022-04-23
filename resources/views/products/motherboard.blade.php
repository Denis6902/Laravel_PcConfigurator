@extends("app")

@push("styles")
    <style>
        main {
            padding: 0 10%;
        }
    </style>
@endpush

@section("content")
    @include("header")
    <main>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Název</th>
                <th scope="col">WiFi</th>
                <th scope="col">Patice</th>
                <th scope="col">Velikost</th>
                <th scope="col">Maximální velikost RAM</th>
                <th scope="col">Počet RAM slotů</th>
                <th scope="col">Barva</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováné</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allMotherboard as $motherboard)
                <tr>
                    <th scope="row">{{$motherboard->id}}</th>
                    <th scope="row">{{$motherboard->name}}</th>
                    <th scope="row">@if($motherboard->wifi == '1')
                            Ano
                        @else
                            Ne
                        @endif</th>
                    <th scope="row">{{$motherboard->socket}}</th>
                    <th scope="row">{{$motherboard->type}}</th>
                    <th scope="row">{{$motherboard->maximumMemory}} GB</th>
                    <th scope="row">{{$motherboard->memorySlots}}</th>
                    <th scope="row">{{$motherboard->color}}</th>
                    <th scope="row">@for($i = 0; $i < $motherboard->rating; $i++)
                            *
                        @endfor</th>
                    <th scope="row">{{$motherboard->price}} Kč</th>
                    <th scope="row">{{$motherboard->created_at}}</th>
                    <th scope="row">{{$motherboard->updated_at}}</th>
                    <th scope="row"><a href="#">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
