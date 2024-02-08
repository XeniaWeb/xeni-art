<script setup>
import {Head, Link} from '@inertiajs/vue3'
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue'
import AppNavigation from "@/Elements/AppNavigation.vue";
import AppFooter from "@/Elements/AppFooter.vue";

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
  <Head title="Welcome"/>

  <div class="relative min-h-screen bg-green-100 bg-hero-image">
    <div class="max-w-[1440px] min-h-[80vh] mx-auto p-2 border-2 border-red-500">
      <div class="main-nav">
        <nav class="flex items-center justify-between ">
          <Link :href="route('cv.en')">
            <AppLogoXeniaWeb class="w-20 h-20 fill-current text-gray-500 border"/>
          </Link>
          <AppNavigation/>
        </nav>
      </div>
    </div>
    <AppFooter/>
    <!--Menu Login Register Logout-->
    <div
      v-if="canLogin"
      class="bg-blue-100/50 p-6 text-end border-4 border-indigo-400"
    >
      <Link
        v-if="$page.props.auth.user"
        :href="route('dashboard')"
        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
      >Dashboard
      </Link>

      <template v-else>
        <Link
          :href="route('login')"
          class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >Log in
        </Link>

        <Link
          v-if="canRegister"
          :href="route('register')"
          class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >Register
        </Link>
      </template>
    </div>
    <!-- End Menu Login -->
  </div>
</template>

<style></style>
