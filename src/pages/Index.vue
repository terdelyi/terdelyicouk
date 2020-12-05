<template>
  <transition name="fade" appear>
    <main class="py-8 lg:py-0 lg:w-screen lg:h-screen w-full lg:max-w-screen-lg lg:m-auto flex items-center justify-center text-center lg:text-left">
      <div class="lg:w-3/5 text-whiteish">
        <div class="mb-2 lg:mb-6 text-lg sm:text-xl font-light">Hello, my name is Tamas.</div>
        <div class="block lg:hidden w-1/2 sm:w-1/3 mx-auto mb-4">
          <g-image class="object-fill" title="Winner of a Kevin Smith look-a-like competition" alt="Winner of a Kevin Smith look-a-like competition" src="~/assets/images/profile.png" />
        </div>
        <div class="mb-3 sm:mb-2 whitespace-pre-line text-4xl sm:text-6xl font-bold leading-none">I'm a PHP and
          Laravel developer</div>
        <div class="mb-8 whitespace-pre-line text-xl sm:text-2xl leading-normal">with <span class="font-medium text-pink" style="text-shadow: 0px 0px 14px #FD1383;">{{ experience }} years of full-stack experience</span>
          based in Gloucestershire, England</div>
        <div class="mb-8 sm:mb-10">
          <ul class="inline-flex">
            <li>
              <a href="https://www.linkedin.com/in/terdelyi/" target="_blank" rel="noopener noreferrer" class="mx-3 lg:ml-0 hover:text-pink text-3xl" aria-label="LinkedIn">
                <font-awesome :icon="['fab', 'linkedin-in']"/>
              </a>
            </li>
            <li>
              <a href="https://github.com/terdelyi" target="_blank" rel="noopener noreferrer" class="mx-3 hover:text-pink text-3xl" aria-label="GitHub">
                <font-awesome :icon="['fab', 'github']"/>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/iamterdelyi" target="_blank" rel="noopener noreferrer" class="mx-3 hover:text-pink text-3xl" aria-label="Twitter">
                <font-awesome :icon="['fab', 'twitter']"/>
              </a>
            </li>
            <li>
              <a href="https://soundcloud.com/terdelyi" target="_blank" rel="noopener noreferrer" class="mx-3 hover:text-pink text-3xl" aria-label="Soundcloud">
                <font-awesome :icon="['fab', 'soundcloud']"/>
              </a>
            </li>
          </ul>
        </div>
        <div class="px-10 md:px-20 lg:pr-20 lg:pl-0 font-light text-dark-white text-sm sm:text-base lg:text-base leading-normal">
          <div class="text-lg mb-2 font-medium text-whiteish">Can't get enough of me?</div>
          <div class="w-full sm:w-2/3 md:w-4/5 lg:w-full mx-auto">I have a <g-link to="/about/" class="text-barry-white hover:text-pink underline">proper introduction</g-link>, you can check <g-link to="/uses/" class="text-barry-white hover:text-pink underline">what tools I'm using</g-link>. Sometimes I write about <g-link to="/notes/" class="text-barry-white underline hover:text-pink">the stuff I'm working on</g-link> and you can also <g-link to="/contact/" class="text-barry-white underline hover:text-pink">drop me a message</g-link>.</div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-2/5 p-2">
        <g-image class="object-fill" title="Winner of a Kevin Smith look-a-like competition" alt="Winner of a Kevin Smith look-a-like competition" src="~/assets/images/profile.png" />
      </div>
    </main>
  </transition>
</template>

<static-query>
  query {
    metadata {
      siteName,
      siteUrl
    }
  }
</static-query>

<script>
  export default {
    computed: {
      previewImage() {
        return `${this.$static.metadata.siteUrl}/images/default.png`;
      },
      experience() {
        return new Date().getFullYear() - 2002;
      }
    },
    metaInfo() {
      return {
        title: 'Tamas Erdelyi - PHP & Laravel developer',
        titleTemplate: '%s',
        htmlAttrs: {
          lang: 'en',
        },
        bodyAttrs: {
          class: 'bg-dark font-sans antialiased'
        },
        meta: [
          { name: 'description', content: 'I\'m a PHP and Laravel developer with 18 years of full-stack experience based in Gloucester, England' },
          { name: 'twitter:card', content: 'summary_large_image' },
          { name: 'twitter:site', content: '@iamterdelyi' },
          { name: 'twitter:title', content: 'Tamas Erdelyi - PHP & Laravel developer' },
          { name: 'twitter:description', content: 'I\'m a PHP and Laravel developer with 18 years of full-stack experience based in Gloucester, England' },
          { name: 'twitter:image', content: this.previewImage },
          { name: 'twitter:creator', content: '@iamterdelyi' },
        ]
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
