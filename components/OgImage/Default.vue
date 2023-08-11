<script setup>
const experience = new Date().getFullYear() - 2002;
</script>

<template>
  <div class="w-full h-full flex text-left items-center justify-between bg-no-repeat bg-right-bottom" :style="{ backgroundColor: '#eeeeee', backgroundImage: `url(` + '/images/og-image.png' + `)` }">
    <div class="w-2/3 pl-20 pr-10">
      <h1 :style="{ fontSize: '85px', color: '#F5085E' }" class="tracking-tight font-extrabold m-0">Tamas Erdelyi</h1>
      <div :style="{ fontSize: '50px', color: '#F5085E' }" class="tracking-tight mb-6 font-bold">Senior Backend Engineer</div>
      <div :style="{ fontSize: '35px', color: '#0C47C2' }" class="tracking-tight leading-snug font-medium"> with <b class="font-bold">{{ experience }} years of full-stack experience</b> based in Gloucestershire, UK</div>
    </div>
  </div>
</template>