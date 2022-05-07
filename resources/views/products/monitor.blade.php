@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si monitor</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allMonitor as $monitor)
                    <x-monitor-card :monitor="$monitor"></x-monitor-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
