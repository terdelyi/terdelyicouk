<script setup lang="ts">
const { $experienceInYears } = useNuxtApp()
const config = useRuntimeConfig()

useHead({
  titleTemplate: (titleChunk: string|undefined) => {
    return titleChunk ? `${titleChunk} - Tamas Erdelyi` : 'Tamas Erdelyi';
  }
})

useSeoMeta({
  ogTitle: 'Tamas Erdelyi - Senior Backend Engineer',
  ogUrl: `${config.public.content.host}`,
  ogType: 'website',
  ogDescription: `I'm is a Senior Backend Engineer with ${$experienceInYears} years of full-stack experience based in Gloucestershire, United Kingdom`,
  ogImage: `${config.public.content.host}/generic.png`,
  twitterCard: 'summary_large_image',
  twitterCreator: '@terdelyi',
  twitterTitle: 'Tamas Erdelyi - Senior Backend Engineer',
  twitterDescription: `I'm is a Senior Backend Engineer with ${$experienceInYears} years of full-stack experience based in Gloucestershire, United Kingdom`,
  twitterImage: `${config.public.content.host}/generic.png`,
})
</script>

<template>
  <div class="flex flex-col h-screen justify-between">
    <Header extreme />
    <main class="mb-auto px-4 sm:px-0 container-md pt-5 sm:pt-10 pb-2 sm:pb-4">
      <slot/>
    </main>
    <Footer />
  </div>
</template>