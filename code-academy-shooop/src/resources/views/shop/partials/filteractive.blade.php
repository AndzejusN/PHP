<div class="col-3 row">
    <form class="form-group mb-5" action="{{ route( 'products' ) }}" method="GET">

        <label for="category"></label>
        <select class="form-control mb-5" id="category" name="category">
            <option selected disabled>Please select product group...</option>
            @foreach ($categories as $category)
                <option
                    value="{{$category->id}}" {{$category->id == $category_id ? 'selected' : ''}}>{{$category ->name}}</option>
            @endforeach
        </select>

        <label class="form-check-label" for="check">Sell on-line</label>
        <input class="form-check-input mb-5" type="checkbox" id="check" name="check"
               value="1" {{$active == 1 ? 'checked' : ''}}>
        <br>
        <div class="col-12 mb-5">
            <div class="input-group">
                <div class="input-group-text">Search</div>
                <label for="search"></label>
                <input type="text" class="form-control" placeholder="Search by model..." id="search" name="search"
                       value="{{ $search_val ?? NULL }}">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
        <a href="{{ route( 'products' ) }}" class="btn btn-outline-secondary">Reset</a>

    </form>
</div>
