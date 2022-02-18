@extends('shop.index')
@section('content')

    <table class ="table table-bordered">
        <tbody>
        <tr>
            <th>Product:</th>
            <th>Model:</th>
            <th>Price:</th>
            <th>Quantity</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product['name']}}</td>
                <td>{{$product['model']}}</td>
                <td>{{$product['price']}} Euro</td>
                <td>{{$product['quantity']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
