<script setup>

import { ref } from "vue"
import { RouterLink } from "vue-router"

</script>

<template>
    <div class="wood-background">
        <div class="content">
            <h4>Miller Pacific Hardwoods</h4>
            <nav id="footerNavigation">
                <RouterLink :to="{name: 'home'}">Home</RouterLink>
                <RouterLink :to="{name: 'products'}">Products</RouterLink>
                <RouterLink :to="{name: 'about'}">About</RouterLink>
            </nav>
            <hr>
            <p>&copy; 2022 Miller Pacific Hardwoods, LLC. All rights reserved.</p>
        </div>
    </div>
</template>

<style>
    #footerNavigation {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 5pt;
        margin-bottom: 25px;
    }

    #footerNavigation a {
        display: inline-block;
        text-decoration: none;
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>