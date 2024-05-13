<script setup>
import { ref } from 'vue'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import Dropdown from '@/Components/Dropdown.vue'
import DropdownLink from '@/Components/DropdownLink.vue'
import NavLink from '@/Components/NavLink.vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3'
import AppNavigation from "@/Elements/AppNavigation.vue";
import AppLogoXeniaWeb from "@/Components/AppLogoXeniaWeb.vue";

const showingNavigationDropdown = ref(false)

</script>

<template>
  <div>
    <div class="bg-gray-100 relative">
      <div
        class="relative bg-cover bg-center bg-no-repeat py-8"
        style="background-image: url(/images/img/bg-hero.jpg)"
      >
        <div
          class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"
        ></div>
        <div
          class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-32"
        >
          <div class="flex flex-col items-center justify-center lg:flex-row">
            <div class="rounded-full border-8 border-primary shadow-xl">
              <img
                src="/images/024.jpg"
                class="h-48 rounded-full sm:h-56 lg:h-72"
                alt="author"
              />
            </div>
            <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
              <h1
                class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-5xl"
              >
                Hello I'm Oksana Bürki!
              </h1><p class="font-normal text-white text-md md:text-xl my-4 max-w-xl">I have a passion for software. I enjoy creating tools that make life easier for people.</p>
              <div
                class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start"
              >
                <div
                  class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"
                >

                  <p class="font-body text-lg uppercase text-white">Let's connect > </p>
                  <div class="hidden sm:block">
                    <i class="bx bx-chevron-right text-3xl text-yellow">  </i>
                  </div>
                </div>
                <div
                  class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
                >
                  <!--                <a href="/">-->
                  <!--                  <i-->
                  <!--                    class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"-->
                  <!--                  ></i>-->
                  <!--                </a>-->
                  <!--                <a href="/" class="pl-4">-->
                  <!--                  <i-->
                  <!--                    class="bx bxl-twitter text-2xl text-white hover:text-yellow"-->
                  <!--                  ></i>-->
                  <!--                </a>-->
                  <!--                <a href="/" class="pl-4">-->
                  <!--                  <i-->
                  <!--                    class="bx bxl-dribbble text-2xl text-white hover:text-yellow"-->
                  <!--                  ></i>-->
                  <!--                </a>-->
                  <a href="/" class="pl-4">
                    <i
                      class="bx bxl-linkedin text-2xl text-white hover:text-yellow"
                    ></i>
                  </a>
                  <a href="/" class="pl-4">
                    <i
                      class="bx bxl-instagram text-2xl text-white hover:text-yellow"
                    ></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="bg-transparent shadow-sm absolute top-0 right-0 left-0 z-50">
        <!-- Primary Navigation Menu -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between">
            <div class="w-full flex justify-between">
              <!-- Logo -->
              <div class="shrink-0 flex items-center">
                <Link :href="route('dashboard')" class=" focus:outline-none focus:ring-1 focus:ring-yellow focus:border-transparent transition duration-150 ease-in-out ">
                  <AppLogoXeniaWeb class="w-20 h-20 fill-current text-gray-500"/>
                </Link>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <AppNavigation class="ml-auto"/>
              </div>

            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
              <button
                @click="showingNavigationDropdown = !showingNavigationDropdown"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
              >
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path
                    :class="{
                      hidden: showingNavigationDropdown,
                      'inline-flex': !showingNavigationDropdown
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                  <path
                    :class="{
                      hidden: !showingNavigationDropdown,
                      'inline-flex': showingNavigationDropdown
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
          :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
              Dashboard
            </ResponsiveNavLink>
            <AppNavigation class="ml-auto"/>

          </div>


        </div>
      </nav>

      <!-- Page Heading -->
      <header class="bg-white shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <slot />
      </main>
    </div>
  </div>
</template>
