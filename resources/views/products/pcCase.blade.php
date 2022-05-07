@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>Vyberte si skříň</h1>
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    @foreach($allPcCase as $pcCase)
                        <x-pc-case-card :pcCase="$pcCase"></x-pc-case-card>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include("footer")
@endsection
