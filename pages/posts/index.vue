<template>
  <ContentList :query="query" v-slot="{ list }">
    <article v-for="post in list" :key="post._path" class="mb-10">
      <h3 class="font-header text-xl font-bold mb-2 leading-tight tracking-tight underline"><NuxtLink :to="post._path" class="text-pink hover:text-blue-600 dark:hover:text-grey-400 hover:underline">{{ post.title }}</NuxtLink></h3>
      <div class="leading-relaxed">{{ post.excerpt }}</div>
    </article>
  </ContentList>
</template>

<script setup>
const query = {
  path: '/posts',
  limit: 5,
  sort: [
    { date: -1 }
  ]
}
</script>