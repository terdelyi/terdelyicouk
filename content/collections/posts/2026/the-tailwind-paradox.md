---
title: "The Tailwind Paradox"
description: "Why one of the most popular open-source tools of the 2020s is still struggling to grow and sustain a business, how AI is changing developer products, and the challenges of building a company around software that’s essentially free."
date: "2026-01-13"
tags: ["Software Development", "Open Source", "Business"]
image: "/posts/2026/tailwind-paradox.png"
---
This term could easily go into tech history books after one of the most successful open source web dev packages is still struggling to find a reliable maintenance model after 6 years. Maybe building a tech company around a CSS utility framework was too big a chunk? Should open source projects necessarily grow into teams or billion dollar businesses? I'm not trying to investigate the reasons it failed or might yet succeed. At least from what we see today, this is certainly not the beginning of the end, but rather fine-tuning of the business model. I'm also not trying to recommend the right direction for the product, but I thought it would be the right time to take a look at a couple of angles: what open source means nowadays, and how hard it is to build a product when your main offering is basically free.

## The bad news

In January 2026, two pieces of news started to cause some panic in my bubble. First, a Laracasts employee posted about his layoff, then the next day a Tailwind Labs engineer. Which was later also confirmed by one of the key members of the framework, Adam Wathan in a comment under a Pull Request, and later in more detail in his podcast. Because it's the beginning of the year, a lot of business owners look back at year and run forecasts for the following to set the direction.

They both mentioned AI as a dominant force of this change, but not that because AI models will replace software engineers. In Laracasts' case, since AI tools became popular, people have started to watch fewer videos about how to build things, as they can now an AI agent to do so in plain English. For Tailwind, the causes are similar: models can write components quickly, and because they're trained on documentations, their visitor numbers have [declined by 40%](https://github.com/tailwindlabs/tailwindcss.com/pull/2388#issuecomment-3717222957). A very similar drop to [what Stack Overflow has to suffer nowadays](https://blog.pragmaticengineer.com/stack-overflow-is-almost-dead/). Just to clarify the numbers in both layoffs: we're talking about 3 of 4 engineers at Tailwind and [only one staff member at Laracasts](https://x.com/simonswiss/status/2008519159211311430), which means we're certainly not talking about the scale of what Microsoft or Amazon done recently.

Last year GitHub reported almost [395 million open source repositories](https://github.blog/news-insights/octoverse/octoverse-a-new-developer-joins-github-every-second-as-ai-leads-typescript-to-1/), with tens of millions of new projects created annually, while the [survival rate is less than 50%](https://ademait.es/papers/msr22-ademait-survival.pdf). Many projects are short-lived or abandoned early, only 15–20% show ongoing maintenance. A small fraction are financially sponsored and thousands receive [GitHub Sponsors support](https://github.blog/news-insights/company-news/announcing-github-secure-open-source-fund), but that's a tiny share relative to the total number of projects.

Maintaining open source projects can be exhausting. The internet is full of annoyed people, they're always demanding, suggesting and get pissed when things don't go in the same direction as they want to see. You go to sleep with one bug and you wake up to 10 more. Or just a bunch of PRs as part of Hacktoberfest where people trying to get free merch by changing your README file. Or security issues where a "good samaritan" messages you privately, but threatening you paying some ransom unless they go public with a backdoor. In more positive cases you might just switch off half of the internet. I'm seriously not surprised so many people give up, because it's exhausting both timewise and mentally.

## The good news

Tailwind CSS is a very popular project. However, as Adam posted on GitHub, financially that's still not enough to build a successful product company around it. A close example where this was possible is Laravel, which was already in good shape with Envoyer and Forge before [they raised $57 million Series A](https://laravel-news.com/laravel-raises-57-million-series-a).

His frustration is absolutely valid. He raised his concerns about the future in several places over the year, with no real direction in sight.  Although since he posted his podcast episode on 7th January, they have already grown to 29 partners, 4 ambassadors and 26+ supporters, which totals in at least $168k MRR as today, over $1 million annually. It sounds amazing, but I'd rather wait and check these numbers again a year later to see how many of these individuals and companies were just doing "karma farming".

## What's next?

### Giving up

If things don't improve permanently they might abandon the project and make millions of developers instantly upset and disappointed around the world. I can't accept that this is the outcome Adam is personally looking for, however he's frustrated sometimes. They could also leave the repo unmaintained, allowing people to fork it, and slowly new branches would emerge from the ashes of Tailwind, but that would cause awkward fragmentation problems. At the moment, Tailwind feels like a common good, which is great for open source, but also sad when an idea that might be the biggest achievement of your life doesn't generate enough to chase even bigger dreams. A lot of entrepreneurs, writers, and creators are stuck at this stage, and I can imagine how frustrating it can be.

### More funding

My second thought was that people would realise the situation is serious and that a lot of donations would start coming in over the next few weeks (and I was right!). Maybe more big companies will also realise this and allocate a percentage of their profit to fund the development for the coming years. But let's be real: this is only a temporary solution.

### New products
They could introduce a new marketplace for Tailwind plugins and components, similar to what ShadCDN is doing, but the direction the software industry already suggest we might not need components in the future, since AI models can come up with their own in minutes. They're trained on documentation, blog posts and articles about Tailwind which would certainly raise proprietary questions if we were talking about paid product. But being open source puts this area of laws into a "fair use" grey zone. While opinionated frameworks and plugins are useful and their existence results in higher quality LLM generated code (since they're giving predefined boundaries to the context) I don't believe that theme marketplaces have a long future.

A natural move could be to introduce Tailwind-related paid products or official plugins, just like WordPress did with Automattic and its paid plugins, or as I've already mentioned, Laravel with Forge, Cloud, Nightwatch, and a bunch of other services. An official Tailwind-built AI service or model that can generate intuitive and modern web designs or themes using Tailwind components would be an instant hit and could massively transform the theme market. Don't forget: they also have both authors of the Refactoring UI book in the team. Although after the layoff, it won't be easy to build these products with a smaller team.

### Acquisition
My last theory is that a big tech company or startup (someone like Vercel) suddenly appears and gives Adam and the co-owners a bag of money, takes over the burden of maintenance, maybe full ownership through and acquisition, and they either stay on the board or fully exit. It might sound like a failure, but I actually think that would be a very beneficial outcome for Adam and his mental health. I don't think he should be ashamed for even a minute, considering the accomplishments he's achieved over the past decade (not just for Tailwind), and I'm sure that if he were able to drop this ballast and start from scratch, he would eventually come up with a fresh new idea.

## Final thoughts

Whatever happens, I think the main conclusion here is that if you're a developer working whether in a team or alone, and your work or products are heavily based on free, open source packages, frameworks or tools, don't forget to support them when you are able to afford it. It doesn't necessarily have to be money. It could be a PR for a bug fix or improving their documentation, but giving back something should be an obvious move since the first open source package appeared.

This is one of the main reasons that starting this year, [I'm officially backing the PHP Foundation as an individual](https://opencollective.com/phpfoundation).

