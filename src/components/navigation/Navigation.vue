<script setup>

import { ref } from "vue"
import { RouterLink } from "vue-router"
import NavLink from "./NavLink.vue"

</script>

<template>
    <nav id="navigation">
        <RouterLink :to="{name: 'home'}" class="logo">
            <picture>
                <source srcset="@/assets/imgs/logo-dark.svg" media="(prefers-color-scheme: dark)" />
                <img src="@/assets/imgs/logo.svg" width="133" height="75" />
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

    #navigation .logo h3 {
        display: inline-block;
        margin: 0;

    }

    @media (max-width: 750px) {
        #navigation {
            flex-direction: column;
        }
    }
</style>