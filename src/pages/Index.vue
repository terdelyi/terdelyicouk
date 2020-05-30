<template>
  <Layout>
    <div class="lg:w-3/5 text-barry-white">
      <div class="mb-4 sm:mb-2 sm:text-xl font-light">Hi, my name is Tamas and</div>
      <div class="mb-4 sm:mb-2 whitespace-pre-line text-3xl xs:text-4xl sm:text-6xl font-extrabold leading-none ">I'm a PHP and
        Laravel developer</div>
      <div class="mb-8 whitespace-pre-line xs:text-xl sm:text-2xl leading-none sm:leading-normal">with <span class="font-semibold text-pink text-3xl" style="text-shadow: 0px 0px 14px #FD1383;">18 years of full-stack experience</span>
      based in Gloucester, England</div>
      <div class="mb-16">
        <ul class="inline-flex">
          <li>
            <a href="https://www.linkedin.com/in/terdelyi/" target="_blank" rel="noopener noreferrer" class="mx-3 lg:ml-0 hover:text-pink text-2xl sm:text-3xl" aria-label="LinkedIn">
              <font-awesome :icon="['fab', 'linkedin-in']"/>
            </a>
          </li>
          <li>
            <a href="https://github.com/terdelyi" target="_blank" rel="noopener noreferrer" class="mx-3 hover:text-pink text-2xl sm:text-3xl" aria-label="GitHub">
              <font-awesome :icon="['fab', 'github']"/>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/iamterdelyi" target="_blank" rel="noopener noreferrer" class="mx-3 hover:text-pink text-2xl sm:text-3xl" aria-label="Twitter">
              <font-awesome :icon="['fab', 'twitter']"/>
            </a>
          </li>
          <li>
            <a href="https://soundcloud.com/terdelyi" target="_blank" rel="noopener noreferrer" class="mx-3 hover:text-pink text-2xl sm:text-3xl" aria-label="Soundcloud">
              <font-awesome :icon="['fab', 'soundcloud']"/>
            </a>
          </li>
        </ul>
      </div>
      <div class="px-32 lg:pr-32 lg:pl-0 font-light text-dark-white text-sm">
        Can't get enough of me? I have a <g-link to="/about/" class="text-barry-white hover:text-pink underline">proper introduction</g-link>. I write about <g-link to="/notes/" class="text-barry-white underline hover:text-pink">stuff I'm usually working on</g-link>. But you can also <g-link to="/contact/" class="text-barry-white underline hover:text-pink">drop me a message</g-link>.
      </div>
    </div>
    <transition name="fade" appear>
      <div class="hidden lg:block lg:w-2/5 p-2">
        <g-image class="object-fill" alt="Winner of a Kevin Smith look-a-like competition" src="~/assets/images/profile2x.jpg" />
      </div>
    </transition>
  </Layout>
</template>

<script>
  import Layout from '~/layouts/Intro.vue'

  export default {
    components: {
      Layout
    },
    metaInfo: {
      title: 'Tamas Erdelyi - PHP & Laravel developer',
      titleTemplate: '%s',
      bodyAttrs: {
        class: 'h-screen items-center flex bg-dark'
      }
    },
  };
</script>

<style>
  .fade-enter-active {
    transition: opacity 2s;
  }

  .fade-enter {
    opacity: 0;
  }
</style>
