<template>
  <main class="relative h-screen flex bg-grey-100 dark:bg-grey-700 text-grey-600">
    <div class="absolute top-6 right-6 text-grey-600 dark:text-grey-200">
      <DarkModeSwitch />
    </div>
    <div class="max-w-screen-md m-auto flex flex-col items-center text-center">
      <h1 class="text-4xl font-bold mb-8 dark:text-grey-400">This page doesn't exist.</h1>
      <div>
        Let's start this again and <NuxtLink to="/" class="font-bold text-pink hover:text-blue-600 hover:dark:text-grey-400 underline">go back to the home page</NuxtLink>.
      </div>
    </div>
  </main>
</template>