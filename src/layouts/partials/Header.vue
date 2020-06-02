<template>
  <header class="bg-blue-steel text-whiteish">
    <div class="max-w-screen-lg flex items-center justify-between py-4 mx-auto">
      <div class="px-5 md:px-4">
        <h1 class="font-light text-lg"><g-link to="/" class="hover:underline">Tamas <span class="font-bold">Erdelyi</span></g-link></h1>
      </div>
      <div>
        <ul class="px-3 md:px-0 text-sm md:text-base inline-flex">
          <li><g-link to="/about/" class="px-1 sm:px-4 hover:underline" active-class="font-bold">About</g-link></li>
          <li><g-link to="/notes/" class="px-1 sm:px-4 hover:underline" active-class="font-bold">Notes</g-link></li>
          <li><g-link to="/contact/" class="px-1 sm:px-4 hover:underline" active-class="font-bold">Contact</g-link></li>
        </ul>
      </div>
    </div>
  </header>
</template>
