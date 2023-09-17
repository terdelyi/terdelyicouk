---
title: "If it looks like a duck and quacks like a duck it must be about typing"
description: "The debate is back about type systems after a popular JavaScript framework removed TypeScript support from its codebase. Let's take a look why typing can be important, what is TypeScript and why we shouldn't dig a grave for Turbo just yet."
date: "2023-09-15"
tags: [ "Programming" ]
image: "/posts/if-it-looks-like-a-duck-weak-and-strong-typing.png"
---

David Heinemeier Hansson (aka DHH), creator of Ruby on Rails and founder of
37signals [recently announced](https://world.hey.com/dhh/turbo-8-is-dropping-typescript-70165c01), he's removing
TypeScript from [Turbo](https://turbo.hotwire.dev/) starting from version 8 which has made him the target of constant
mocking regarding typing and software reliability.

Turbo is a JavaScript framework to create progressively enhanced web applications. The way it achieves this is by
capturing all link clicks and form submissions, changes all to AJAX requests and then extracting the `body` from the
response to replace corresponding parts of the existing page, all without affecting the `head` tag or requiring a full
page reload. Behind the scenes, it also manages the browser's back button functionality by caching the history of full
body contents. Additionally, Turbo also supports requesting and fetching updates through WebSocket.

Turbo is the heart of the [Hotwire framework](https://hotwired.dev/) which contains a couple other frameworks like
Stimulus and Strada to build
smooth Single Page Applications without using any reactive frameworks like React or Vue, and all the templates are
generated on the server.

It is a similar technique to what [Laravel LiveWire](https://laravel-livewire.com/) implemented. Although, unlike
LiveWire, Hotwire doesn't require any
backend framework. LiveWire is heavily inspired by an Elixir module
called [Phoenix LiveView](https://hexdocs.pm/phoenix_live_view/Phoenix.LiveView.html), but there are various other
implementations like [htmx](https://htmx.org/) or [Inertia.js](https://inertiajs.com/).

## What is TypeScript?

JavaScript was originally never intended to be a programming language, certainly not for large applications. It was born
as LiveScript, a scripting language thanks to a collaboration between Netscape and Sun Microsystems to embed Java into
Netscape Navigator in 1995. That's also the reason for its later renaming, because it's syntax was similar to Java. When
the legendary browser
wars began between Netscape and Microsoft, the latter reverse-engineered Navigator's JS interpreter to create their own
implementation which they named JScript. A year later, Netscape submitted JavaScript to ECMA International, an
organisation founded to standardise computer systems. The intention was to create a standard specification that all
browser
vendors could adopt which led to the official release of the
first [ECMAScript specification](https://www.ecma-international.org/publications-and-standards/standards/ecma-262/) in
June 1997. JavaScript in
the beginning was designed to only run small scripts as it didn't really have structuring concepts you would normally
find in programming languages. That made it very difficult to build reliable large-scale applications.

[TypeScript](https://www.typescriptlang.org/) is a programming
language [built on the top of JavaScript](https://hanselminutes.com/340/what-is-typescript-and-why-with-anders-hejlsberg) (
or as they sometimes mention a superset of
JavaScript) introduced in 2012 by Microsoft, mainly to add static typing to JS through type annotations and enable type
checking at compile time. It also introduced classes, generics, union types, enums, modules and namespaces which
elevated JS applications to a different level. TypeScript is backward compatible with JavaScript, that can be compiled
into regular JavaScript, which then can be executed in any browser's JS engine or server-side runtime environments
like Node.js.

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

You might love or hate TypeScript, but it's a fact that you cannot really find a job nowadays where the tech stack
doesn't require TypeScript in pair with JavaScript weather it's server or client side programming. It's a de facto
standard. However, JavaScript evolved a lot since 2012, nowadays 

## Strong or weak vs. dynamic or static

Type safety is a feature of a programming language which simply means the language only allows you to perform operations
allowed by a data type. For an example you shouldn't use a method which requires a string on a numeric value. This
permission is checked during type checking which can be static and dynamic. Dynamically (or weakly) typed languages
check the types during runtime, meanwhile statically (or strong) typed does the same through usually compile time. Not
all languages are need to be compiled before runtime (like PHP, Ruby or Python), those are called interpreted languages.

JavaScript itself is **weakly typed**, which means its type system is more permissive and allows for implicit type
conversions and late type binding. Type violations might not be caught until runtime which may lead to unexpected
runtime errors. Languages like PHP, Ruby and Perl are all weakly typed.

On the other hand, with **strong typing** every variable and expression has a fixed data type that is determined at
compile-time. Type violations are caught at compile-time, which means that the code must stick to the specified
types, and any mismatch will result in a compilation error. Examples for strongly typed languages are Java, C, Smalltalk
or Pascal. Python however is both strongly and dynamically typed language.

TypeScript is also strongly typed and because it's compatible with JavaScript we can enforce type checks on our code
during compilation. PHP on the other hand is dynamically typed, so we have no options to force type checking. Although,
it offers features like *type declarations and type hinting* which can check types in runtime when we specifically ask
for it to do so by adding `declare(strict_types=1)`. Static analysers like Psalm and PHPStan can be also very
helpful by going through on our codebase without actually running it and catch possible issues caused by typing. Those
tools can also benefit any additional details specified in PHPDocs, mainly because PHP's native typehints are still not
perfect.

If you compare the previous TypeScript example with a PHP implementation the code are very much similar:

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

**Duck typing** is a method of type checking that looks at the structure (properties and methods) and the functional
aspect of the object rather than its name or class. If it walks like a duck and talks like a duck, we treat it like a
duck, even if it's not. It is often mentioned as an alternative for strict typing by making our code more flexible and
reusable.

People who prefer dynamically typing generally highlight the *flexibility, faster development, and
[a better flow](https://martinfowler.com/bliki/DynamicTyping.html),* which were also the same arguments that DHH came
up with in his post. Others favour *catching bugs early, ensuring safety, reliability, as well benefiting from
additional type information in the code and better IDE support*, even if compiling is a slower process or strict typing
affect readability.

> "You don't need static type checking if you have 100% unit test coverage"
> ([Robert C. Martin](https://blog.cleancoder.com/uncle-bob/2016/05/01/TypeWars.html))

Personally, I believe there isn't a good or bad choice here. **Like many aspects of software engineering, it's about
trade-offs.** Whenever it's possible I always enforce strict typing in PHP and use static analysis as part of
continuous integration, because it helps me recognise what the code accept and what's expected to be the outcome.
However, I also appreciate that PHP is dynamically typed language.