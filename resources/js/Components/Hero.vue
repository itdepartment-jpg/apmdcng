<template>
    <div class="pt-20 sm:pt-40 pb-4 px-5 tab:px-10 bg-backg2">
        <div
            class="top flex flex-col md:flex-row justify-between gap-4 tab:gap-7 md:h-[38vh] tab:h-[40vh] lg:h-[60vh]"
        >
            <div
                class="left bg-primary rounded-2xl py-6 sm:py-0 px-5 tab:px-7 w-full md:w-3/4 h-full flex flex-col sm:flex-row justify-between gap-5 sm:gap-0"
            >
                <div class="left w-full sm:w-2/3">
                    <div class="h-full flex items-center justify-start">
                        <div class="w-full flex flex-col items-center sm:items-start">
                            <div
                                class="bg-backg py-1 text-text text-sm md:text-base rounded-2xl shadow-sm w-[200px] md:w-[230px] text-center"
                            >
                                Seamless and Trustworthy
                            </div>
                            <h1
                                class="mt-5 md:mt-8 text-[28px] lg:text-3xl xl:text-[35px] 2xl:text-[50px] font-semibold text-backg text-center sm:text-start leading-[36px] md:leading-[45px] xl:leading-[50px] 2xl:leading-[60px]"
                            >
                                Reliable third-party for <br/>
                                Online Subscriptions.
                            </h1>
                            <div class="flex justify-start">
                                <button
                                    class="bg-accent text-backg text-sm md:text-base uppercase font-medium mt-5 md:mt-8 rounded-bl-xl rounded-tr-xl py-1 md:py-2 px-5 md:*:px-8"
                                >
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="right h-full flex items-center justify-center sm:justify-start lg:items-end"
                >
                    <img
                        src="/Graphic.png"
                        alt=""
                        class="w-[300px] sm:w-[320px] tab:w-[350px] lg:w-[500px] object-cover"
                    />
                </div>
            </div>
            <div class="right bg-accent/10 rounded-2xl w-full md:w-1/4 relative h-full">
                <Carousel
                    v-bind="config"
                    ref="carouselRef"
                    v-model="currentSlide"
                    class="w-full h-full flex justify-start items-center"
                >
                    <Slide v-for="(slide, index) in slides" :key="index" class="w-full h-full">
                        <div
                            class="w-full px-3 py-4 md:py-7 flex flex-col justify-center items-center h-full"
                        >
                            <div class="text-text text-xl sm:text-2xl font-semibold">
                                {{ slide.title }}
                            </div>
                            <div class="">
                                <div class="mt-3 md:mt-8 hidden md:flex justify-center">
                                    <img :src="slide.imgSrc" alt="" class="w-[200px] h-[120px]"/>
                                </div>
                                <div class="flex justify-center">
                                    <button
                                        class="bg-accent text-backg text-xs sm:text-sm uppercase font-medium mt-8 rounded-bl-xl rounded-tr-xl py-1 px-5"
                                    >
                                        {{ slide.buttonText }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </Slide>
                </Carousel>

                <div
                    class="flex justify-end md:justify-center gap-5 items-center absolute w-full pb-2 bottom-0 left-0"
                >
                    <button @click="prev" class="">
                        <img src="../../assets/prev.svg" alt="" class=""/>
                    </button>

                    <button @click="next" class="">
                        <img src="../../assets/next.svg" alt="" class=""/>
                    </button>
                </div>
            </div>
        </div>
        <div class="bottom bg-backg mt-4 p-5 xl:p-8 shadow-sm rounded-xl">
            <ul class="grid grid-cols-1 sm:grid-cols-2 tab:grid-cols-4 gap-4 lg:gap-7">
                <li class="flex gap-3">
                    <div class="icon">
                        <img
                            src="../../assets/pay.svg"
                            alt=""
                            class="p-1.5 rounded-full bg-secondary/5 shadow-sm w-14"
                        />
                    </div>
                    <div class="flex flex-col">
            <span class="font-semibold text-xs md:text-sm"
            >Secure Your International Payments</span
            >
                        <span class="text-xs"
                        >Pay for international products Effortlessly pay for your digital services securely and swiftly.</span
                        >
                    </div>
                </li>
                <li class="flex gap-3">
                    <div class="icon">
                        <img
                            src="../../assets/buy.svg"
                            alt=""
                            class="p-1.5 rounded-full bg-secondary/5 shadow-sm w-14"
                        />
                    </div>
                    <div class="flex flex-col">
            <span class="font-semibold text-xs md:text-sm"
            >Thinking Digital Subscriptions?</span
            >
                        <span class="text-xs"
                        >Get your first month subscription on us for Global products at great prices.</span
                        >
                    </div>
                </li>
                <li class="flex gap-3">
                    <div class="icon">
                        <img
                            src="../../assets/sell.svg"
                            alt=""
                            class="p-1.5 rounded-full bg-secondary/5 shadow-sm w-14"
                        />
                    </div>
                    <div class="flex flex-col">
            <span class="font-semibold text-xs md:text-sm"
            >Your Foreign $$$ Paid Locally</span
            >
                        <span class="text-xs"
                        >Explore wide-range of payment options for any online bill.</span
                        >
                    </div>
                </li>
                <li class="flex gap-3">
                    <div class="icon">
                        <img
                            src="../../assets/trust.svg"
                            alt=""
                            class="p-1.5 rounded-full bg-secondary/5 shadow-sm w-14"
                        />
                    </div>
                    <div class="flex flex-col">
            <span class="font-semibold text-xs md:text-sm"
            >Trusted Services</span
            >
                        <span class="text-xs"
                        >We partner with all global platforms to offer you simple payment options.</span
                        >
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
<script setup>
import "vue3-carousel/dist/carousel.css";
import {ref} from "vue";
import {Carousel, Slide} from "vue3-carousel";

const slides = [
    {
        title: "Buy Computers and Accessories from us",
        buttonText: "View Products",
        imgSrc: "/gad.png",
    },
    {
        title: " Sell Computers and Accessories to us",
        buttonText: "Sell to us",
        imgSrc: "/gad2.png",
    },
];
const config = {
    autoplay: 6000,
    wrapAround: true,
    pauseAutoplayOnHover: true,
};
const carouselRef = ref();
const currentSlide = ref(0);

const next = () => carouselRef.value.next();
const prev = () => carouselRef.value.prev();
</script>
