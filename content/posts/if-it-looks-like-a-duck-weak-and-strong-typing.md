---
title: "If it looks like a duck and quacks like a duck it must be about typing"
description: "The debate is back about type systems after a popular JavaScript framework removed TypeScript support from its codebase. Let's take a look why typing can be important, what is TypeScript and why we shouldn't dig a grave for Turbo just yet."
date: "2023-09-15"
tags: ["Programming"]
image: "/posts/if-it-looks-like-a-duck-weak-and-strong-typing.png"
---

David Heinemeier Hansson (aka DHH), creator of Ruby on Rails and founder of 37signals [recently announced](https://world.hey.com/dhh/turbo-8-is-dropping-typescript-70165c01) he's removing
TypeScript from Turbo starting from version 8. Turbo is a JavaScript framework to create progressively enhanced web
applications without actually writing JS–which isn't really true as you are still using a JS based API.

The way Turbo achieves this is by capturing all link clicks and form submissions, changes all to AJAX requests and then
extracting the body from the response to replace corresponding parts of the existing page, all without affecting the
head tag or requiring a full page reload. Behind the scenes, it also manages the browser's back button functionality by
caching the history of full body contents.Additionally, Turbo also supports requesting and fetching updates through
WebSocket.

Turbo is the heart of the [Hotwire framework](https://hotwired.dev/) which contains a couple other frameworks like Stimulus and Strada to build
smooth Single Page Applications without using any reactive frameworks like React or Vue, and all the templates are
generated on the server.

It is a similar technique to what [Laravel LiveWire](https://laravel-livewire.com/) implemented. Although, unlike LiveWire, Hotwire doesn't require any
backend framework. LiveWire is heavily inspired by an Elixir module called [Phoenix LiveView](https://hexdocs.pm/phoenix_live_view/Phoenix.LiveView.html), but there are various other
implementations like [htmx](https://htmx.org/) or [Inertia.js](https://inertiajs.com/).

## What is TypeScript?

JavaScript was originally never intended to be a programming language, certainly not for large applications. It was born
as LiveScript, a scripting language thanks to a collaboration between Netscape and Sun Microsystems to embed Java into
Netscape Navigator in 1995. That's also the reason for its later renaming, because it's syntax was similar to Java. When the legendary browser
wars began between Netscape and Microsoft, the latter reverse-engineered Navigator's JS interpreter to create their own
implementation which they named JScript. A year later, Netscape submitted JavaScript to ECMA International, an
organisation founded to standardise computer systems. The intention was to create a standard specification that all browser
vendors could adopt which led to the official release of the first [ECMAScript specification](https://www.ecma-international.org/publications-and-standards/standards/ecma-262/) in June 1997. JavaScript in
the beginning was designed to only run small scripts as it didn't really have structuring concepts you would normally
find in programming languages. That made it very difficult to build reliable large-scale applications.

[TypeScript](https://www.typescriptlang.org/) is a programming language [built on the top of JavaScript](https://hanselminutes.com/340/what-is-typescript-and-why-with-anders-hejlsberg) (or as they sometimes mention a superset of
JavaScript) introduced in 2012 by Microsoft, mainly to add static typing to JS through type annotations and enable type
checking at compile time. It also introduced classes, generics, union types, enums, modules and namespaces which
elevated JS applications to a different level. TypeScript is backward compatible with JavaScript, that can be compiled
into regular JavaScript, which then can be executed in any browser's JS engine or server-side runtime environments
like Node.js.

You might love or hate TypeScript, but it's a fact that you cannot really find a job ad nowadays where the tech stack
doesn't mention TypeScript in pair with server or client side JavaScript programming.

## Weak typing vs. strong typing

JavaScript itself is **weakly typed**, which means its type system is more permissive and allows for implicit type
conversions and late type binding. Type violations might not be caught until runtime which may lead to unexpected
runtime errors. Languages like PHP, Ruby and Perl are all weakly typed.

On the other hand, with **strong typing** every variable and expression has a fixed data type that is determined at
compile-time. Type violations are caught at compile-time, which means that the code must stick strictly to the specified
types, and any mismatch will result in a compilation error. Examples for strongly typed languages are Java, C, Smalltalk or Pascal. Python however is both strongly and dynamically typed language.

Type checking performed at compile-time called **static type checking**. Even weakly (loosely) typed languages can
benefit from static typing by using particular tools. For JavaScript this can be achieved using TypeScript with JSDoc
type annotations. If you're working with PHP, you can implement the similar with *built-in type declarations, type hinting
and PHPDoc annotations with using static analysis tools* like PHPStan or Psalm which check your code without actually
running it.

```php
<?php

declare(strict_types=1);

class Car
{
	public function __construct(
		private BrandInterface $brand,
		private ModelInterface $model,
		private string $year,
	){
	}
	
	public function getTitle(bool $withYear = false): string
	{
		if ($withYear) {
		   return "{$this->brand->getName()} {$this->model->getName()} ({$this->year})";	
		}
		
		return "{$this->brand->getName()} {$this->model->getName()}";
	}
}

```

People who prefer weak typing usually highlight the *flexibility, faster development, and [a better flow](https://martinfowler.com/bliki/DynamicTyping.html),* which was also
one of the arguments that DHH came up with in his post. Others favour *catching bugs early, ensuring safety, reliability,
as well benefiting from additional type information in the code and better IDE support*.

Personally, I don't believe there's a good or bad choice here. **Like many aspects of software engineering, it's about
trade-offs.** Since I'm aware of the feature I enforce strict typing in PHP, specify my types and type hinting methods and
functions, alongside using static analysis as part of continuous integration. However, I also appreciate that strict
typing is not a built-in requirement of the language.

> "You don't need static type checking if you have 100% unit test
> coverage" ([Robert C. Martin](https://blog.cleancoder.com/uncle-bob/2016/05/01/TypeWars.html))
