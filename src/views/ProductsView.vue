<script setup>

import { ref } from "vue"
import PriceEstimator from "@/components/estimator/PriceEstimator.vue"

</script>

<template>
    <div>
        <div class="centered">
            <h1 class="heading">Products</h1>
            <p class="after-heading">Check out all the varieties of wood we have, and estimate your costs before you call.</p>
        </div>
        <PriceEstimator></PriceEstimator>
    </div>
</template>

<style>

</style>