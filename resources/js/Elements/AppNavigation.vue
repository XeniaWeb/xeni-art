<script setup>
import {
  BookOpenIcon,
  BanknotesIcon,
  EnvelopeIcon,
  SparklesIcon,
  Square3Stack3DIcon
} from '@heroicons/vue/24/outline'
import NavLink from "@/Components/NavLink.vue";
import {Link} from "@inertiajs/vue3";
</script>

<template>
  <ul class="main-nav__list">
    <li>
      <NavLink :href="route('employers.list')" class="main-nav__link">
        <Square3Stack3DIcon class="main-nav__icon"/>
        Employers
      </NavLink>
    </li>
    <li>
      <NavLink :href="route('cv.de')" class="main-nav__link">
        <SparklesIcon class="main-nav__icon"/>
        About
      </NavLink>
    </li>
    <li>
      <NavLink :href="route('cv.en')" class="main-nav__link">
        <EnvelopeIcon class="main-nav__icon"/>
        English
      </NavLink>
    </li>
    <li>
      <NavLink :href="route('cv.de')" class="main-nav__link">
        <BanknotesIcon class="main-nav__icon"/>
        Deutsch
      </NavLink>
    </li>
    <li class="main-nav__item">
      <NavLink :href="route('cv.ru')" class="main-nav__link">
        <BanknotesIcon class="main-nav__icon"/>
        Русский
      </NavLink>
    </li>
    <!--    <li>-->
    <!--      <RouterNavLink :to="{ name: 'about' }" class="main-nav__link">-->
    <!--        <SparklesIcon class="main-nav__icon" />-->
    <!--        About-->
    <!--      </RouterNavLink>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <RouterNavLink :to="{ name: 'contacts' }" class="main-nav__link">-->
    <!--        <EnvelopeIcon class="main-nav__icon" />-->
    <!--        Contacts-->
    <!--      </RouterNavLink>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <RouterNavLink :to="{ name: 'checkout' }" class="main-nav__link">-->
    <!--        <BanknotesIcon class="main-nav__icon" />-->
    <!--        Checkout-->
    <!--      </RouterNavLink>-->
    <!--    </li>-->
    <li>
      <a class="main-nav__link" href="http://blog.xeniaweb.ru" target="_blank">
        <BookOpenIcon class="main-nav__icon"/>
        Blog
      </a>
    </li>
    <pre>{{$page.props.auth.user}}</pre>
<!--    &lt;!&ndash;Menu Login Register Logout&ndash;&gt;-->
    <li v-if="$page.props.auth.user" class="main-nav__item">
      <NavLink
        :href="route('dashboard')"
        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
      >Dashboard
      </NavLink>
    </li>

    <template v-else>
      <li class="main-nav__item">
        <NavLink
          :href="route('login')"
          class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >Log in
        </NavLink>
      </li>
      <li class="main-nav__item">
        <NavLink
          :href="route('register')"
          class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >Register
        </NavLink></li>
    </template>
<!--    &lt;!&ndash; End Menu Login &ndash;&gt;-->
  </ul>
</template>

<style lang="scss" scoped>
.main-nav__list {
  @apply flex items-center gap-8 ;
}

.main-nav__item {
  @apply mx-4 flex items-center gap-2;

  &:last-child {
    margin-right: 0;
  }

  &:hover {
    @apply text-amber-700;
  }
}

.main-nav__link {
  @apply inline-flex items-center border-b-2 border-transparent text-base font-medium leading-6 text-amber-800 hover:text-amber-700 hover:border-amber-700/40 focus:outline-none focus:text-amber-700 focus:border-amber-700 transition duration-150 ease-in-out;
}

.main-nav__icon {
  @apply mr-2 h-4 w-4 text-inherit;
}
</style>
