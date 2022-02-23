@extends('shop.index')

@section('content')
    <div class="container">
        <div class="row">

            @include('shop.partials.filteractive')

            <div class="col">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Product group:</th>
                        <th>Model:</th>
                        <th>Price:</th>
                    </tr>

                    @foreach ($products as $values)
                        <tr>
                            <td>{{$values->name}}</td>
                            <td>{{$values->model}}</td>
                            <td>{{$values->price}} Euro</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
