<template>
  <header class="bg-whiteish text-grey">
    <div class="max-w-screen-lg flex items-center justify-between py-6 mx-auto">
      <div class="px-4">
        <h1 class="font-light text-lg"><g-link to="/" class="hover:underline">Tamas <span class="font-bold">Erdelyi</span></g-link></h1>
      </div>
      <div>
        <ul class="inline-flex">
          <li><g-link to="/about/" class="px-4 hover:underline" active-class="font-bold">About</g-link></li>
          <li><g-link to="/notes/" class="px-4 hover:underline" active-class="font-bold">Notes</g-link></li>
          <li><g-link to="/contact/" class="px-4 hover:underline" active-class="font-bold">Contact</g-link></li>
        </ul>
      </div>
    </div>
  </header>
</template>
