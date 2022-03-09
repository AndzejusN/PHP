<!DOCTYPE html>
<html lang="EN">
<head>
    <title>Example Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<header class="container pb-3">
    <div class="w-100 py-3">
        <div class="mb-3 float-end">
            <a type="button" class="btn btn-outline-dark" href="{{route('login')}}">Login</a>
        </div>
        <div>
            <ul class="list-unstyled text-light">
                <li style="display: inline"><a type="button" class="btn btn-outline-dark" href="{{route('products')}}">Products</a>
                </li>
                <li style="display: inline"><a type="button" class="btn btn-outline-dark"
                                               href="{{route('orders')}}">Orders</a></li>
                <li style="display: inline"><a type="button" class="btn btn-outline-dark"
                                               href="{{route('product.create')}}">Create Product</a>
                </li>
                <li style="display: inline"><a type="button" class="btn btn-outline-dark" href="{{route('contacts')}}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>

    <hr>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <div class="container">
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Company Shooop
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
