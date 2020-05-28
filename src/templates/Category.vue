<template>
  <Layout>
    <h1 class="page-title">Category: {{ $page.category.title }}</h1>

    <article class="leading-relaxed mb-10" v-for="element in $page.category.belongsTo.edges" :key="element.node.id">
      <h3 class="text-xl font-header leading-tight mb-2 font-semibold"><g-link class="text-pink hover:text-gray-600 hover:underline" :to="element.node.path">{{ element.node.title }}</g-link></h3>
      <div class="leading-relaxed">{{ element.node.excerpt }}</div>
    </article>

    <div class="pagination">
      <Pager :info="$page.category.belongsTo.pageInfo"/>
    </div>
  </Layout>
</template>


<page-query>
  query($id: ID!, $page: Int) {
    category(id: $id) {
      title
      belongsTo(sortBy: "datetime", order: DESC, perPage: 5, page: $page) @paginate {
        pageInfo {
          totalPages
          currentPage
        },
        edges {
          node {
            ... on Entry {
              id
              title
              path,
              excerpt,
              humanTime : created(format:"Do MMMM YYYY")
              datetime : created(format:"ddd MMM DD YYYY hh:mm:ss zZ")
            }
          }
        }
      }
    }
  }
</page-query>

<script>
  import {Pager} from 'gridsome'
  export default {
    components: {
      Pager
    },
    metaInfo: {
      title: "Categories"
    }
};
</script>
