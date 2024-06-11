<script setup>
import {Link} from "@inertiajs/vue3";
import Alert from "@/Components/Alert.vue";
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-tealBrighton pt-6 sm:justify-center sm:pt-0"
    >


        <div>
            <Link :href="route('home')">
                <img
                    src="/img/logo.svg"
                    class="h-52 w-auto"
                    alt="Brighton Bar Awards"
                />
            </Link>
        </div>
        <div class="justify-self-start w-full max-w-md mt-6">
        <Alert />
        </div>
        <div
            class="mt-6 w-full overflow-hidden bg-cream px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
