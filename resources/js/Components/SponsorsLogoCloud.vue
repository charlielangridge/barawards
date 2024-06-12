<template>
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
        <LogoGanda class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"/>
      </a>
      <a href="https://dustvenue.com">
        <LogoDust class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"/>
      </a>
      <a href="https://www.facebook.com/bangingwines">
        <LogoBangingWines class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"/>
      </a>

    </div>
      <h4
          class="text-center text-sm font-normal  text-cream mt-12"
      >
          <Link :href="route('partner.index')" class="hover:underline">
          If you'd like to partner with us or sponsor an award, please click here and get in touch
          </Link>
      </h4>
  </div>
</template>
<script setup>
import LogoGanda from "@/Components/Graphics/LogoGanda.vue";
import LogoDust from "@/Components/Graphics/LogoDust.vue";
import LogoBangingWines from "@/Components/Graphics/LogoBangingWines.vue";
import {Link} from "@inertiajs/vue3";

</script>
