<script setup>
const props = defineProps({
  title: String,
})
</script>

<template>
  <div class="w-full h-full flex text-left items-end justify-between p-20 pr-32" :style="{ backgroundColor: '#eeeeee' }">
    <div>
      <h1 :style="{ fontSize: '80px', color: '#FD1359' }" class="tracking-tight font-extrabold m-0 mb-4">{{ title }}</h1>
      <div :style="{ fontSize: '45px', color: '#0C47C2' }" class="tracking-tight font-bold">by Tamas Erdelyi</div>
    </div>
  </div>
</template>