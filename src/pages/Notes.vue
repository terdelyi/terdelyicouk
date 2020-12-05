<template>
  <Layout>

      <h1 class="page-title">Notes</h1>

      <article class="leading-7 mb-10" v-for="note in $page.allNote.edges" :key="note.node.id">
        <h3 class="text-xl font-header leading-tight mb-3 font-medium"><g-link class="text-pink hover:text-gray-600 hover:underline" :to="note.node.path">{{ note.node.title }}</g-link></h3>
        <div class="font-light">{{ note.node.excerpt }}</div>
      </article>

      <div v-if="$page.allNote.pageInfo.totalPages > 1" class="pagination">
        <Pager :info="$page.allNote.pageInfo"/>
      </div>

  </Layout>
</template>

<page-query>
query ($page: Int) {
  allNote(sortBy: "created", order: DESC, perPage: 5, page: $page) @paginate {
    pageInfo {
      totalPages
      currentPage
    },
    edges {
      node {
        title
        path
        excerpt
        humanTime : created(format:"Do MMMM YYYY")
        datetime : created(format:"ddd MMM DD YYYY hh:mm:ss zZ")
      }
    }
  }
}
</page-query>

<script>
  import { Pager } from 'gridsome'
  export default {
    components: {
      Pager
    },
    metaInfo: {
      title: "Notes"
    }
  };
</script>
