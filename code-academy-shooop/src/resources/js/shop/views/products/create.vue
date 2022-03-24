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
});

const errors = reactive({
    category_id: null,
    model: null,
    active: null,
    name: null,
    price: null,
});


function loadCategories(url = 'api/v1/products') {
    fetch(url).then(response => response.json()).then(data => {
        state.categories = data.categories;
    });
}

function createProduct() {

    cleanErrors();

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
            if (data.errors) {
                for (let key in errors) {
                    errors[key] = data.errors[key] ? data.errors[key][0] : null;
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

function cleanErrors() {
    errors.category_id = null;
    errors.model = null;
    errors.active = null;
    errors.name = null;
    errors.price = null;
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
            <div class="card-body p-3 text-center">
                <span style="color: green">{{ state.responseData }} </span>
                <div class="form-outline">
                    <input type="text" v-model="state.category_id" name="category_id" id="category_id"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline,
                            }"
                           placeholder="Category name"/>
                    <label class="form-label" for="category_id"></label>
                    <div v-if="errors.category_id" style="color: red">
                        <span>{{ errors.category_id }}</span>
                    </div>
                </div>

<!--            <div class="form-outline">-->
<!--                <select class="form-control form-control-sm" v-model="state.category_id">-->
<!--                    <option v-for="category in state.categories" :value="state.category_id">-->
<!--                    <option disabled value="">Please select product category...</option>-->
<!--                </select>-->
<!--            </div>-->

                <div class="form-outline">
                    <input type="text" v-model="state.model" name="model" id="model"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline,
                            }"
                           placeholder="Model"/>
                    <label class="form-label" for="model"></label>
                    <div v-if="errors.model" style="color: red">
                        <span>{{ errors.model }}</span>
                    </div>
                </div>
                <div class="form-outline">
                    <input type="text" v-model="state.active" name="active" id="active"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Activate product"/>
                    <label class="form-label" for="active"></label>
                    <div v-if="errors.active" style="color: red">
                        <span>{{ errors.active }}</span>
                    </div>
                </div>
                <div class="form-outline">
                    <input type="text" v-model="state.name" name="name" id="name"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Product name"/>
                    <label class="form-label" for="name"></label>
                    <div v-if="errors.name" style="color: red">
                        <span>{{ errors.name }}</span>
                    </div>
                </div>
                <div class="form-outline">
                    <input type="text" v-model="state.price" name="price" id="price"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Price"/>
                    <label class="form-label" for="price"></label>
                    <div v-if="errors.price" style="color: red">
                        <span>{{ errors.price }}</span>
                    </div>
                </div>
                <button class="btn btn-dark mt-3" @click="createProduct()" type="submit" id="main-submit">CREATE PRODUCT
                </button>
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
                    Make
                    Italic
                </button>
            </div>
            <div class="text-center my-3">
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
