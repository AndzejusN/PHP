@extends('shop.index')
@section('content')

    <div class="d-flex flex-wrap">
        @foreach ($orders as $order)
            @php
                $product = App\Models\Product::where('id', $order->product_id)->first();
            @endphp
            <form action="{{route('delete')}}" class="card-body p-3 text-center" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" value="{{$order->product_id}}" name="id" id="id">
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
                        <button type="submit" class="btn btn-outline-primary">Delete from Shopping Cart</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>

    @if($orders->isEmpty())
        <div class="py-5">
            <h1>Order list is empty</h1>
        </div>
    @endif

@endsection
