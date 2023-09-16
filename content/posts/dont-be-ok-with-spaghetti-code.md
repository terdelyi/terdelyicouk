---
title: "Don't be OK with spaghetti code"
description: "I received a job description where one sentence instantly caught my attention. That inspired me to share my thoughts about code debt and igniting a culture of code improvement."
date: "2023-08-10"
tags: ["Testing", "Clean Code"]
image: "/posts/dont-be-ok-with-spaghetti-code.png"
---
A few weeks ago, I received a job description through a recruiter and one sentence instantly caught my attention:

> Our app got built on spaghetti code, so need to be ok with that.

From the top of my head I could think of two reasons why this detail was highlighted:

1. They want to manage your expectations. Most developers hate to work with spaghetti code. The mess is usually the result of unmaintained code debt, frequent changes in features, developers coming and going and deadlines are often tight.
2. They are looking to hire people with extensive experience (or enough patience), as the readability of a spaghetti code is typically very low. That also comes with a lot of stress and creates the opportunity to introduce new bugs anytime, which in overall can easily lead to burnout.

## How to approach spaghetti code?

First of all, let's call it by its real name: **legacy code**. Obviously, anything you write today will become legacy code tomorrow, but from a codebase perspective, legacy refers to what we inherited and might not be comfortable to work with. It's usually difficult to see where the business logic begins and where it ends, which particularly affects confidence.

Therefore, we need a plan to overcome these challenges and make some preparations about how to tackle any upcoming problems. A proper plan should create enough room for improvement.

Before touching any line of code, you need to have tests first. Not necessarily at the unit level, but at least integration tests to ensure the code is doing whatever it supposed to do. If you're dealing with web applications it can be simple tests running in a headless browser, checking the output, or more programmatic tests to validate certain methods in the background which calculate or generate things are just working fine. Although tests could be hard to write when your code is tightly coupled. If you don't have any tests, certainly don't try to write all in one go, but targeting any main features should be enough.

Once you have tests, you can begin with refactoring. Instead of randomly choosing where to start, let your tests guide you. Think about the parts of your code where writing them were especially challenging - that's your first task!

<aside>
💡 <strong>Quick tip:</strong> Chances are high that your code is indented. When writing tests, start from the outside and work your way inside. When refactoring, start from the inside and work your way out.
</aside>

## The cost of refactoring

“But how can I sell this to my manager? We don't have time for this. This would take ages, and time is money!” Familiar thoughts? I was in the same shoes at some point in my career.

Understanding the problem of legacy code and recognising it as part of the development process can be extremely difficult from a business perspective. It may seem like you're not generating value and you're just rewriting things that already work. Do you and your manager have full confidence that they are working properly?

If you're logging bugs in JIRA or any ticketing software you should be able to generate a report on these issues could be resolved by rewriting the code from scratch, rather than seeking ways to patch them. What's even more frustrating is that sometimes you could spend considerably more time in reproducing bugs than actually fixing them.

Let's look at another example: have you ever felt like there's a ghost in the machine? Things happen, and you cannot explain where or why? Well, good news, you might have an argument. Inconsistency is the enemy of both developer and business. When all parties understand this, you can make a deal: **start with small steps**. For an example allocate 10% of the main development time to maintenance, then slowly make it a habit and part of your software development process. The same argument applies for writing tests. Without tests, you can only assume that your code works, but you don't have any written proof.

Sadly, this cycle is pretty much never-ending. You might think when finally everything is refactored you can sit back and relax. Of course, your application will continue to generate profit without any further modifications, and you may never need to add new features again. However, eventually, it will be old, obsolete and deprecated. As technology rapidly evolves, it's gradually losing support from the language its written in. Or that third party code (aka dependency) you added to save time will be outdated without a replacement. Then your users will start looking for quicker and more efficient alternatives, and your business will start to lose money.

The break is temporary. It is good for the businesses to slow down a little, generate some easy revenues, and build a passive income for the future. It's also beneficial for developers to catch up, summarise pain points, make plans and decide what's next in line with the business. You can start adding new features on the following day, continue maintaining your code, and forget about making notes in job ads like the one mentioned at the beginning of this post.

## Don't just warn, communicate the plan!

We can all agree that the level of transparency in that job description is remarkable, but emphasising the interest, moreover a potential decision for the change would be more important.

You want to hire a developer to **maintain your code, not just someone to deal with it**.

With all that in mind let's make a quick revision of the original sentence:

> Our app is built on spaghetti code, but we're dedicated to improving it through refactoring. To achieve these goals, we're looking for a talented and enthusiastic software developer who is not afraid of challenges.

And here you are, you have a candidate who's already empowered.