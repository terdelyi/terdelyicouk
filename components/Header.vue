<script setup>
const menuActive = ref(false);
</script>

<template>
  <header class="relative bg-blue-400 dark:bg-grey-800 text-grey-200 dark:text-grey-400">
    <div class="w-full md:max-w-screen-md flex items-center justify-between mx-auto">
      <div class="flex pl-4 md:pl-0 items-center">
        <div>
          <h1 class="sm:text-xl">
            <NuxtLink to="/" class="hover:underline font-bold tracking-tight">Tamas Erdelyi</NuxtLink>
          </h1>
        </div>
        <div class="w-24 sm:w-32 -ml-4">
          <nuxt-img loading="lazy" alt="Not Kevin Smith" src="/images/header-profile.png" />
        </div>
      </div>
      <nav class="hidden sm:block md:pr-12">
        <ul class="px-4 md:px-0 text-sm md:text-base font-normal tracking-tight inline-flex">
          <li><NuxtLink to="/about" class="px-4 sm:px-3 hover:underline" active-class="font-bold">About</NuxtLink></li>
          <li><NuxtLink to="/posts" class="px-4 sm:px-3 hover:underline" active-class="font-bold">Posts</NuxtLink></li>
          <li><NuxtLink to="/uses" class="px-4 sm:px-3 hover:underline" active-class="font-bold">Uses</NuxtLink></li>
          <li><NuxtLink to="/contact" class="px-4 md:pr-0 sm:px-4 hover:underline" active-class="font-bold">Contact</NuxtLink></li>
        </ul>
      </nav>
      <div class="flex sm:hidden mr-4">
        <button v-on:click="menuActive = true" v-if="!menuActive" class="button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <button v-on:click="menuActive = false" v-if="menuActive" class="button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
    <div v-if="menuActive" class="max-w-screen-md flex sm:hidden px-4 md:px-0 py-2 mx-auto bg-blue-700 dark:bg-grey-750">
      <ul>
        <li class="pb-1"><NuxtLink to="/about" class="hover:underline" active-class="font-bold text-grey-100" v-on:click="menuActive = false">About</NuxtLink></li>
        <li class="pb-1"><NuxtLink to="/posts" class="hover:underline" active-class="font-bold text-grey-100" v-on:click="menuActive = false">Posts</NuxtLink></li>
        <li class="pb-1"><NuxtLink to="/uses" class="hover:underline" active-class="font-bold text-grey-100" v-on:click="menuActive = false">Uses</NuxtLink></li>
        <li class="pb-1"><NuxtLink to="/contact" class="hover:underline" active-class="font-bold text-grey-100" v-on:click="menuActive = false">Contact</NuxtLink></li>
      </ul>
    </div>
    <div class="absolute top-3 sm:top-5 right-14 sm:right-6  hover:text-white">
      <DarkModeSwitch />
    </div>
  </header>
</template>