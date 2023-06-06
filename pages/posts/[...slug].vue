<template>
  <ContentDoc>
    <template v-slot="{ doc }">
      <article>
        <OgImageStatic component="PostOgImage" :title="doc.title" />
        <h1>{{ doc.title }}</h1>
        <div class="has-content">
          <div class="mb-4">
            <p>{{ doc.excerpt }}</p>
          </div>
          <ContentRenderer :value="doc" />
        </div>
        <div class="text-grey-600 dark:text-grey-550 text-sm text-center mb-6">
          <div>
            This post was published on {{ formatDate(doc.date) }} in {{ formatTags(doc.tags) }}
          </div>
        </div>
      </article>
    </template>
    <template #not-found>
      <article>
        <h1>Mmm, this post doesn't exist</h1>
        <p>Are you sure this is what you're looking for?</p>
      </article>
    </template>
  </ContentDoc>
</template>

<script setup>
  const formatDate = (dateString) => {
    const date = new Date(dateString);
    return new Intl.DateTimeFormat('default', {dateStyle: 'medium'}).format(date);
  }
  const formatTags = (tags) => {
    return tags.join(', ');
  }
</script>

