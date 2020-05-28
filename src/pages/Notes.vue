<template>
  <Layout>

      <h1 class="page-title">Notes</h1>

      <article class="leading-relaxed mb-10" v-for="entry in $page.allEntry.edges" :key="entry.node.id">
        <h3 class="text-xl font-header leading-tight mb-2 font-semibold"><g-link class="text-pink hover:text-gray-600 hover:underline" :to="entry.node.path">{{ entry.node.title }}</g-link></h3>
        <div class="leading-relaxed">{{ entry.node.excerpt }}</div>
      </article>

      <div class="pagination">
        <Pager :info="$page.allEntry.pageInfo"/>
      </div>

  </Layout>
</template>

<page-query>
query ($page: Int) {
  allEntry(sortBy: "datetime", order: DESC, perPage: 5, page: $page) @paginate {
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
