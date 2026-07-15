<template>
  <div>
    <LandingNav />
    <div class="pt-[40px] sm:pt-[126px]">
      <div class="relative">
        <img
          src="../../assets/headerr.jpg"
          alt=""
          class="w-full h-[300px] sm:h-[350px] object-cover"
        />
        <div
          class="overlay absolute top-0 left-0 bg-black/50 w-full h-full flex justify-center flex-col px-10"
        >
          <h1 class="text-2xl sm:text-3xl uppercase md:text-4xl font-semibold text-backg">
            our digital services
          </h1>
          <p
            class="text-backg2 text-sm sm:text-base flex items-center gap-2 mt-2 font-medium"
          >
            <span class="">Home</span>
            <span class="text-accent font-semibold">&#129034;</span>
            <span class="">Digital Services</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import LandingNav from "@/Components/LandingNav.vue";
</script>
