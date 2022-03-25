<script setup>

import {reactive} from 'vue';

const state = reactive({
    category_id: null,
    categories: null,
    model: null,
    active: null,
    name: null,
    price: null,
    isBold: false,
    isItalic: false,
    isUnderline: false,
    responseData: null,
    errors: {}
});

function loadCategories(url = 'api/v1/products/categories') {
    fetch(url).then(response => response.json()).then(data => {
        state.categories = data.categories;
    });
}

loadCategories();

function createProduct() {


    fetch('api/v1/products/create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({
            'category_id': state.category_id,
            'model': state.model,
            'active': state.active,
            'name': state.name,
            'price': state.price
        })
    }).then(response => response.json())
        .then(data => {
            state.errors = {};
            if (data.errors) {
                for (let key in data.errors) {
                    state.errors[key] = data.errors[key] ? data.errors[key][0] : null;
                }
            } else {
                state.responseData = data.response.name;
                cleanValues();
                resetDecorations();
            }
        });
}

function resetDecorations() {
    state.isBold = false;
    state.isItalic = false;
    state.isUnderline = false;
}

function cleanValues() {
    state.category_id = null;
    state.model = null;
    state.active = null;
    state.name = null;
    state.price = null;
}

</script>

<template>
    <div class="container">
        <div class="row">
            <div class="card-body text-start">
                <span style="color: green">{{ state.responseData }} </span>
                <div class="form-outline py-2">
                    <label class="form-label">Activate product:</label>
                    <select class="form-control form-control-sm"
                            :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                            v-model="state.active" id="active">
                        <option selected="true" disabled="disabled">Activate product...</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                    <div v-if="state.errors.active" style="color: red">
                        <span>{{ state.errors.active }}</span>
                    </div>
                </div>
                <div class="form-outline py-2">
                    <label class="form-label">Please select product category:</label>
                    <select class="form-control form-control-sm"
                            :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline,
                            }"
                            v-model="state.category_id" id="category_id">
                        <option selected="true" disabled="disabled">Please select product category...</option>
                        <option v-for="category in state.categories" :value="category.id" :key="category">
                            {{ category.name }}
                        </option>
                    </select>
                    <div v-if="state.errors.category_id" style="color: red">
                        <span>{{ state.errors.category_id }}</span>
                    </div>
                </div>
                <div class="form-outline py-2">
                    <label class="form-label" for="model">Model:</label>
                    <input type="text" v-model="state.model" name="model" id="model"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline,
                            }"
                           placeholder="Model"/>
                    <div v-if="state.errors.model" style="color: red">
                        <span>{{ state.errors.model }}</span>
                    </div>
                </div>
                <div class="form-outline py-2">
                    <label class="form-label" for="name">Product name</label>
                    <input type="text" v-model="state.name" name="name" id="name"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Product name"/>
                    <div v-if="state.errors.name" style="color: red">
                        <span>{{ state.errors.name }}</span>
                    </div>
                </div>
                <div class="form-outline py-2">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" v-model="state.price" name="price" id="price"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Price"/>
                    <div v-if="state.errors.price" style="color: red">
                        <span>{{ state.errors.price }}</span>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-dark mt-1" @click="createProduct()" type="submit" id="main-submit">
                        CREATE PRODUCT
                    </button>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <button class="btn btn-dark mx-3" @click="state.isBold = !state.isBold" type="submit"
                        id="bold">Make bold
                </button>
                <button class="btn btn-dark mx-3" @click="state.isUnderline = !state.isUnderline" type="submit"
                        id="underline">Make with underline
                </button>
                <button class="btn btn-dark mx-3" @click="state.isItalic = !state.isItalic" type="submit" id="italic">
                    Make Italic
                </button>
            </div>
            <div class="text-center my-2">
                <button class="btn btn-dark" @click="resetDecorations()" type="submit" id="reset">RESET DECORATIONS
                </button>
            </div>
        </div>
    </div>
</template>

<style>

.bold {
    font-weight: bold;
}

.italic {
    font-style: italic;
}

.underline {
    text-decoration: underline;
}

</style>
