<template>
  <div class="flex flex-col h-screen justify-between">
    <Header />
    <main class="mb-auto px-4 sm:px-0 container-md pt-5 sm:pt-10 pb-2 sm:pb-4">
      <slot/>
    </main>
    <Footer />
  </div>
</template>