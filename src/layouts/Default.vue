<template>
  <div>
    <HeaderPartial/>

    <main id="main">
      <div class="container max-w-screen-md mx-auto px-4 md:px-0 py-6 md:py-10 text-dark dark:text-whiteish">
          <slot/>
      </div>
    </main>

    <FooterPartial/>
  </div>
</template>

<static-query>
query {
  metadata {
    siteName
  }
}
</static-query>

<script>
import HeaderPartial from '~/layouts/partials/Header.vue'
import FooterPartial from '~/layouts/partials/Footer.vue'

export default {
  components: {
    HeaderPartial,
    FooterPartial,
  }
}
</script>
