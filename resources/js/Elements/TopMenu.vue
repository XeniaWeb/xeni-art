<script setup>
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const showingNavigationDropdown = ref(false)
</script>

<template>
  <nav class="grid-top-menu bg-white/80 backdrop-blur-sm border-b border-gray-100 py-2">
    <!-- Primary Navigation Menu -->
    <div class="wrapper">
      <div class="flex justify-between min-h-16">
        <div class="flex w-full">
          <!-- Logo -->
          <div class="shrink-0 flex items-center">
            <Link
              :href="route('web-works.index')"
              class="focus:outline-2 focus:outline-offset-1 focus:outline-orange-200 focus:outline-double"
            >
              <AppLogoXeniaWeb class="w-25 h-10 fill-current text-gray-500" />
            </Link>
          </div>

          <!-- Navigation Links -->
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex flex-wrap">
            <!--                                <div v-if="$page.props.auth.user" >-->
            <BreezeNavLink
              v-if="$page.props.auth.user"
              :href="route('dashboard')"
              class="sm:text-sm"
              :active="route().current('dashboard')"
            >
              Dashboard
            </BreezeNavLink>
            <!--                                </div>-->
            <BreezeNavLink
              :href="route('page.about')"
              :active="route().current('page.about')"
              class="sm:text-sm"
            >
              About&nbsp;me
            </BreezeNavLink>
            <BreezeNavLink
              :href="route('web-works.index')"
              :active="route().current('web-works.index')"
              class="sm:text-sm"
            >
              Portfolio
            </BreezeNavLink>
            <BreezeNavLink
              :href="route('page.contacts')"
              :active="route().current('page.contacts')"
              class="sm:text-sm"
            >
              Contacts
            </BreezeNavLink>
            <a
              href="https://blog.xeniaweb.ru"
              target="_blank"
              class="flex rounded-lg items-center px-1 pt-1 border-b-4 border-transparent text-sm md:text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:bg-gray-50 hover:border-gray-300 focus:outline-1 focus:outline-offset-1 focus:outline-orange-100 focus:outline-double transition duration-150 ease-in-out"
            >
              Blog(Ru)
            </a>
            <a
              href="https://stock.adobe.com/ru/contributor/207527840/Oksana%20B%C3%BCrki"
              target="_blank"
              class="flex rounded-lg items-center px-1 pt-1 border-b-4 border-transparent text-sm md:text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:bg-gray-50 hover:border-gray-300 focus:outline-1 focus:outline-offset-2 focus:outline-orange-100 focus:outline-double focus:text-gray-700 transition duration-150 ease-in-out"
            >
              Photo & Video
            </a>
          </div>
          <div
            v-if="!$page.props.auth.user"
            class="hidden md:flex mr-2 sm:-my-px ml-auto hover:bg-gray-100 sm:hover:bg-transparent"
          >
            <div v-if="$slots.link_portfolio" class="md:flex">
              <BreezeNavLink :href="route('web-works.index') + '#worksList'">
                <slot name="link_portfolio" />
              </BreezeNavLink>
            </div>
          </div>
        </div>
        <div v-if="$page.props.auth.user" class="hidden sm:flex sm:items-center sm:ml-6">
          <!-- Settings Dropdown -->
          <div class="ml-3 relative">
            <BreezeDropdown align="right" width="48">
              <template #trigger>
                <span class="inline-flex rounded-md">
                  <button
                    type="button"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                  >
                    {{ $page.props.auth.user.name }}

                    <svg
                      class="ml-2 -mr-0.5 h-4 w-4"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </button>
                </span>
              </template>

              <template #content>
                <BreezeDropdownLink :href="route('logout')" method="post" as="button">
                  Log Out
                </BreezeDropdownLink>
              </template>
            </BreezeDropdown>
          </div>
        </div>
        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
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
      <!-- Responsive Navigation Menu -->
      <div
        :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
        class="sm:hidden pl-[60%] duration-200 ease-in-out"
      >
        <div
          class="pt-2 pb-3 space-y-1 absolute pl-[60%] w-[100vw] h-[40vh] left-0 right-0 top-56px bg-white"
        >
          <BreezeResponsiveNavLink
            :href="route('page.about')"
            :active="route().current('page.about')"
          >
            About me
          </BreezeResponsiveNavLink>
          <BreezeResponsiveNavLink
            :href="route('web-works.index')"
            :active="route().current('web-works.index')"
          >
            Portfolio
          </BreezeResponsiveNavLink>
          <BreezeResponsiveNavLink
            :href="route('page.contacts')"
            :active="route().current('page.contacts')"
          >
            Contacts
          </BreezeResponsiveNavLink>
          <a
            href="https://blog.xeniaweb.ru"
            target="_blank"
            class="flex pl-3 pr-4 py-2 border-r-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out"
          >
            Blog (Ru)
          </a>
          <a
            href="https://stock.adobe.com/ru/contributor/207527840/Oksana%20B%C3%BCrki"
            target="_blank"
            class="flex pl-3 pr-4 py-2 border-r-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out"
          >
            Photo & Video
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>

<style scoped>
.grid-top-menu {
  grid-area: top-menu;
}
</style>
