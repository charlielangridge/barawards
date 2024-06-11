<script setup>
import Alert from "@/Components/Alert.vue";
import { computed, defineComponent, h, ref } from "vue";
import { usePage, Link } from "@inertiajs/vue3";

import { Dialog, DialogPanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";

const page = usePage();

const flash = computed(() => page.props.flash);
const user = computed(() => page.props.auth.user);

const alertVisible = computed(() => flash.value.message !== null);

const mobileMenuOpen = ref(false);

const footerNavigation = {
    social: [
        {
            name: "Facebook",
            href: "https://www.facebook.com/profile.php?id=61561145571191",
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

<template>
    <div :class="[alertVisible ? 'pt-10' : '', 'min-h-screen bg-tealBrighton']">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav
                class="flex items-center justify-between p-6 lg:px-8"
                aria-label="Global"
            >
                <div class="flex lg:hidden">
                    <button
                        type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                        @click="mobileMenuOpen = true"
                    >
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>

                <div class="hidden gap-x-4 lg:flex lg:flex-1 lg:justify-end">
                    <template v-if="user === null">
                    <Link
                        :href="route('register')"
                        class="text-sm font-semibold leading-6 text-gray-900 hover:underline"
                        >Register</Link
                    >
                    <Link
                        :href="route('login')"
                        class="text-sm font-semibold leading-6 text-gray-900 hover:underline"
                        >Log in
                    </Link>
                    </template>
                    <template v-else>

                        <Link
                            :href="route('logout')"
                            method="post"
                            class="text-sm font-semibold leading-6 text-gray-900 hover:underline"
                        >Log Out
                        </Link>
                    </template>
                </div>
            </nav>
            <Dialog
                class="lg:hidden"
                @close="mobileMenuOpen = false"
                :open="mobileMenuOpen"
            >
                <div class="fixed inset-0 z-50" />
                <DialogPanel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                >
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img
                                class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                alt=""
                            />
                        </a>
                        <button
                            type="button"
                            class="-m-2.5 rounded-md p-2.5 text-gray-700"
                            @click="mobileMenuOpen = false"
                        >
                            <span class="sr-only">Close menu</span>
                            <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a
                                    v-for="item in navigation"
                                    :key="item.name"
                                    :href="item.href"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                    >{{ item.name }}</a
                                >
                            </div>
                            <div class="py-6">
                                <a
                                    href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                    >Log in</a
                                >
                            </div>
                        </div>
                    </div>
                </DialogPanel>
            </Dialog>
        </header>
        <Alert />

        <slot></slot>

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

<style scoped></style>
