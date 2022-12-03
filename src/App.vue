<script setup>

import { Transition } from "vue"
import { RouterView } from "vue-router"
import Navigation from "@/components/Navigation.vue"

</script>

<template>
  <Navigation></Navigation>

  <div class="contentContainer">
    <RouterView v-slot="{ Component }">
      <Transition name="slide-fade" mode="out-in">
        <Component :is="Component" />
      </Transition>
    </RouterView>
  </div>
</template>

<style>
  .contentContainer {
    margin-left: auto;
    margin-right: auto;
    max-width: 1280px;
  }

  .slide-fade-enter-active,
  .slide-fade-leave-active {
    transition: all 0.2s ease-in-out;
  }

  .slide-fade-leave-to {
    transform: translateY(30px);
    opacity: 0;
  }

  .slide-fade-enter-from {
    transform: translateY(-30px);
    opacity: 0;
  }

  @media (width < 1024px) {
    .contentContainer {
      margin: 0;
      max-width: 100%;
    }
  }
</style>
