<script setup>
import {Link} from '@inertiajs/vue3'
import AppLogoXeniaWeb from "@/Components/AppLogoXeniaWeb.vue";
</script>

<template>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50 dark:bg-gray-900">
    <div>
      <Link href="/">
        <AppLogoXeniaWeb class="w-32 h-32 fill-lime-500 hover:fill-primary text-gray-500 transition ease-in-out duration-150" color-xenia="primary"/>
      </Link>
    </div>

    <div class="w-full">

      <slot />
    </div>
  </div>
</template>
