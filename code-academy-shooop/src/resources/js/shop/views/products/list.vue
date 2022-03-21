<script setup>

import {ref, reactive} from 'vue';

const state = reactive({
    products: [],
    removableProductIndex: null
})


function loadProducts(url = 'api/v1/products') {
    fetch(url).then(response => response.json()).then(data => {
        state.products = data.products;
    });
}

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
            <div class="row my-3">
                <input type="number" class="form-control mx-3 my-3" v-model="state.removableProductIndex">
                <button class="btn btn-outline-danger mx-3" type="button"
                        @click="removeSpecificProduct(state.removableProductIndex)">DELETE BY ID
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-2">
            <div class="row">
                <div class="mt-5">
                    <input type="checkbox" id="checkbox"
                           @change="loadProducts('api/v1/products/?check=1')"/>
                    <label for="checkbox">&nbsp Sell on-line</label>
                </div>
                <div class="my-5">
                    <a href="http://localhost:8085/shop" class="btn btn-outline-secondary">Reset</a>
                </div>
            </div>
        </div>
        <div class="col-9 d-flex flex-wrap">
            <div class="input-group mb-3" style="display:inline-flex; width:auto;">
                <div class="row mb-5">
                    <div class="card text-center" v-for="(product,i) in state.products" style="width: 17rem;">
                        <img class="card-img-top" src="img/noimage.png" alt="Some ...">
                        <div class="card-body">
                            <h5 class="card-title">{{ product.name }}</h5>
                            <p class="card-text">{{ product.id }}</p>
                            <p class="card-text">{{ product.model }}</p>
                            <p class="card-text">{{ product.price }} Euro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
