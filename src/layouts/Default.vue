<template>
  <div>
    <HeaderPartial/>

    <transition name="fade" appear>
      <main id="main">
        <div class="container max-w-screen-md mx-auto py-10 text-dark">
            <slot/>
        </div>
      </main>
    </transition>

    <FooterPartial/>
  </div>
</template>

<style>
  .fade-enter-active {
    transition: opacity .5s;
  }

  .fade-enter {
    opacity: 0;
  }
</style>

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
