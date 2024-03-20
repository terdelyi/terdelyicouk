<?php
$experienceInYears = date('Y')-2001;
$image = $page->image ?? 'images/generic.png';
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <title>Tamas Erdelyi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I'm is a Software Developer with <?php echo $experienceInYears; ?> years of full-stack experience based in Gloucestershire, United Kingdom">
    <meta property="og:image" content="<?php echo asset($image); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo asset('favicon.ico'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/site.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-grey-300 dark:bg-grey-700 font-sans text-blue-400 dark:text-grey-500 antialiased">
    <div class="flex flex-col h-screen justify-between">
        <header class="bg-blue-400 relative dark:bg-grey-800 text-grey-200 dark:text-grey-400">
            <div class="w-full md:max-w-screen-md flex items-center justify-between mx-auto">
                <div class="flex pl-4 md:pl-0 items-center">
                    <div>
                        <h1 class="sm:text-xl">
                            <a href="/" class="hover:underline font-bold tracking-tight">Tamas Erdelyi</a>
                        </h1>
                    </div>
                    <div class="w-24 sm:w-32 -ml-4">
                        <img alt="Not Kevin Smith" src="<?php echo asset('images/header-profile.png'); ?>" />
                    </div>
                </div>
                <nav class="hidden sm:block md:pr-12">
                    <ul class="px-4 md:px-0 text-sm md:text-base font-normal tracking-tight inline-flex">
                        <li><a href="/about/" class="px-4 sm:px-3 hover:underline<?php if ($page->is('/about/')) :?> font-bold<?php endif; ?>">About</a></li>
                        <li><a href="/posts/" class="px-4 sm:px-3 hover:underline<?php if ($page->is('/posts/')) :?> font-bold<?php endif; ?>">Posts</a></li>
                        <li><a href="/uses/" class="px-4 sm:px-3 hover:underline<?php if ($page->is('/uses/')) :?> font-bold<?php endif; ?>">Uses</a></li>
                        <li><a href="/contact/" class="px-4 md:pr-0 sm:px-4 hover:underline<?php if ($page->is('/contact/')) :?> font-bold<?php endif; ?>">Contact</a></li>
                    </ul>
                </nav>
                <div class="flex sm:hidden mr-4">
                    <button id="mobile-menu-show" class="button">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <button id="mobile-menu-hide" class="button hidden">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="max-w-screen-md flex sm:hidden px-4 md:px-0 py-2 mx-auto bg-blue-700 dark:bg-grey-750 hidden">
                <ul>
                    <li class="pb-1"><a href="/about/" class="hover:underline<?php if ($page->is('/about/')) :?> font-bold text-grey-100<?php endif; ?>">About</a></li>
                    <li class="pb-1"><a href="/posts/" class="hover:underline<?php if ($page->is('/posts/')) :?> font-bold text-grey-100<?php endif; ?>">Posts</a></li>
                    <li class="pb-1"><a href="/uses/" class="hover:underline<?php if ($page->is('/uses/')) :?> font-bold text-grey-100<?php endif; ?>">Uses</a></li>
                    <li class="pb-1"><a href="/contact/" class="hover:underline<?php if ($page->is('/contact/')) :?> font-bold text-grey-100<?php endif; ?>">Contact</a></li>
                </ul>
            </div>
            <div class="absolute top-3 sm:top-5 right-14 sm:right-6 hover:text-white">
                <a href="#" id="toggle-switch" title="Toggle theme between light and dark" aria-label="Toggle theme between light and dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-switch-off" class="w-5 feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-switch-on" class="hidden w-5 feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                </a>
            </div>
        </header>
        <main class="mb-auto px-4 sm:px-0 container-md pt-5 sm:pt-10 pb-2 sm:pb-4">
