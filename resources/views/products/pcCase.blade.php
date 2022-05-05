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
            @foreach($allPcCase as $pcCase)
                <tr>
                    <th scope="row">{{$pcCase->id}}</th>
                    <th scope="row"><a
                            href="{{route('brand' ,\App\Models\Brand::Find($pcCase->brand_id)["id"])}}">{{\App\Models\Brand::Find($pcCase->brand_id)["name"]}}</a>
                    </th>
                    <th scope="row">{{$pcCase->name}}</th>
                    <th scope="row">{{$pcCase->type}}</th>
                    <th scope="row">{{$pcCase->color}}</th>
                    <th scope="row">{{$pcCase->internal_5_25_bays}}x</th>
                    <th scope="row">{{$pcCase->external_5_25_bays}}x</th>
                    <th scope="row">@for($i = 0; $i < $pcCase->rating; $i++)
                            *
                        @endfor</th>
                    <th scope="row">{{$pcCase->price}} Kč</th>
                    <th scope="row">{{$pcCase->created_at}}</th>
                    <th scope="row">{{$pcCase->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'pcCase', 'id'=>$pcCase->id])}}">Přidat</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
