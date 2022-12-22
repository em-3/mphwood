<script setup>

import { computed } from "vue"

const props = defineProps(["id", "name", "description", "inStock", "stock", "price"])

const emit = defineEmits(["addToEstimate"])

const avifImageURL = new URL(`../../assets/imgs/products/${props.id}.avif`, import.meta.url).href
const webpImageURL = new URL(`../../assets/imgs/products/${props.id}.webp`, import.meta.url).href
const fallbackImageURL = new URL(`../../assets/imgs/products/${props.id}.jpg`, import.meta.url).href

const stockLabel = computed(() => {
    if(!props.inStock) {
        return "Out of Stock"
    }

    if(!props.stock) {
        return "In Stock"
    }

    return `${props.stock} in Stock`
})

const stockColor = computed(() => {
    if(!props.inStock) {
        return "#7c0000"
    }

    return "#0a7c00"
})

</script>

<template>
    <div class="productCard">
        <div class="image">
            <picture>
                <!-- <source type="image/avif" :srcset="avifImageURL" /> -->
                <!-- <source type="image/webp" :srcset="webpImageURL" /> -->
                <img :src="fallbackImageURL" />
            </picture>
            <div class="imageContentContainer">
                <h3 class="content">{{ name }}</h3>
            </div>
        </div>
        <div class="content">
            <div class="stockLabel"><span :style="{ backgroundColor: stockColor }">{{ stockLabel }}</span></div>
            <p class="description">{{ description }}</p>
            <div class="contentFooter">
                <p class="price">${{ price }} / BFM</p>
                <p><a href="javascript:void(0);" class="buttonLink" @click="$emit('addToEstimate', props.id)">Add to Estimate</a></p>
            </div>
        </div>
    </div>
</template>

<style>
    .productCard {
        border-radius: 25px;
        overflow: hidden;
        background-color: var(--secondary-background-color);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        box-shadow: 0px 5px 10px var(--shadow-color);
    }

    .productCard .image {
        position: relative;
    }

    .productCard .image img {
        display: block;
        width: 100%;
    }

    .productCard .image .imageContentContainer {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
    }

    .productCard .image .imageContentContainer .content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        color: white;
        padding: 20px;
        margin: 0;
    }

    .productCard>.content {
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
        padding: 25px;
    }

    .productCard>.content p {
        margin: 0;
    }

    .productCard>.content .stockLabel {
        display: flex;
        justify-content: flex-end;
    }
    
    .productCard>.content .contentFooter {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .productCard>.content .contentFooter .price {
        font-weight: bold;
    }

    .productCard>.content .description {
        flex: 1;
    }

    .productCard>.content .stockLabel>span {
        background-color: var(--secondary-color);
        padding: 10px;
        color: white;
        border-radius: 10px;
    }
</style>