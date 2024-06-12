<template>
    <Head><title>Welcome - 10th Anniversary</title></Head>
    <MainLayout hide-logo>



            <div class="lg:flex">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl">
                <TextLogo class="w-[36rem]] h-auto" />

                <h1
                    class="text-outline-black-thin md:text-outline-black mt-8 text-center font-variex text-4xl font-light text-cream sm:text-6xl md:text-left"
                >
                    We're back for our 10th Year!
                </h1>
                <p
                    class="mt-6 text-center text-lg leading-8 text-cream md:text-left"
                >
                    It's our 10th year and we're celebrating big! We'll be
                    accepting nominations very soon, then you can vote for your
                    favorites throughout October. Winners will be announced at
                    our our massive bash on
                    <span class="text-2xl font-bold underline"
                        >Sunday 3rd November</span
                    >.
                </p>

                <div class="flex justify-center py-6 md:justify-normal">
                    <Link
                        :href="route('awards.index')"
                        type="button"
                        class="w-auto rounded-md bg-tealDark px-3.5 py-2.5 font-variex text-2xl font-light text-cream shadow-sm hover:bg-tealLight focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 md:text-4xl"
                    >
                        Awards &amp; Nominations
                    </Link>
                </div>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl sm:mt-12 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32"
            >
                <img
                    src="/img/logo.svg"
                    alt="Brighton Bar Awards 10"
                    class="h-auto w-[36rem]"
                />
            </div>

        </div>
    </MainLayout>
</template>

<script setup>
import TextLogo from "@/Components/Graphics/TextLogo.vue";
import Waves from "@/Components/Graphics/Waves.vue";
import { Head, Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import SponsorsLogoCloud from "@/Components/SponsorsLogoCloud.vue";
</script>
