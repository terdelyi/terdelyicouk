<template>
  <article class="max-w-screen-md">
    <h1>About</h1>
    <div class="has-content mb-8">
      <p>The first time I met a real computer was when I was around ten. It was one of our neighbour's Commodore 64. I was so excited that my dad had to buy one for my brother and me. When my neighbor upgraded to a Pentium PC, we got that too. Jumping a few years ahead, my parents enrolled me in a course to learn about Windows 3.1 and coding in Basic. I finished it before I turned 14; the invigilator barely gave me the certificate because I wasn't 'old enough' yet to have a personal ID which was a requirement in Hungary to get certified. I was already deeply in love with movies, but computers seemed to be my new passion.</p>
      <p>I built my first PC mainly to <NuxtLink src="https://soundcloud.com/terdelyi/love-declaration?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing">write songs with Fast Tracker 2</NuxtLink>, but it also helped me manage my massive VHS catalog when I was running a completely illegal renting business at 12 years old. Then my experiments started. I duplicated and ripped apart the codebase of various disk magazines to see how they worked. I was desperate to create something. At one point, I built a kick-ass PowerPoint presentation, compiled it to an exe file, and sold it to a younger kid who had way less knowledge about this. I might be a natural born entrepreneur. Over the years, I learned Turbo Pascal, Perl, and became familiar with various Corel products.</p>
      <p>Then came the internet. I started coding websites for Netscape Navigator through a dial-up modem with FrontPage Express and Paint Shop Pro, using the earliest versions of HTML and CSS. In my twenties, <NuxtLink src="https://moziplussz.hu">I founded a movie website</NuxtLink> which I still own and began delivering real projects for real companies.</p>
      <div class="mb-6 md:-mx-16">
        <img src="/images/setup.jpg" class="object-cover mb-2 rounded-md shadow-md" />
        <div class="text-sm text-blue-300 dark:text-blue-200 text-center italic">Various desktop setups between 2009 and 2020</div>
      </div>
      <p>In 2009, I needed something more permanent. Years later, I grew tired of agency projects, so I quit to become a freelancer and work for my own clients. After two challenging years, rent and bills eventually won, and I lost my independence. Since 2013, I have been an employee. In the last decade, I have worked for small agencies and even large corporate machines.</p>
      <p>I have been building websites and web applications for {{ experienceInYears }} years now. I started as a web designer, but found myself more efficient in site-building, and eventually trained myself to become a proficient PHP developer. Just when I thought backend programming was more than enough for me, Tailwind and Vue drew my attention back to frontend development for a bit. I fell in love with JAMstack, did some experiements in mobile development and gained necessary devops knowledge. My curiosity knows no bounds.</p>
      <p>I was born and raised in Budapest, Hungary, but I moved to England in 2017 and restarted climbing the career ladder from the bottom. In just five years, I have achieved all the goals I have ever imagined in my career, and I also was given the opportunity to try myself as a team lead for a year. Currently, I mainly focus on backend programming with PHP at <NuxtLink href="https://lendinvest.com">LendInvest</NuxtLink>, but I never afraid to learn different languages or frameworks. Reading about design patterns and programming paradigms was an eye-opener. I value simplicity over complexity, DRY and SOLID principles. I work from home fully since COVID-19, but I'm always happy to pop in an office, a meetup or spend the day in a co-working space.</p>
      <p>Although I worked mainly in web development in the past two decades, I consider myself an open-minded software engineer, eager to learn and explore everything that advances my experience and keeps my brain engaged. In my free time, I'm just a geek dad in his early 40s who also collects records and love to spend time in the nature. I'm somewhere between an introvert and extrovert person, but always ready for traveling and meeting new people.</p>
    </div>
  </article>
</template>

<script setup>
  const experienceInYears = new Date().getFullYear() - 2002

  defineOgImageStatic({
    component: 'OgImage',
  })
</script>