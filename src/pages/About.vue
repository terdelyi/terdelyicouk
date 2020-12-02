<template>
  <Layout>

    <h1 class="page-title">About</h1>

    <div class="has-content mb-8">
      <p>The first time I met with a real computer I was around ten. It was one of our neighbour's Commodore 64. I was so excited that my dad had to buy one for my brother and I. When my neighbour upgraded to a Pentium PC, we got that, too. Jumping a few years ahead, my parents enrolled me in a course to learn about Windows 3.1 and coding in Basic. I finished it before I turned to 14, the invigilator barely gave me the certificate because I wasn't "old enough" yet to have a personal ID. I was already in big love with movies, but computers seemed to be my new passion.</p>
      <p>I bought my first PC and mainly used to write songs with Fast Tracker 2, but it also helped me to manage my massive VHS catalogue when I was running a completely illegal renting business as 12 years old. Then my experiments were started. I duplicated and ripped apart the codebase of various disk magazines to see how they work. I was desperate to create something. At one point, I built a kick-ass PowerPoint presentation, compiled to an .exe and sold it to a younger kid who had way less knowledge about this. During the years I was learning Turbo Pascal, Perl, got myself familiar with various Corel products.</p>
      <p>Then came the internet. I started to code websites for Netscape Navigator through a dial-up modem with FrontPage Express and Paint Shop Pro, built on the very first versions of HTML and CSS. In my twenties, I founded a movie website and began to ship real projects for real companies.</p>
      <div class="mt-6 mb-4 lg:-mx-16">
        <g-image src="~/assets/images/setup.jpg" class="object-cover mb-2"></g-image>
        <div class="text-sm text-almost-blue text-center italic">Various desktop setups between 2009 and 2020</div>
      </div>
      <p>2009 came, I needed something permanent. Years later, I was fed up with agency projects, so I quit to be a freelancer and work for own clients. After two struggling years rent and bills finally won, independence lost and I've been an employee since 2013. In the last decade I worked for small agencies and even big corporate machines.</p>
      <p>I've been building websites for {{ experience }} years now. I started as a web designer, found myself more productive in site-building and at the end I've trained myself into a reckless PHP developer. When I thought backend is perfectly enough me, Tailwind CSS and VueJS directed me to the frontend again, felt in love of JAMstack, tried myself in mobile development and enjoy running servers. My curiosity doesn't know limits.</p>
      <p>Today I think myself as an open-minded software engineer, who's eager to learn and try everything which moves his experience forward and get his brain busy.</p>
      <p>I was born in Budapest, Hungary, but moved to the UK in 2017 to try one's luck. So far so good.</p>
      <p>In my free time, I'm just a geek dad in his late 30s.</p>
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
