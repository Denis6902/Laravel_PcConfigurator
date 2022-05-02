@extends("app")

@section("content")
    @include("header")
<main>
    <h1>Vyberte si skříň</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Značka</th>
            <th scope="col">Název</th>
            <th scope="col">Typ</th>
            <th scope="col">Barva</th>
            <th scope="col">Počty pozic interních disků</th>
            <th scope="col">Počty pozic externích disků</th>
            <th scope="col">Hodnocení</th>
            <th scope="col">Cena</th>
            <th scope="col">Vytvořeno</th>
            <th scope="col">Aktualizováno</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allCase as $case)
            <tr>
                <th scope="row">{{$case->id}}</th>
                <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($case->brand_id)["id"])}}">{{\App\Models\Brand::Find($case->brand_id)["name"]}}</a></th>
                <th scope="row">{{$case->name}}</th>
                <th scope="row">{{$case->type}}</th>
                <th scope="row">{{$case->color}}</th>
                <th scope="row">{{$case->internal_5_25_bays}}x</th>
                <th scope="row">{{$case->external_5_25_bays}}x</th>
                <th scope="row">@for($i = 0; $i < $case->rating; $i++) * @endfor</th>
                <th scope="row">{{$case->price}} Kč</th>
                <th scope="row">{{$case->created_at}}</th>
                <th scope="row">{{$case->updated_at}}</th>
                <th scope="row"><a href="{{route('addProduct', ['product'=>'case', 'id'=>$case->id])}}">Přidat</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
    @include("footer")
@endsection
