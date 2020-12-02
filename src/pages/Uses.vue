<template>
  <Layout>

    <h1 class="page-title">Uses</h1>

    <div class="has-content mb-8">
      <p>Here are the stuff I'm using for work and hobby projects.</p>
      <h2>Hardware</h2>
      <ul>
        <li>
          <h4>MacBook Pro 13-inch, 2017 (2.3 GHz, 16 GB, 512 SSD) for personal use</h4>
          <div>Let's be clear: I hate it. It's one of the worst laptops made by Apple. Warmer than a hot plate, the battery drained after 2
          years and the keyboard sucks, several keys are just not working anymore. And you can't say I'm a heavy user. When I bought this was the only affordable Mac on the market and I needed to
            carry on with side-projects.</div>
        </li>
        <li>
          <h4>MacBook Pro 13-inch, 2020 (2.7 GHz, 32 GB, 256 SSD) for work</h4>
          <div>The Touch Bar is still an unnecessary gimmick, but the new-old keyboard is finally back! The performance is more than enough what I'm using for and I couldn't freeze it yet.</div>
        </li>
        <li>
          <h4>Dell U2715H monitor</h4>
          <div>I don't believe in multiple monitor setups and multitasking, the bigger the best. Sometimes I'm dreaming of a 34" 4K monitor, but until she dies it's gonna stay on my desk.</div>
        </li>
        <li>
          <h4>Apple Magic Keyboard with numeric keys</h4>
          <div>I'm keen to jump on the mechanic keyboard train, but before I couldn't resist this beauty. Scissors mechanism as it best. I'm only sad because the lack of the background lights.</div>
        </li>
        <li>
          <h4>Logitech MX Master 3</h4>
          <div>I had only looked away once from the Magic Keyboard with an MX Master 2, but I couldn't go back anymore. It's more ergonomic and I purely love the endless scroll button.</div>
        </li>
        <li>
          <h4>Logitech c920 HD Pro webcam</h4>
          <div>Great for HD conferences, especially in these remote working times. Took me a while to buy it, but I use it everyday since.</div>
        </li>
        <li>
          <h4>Blue Yeti microphone</h4>
          <div>It's a great microphone, but not for podcasting as it records every tiny details in the background. However I've stopped podcasting recently so replacing it is not my priority anymore.</div>
        </li>
      </ul>
    </div>

  </Layout>
</template>

<script>
export default {
  computed: {
    experience() {
      return new Date().getFullYear() - 2002;
    }
  },
  metaInfo: {
    title: "About"
  }
};
</script>

<style lang="scss" scoped>
  ul {
    li {
      div {
        font-size: 0.9em;
        line-height: 1.8em;
      }
    }
  }
  h4 {
    color: #103b96;
    font-weight: 400;
  }
</style>
