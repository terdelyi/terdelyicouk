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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800" rel="stylesheet">
    <script src="https://cdn.usefathom.com/script.js" data-site="APGETVFU" defer></script>
</head>
<body class="bg-content dark:bg-body font-sans text-body dark:text-content">

<div class="max-w-screen-sm mx-auto px-8 pt-8 sx:p-14">
    <h1 class="text-3xl font-extrabold tracking-tight mb-6 text-black text-center">Thanks for your interest!</h1>
    <ul class="flex flex-col gap-2">
        <li>
            <a href="https://linkedin.com/in/terdelyi/" class="flex items-center rounded-md bg-secondary hover:bg-accent text-content px-4 py-4 font-semibold text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-content h-7 w-7 mr-6"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></span>
                <span class="block">Add me on LinkedIn</span>
            </a>
        </li>
        <li>
            <a href="https://x.com/terdelyi" class="flex items-center rounded-md bg-secondary hover:bg-accent text-content px-4 py-4 font-semibold text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-content h-7 w-7 mr-6"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                <span class="block">Follow me on X</span>
            </a>
        </li>
        <li>
            <a href="https://bsky.app/profile/terdelyi.co.uk" class="flex items-center rounded-md bg-secondary hover:bg-accent text-content px-4 py-4 font-semibold text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-content h-7 w-7 mr-6"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M111.8 62.2C170.2 105.9 233 194.7 256 242.4c23-47.6 85.8-136.4 144.2-180.2c42.1-31.6 110.3-56 110.3 21.8c0 15.5-8.9 130.5-14.1 149.2C478.2 298 412 314.6 353.1 304.5c102.9 17.5 129.1 75.5 72.5 133.5c-107.4 110.2-154.3-27.6-166.3-62.9l0 0c-1.7-4.9-2.6-7.8-3.3-7.8s-1.6 3-3.3 7.8l0 0c-12 35.3-59 173.1-166.3 62.9c-56.5-58-30.4-116 72.5-133.5C100 314.6 33.8 298 15.7 233.1C10.4 214.4 1.5 99.4 1.5 83.9c0-77.8 68.2-53.4 110.3-21.8z"/></svg>
                <span class="block">Follow me on Bluesky</span>
            </a>
        </li>
        <li>
            <a href="https://github.com/terdelyi/phanstatic/" class="flex items-center rounded-md bg-secondary hover:bg-accent text-content px-4 py-4 font-semibold text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-content h-7 w-7 mr-6"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 86.6C-3.1 74.1-3.1 53.9 9.4 41.4s32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 9.4 86.6zM256 416l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
                <span class="block">Check Phanstatic</span>
            </a>
        </li>
        <li>
            <a href="https://github.com/terdelyi/" class="flex items-center rounded-md bg-secondary hover:bg-accent text-content px-4 py-4 font-semibold text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512" class="fill-content h-7 w-7 mr-6"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z"/></svg>
                <span class="block">Follow me on GitHub</span>
            </a>
        </li>
        <li>
            <a href="https://webdeveloperforhire.co.uk" class="flex items-center rounded-md hover:bg-body/10 text-body px-4 py-4 font-semibold text-lg border border-body/50 hover:border-body/0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-body h-7 w-7 mr-6"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1l0 50.8c27.6 7.1 48 32.2 48 62l0 40c0 8.8-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l0-24c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 24c8.8 0 16 7.2 16 16s-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16l0-40c0-29.8 20.4-54.9 48-62l0-57.1c-6-.6-12.1-.9-18.3-.9l-91.4 0c-6.2 0-12.3 .3-18.3 .9l0 65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7l0-59.1zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
                <span class="block">Hire me</span>
            </a>
        </li>
        <li>
            <a href="https://terdelyi.co.uk" class="flex items-center rounded-md hover:bg-body/10 text-body px-4 py-4 font-semibold text-lg border border-body/50 hover:border-body/0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-body h-7 w-7 mr-6"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185l0-121c0-17.7-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32l0 36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1l32 0 0 69.7c-.1 .9-.1 1.8-.1 2.8l0 112c0 22.1 17.9 40 40 40l16 0c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2l31.9 0 24 0c22.1 0 40-17.9 40-40l0-24 0-64c0-17.7 14.3-32 32-32l64 0c17.7 0 32 14.3 32 32l0 64 0 24c0 22.1 17.9 40 40 40l24 0 32.5 0c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1l16 0c22.1 0 40-17.9 40-40l0-16.2c.3-2.6 .5-5.3 .5-8.1l-.7-160.2 32 0z"/></svg>
                <span class="block">Visit my website</span>
            </a>
        </li>
    </ul>
</div>

</body>
</html>