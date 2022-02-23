@extends('shop.index')

@section('content')
    <div class="container">
        <div class="row">

            @include('shop.partials.filteractive')

            @foreach ($products as $values)
                <div class="card" style="width: 18rem;">
                    <img src="storage/tablet.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$values->name}}</h5>
                        <p class="card-text">{{$values->model}}</p>
                        <p class="card-text">{{$values->price}} Euro</p>
                        <a href="#" class="btn btn-outline-primary">Add to Shopping Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
