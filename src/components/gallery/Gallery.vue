<script setup>

import { ref } from "vue"
import GalleryImage from "@/components/gallery/GalleryImage.vue"

const props = defineProps(["images"])

</script>

<template>
    <div class="imageGrid">
        <GalleryImage v-for="image in images" :src="image.src" :title="image.title" :description="image.description" />
    </div>
</template>

<style>
    .imageGrid {
        display: grid;
        grid-template-columns: auto auto auto;
        gap: 10pt;
    }

    @media (max-width: 1024px) {
        .imageGrid {
            grid-template-columns: auto auto;
        }
    }

    @media (max-width: 750px) {
        .imageGrid {
            grid-template-columns: auto;
        }
    }
</style>