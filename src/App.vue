<script setup>

import { Transition } from "vue"
import { RouterView } from "vue-router"
import Navigation from "@/components/navigation/Navigation.vue"
import Footer from "@/components/Footer.vue"

</script>

<template>
  <Navigation></Navigation>

  <div id="viewContainer">
    <RouterView v-slot="{ Component }">
      <Transition name="slide-fade" mode="out-in">
        <Component :is="Component" />
      </Transition>
    </RouterView>
  </div>

  <Footer></Footer>
</template>

<style>
  #viewContainer {
    margin-bottom: 50px;
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
</style>
