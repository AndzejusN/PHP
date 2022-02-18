@extends('shop.index')

@section('content')

        <table class ="table table-bordered">
            <tbody>
            <tr>
                <th>Product:</th>
                <th>Model:</th>
                <th>Price:</th>
    </tr>
            @foreach ($query as $values)
            <tr>
                <td>{{$values->name}}</td>
                <td>{{$values->model}}</td>
                <td>{{$values->price}} Euro</td>
            </tr>
            @endforeach
            </tbody>
        </table>

@endsection
