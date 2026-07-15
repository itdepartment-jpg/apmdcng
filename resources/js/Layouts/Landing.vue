<template>
  <div class="">
    <div><LandingNav /></div>
    <div class=""><slot /></div>
    <LandingFooter />
  </div>
</template>

<script setup>
import LandingFooter from "@/Components/LandingFooter.vue";
import LandingNav from "@/Components/LandingNav.vue";
</script>
