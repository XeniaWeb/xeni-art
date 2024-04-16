<script setup>
defineProps({
  type: {
    type: String,
    default: 'button'
  }
})
</script>

<template>
  <button
    :type="type"
    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium leading-5 text-gray-700 tracking-widest shadow-sm hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-primary disabled:opacity-25 transition ease-in-out duration-150"
  >
    <slot />
  </button>
</template>
