<?php include 'content/pages/_partials/header.php'; ?>

<div class="max-w-screen-lg m-auto">
    <div class="w-full sm:max-w-screen-lg lg:py-0 m-auto flex items-center text-center lg:text-left">
        <div class="w-full mb-0 lg:w-3/5">
            <div class="whitespace-pre-line mb-2 px-4 sm:px-0 text-4xl md:text-5xl tracking-tight text-blue-600 dark:text-grey-400 font-extrabold">I'm a Software Developer</div>
            <div class="sm:whitespace-pre-line mb-10 px-10 sm:px-0 text-blue-600 dark:text-grey-400 text-2xl md:text-3xl leading-tight tracking-tight">with <span class="font-extrabold text-pink"><?php echo $experienceInYears; ?> years of full-stack experience</span>
                based in Gloucestershire, UK</div>
            <div class="text-lg/7 sm:text-lg/7 pl-8 pr-8 lg:pl-0 lg:pr-10">
                <p>When I'm not contracting I run a small software development agency and bootstrapping projects like <strong>MatchADev</strong> and <strong>SideAdmin</strong>, but I'm also building an open-source static site generator, named <strong>Phanstatic</strong>.</p>
            </div>
        </div>
        <div class="hidden lg:block w-full lg:w-2/5">
            <img class="w-full -mt-3 drop-shadow" title="Not Kevin Smith" alt="Not Kevin Smith" src="<?php echo asset('images/me.png'); ?>" />
        </div>
    </div>
</div>

<?php include 'content/pages/_partials/footer.php'; ?>