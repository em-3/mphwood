<script setup>

import { RouterLink } from "vue-router"

defineProps(["dest"])

</script>

<template>
    <div class="nav-link">
        <RouterLink :to="{name: dest}" active-class="active"><slot></slot></RouterLink>
        <div class="underline"></div>
    </div>
</template>

<style>
    .nav-link {
        display: inline-block;
    }

    .nav-link a {
        color: var(--primary-color);
        text-decoration: none;
        display: inline-block;
        padding: 5px;
        margin: 6px;
        position: relative;
    }

    .nav-link a::after {
        content: "";
        border-bottom: 2px solid var(--primary-color);
        width: 0;
        position: absolute;
        bottom: 0;
        left: 0;
        overflow: hidden;
        transition: 0.2s width;
    }

    .nav-link a.active::after, .nav-link:hover a::after {
        width: 100%;
    }
</style>