@extends("app")

@section("content")
    @include("header")
    <main>
        <h1>Vyberte si monitor</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Značka</th>
                <th scope="col">Název</th>
                <th scope="col">Velikost</th>
                <th scope="col">Rozlišení</th>
                <th scope="col">Obnovovací frekvence</th>
                <th scope="col">Typ panelu</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováno</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allMonitor as $monitor)
                <tr>
                    <th scope="row">{{$monitor->id}}</th>
                    <th scope="row"><a href="{{route('brand' ,\App\Models\Brand::Find($monitor->brand_id)["id"])}}">{{\App\Models\Brand::Find($monitor->brand_id)["name"]}}</a></th>
                    <th scope="row">{{$monitor->name}}</th>
                    <th scope="row">{{$monitor->size}} palců</th>
                    <th scope="row">{{$monitor->resolution}}</th>
                    <th scope="row">{{$monitor->refresh_rate}} Hz</th>
                    <th scope="row">{{$monitor->panel_type}}</th>
                    <th scope="row">@for($i = 0; $i < $monitor->rating; $i++) * @endfor</th>
                    <th scope="row">{{$monitor->price}} Kč</th>
                    <th scope="row">{{$monitor->created_at}}</th>
                    <th scope="row">{{$monitor->updated_at}}</th>
                    <th scope="row"><a href="{{route('addProduct', ['product'=>'monitor', 'id'=>$monitor->id])}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
