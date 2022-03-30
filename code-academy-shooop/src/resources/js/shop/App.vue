<script setup>
import HeaderView from './views/partials/HeaderView';
import FooterView from './views/partials/FooterView';


</script>

<template>
    <div class="container py-3">
        <HeaderView/>
        <main class="py-3">
            <RouterView />
        </main>
        <FooterView/>
    </div>
</template>
