<script setup>

import { ref } from "vue"
import { RouterLink } from "vue-router"
import Gallery from "@/components/gallery/Gallery.vue"
import imageData from "@/homepageGallery.json"

const images = ref(imageData)

</script>

<template>
    <div>
        <header class="wood-background">
            <div class="content">
                <div>
                    <h1>Providing Quality Hardwood Since 2002</h1>
                    <p>Miller Pacific Hardwoods LLC is a small, family-operated hardwood business in the Pacific Northwest. We mill and sell furniture-grade lumber and custom wood products for special projects. We specialize in slabs for tables, countertops, island tops, and mantles.</p>
                    <p><a href="tel:503-449-2068" class="buttonLink">Give us a call</a></p>
                </div>
                <img src="imgs/sign.jpg" class="sign" />
            </div>
        </header>
        <div class="about centered">
            <h2>About Us</h2>
            <p>From small residential installations to corporate offices, we have supplied high-quality wood for a wide variety of projects and customers.</p>
            <p><RouterLink :to="{name: 'about'}" class="buttonLink">Learn More</RouterLink></p>
        </div>
        <Gallery :images="images" class="centered"></Gallery>
    </div>
</template>

<style>
    header .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25pt;
    }

    header .content .sign {
        border-radius: 25px;
        max-width: 650px;
        width: 100%;
    }

    @media (width < 1024px) {
        header .content {
            flex-direction: column-reverse;
        }

        header .content .sign {
            max-width: 500px;
        }
    }
</style>