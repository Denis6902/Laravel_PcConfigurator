@extends("app")

@section("content")
    @include("header")
    @if(\Illuminate\Support\Facades\Session::get('totalPrice') == "0")
        <h1>Nemáš nic v košíku...</h1>
    @else
        <h1>Váš nákupní košík</h1>
    @endif

    <main class="cart-things">
        @foreach($products as $product)
            <div class="cart-body">
                <div class="cart-info">
                    <img class="cart-image"
                         src="{{ \App\Models\IllustrationImage::Find($product->illustration_image_id)->src }}"
                         alt="{{ \App\Models\IllustrationImage::Find($product->illustration_image_id)->alt }}">
                    <div class="cart-name">
                        <a href='{{route('product', ['product'=>"$product->tableName", 'id'=>$product->id])}}'>
                            {{$product->name}}</a>
                        <p>({{$product->id}})</p>
                    </div>
                </div>

                <div class="cart-cancel">
                    <p>{{$product->price}} Kč</p>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('deleteProduct', ['product'=>"$product->tableName"])}}">
                        <img style="width: 10px" src="/./img/cancel.svg" alt="Cancel">
                    </a>
                </div>
            </div>
        @endforeach
    </main>
    @include("footer")
@endsection
