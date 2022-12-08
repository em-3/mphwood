<script setup>

import { ref } from "vue"
import { RouterLink } from "vue-router"
import NavLink from "./NavLink.vue"

</script>

<template>
    <nav id="navigation">
        <RouterLink :to="{name: 'home'}" class="logo">
            <picture>
                <source srcset="imgs/logo-dark.svg" media="(prefers-color-scheme: dark)" />
                <img src="imgs/logo.svg" />
            </picture>
            <h3>Miller Pacific Hardwoods</h3>
        </RouterLink>
        <div class="links">
            <NavLink dest="home">Home</NavLink>
            <NavLink dest="products">Products</NavLink>
            <NavLink dest="about">About Us</NavLink>
        </div>
    </nav>
</template>

<style>
    #navigation {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 25px;
    }

    #navigation .logo {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5pt;
        text-decoration: none;
        color: var(--primary-color);
    }

    #navigation .logo img {
        height: 75px;
        display: inline-block;
    }

    #navigation .logo h2 {
        display: inline-block;
        margin: 0;

    }

    @media (width < 1024px) {
        #navigation {
            flex-direction: column;
        }
    }
</style>