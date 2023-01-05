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

const hasDescription = computed(() => props.description != undefined)
const hasPrice = computed(() => props.price != undefined)

</script>

<template>
    <div class="productCard">
        <div class="image">
            <picture>
                <source type="image/avif" :srcset="avifImageURL" />
                <source type="image/webp" :srcset="webpImageURL" />
                <img :src="fallbackImageURL" />
            </picture>
            <div class="imageContentContainer">
                <div class="content">
                    <h3>{{ name }}</h3>
                    <div class="stockLabel"><span :style="{ backgroundColor: stockColor }">{{ stockLabel }}</span></div>
                </div>
            </div>
        </div>
        <div class="content">
            <p class="description" v-if="hasDescription">{{ description }}</p>
            <div class="contentFooter" v-if="hasPrice">
                <p class="price">${{ price }} / BFM</p>
                <p><a href="javascript:void(0);" class="buttonLink" @click="$emit('addToEstimate', props.id)">Add to Estimate</a></p>
            </div>
            <div class="contentFooter" v-else>
                <p class="price"><a href="tel:503-449-2068" class="buttonLink">Call 503-449-2068 for pricing</a></p>
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
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
    }

    .productCard .image .imageContentContainer .content>h3 {
        flex: 1;
    }

    .productCard>.content {
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: flex-end;
        gap: 10px;
        padding: 25px;
    }

    .productCard>.content p {
        margin: 0;
    }

    .productCard .stockLabel>span {
        background-color: var(--secondary-color);
        padding: 10px;
        color: white;
        border-radius: 10px;
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
</style>