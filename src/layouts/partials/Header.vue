<template>
  <header class="bg-blue-steel dark:bg-dark text-whiteish">
    <div class="max-w-screen-md flex items-center justify-between py-3 mx-auto">
      <div class="pl-4 md:pl-0">
        <h1 class="font-light text-xl">
          <g-link to="/" class="hover:underline font-semibold">Tamas Erdelyi</g-link>
        </h1>
      </div>
      <div class="hidden sm:block">
        <ul class="px-4 md:px-0 text-sm md:text-base inline-flex">
          <li><g-link to="/about/" class="px-2 sm:px-3 hover:underline" active-class="font-bold">About</g-link></li>
          <li><g-link to="/uses/" class="px-2 sm:px-3 hover:underline" active-class="font-bold">Uses</g-link></li>
          <li><g-link to="/notes/" class="px-2 sm:px-3 hover:underline" active-class="font-bold">Notes</g-link></li>
          <li><g-link to="/contact/" class="px-2 md:pr-0 sm:px-4 hover:underline" active-class="font-bold">Contact</g-link></li>
        </ul>
      </div>
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
    <div v-if="menuActive" class="max-w-screen-md flex sm:hidden px-4 md:px-0 pb-5 mx-auto">
      <ul>
          <li><g-link to="/about/" class="hover:underline" active-class="font-bold">About</g-link></li>
          <li><g-link to="/uses/" class="hover:underline" active-class="font-bold">Uses</g-link></li>
          <li><g-link to="/notes/" class="hover:underline" active-class="font-bold">Notes</g-link></li>
          <li><g-link to="/contact/" class="hover:underline" active-class="font-bold">Contact</g-link></li>
      </ul>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      menuActive: false,
    }
  },
}
</script>

<style lang="scss" scoped>
  .button {
    @apply text-whiteish inline-block outline-none;
  }
</style>
