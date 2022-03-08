@extends('shop.index')
@section('content')

    <div class="row d-flex justify-content-center align-items-center h-75 mb-5">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;" id="main-input">
                <form action="{{route('product.store')}}" class="card-body p-3 text-center" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-outline">
                        <label for="category_id"></label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id">
                            <option selected disabled>Please select product category...</option>
                            @foreach ($categories as $category)
                                <option
                                    value="{{$category->id}}" {{$category->id == $category_id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label for="active"></label>
                        <select class="form-control @error('active') is-invalid @enderror" id="active" name="active">
                            <option selected disabled>Please make active or not...</option>
                            <option value="0">Not Active</option>
                            <option value="1">Active</option>
                        </select>
                        @error('active')
                        <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-outline">
                        <input type="text" name="name" id="name"
                               class="form-control form-control-sm @error('name') is-invalid @enderror"
                               placeholder="Product name" value="{{old('name')}}"/>
                        <label class="form-label" for="name"></label>
                        @error('name')
                        <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-outline">
                        <input type="text" name="model" id="model"
                               class="form-control form-control-sm @error('model') is-invalid @enderror"
                               placeholder="Model" value="{{old('model')}}"/>
                        <label class="form-label" for="model"></label>
                        @error('model')
                        <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-outline">
                        <input type="text" name="price" id="price"
                               class="form-control form-control-sm @error('price') is-invalid @enderror"
                               placeholder="Price" value="{{old('price')}}"/>
                        <label class="form-label" for="price"></label>
                        @error('price')
                        <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-dark" type="submit" id="main-submit">CREATE PRODUCT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
