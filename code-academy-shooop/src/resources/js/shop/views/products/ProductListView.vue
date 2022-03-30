<script setup>

import {reactive} from 'vue';


const state = reactive({
    products: [],
    removableProductIndex: null,
    search: '',
    check: ''
});

function loadProducts(url = '/api/v1/products') {
    fetch(url).then(response => response.json()).then(data => {
        state.products = data.products;
    });
}

loadProducts();

function deleteProducts() {
    state.products = [];
}

function removeSpecificProduct(productId = null) {
    let productIndex = state.products.findIndex(p => p.id == productId);

    if (productIndex >= 0) {
        state.products.splice(productIndex, 1);
    }
}

function filterProductsAscending() {
    state.products = state.products.sort((a, b) => a.id > b.id ? 1 : -1);
}

function filterProductsDescending() {
    state.products = state.products.sort((a, b) => a.id > b.id ? -1 : 1);
}

function addSearchParameter(name, value) {
    const paramsString = 'api/v1/products?';

    if (value === true) {
        value = 1;
    } else {
        value = '';
    }

    let searchParams = new URLSearchParams();
    searchParams.append(name, value);

    loadProducts(paramsString + decodeURI(searchParams.toString()));
}

</script>

<template>
    <div class="container">
        <div class="row">
            <div class="my-3">
                <button class="btn btn-success mx-3" @click="loadProducts()">LOAD</button>
                <button class="btn btn-danger" @click="deleteProducts">DELETE</button>
            </div>
            <div class="my-3">
                <button class="btn btn-primary mx-3" @click="filterProductsAscending">SORT ASCENDING PRODUCTS</button>
                <button class="btn btn-info" @click="filterProductsDescending">SORT DESCENDING PRODUCTS</button>
            </div>
            <div class="row my-3 mx-3 w-25">
                <input type="number" class="form-control my-3" v-model="state.removableProductIndex">
                <button class="btn btn-outline-danger" type="button"
                        @click="removeSpecificProduct(state.removableProductIndex)">DELETE BY ID
                </button>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 px-3">
                <div class="row">
                    <div class="mt-3">
                        <input type="checkbox" id="check" name="check"
                               v-model="state.check"
                               @change="addSearchParameter('check', state.check)"/>
                        <label for="check">&nbsp; Sell on-line</label>
                    </div>
                    <div class="mt-5">
                        <div class="input-group">
                            <div class="input-group-text">Search</div>
                            <label for="search"></label>
                            <input type="text" class="form-control" placeholder="Search by model..." id="search"
                                   name="search" v-model="state.search"
                                   @change="addSearchParameter('search', state.search)">
                        </div>
                    </div>
                    <div class="my-5">
                        <a class="btn btn-outline-secondary" @click="loadProducts()">Reset</a>
                    </div>
                </div>
            </div>
            <div class="col-8 d-flex flex-wrap mt-3 px-3">
                <div class="row input-group" style="display:inline-flex; width:auto;">
                    <div class="card text-center" v-for="product in state.products" :key="product.id" style="width: 17rem;">
                        <img class="card-img-top" src="/img/noimage.png" alt="Some ...">
                        <div class="card-body">
                            <h5 class="card-title">{{ product.name }}</h5>
                            <p class="card-text">{{ product.id }}</p>
                            <p class="card-text">{{ product.model }}</p>
                            <p class="card-text">{{ product.price }} Euro</p>
                        </div>
                        <button  @click="$router.push({name: 'products-manage', params: {id: product.id}})" type="button" class="w-100 btn btn-lg btn-outline-primary mb-2">Change Product</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
