@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>Vyberte si procesor</h1>
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    @foreach($allCpu as $cpu)
                        <x-cpu-card :cpu="$cpu"></x-cpu-card>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include("footer")
@endsection
