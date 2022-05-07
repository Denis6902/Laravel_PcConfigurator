@extends("app")

@section("content")
    @include("header")
    <h1>Vyberte si CPU chladič</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($allCpuCooler as $cpuCooler)
                    <x-cpu-cooler-card :cpuCooler="$cpuCooler"></x-cpu-cooler-card>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
