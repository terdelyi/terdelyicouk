<template>
  <Layout>

    <div class="w-2/3 py-20 text-center mx-auto">
      <h1 class="page-title">This might be not the page you're looking for</h1>
      <div class="has-content">
        <p class="leading-normal">But you can still <g-link to="/notes/" class="text">check my notes</g-link>. I'm writing about web development and all the technical problems I'm up against each day.</p>
      </div>
    </div>

  </Layout>
</template>

<script>
export default {
  metaInfo: {
    title: "Ooops"
  }
};
</script>
