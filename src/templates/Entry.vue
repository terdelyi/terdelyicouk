<template>
  <Layout>
    <h1 class="page-title text-4xl font-header leading-tight font-bold mb-6 text-blue" v-html="$page.entry.title"
    ></h1>

    <div class="has-content leading-relaxed font-display mb-4" v-html="$page.entry.excerpt"></div>
    <div class="has-content leading-relaxed font-display" v-html="$page.entry.content"></div>

    <div class="flex justify-between border-t border-grey-solid py-4 text-sm">
      <div>
        <time :datetime="$page.entry.datetime">{{ $page.entry.humanTime }}</time>
      </div>
      <div>
        Posted in <g-link :to="$page.entry.category.path" class="text-pink underline">{{ $page.entry.category.title }}</g-link>
      </div>
    </div>
  </Layout>
</template>


<page-query>
  query($id: ID!) {
    entry(id: $id) {
      title
      path
      excerpt
      content
      humanTime : created(format:"Do MMMM YYYY")
      datetime : created(format:"ddd MMM DD YYYY hh:mm:ss zZ")
      category {
        title
        path
      }
    }
  }
</page-query>

<script>
export default {
  metaInfo() {
    return {
      title: this.$page.entry.title
    };
  }
};
</script>
