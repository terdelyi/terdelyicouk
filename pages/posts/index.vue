<script setup lang="ts">
import type { QueryBuilderParams } from '@nuxt/content/dist/runtime/types'
const query: QueryBuilderParams = { path: '/posts', sort: [{ date: -1 }] }

useHead({
  title: 'Posts',
})
useSeoMeta({
  description: 'Sometimes I write about the stuff I\'m working on or thought about IT',
})
</script>

<template>
  <ContentList :query="query">
    <template #default="{ list }">
      <article v-for="post in list" :key="post._path" class="mb-10">
        <h3 class="font-header text-xl font-bold mb-2 leading-tight tracking-tight underline"><NuxtLink :to="post._path" class="text-pink hover:text-blue-600 dark:hover:text-grey-400 hover:underline">{{ post.title }}</NuxtLink></h3>
        <div class="leading-relaxed">{{ post.description }}</div>
      </article>
    </template>
    <template #not-found>
      <p>No articles found.</p>
    </template>
  </ContentList>
</template>