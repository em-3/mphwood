<script setup>

import { ref } from "vue"

</script>

<template>
    <header class="wood-background">
        <div>
            <h1>Providing Quality Hardwood Since 2002</h1>
            <p>Miller Pacific Hardwoods LLC is a small, family-operated hardwood business in the Pacific Northwest. We mill and sell furniture-grade lumber and custom wood products for special projects. We specialize in slabs for tables, countertops, island tops, and mantles.</p>
        </div>
        <img src="imgs/sign.jpg" class="sign" />
    </header>
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