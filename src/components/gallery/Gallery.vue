<script setup>

import { ref } from "vue"
import Image from "@/components/gallery/Image.vue"

const props = defineProps(["images"])

</script>

<template>
    <div class="imageGrid centered">
        <Image v-for="image in images" :src="image.src" :title="image.title" :description="image.description" />
    </div>
</template>

<style>
    .imageGrid {
        margin: 50px;
        display: grid;
        grid-template-columns: auto auto auto;
        gap: 10pt;
    }

    @media (width < 1024px) {
        .imageGrid {
            grid-template-columns: auto auto;
        }
    }

    @media (width < 750px) {
        .imageGrid {
            grid-template-columns: auto;
        }
    }
</style>