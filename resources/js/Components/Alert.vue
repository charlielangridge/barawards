<template>
    <div
        v-if="visible"
        :class="[
            flash.type === 'warning' ? 'bg-yellow-50' : '',
            flash.type === 'error' ? 'bg-red-50' : '',
            flash.type !== 'warning' && flash.type !== 'error'
                ? 'bg-green-50'
                : '',
            'mx-auto rounded-md p-4 w-full max-w-7xl',
        ]"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <ExclamationTriangleIcon
                    v-if="flash.type === 'warning'"
                    class="h-5 w-5 text-yellow-400"
                    aria-hidden="true"
                />
                <XCircleIcon
                    v-else-if="flash.type === 'danger'"
                    class="h-5 w-5 text-red-400"
                    aria-hidden="true"
                />

                <CheckCircleIcon
                    v-else
                    class="h-5 w-5 text-green-400"
                    aria-hidden="true"
                />
            </div>
            <div class="ml-3">
                <h3
                    :class="[
                        flash.type === 'warning' ? 'text-yellow-800' : '',
                        flash.type === 'error' ? 'text-red-800' : '',
                        flash.type !== 'warning' && flash.type !== 'error'
                            ? 'text-green-800'
                            : '',
                        'text-sm font-medium',
                    ]"
                >
                    {{ flash.title ?? flash.message }}
                </h3>
                <div
                    v-if="flash.title !== null"
                    :class="[
                        flash.type === 'warning' ? 'text-yellow-700' : '',
                        flash.type === 'error' ? 'text-red-700' : '',
                        flash.type !== 'warning' && flash.type !== 'error'
                            ? 'text-green-700'
                            : '',
                        'mt-2 text-sm',
                    ]"
                >
                    <p>
                        {{ flash.message }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {
    ExclamationTriangleIcon,
    XCircleIcon,
    CheckCircleIcon,
} from "@heroicons/vue/20/solid";

import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();

const flash = computed(() => page.props.flash);

const visible = computed(() => flash.value.message !== null);
</script>
