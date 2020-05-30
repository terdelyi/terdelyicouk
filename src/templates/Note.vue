<template>
  <Layout>
    <h1 class="page-title text-4xl font-header leading-tight font-bold mb-6 text-blue" v-html="$page.note.title"
    ></h1>

    <div class="has-content">
      <div class="mb-4" v-html="$page.note.excerpt"></div>
      <div v-html="$page.note.content"></div>
    </div>

    <div class="flex justify-between bg-whiteish px-4 py-3 mb-6 text-sm rounded-md">
      <div>
        <time :datetime="$page.note.datetime">{{ $page.note.humanTime }}</time>
      </div>
      <div>
        Posted in <g-link :to="$page.note.category.path" class="text-pink underline">{{ $page.note.category.title }}</g-link>
      </div>
    </div>
  </Layout>
</template>

<page-query>
  query($id: ID!) {
    note(id: $id) {
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
      title: this.$page.note.title
    };
  }
};
</script>
