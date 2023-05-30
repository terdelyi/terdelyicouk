<template>
  <article class="max-w-screen-md">
    <h1>About</h1>
    <div class="has-content mb-8">
      <p>The first time I met a real computer was when I was around ten. It was one of our neighbour's Commodore 64. I was so excited that my dad had to buy one for my brother and me. When my neighbor upgraded to a Pentium PC, we got that too. Jumping a few years ahead, my parents enrolled me in a course to learn about Windows 3.1 and coding in Basic. I finished it before I turned 14; the invigilator barely gave me the certificate because I wasn't 'old enough' yet to have a personal ID. I was already deeply in love with movies, but computers seemed to be my new passion.</p>
      <p>I built my first PC mainly to write songs with Fast Tracker 2, but it also helped me manage my massive VHS catalog when I was running a completely illegal renting business at 12 years old. Then my experiments started. I duplicated and ripped apart the codebase of various disk magazines to see how they worked. I was desperate to create something. At one point, I built a kick-ass PowerPoint presentation, compiled it to an .exe, and sold it to a younger kid who had way less knowledge about this. Over the years, I learned Turbo Pascal, Perl, and became familiar with various Corel products.</p>
      <p>Then came the internet. I started coding websites for Netscape Navigator through a dial-up modem with FrontPage Express and Paint Shop Pro, using the earliest versions of HTML and CSS. In my twenties, I founded a movie website and began delivering real projects for actual companies.</p>
      <div class="mb-6 md:-mx-16">
        <img src="/images/setup.jpg" class="object-cover mb-2 rounded-md shadow-md" />
        <div class="text-sm text-blue-300 dark:text-blue-200 text-center italic">Various desktop setups between 2009 and 2020</div>
      </div>
      <p>In 2009, I needed something more permanent. Years later, I grew tired of agency projects, so I quit to become a freelancer and work for my own clients. After two challenging years, rent and bills eventually won, and I lost my independence. Since 2013, I have been an employee. In the last decade, I have worked for small agencies and even large corporate machines.</p>
      <p>I have been building websites and web applications for {{ experienceInYears }} years now. I started as a web designer, but found myself more efficient in site-building, and eventually trained myself to become a proficient PHP developer. Just when I thought backend development was more than enough for me, Tailwind and Vue drew me back to frontend development. I fell in love with JAMstack, explored mobile development and also gained experience to be able to manage servers in the cloud. My curiosity knows no bounds.</p>
      <p>I was born in Budapest, Hungary, but in 2017, I moved to the UK and started climbing up the career ladder again from the bottom. In just 5 years, I have achieved all the goals I have ever imagined. Currently, I primarily focus on backend programming with PHP, but I don't afraid of any languages any more. Learning about design patterns and paradigms taught me to value simplicity over complexity. I consider myself an open-minded software engineer, eager to learn and explore everything that advances my experience and keeps my brain engaged. In my free time, I'm just a geek dad in his early 40s.</p>
    </div>
  </article>
</template>

<script setup>
  const experienceInYears = new Date().getFullYear() - 2002

  defineOgImageStatic({
    component: 'OgImage',
  })
</script>