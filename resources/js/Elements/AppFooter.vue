<script setup>
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue'
import AppNavigation from "@/Elements/AppNavigation.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
  canLogin: {
    type: Boolean
  },
  canRegister: {
    type: Boolean
  }
})
</script>

<template>
  <div class="mt-auto min-h-[100px] bg-amber-600/10 p-4 fixed right-0 left-0 bottom-0">
    <div class="container max-w-5xl mx-auto flex items-center justify-between">
      <AppNavigation/>
      <div class="text-amber-600">Footer</div>

      <div class="relative">
        <Link :href="route('cv.de')">
          <AppLogoXeniaWeb class="w-32 h-15 fill-current text-gray-500 border"/>
        </Link>

      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.main-nav__list {
  @apply block;
}
</style>
