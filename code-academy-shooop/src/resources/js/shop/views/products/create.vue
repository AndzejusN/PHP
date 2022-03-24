<script setup>

import {reactive} from 'vue';

const state = reactive({
    category_id: null,
    model: null,
    active: null,
    name: null,
    price: null,
    isBold: false,
    isItalic: false,
    isUnderline: false
});

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
    });
}

function resetDecorations() {
    state.isBold = false;
    state.isItalic = false;
    state.isUnderline = false;
}

</script>

<template>
    <div class="container">
        <div class="row">
            <div class="card-body p-3 text-center">
                <div class="form-outline">
                    <input type="text" v-model="state.category_id" name="category_id" id="category_id"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Category name"/>
                    <label class="form-label" for="category_id"></label>
                </div>
                <div class="form-outline">
                    <input type="text" v-model="state.model" name="model" id="model"
                           class="form-control form-control-sm"
                           :class="
                            { bold: state.isBold,
                              italic: state.isItalic,
                              underline: state.isUnderline
                            }"
                           placeholder="Model"/>
                    <label class="form-label" for="model"></label>
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
                </div>
                <button class="btn btn-dark" @click="createProduct()" type="submit" id="main-submit">CREATE PRODUCT
                </button>
            </div>
            <div class="text-center">
                <button class="btn btn-dark" @click="state.isBold = !state.isBold" type="submit"
                        id="bold">Make bold
                </button>
                <button class="btn btn-dark" @click="state.isItalic = !state.isItalic" type="submit" id="italic">Make
                    Italic
                </button>
                <button class="btn btn-dark" @click="state.isUnderline = !state.isUnderline" type="submit"
                        id="underline">Make with underline
                </button>
            </div>
            <div class="text-center">
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
