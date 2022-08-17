@if(request()->query->get('page') < $maxPage)
    <h5>
        <a href="{{route('brand', ['id' => $brand->id, 'page' => request()->query->get('page') + 1])}}">
            Další stránka
        </a>
    </h5>
@endif


@if(request()->query->get('page') > 1)
    <h5>
        <a href="{{route('brand', ['id' => $brand->id, 'page' => request()->query->get('page') - 1])}}">
            Přechozí stránka
        </a>
    </h5>
@endif
