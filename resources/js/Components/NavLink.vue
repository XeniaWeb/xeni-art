<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  href: {
    type: String,
    required: true
  },
  active: {
    type: Boolean
  }
})

const classes = computed(() =>
  props.active
    ? 'inline-flex items-center border-b-2 border-amber-700/60 text-base font-medium leading-6 text-amber-800 focus:outline-none focus:border-amber-700 transition duration-150 ease-in-out'

    : 'inline-flex items-center border-b-2 border-transparent text-base font-medium leading-6 text-amber-800 hover:text-amber-700 hover:border-amber-700/40 focus:outline-none focus:text-amber-700 focus:border-amber-700 transition duration-150 ease-in-out'
)
</script>

<template>
  <Link :href="href" :class="classes">
    <slot />
  </Link>
</template>
