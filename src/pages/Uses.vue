<template>
  <Layout>

    <h1 class="page-title">Uses</h1>

    <div class="has-content mb-8">
      <p>Here are the stuff I'm using for work and hobby projects.</p>
      <h2>Hardware</h2>
      <ul>
        <li>
          <h4><a href="https://amzn.to/3lF833c">MacBook Pro 13-inch, 2017</a> (2.3 GHz, 16 GB, 512 SSD) for personal use</h4>
          <div>Let's be clear: I hate it. It's one of the worst laptops made by Apple. Warmer than a hot plate, the battery drained after 2
          years and the keyboard sucks, several keys are just not working anymore. And you can't say I'm a heavy user. When I bought this was the only affordable Mac on the market and I needed to
            carry on with side-projects.</div>
        </li>
        <li>
          <h4><a href="https://www.apple.com/uk/shop/buy-mac/macbook-pro/13-inch">MacBook Pro 13-inch, 2020</a> (2.7 GHz, 32 GB, 256 SSD) for work</h4>
          <div>The Touch Bar is still an unnecessary gimmick, but the new-old keyboard is finally back! The performance is more than enough what I'm using for and it gave back my faith to Apple computers. I can't wait to see what's M1 is capable for!</div>
        </li>
        <li>
          <h4><a href="https://amzn.to/3opDjVo">Dell U2715H</a> monitor</h4>
          <div>I don't believe in multiple monitor setups and multitasking, the bigger the best. Sometimes I'm dreaming of a 34" 4K monitor, but until she dies it's gonna stay on my desk.</div>
        </li>
        <li>
          <h4><a href="https://amzn.to/2VzR0ot">Apple Magic Keyboard</a> with numeric keys, Space Gray</h4>
          <div>I'm keen to jump on the mechanic keyboard train, but before I couldn't resist this beauty. Scissors mechanism as it best. I'm only sad because the lack of the background lights.</div>
        </li>
        <li>
          <h4><a href="https://amzn.to/3mFvkTX">Logitech MX Master 3</a></h4>
          <div>I only looked away once to the Magic Mouse and tried an MX Master 2, but I couldn't go back anymore. It's more ergonomic and I honestly love the endless scrolling button.</div>
        </li>
        <li>
          <h4><a href="https://amzn.to/36BuUYY">Logitech c920 HD Pro</a> webcam</h4>
          <div>Great for HD conferences, especially in these remote working times. Took me a while to buy it, but I use it everyday since.</div>
        </li>
        <li>
          <h4><a href="https://amzn.to/3mG77N9">Blue Yeti</a> microphone</h4>
          <div>It's a great microphone, but not for podcasting as it records every tiny details in the background. However I've stopped podcasting recently so replacing it is not my priority at the moment.</div>
        </li>
      </ul>
      <h2>Development</h2>
      <ul>
        <li>
          <h4><a href="https://www.jetbrains.com/phpstorm/">PHPStorm</a> by JetBrains</h4>
          <div>I had to give it multiple tries, but we're officially dating in the last two years. When I need something quicker I just launch Sublime Text 3 instead.</div>
        </li>
        <li>
          <h4><a href="https://www.araelium.com/querious">Querious 3</a> by Araelium</h4>
          <div>I was a Sequel Pro user for a long time, but after last year it left without a maintainer I thought it's time to pay for something permanent. I've tried multiple tools like MySQL Workbench and TablePlus, but I picked Querious at the end.</div>
        </li>
        <li>
          <h4><a href="https://iterm2.com/">iTerm 2</a> with <a href="https://github.com/ohmyzsh/ohmyzsh">OhMyZsh</a></h4>
          <div>I always used the official Terminal app on macOS then I gave a go for iTerm 2 and I liked it. Zsh bash is also built-in since Catalina, but OhMyZsh gives it more spice.</div>
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
        line-height: 1.8em;
      }
    }
  }
  h4 {
    color: #103b96;
    font-weight: 400;
  }
</style>
