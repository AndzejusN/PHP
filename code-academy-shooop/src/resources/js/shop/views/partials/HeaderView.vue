<template>
    <header class="container">
        <div class="w-100 pt-2">
            <div class="float-end">
                <a type="button" class="btn btn-outline-dark" href="http://localhost:8085/login">Login</a>
            </div>
            <div>
                <nav class="d-inline-flex text-light">
                    <RouterLink class="btn btn-outline-dark" :to="{name: 'products-index'}">Products
                    </RouterLink>
                    <RouterLink class="btn btn-outline-dark" :to="{name: 'products-manage'}">Product Manage
                    </RouterLink>
                </nav>
            </div>
        </div>
        <hr>
    </header>
</template>
