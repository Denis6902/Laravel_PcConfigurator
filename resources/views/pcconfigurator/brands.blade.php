@extends("app")

@section("content")
    @include("header")
    <h1>Značky...</h1>
    <div class="album py-5">
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                    <div class="col-md-4 ">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 alt="{{\App\Models\IllustrationImage::find($brand->illustrationImageId)["alt"]}}"
                                 style="height: 225px; width: 100%; display: block;"
                                 src="{{\App\Models\IllustrationImage::find($brand->illustrationImageId)["src"]}}"
                                 data-holder-rendered="true">
                            <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
                            <div class="card-body">
                                <p class="card-text">Název značky: {{$brand->name}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group productMargin">
                                        <a class="btn btn-outline-primary"
                                           href="{{route('brand', ['id'=>$brand->id])}}">Více</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include("footer")
@endsection
