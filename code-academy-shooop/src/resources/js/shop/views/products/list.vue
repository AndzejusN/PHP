<script setup>

import {ref, reactive} from 'vue';

const state = reactive({
    products: [],
    removableProductIndex: null
})

function loadProducts() {
    fetch('api/v1/products').then(response => response.json()).then(data => {
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
            <button class="btn btn-success mx-5" @click="loadProducts">LOAD</button>
            <button class="btn btn-danger mx-5" @click="deleteProducts">DELETE</button>
            <button class="btn btn-primary mx-5" @click="filterProductsAscending">SORT ASCENDING PRODUCTS</button>
            <button class="btn btn-info mx-5" @click="filterProductsDescending">SORT DESCENDING PRODUCTS</button>
            <input type="number" class="form-control mx-5" v-model="state.removableProductIndex">
            <button class="btn btn-outline-danger mx-5" type="button"
                    @click="removeSpecificProduct(state.removableProductIndex)">DELETE
            </button>
            <div class="input-group mb-3 mx-5" style="display:inline-flex; width:auto;">
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
