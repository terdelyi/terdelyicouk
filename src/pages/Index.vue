<template>
  <Layout>
    <div class="lg:w-3/5 text-white">
      <div class="sm:text-xl mb-4 sm:mb-2 font-light">Hi, my name is Tamas and</div>
      <div class="text-3xl xs:text-4xl sm:text-5xl font-extrabold leading-none mb-4 sm:mb-2 whitespace-pre-line">I'm a PHP and
        Laravel developer</div>
      <div class="xs:text-xl sm:text-2xl mb-10 whitespace-pre-line leading-none sm:leading-normal font-light">with <span class="font-semibold text-pink" style="text-shadow: 0px 0px 14px #FD1383;">18 years of full-stack experience</span>
        based in Gloucester, UK</div>
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
      <div class="font-sans font-light text-white-dark text-sm px-32 lg:pr-32 lg:pl-0">
        Can't get enough of me? I have a <g-link to="/about/" class="text-white underline hover:text-pink">proper introduction</g-link>. I write about <g-link to="/notes/" class="text-white underline hover:text-pink">stuff I'm usually working on</g-link>. But you can also <g-link to="/contact/" class="text-white underline hover:text-pink">drop me a message</g-link>.
      </div>
    </div>
    <div class="hidden lg:block lg:w-2/5 p-5">
      <g-image
              class="object-fill"
              alt="Tamas"
              src="~/assets/images/profile2x.jpg"
              blur="0"
      />
    </div>
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
      bodyAttrs: {
        class: 'bg-darkest h-screen items-center flex antialiased'
      }
    },
  };
</script>
