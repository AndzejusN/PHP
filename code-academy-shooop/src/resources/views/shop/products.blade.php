@extends('shop.index')

@section('content')
    <div class="container">

        <div class="row">

            @include('shop.partials.filteractive')

            <div class="col-8 row">
                @foreach ($products as $product)
                    <div class="card text-center" style="width: 17rem;">
                        @php
                            $imageUrl = "storage/{$product->name}.png";
                            $imageUrl = file_exists(public_path("storage/{$product->name}.png")) ? asset($imageUrl) : asset("img/noimage.png");
                        @endphp
                        <img src="{{$imageUrl}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->model}}</p>
                            <p class="card-text">{{$product->price}} Euro</p>
                            <a href="#" class="btn btn-outline-primary">Add to Shopping Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
