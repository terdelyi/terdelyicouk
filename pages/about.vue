<template>
  <article class="max-w-screen-md">
    <h1>About</h1>
    <div class="has-content mb-8">
      <p>The first time I met a real computer was when I was around ten, it was our neighbour's Commodore 64.
        I was so excited that my dad had to buy one for my brother and me. When my neighbor upgraded to a
        Pentium PC, we got that too. Jumping a few years ahead, my parents enrolled me in a course to learn
        about Windows 3.1 and coding in Basic. I finished it before I turned 14; the invigilator barely gave
        me the certificate because I wasn't 'old enough' yet to have a personal ID which was a requirement
        in Hungary to get certified. I'm not saying I was a kid genius, but my interest in computers was very
        obvious from an early age. I was already deeply in love with movies, but computers seemed to be
        my new passion.</p>
      <p>
        I built my first PC mainly to <NuxtLink src="https://soundcloud.com/terdelyi/love-declaration?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing">write songs with Fast Tracker 2</NuxtLink>,
        but it also helped me to manage my massive VHS catalog when I was running a possibly illegal renting
        business in small when I was 12 years old. Then I become a big fan of diskmags. I ripped apart their
        codebase to see how they worked. I wrote some Basic programs by that time, but it was just a hobby. Over
        the years, I learned about Turbo Pascal, Perl, and became very familiar with Corel Draw products and
        Paint Shop Pro.
      </p>
      <p>
        Then came the internet. I started coding websites for Netscape Navigator through a dial-up modem
        with FrontPage Express, using the earliest versions of HTML and CSS. In my twenties, <NuxtLink src="https://moziplussz.hu">I founded a movie website</NuxtLink>
        which I still own till today, and began to deliver real projects for real companies.
      </p>
      <div class="mb-6 md:-mx-16">
        <img src="/images/setup.jpg" class="object-cover mb-2 rounded-md shadow-md" alt="Various desktop setups between 2009 and 2020" />
        <div class="text-sm text-blue-300 dark:text-blue-200 text-center italic">Various desktop setups between 2009 and 2020</div>
      </div>
      <p>In 2009, I needed something more permanent. Years later, I grew tired of agency projects, so I quit
        to become a freelancer and work for my own clients. After two challenging years, rent and bills
        eventually won, and I lost my independence. Since 2013, I have been an employee. In the last decade,
        I have worked for small agencies and even large corporate machines.</p>
      <p>
        I have been building websites and web applications for {{ experienceInYears }} years now. I started as a web designer,
        but found myself more efficient in site-building, and eventually trained myself to become a proficient
        PHP developer. I find myself more satisfied with backend programming, but Tailwind and
        Vue drew my attention back to frontend for a bit. I met JAMstack, tried myself in mobile development
        and gained some necessary devops knowledge. My curiosity knows no boundaries.
      </p>
      <p>I was born and raised in Budapest, Hungary, but I moved to England in 2017 and restarted
        climbing the career ladder from the bottom. In just five years, I have achieved all the goals
        I have ever imagined in my career. Currently, I'm a Software Engineer at property lending and investing platform in London.</p>
      <p>Although I've worked mainly in web development in the past two decades, I consider myself an open-minded
        software engineer, eager to learn and explore everything that advances my experience and keeps my
        brain engaged. I've been working from home fully since COVID-19, but I'm always happy to pop in an office,
        jump in a meetup or spend the day in a co-working space.</p>
      <p>In my free time, I'm just a geek dad in his early 40s who also collects records and love to spend
        time in the nature. I'm somewhere between an introverted and extroverted person, but I'm always ready
        to travel and immerse new cultures.</p>
    </div>
  </article>
</template>

<script setup>
  const experienceInYears = new Date().getFullYear() - 2002

  defineOgImage({
    component: 'OgImage',
  })
</script>