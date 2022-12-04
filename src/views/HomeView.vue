<script setup>

import { ref } from "vue"
import Gallery from "@/components/gallery/Gallery.vue"
import imageData from "@/homepageGallery.json"

const images = ref(imageData)

</script>

<template>
    <div>
        <header class="wood-background centered">
            <div>
                <h1>Providing Quality Hardwood Since 2002</h1>
                <p>Miller Pacific Hardwoods LLC is a small, family-operated hardwood business in the Pacific Northwest. We mill and sell furniture-grade lumber and custom wood products for special projects. We specialize in slabs for tables, countertops, island tops, and mantles.</p>
            </div>
            <img src="imgs/sign.jpg" class="sign" />
        </header>
        <div class="about centered">
            <h2>About Us</h2>
            <p>From small residential installations to corporate offices, we have supplied high-quality wood for a wide variety of projects and customers.</p>
        </div>
        <Gallery :images="images"></Gallery>
    </div>
</template>

<style>
    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25pt;
    }

    header .sign {
        border-radius: 25px;
        max-width: 650px;
        width: 100%;
    }

    @media (width < 1024px) {
        header {
            flex-direction: column-reverse;
        }

        header .sign {
            max-width: 500px;
        }
    }
</style>