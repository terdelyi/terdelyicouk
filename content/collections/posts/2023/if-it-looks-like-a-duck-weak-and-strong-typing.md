---
title: "If it looks like a duck and quacks like a duck it must be about typing"
description: "The debate is back about type systems after a popular JavaScript framework removed TypeScript support from its codebase. Let's take a look why typing can be important, what is TypeScript and why we shouldn't dig a grave for Turbo just yet."
date: "2023-09-15"
tags: ["Programming"]
image: "/posts/if-it-looks-like-a-duck-weak-and-strong-typing.png"
---
David Heinemeier Hansson (aka DHH), creator of Ruby on Rails and founder of
37signals [recently announced](https://world.hey.com/dhh/turbo-8-is-dropping-typescript-70165c01), he's removing
TypeScript from [Turbo](https://turbo.hotwire.dev/) starting from version 8, which has made him the target of never-ending
mocking regarding typing and software reliability.

Turbo is a JavaScript framework to create progressively enhanced web applications. The way it achieves that is by
capturing every link click and form submission, changes all to AJAX requests, then extracts the `body` from the
response to replace corresponding parts of the existing page. It does that without affecting the `head` tag and requiring a full
page reload. Behind the scenes, it also manages the browser's back button functionality and stores the history of full
`body` contents in a cache. Additionally, Turbo also supports requesting and fetching updates through WebSocket, not just XHR.

Turbo is the heart of the [Hotwire framework](https://hotwired.dev/) which contains a couple other frameworks like
Stimulus and Strada to build
native-like Single Page Applications (SPA) without using any progressive frameworks like React or Vue, and all templates are
generated on server-side.

It is the similar technique what [Laravel LiveWire](https://laravel-livewire.com/) implemented, which was also heavily inspired by an Elixir module
called [Phoenix LiveView](https://hexdocs.pm/phoenix_live_view/Phoenix.LiveView.html). Other implementations are also available out there like [htmx](https://htmx.org/) or [Inertia.js](https://inertiajs.com/).
Unlike LiveWire, Hotwire doesn't require any backend framework.

## What is TypeScript?

JavaScript was originally never intended to be a programming language, certainly not for large applications. It was born
as LiveScript, a scripting language thanks to a collaboration between **Netscape** and **Sun Microsystems** to embed Java into
Netscape Navigator in 1995. That's also the reason for its later renaming, because of its syntax similarities to Java. When
the legendary browser
wars began between Netscape and **Microsoft**, the latter reverse-engineered Navigator's interpreter to create their own
variation which they named JScript. A year later, Netscape submitted JavaScript to ECMA International, an
organisation founded to standardise computer systems. The intention was to create a standard which could all
browser
vendors adopt and that finally led to the official release of the
first [ECMAScript specification](https://www.ecma-international.org/publications-and-standards/standards/ecma-262/) in
June 1997. JavaScript in
the beginning didn't really have structuring concepts you would normally
find in other programming languages. These deficiencies made very difficult to build reliable large-scale applications.

[TypeScript](https://www.typescriptlang.org/) is a programming
language [built on the top of JavaScript](https://hanselminutes.com/340/what-is-typescript-and-why-with-anders-hejlsberg) (or as they refer themselves a superset of
JavaScript) introduced in 2012 by Microsoft, mainly to resolve those concerns about large-scale development. Aside to
static typing and type checking at compile time, it also introduced classes, generics, visibility, union types, enums, modules and
namespaces which all helped to elevate JavaScript to a higher level. TypeScript code is backward compatible with
JavaScript, which can be compiled into regular JavaScript, then it can be executed in a browser's JS engine or in
server-side runtime environments like Node.js.

Here's an example of a simple TypeScript code:

```typescript
class Car implements Vehicle {
    private brand: Brand;
    private model: Model;
    private year: string;

    constructor(brand: Brand, model: Model, year: string) {
        this.brand = brand;
        this.model = model;
        this.year = year;
    }

    getTitle($withYear: boolean = false): string {
        if ($withYear) {
            return `${this.brand.name} ${this.model.name} (${this.year})`;
        }

        return `${this.brand.name} ${this.model.name}`;
    }
}
```

You might love or hate TypeScript, but you cannot really find a job where the tech stack doesn't require
TypeScript in pair with JavaScript, weather it is server or client side programming. JavaScript also evolved in the past
decade, and today it has features which were only available in TypeScript before:

- Class keyword and modules have been introduced in ECMAScript 2015 (ES6)
- You can emulate enums using object literals or constants
- JSDoc annotations can provide type hints for better tooling

## Strong or weak vs. dynamic or static

Type safety is a feature of a programming language which simply means the language only allows you to perform operations
allowed by a data type. For an example you shouldn't use a method which requires a string on a numeric value. This
permission is checked during type checking which can be static or dynamic. **Dynamically** (or weakly) typed languages
check the types during runtime, meanwhile **statically** (or strong) typed languages usually does the same through compile time. Not
all languages are need to be compiled before runtime (like PHP, Ruby or Python), those are called **interpreted languages**.

JavaScript itself is **weakly typed**, which means its type system is more permissive and allows for implicit type
conversions and late type binding. Type violations might not be caught until runtime which may lead to unexpected
runtime errors. Languages like PHP, Ruby and Perl are all weakly typed.

On the other hand, with **strong typing** every variable and expression has a fixed data type that is determined at
compile-time. Type violations are caught at compile-time, which means that the code must stick to the specified
types, and any mismatch will result in a compilation error. Examples for strongly typed languages are Java, C, Smalltalk
or Pascal. Python however is both strongly and dynamically typed language.

TypeScript is also strongly typed and because it's compatible with JavaScript we can enforce type checks on our code
during compilation. As I've already mentioned PHP is dynamically typed, and we have no options to force type checking. Although,
it offers features like *type declarations and type hinting* which can check types in runtime if we specifically ask
it to do so by adding `declare(strict_types=1)`. Static analysis tools like [Psalm](https://psalm.dev/) and [PHPStan](https://phpstan.org/) can be also very
helpful by going through on our codebase without actually running it and catch possible issues caused by typing. Those
tools can also benefit any additional details specified in PHPDocs, mainly because PHP's native typehints are still not
perfect.

We can compare the previous TypeScript example with a PHP implementation and see the code is very much similar:

```php
<?php

declare(strict_types=1);

class Car implements VehicleInterface
{
	public function __construct(
		private Brand $brand,
		private Model $model,
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

There are also other ways to work around typing. **Duck typing** is a method of type checking that looks at the structure (properties and methods) and the functional
aspect of the object rather than its name or class. If it walks like a duck and talks like a duck, we treat it like a
duck, even if it's not.

People who prefer dynamically typing generally highlight the *flexibility, reusability, faster development speed, and
[a better flow](https://martinfowler.com/bliki/DynamicTyping.html),* which were also the same arguments that DHH came
up with in his post. Others favour *catching bugs early, ensuring safety, reliability, benefiting from
additional type information in the code and better IDE support*, even if compiling is a slower process or strict typing
could affect readability.

> "You don't need static type checking if you have 100% unit test coverage."
> ([Robert C. Martin](https://blog.cleancoder.com/uncle-bob/2016/05/01/TypeWars.html))

Personally, I believe there isn't a good or bad choice here. **Like many aspects of software engineering, it's about
trade-offs.** Whenever it's possible I always enforce strict typing in PHP and use static analysis as part of
continuous integration, because it helps me recognise what the code accept and what's expected to be the outcome.
However, I cannot really appreciate enough that PHP is dynamically typed language.