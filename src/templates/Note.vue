<template>
  <Layout>
    <h1 class="page-title mb-4" v-html="$page.note.title"
    ></h1>

    <div class="text-almost-blue text-sm text-left mb-10">
      <div>
        Posted on <time :datetime="$page.note.datetime">{{ $page.note.humanTime }}</time> in
        <ul v-for="(category, index) in $page.note.categories" :key="index" class="inline-flex">
          <li><g-link :to="category.path" class="text-pink underline">{{ category.title }}</g-link><span v-if="index !== Object.keys($page.note.categories).length - 1" class="mr-1">,</span></li>
        </ul>
      </div>
    </div>

    <div class="has-content">
      <div class="mb-4"><p>{{ $page.note.excerpt }}</p></div>
      <div v-html="$page.note.content"></div>
    </div>

  </Layout>
</template>

<page-query>
  query($id: ID!) {
    note(id: $id) {
      title
      path
      excerpt
      preview
      content
      slug
      humanTime : created(format:"Do MMMM YYYY")
      datetime : created(format:"ddd MMM DD YYYY hh:mm:ss zZ")
      categories {
        title
        path
      }
    }
  }
</page-query>
<static-query>
  query {
    metadata {
      siteUrl
    }
  }
</static-query>

<script>
export default {
  computed: {
    previewImage() {
      const preview = this.$page.note.preview;
      return preview !== null ? `${this.$static.metadata.siteUrl}${preview.src}` : '';
    },
  },
  metaInfo() {
    return {
      title: this.$page.note.title,
      meta: [
        { name: 'description', content: this.$page.note.excerpt },
        { name: 'twitter:card', content: 'summary_large_image' },
        { name: 'twitter:site', content: '@iamterdelyi' },
        { name: 'twitter:title', content: this.$page.note.title },
        { name: 'twitter:description', content: this.$page.note.excerpt },
        { name: 'twitter:image', content: this.previewImage },
        { name: 'twitter:creator', content: '@iamterdelyi' },
      ]
    };
  }
};
</script>
