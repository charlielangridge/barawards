<template>
    <Head><title>Welcome - 10th Anniversary</title></Head>
    <div class="min-h-screen bg-tealBrighton">
        <main>
            <!-- Hero section -->
            <div class="relative isolate overflow-hidden">
                <Waves
                    class="absolute inset-0 -z-10 text-tealLight h-24 md:h-auto [mask-image:radial-gradient(100%_80%_at_top_right,white,transparent)]"
                />

                <div
                    class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-16 lg:flex lg:px-8 lg:pt-8"
                >
                    <div
                        class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl"
                    >
                        <TextLogo class="w-[36rem]] h-auto" />

                        <h1
                            class="font-variex text-outline-black-thin md:text-outline-black mt-8 text-4xl font-light text-cream sm:text-6xl text-center md:text-left"
                        >
                            We're back for our 10th Year!
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-cream text-center md:text-left">
                            It's our 10th year and we're celebrating big! We'll be accepting nominations very soon, then you can vote for your favorites throughout October. Winners will be announced at our our massive bash on Sunday 3rd November.
                        </p>
                    </div>
                    <div
                        class="mx-auto mt-16 flex max-w-2xl sm:mt-12 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32"
                    >
                        <img src="/img/logo.svg" alt="Brighton Bar Awards 10" class="w-[36rem] h-auto">
                    </div>
                </div>
            </div>

            <!-- Logo cloud -->
            <div class="mx-auto mt-8 max-w-7xl px-6  lg:px-8">
                <h2
                    class="text-center text-lg font-semibold leading-8 text-cream"
                >
                    We couldn't do it without our partners
                </h2>
                <div
                    class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5 text-cream"
                >
                    <a href="https://gandamediasolutions.com">
                    <LogoGanda class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    </a>
                    <a href="https://dustvenue.com">
                        <LogoDust class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    </a>
                    <a href="https://www.facebook.com/bangingwines">
                        <LogoBangingWines class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />
                    </a>

                </div>
            </div>

        </main>

        <!-- Footer -->
        <footer aria-labelledby="footer-heading" class="relative">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-6 pb-8 pt-4 lg:px-8">
                <div
                    class="border-t border-white/10 pt-8 md:flex md:items-center md:justify-between"
                >
                    <div class="flex space-x-6 md:order-2">
                        <a
                            v-for="item in footerNavigation.social"
                            :key="item.name"
                            :href="item.href"
                            class="text-cream"
                        >
                            <span class="sr-only">{{ item.name }}</span>
                            <component
                                :is="item.icon"
                                class="h-6 w-6"
                                aria-hidden="true"
                            />
                        </a>
                    </div>
                    <p
                        class="mt-8 text-xs leading-5 text-cream md:order-1 md:mt-0"
                    >
                        &copy; 2024. All rights reserved. Site Design by
                        <a
                            href="https://gandamediasolutions.com"
                            class="hover:underline"
                            >Ganda Media</a
                        >
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { defineComponent, h } from "vue";
import TextLogo from "@/Components/Graphics/TextLogo.vue";
import Waves from "@/Components/Graphics/Waves.vue";
import LogoGanda from "@/Components/Graphics/LogoGanda.vue";
import LogoDust from "@/Components/Graphics/LogoDust.vue";
import LogoBangingWines from "@/Components/Graphics/LogoBangingWines.vue";
import {Head} from '@inertiajs/vue3'




const footerNavigation = {
    social: [
        {
            name: "Facebook",
            href: "#",
            icon: defineComponent({
                render: () =>
                    h("svg", { fill: "currentColor", viewBox: "0 0 24 24" }, [
                        h("path", {
                            "fill-rule": "evenodd",
                            d: "M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z",
                            "clip-rule": "evenodd",
                        }),
                    ]),
            }),
        },
    ],
};
</script>
