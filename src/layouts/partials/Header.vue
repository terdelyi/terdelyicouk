<template>
  <header class="bg-white">
    <div class="max-w-screen-lg flex items-center mx-auto justify-between py-6 text-grey font-header">
      <div class="px-4">
        <h1 class="tracking-tight font-light"><g-link to="/" class="hover:underline">Tamas <span class="font-bold">Erdelyi</span></g-link></h1>
      </div>
      <div>
        <ul class="tracking-tight inline-flex">
          <li><g-link to="/about/" class="px-4 hover:underline" active-class="font-bold">About</g-link></li>
          <li><g-link to="/notes/" class="px-4 hover:underline" active-class="font-bold">Notes</g-link></li>
          <li><g-link to="/contact/" class="px-4 hover:underline" active-class="font-bold">Contact</g-link></li>
        </ul>
      </div>
    </div>
  </header>
</template>
