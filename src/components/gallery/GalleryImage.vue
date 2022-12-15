<script setup>

import { ref, computed } from "vue"

const props = defineProps(["src", "title", "description"])

const avifImageURL = new URL(`../../assets/imgs/${props.src}.avif`, import.meta.url).href
const webpImageURL = new URL(`../../assets/imgs/${props.src}.webp`, import.meta.url).href
const fallbackImageURL = new URL(`../../assets/imgs/${props.src}.jpg`, import.meta.url).href

const hasContent = computed(() => {
    return props.title || props.description
})

</script>

<template>
    <div class="imageCard">
        <picture>
            <source type="image/avif" :srcset="avifImageURL" />
            <source type="image/webp" :srcset="webpImageURL" />
            <img :src="fallbackImageURL" />
        </picture>
        <div class="contentContainer" v-if="hasContent">
            <div class="content">
                <h3 class="heading">{{ title }}</h3>
                <p class="after-heading">{{ description }}</p>
            </div>
        </div>
    </div>
</template>

<style>
    .imageCard {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        color: white;
        aspect-ratio: 1;
    }

    .imageCard img {
        width: 100%;
        height: 100%;
    }

    .imageCard .contentContainer {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75));
    }

    .imageCard .contentContainer .content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 30px;
    }
</style>