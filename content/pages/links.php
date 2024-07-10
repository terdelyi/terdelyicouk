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
<body class="bg-grey-300 dark:bg-grey-700 font-sans text-blue-400 dark:text-grey-500 antialiased">

<div class="max-w-screen-sm mx-auto p-5 sm:p-10">
    <ul>
        <li class="mb-1"><a href="https://linkedin.com/in/terdelyi/" class="block bg-blue-500 hover:bg-pink text-grey-100 px-4 py-4 text-center font-bold text-lg">LinkedIn</a></li>
        <li class="mb-1"><a href="https://x.com/terdelyi" class="block bg-blue-500 hover:bg-pink text-grey-100 px-4 py-4 text-center font-bold text-lg">X / Twitter</a></li>
        <li class="mb-1"><a href="https://github.com/terdelyi/" class="block bg-blue-500 hover:bg-pink text-grey-100 px-4 py-4 text-center font-bold text-lg">GitHub</a></li>
        <li class="mb-1"><a href="https://github.com/terdelyi/phanstatic/" class="block bg-blue-500 hover:bg-pink text-grey-100 px-4 py-4 text-center font-bold text-lg">Phanstatic</a></li>
        <li class="mb-1"><a href="https://webdeveloperforhire.co.uk" class="block bg-grey-700 hover:bg-pink text-grey-100 px-4 py-4 text-center font-bold text-lg">Web Developer for Hire</a></li>
        <li class="mt-4"><a href="https://terdelyi.co.uk" class="block text-center text-sm underline">&#8592; Back to the website</a></li>
    </ul>
</div>

</body>
</html>