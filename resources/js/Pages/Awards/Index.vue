<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    awards: {
        type: Array,
        required: true,
    }
});

import { ref } from 'vue'

</script>

<template>
<MainLayout>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
        <div v-for="award in props.awards" :key="award.slug" class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="person.imageUrl" alt="" />
            </div>
            <div class="min-w-0 flex-1">
                <a href="#" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true" />
                    <p class="text-sm font-medium text-gray-900">{{ award.name }}</p>
                    <p class="truncate text-sm text-gray-500">{{ award.short_description }}</p>
                </a>
            </div>
        </div>
    </div>
    <pre>{{props.awards}}</pre>
</MainLayout>
</template>

<style scoped>

</style>
