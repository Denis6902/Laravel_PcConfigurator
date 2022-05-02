@extends("app")

@section("content")
    @include("header")
<main>
    <h1>Vyberte si procesor</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Značka</th>
            <th scope="col">Název</th>
            <th scope="col">Takt</th>
            <th scope="col">Počet jader</th>
            <th scope="col">TDP</th>
            <th scope="col">Integrovaná grafika</th>
            <th scope="col">SMT/HT</th>
            <th scope="col">Hodnocení</th>
            <th scope="col">Cena</th>
            <th scope="col">Vytvořeno</th>
            <th scope="col">Aktualizováno</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allCpu as $cpu)
            <tr>
                <th scope="row">{{$cpu->id}}</th>
                <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($cpu->brand_id)["id"])}}">{{\App\Models\Brand::Find($cpu->brand_id)["name"]}}</a></th>
                <th scope="row">{{$cpu->name}}</th>
                <th scope="row">{{$cpu->clock}} GHz</th>
                <th scope="row">{{$cpu->cores}} jader</th>
                <th scope="row">{{$cpu->tdp}}W</th>
                <th scope="row">{{$cpu->i_gpu}}</th>
                <th scope="row">@if($cpu->smt_or_ht == '1')
                        Ano
                    @else
                        Ne
                    @endif</th>
                <th scope="row">@for($i = 0; $i < $cpu->rating; $i++) * @endfor</th>
                <th scope="row">{{$cpu->price}} Kč</th>
                <th scope="row">{{$cpu->created_at}}</th>
                <th scope="row">{{$cpu->updated_at}}</th>
                <th scope="row"><a href="{{route('addProduct', ['product'=>'cpu', 'id'=>$cpu->id])}}">Přidat</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
    @include("footer")
@endsection
