<template>
  <header class="bg-blue-steel text-whiteish">
    <div class="max-w-screen-md flex items-center justify-between py-3 mx-auto">
      <div class="pl-4 md:pl-0">
        <h1 class="font-light text-xl">
          <g-link to="/" class="hover:underline font-semibold">Tamas Erdelyi</g-link>
        </h1>
      </div>
      <div>
        <ul class="px-4 md:px-0 text-sm md:text-base inline-flex">
          <li><g-link to="/about/" class="px-2 sm:px-3 hover:underline" active-class="font-bold">About me</g-link></li>
          <li><g-link to="/uses/" class="px-2 sm:px-3 hover:underline" active-class="font-bold">Uses</g-link></li>
          <li><g-link to="/notes/" class="px-2 sm:px-3 hover:underline" active-class="font-bold">Notes</g-link></li>
          <li><g-link to="/contact/" class="px-2 md:pr-0 sm:px-4 hover:underline" active-class="font-bold">Contact</g-link></li>
        </ul>
      </div>
    </div>
  </header>
</template>
