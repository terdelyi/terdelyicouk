<script setup>
const experience = new Date().getFullYear() - 2002
const config = useRuntimeConfig()

useHead({
  titleTemplate: (titleChunk) => {
    return titleChunk ? `${titleChunk} - Tamas Erdelyi` : 'Tamas Erdelyi';
  }
})

useSeoMeta({
  ogTitle: 'Tamas Erdelyi - Senior Backend Engineer',
  ogUrl: `${config.public.baseURL}`,
  ogType: 'website',
  ogDescription: `I'm is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
  ogImage: `${config.public.baseURL}/generic.png`,
  twitterCard: 'summary_large_image',
  twitterDomain: `${config.public.baseURL}`,
  twitterUrl: `${config.public.baseURL}/`,
  twitterCreator: '@terdelyi',
  twitterTitle: 'Tamas Erdelyi - Senior Backend Engineer',
  twitterDescription: `I'm is a Senior Backend Engineer with ${experience} years of full-stack experience based in Gloucestershire, United Kingdom`,
  twitterImage: `${config.public.baseURL}/generic.png`,
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