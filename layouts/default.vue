<script setup>
useHead({
  titleTemplate: (titleChunk) => {
    return titleChunk ? `${titleChunk} - Tamas Erdelyi` : 'Tamas Erdelyi';
  }
})
// const experience = new Date().getFullYear() - 2002
// const title = ref('Tamas Erdelyi - Senior Backend Engineer')
// useSeoMeta({
//   title: title,
//   description: `Tamas is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
//   ogTitle: 'Tamas Erdelyi - Senior Backend Engineer',
//   ogDescription: `Tamas is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
//   ogImage: 'posts/generic.png',
//   twitterCard: 'summary_large_image',
//   twitterSite: '@terdelyi',
//   twitterCreator: '@terdelyi',
//   twitterTitle: 'Tamas Erdelyi - Senior Backend Engineer',
//   twitterDescription: `Tamas is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
// })
useContentHead({
  ogTitle: 'Tamas Erdelyi - Senior Backend Engineer',
})
</script>

<template>
  <div class="flex flex-col h-screen justify-between">
    <Header />
    <main class="mb-auto px-4 sm:px-0 container-md pt-5 sm:pt-10 pb-2 sm:pb-4">
      <slot/>
    </main>
    <Footer />
  </div>
</template>