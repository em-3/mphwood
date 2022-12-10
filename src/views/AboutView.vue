<script setup>

import { ref } from "vue"
import Gallery from "@/components/gallery/Gallery.vue"
import imageData from "@/aboutpageGallery.json"

const images = ref(imageData)

</script>

<template>
    <div>
        <div class="centered">
            <h1 class="heading">About Us</h1>
            <h2 class="subheading">Providing High-Quality Hardwood Since 2002</h2>
            <p>Miller Pacific Hardwoods LLC is a small, family-operated hardwood business in the Pacific Northwest. We mill and sell furniture-grade lumber and custom wood products for special projects. We specialize in slabs for tables, countertops, island tops, and mantles. For over 20 years, our sales have been through word of mouth. We do not have regular business hours, so it is best to contact us by phone or email to make an appointment.</p>
            <p><a href="tel:503-449-2068" class="buttonLink">Give us a call</a></p>
        </div>
        <div class="centered">
            <h2 class="heading">Customers and Projects</h2>
            <p>We have provided high-quality hardwood to many different customers for all kinds of projects. Check out some of the ways our wood has been used below.</p>
        </div>
        <Gallery :images="images" class="centered"></Gallery>
    </div>
</template>

<style>

</style>