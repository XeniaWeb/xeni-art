<script setup>
defineProps({
  employers: {
    type: Object
  }
})
</script>

<template>
  <h1 class="text-red-600 font-bold text-2xl text-center"> Employer Index</h1>
  <div v-for="item in employers" :key="item.id">
    {{ item.name }}
  </div>
</template>

<style scoped>

</style>
