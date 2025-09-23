<?php include 'content/pages/_partials/header.php'; ?>

    <article class="mb-10">
        <div class="md:flex gap-8">
            <div class="hidden md:block w-1/3">
                <img src="<?php echo asset('pages/talk1.jpg') ?>" alt="PHP + Static = Phanstatic at PHPSW" class="rounded-lg shadow-md">
            </div>
            <div class="md:w-2/3">
                <div class="text-sm mb-1 font-semibold text-primary dark:text-content/60">July 2024</div>
                <h2 class="font-title text-xl font-semibold mb-2 leading-tight tracking-tight underline m-0"><a href="https://www.youtube.com/watch?v=mwPPy6_qojQ" class="text-accent hover:text-primary dark:hover:text-content hover:underline">PHP + Static = Phanstatic at PHPSW</a></h2>
                <p class="text-base">In my first talk, I introduced a small project of mine called Phanstatic - a framework-agnostic, simple PHP CLI package that converts PHP templates into static HTML files.</p>
            </div>
        </div>
    </article>

<?php include 'content/pages/_partials/footer.php'; ?>