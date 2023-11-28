<script setup>
const props = defineProps(['href', 'title', 'social'])
</script>

<template>
  <li
    class="group hover:bg-greenGray-light/5 hover:border-greenGray-light/50 cursor-pointer border border-greenGray-light rounded bg-transparent w-20 sm:w-11 h-20 sm:h-11 flex justify-center items-center my-3 mx-2"
  >
    <a :href="href" target="_blank" :title="title">
      <span class="sr-only">{{ title }}</span>
      <slot />
    </a>
  </li>
</template>
