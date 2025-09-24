<?php include 'content/pages/_partials/header.php'; ?>

<div>
    <div class="w-full md:max-w-screen-md mx-auto">
        <h1 class="font-title text-4xl mb-6 font-extrabold text-primary dark:text-content tracking-tight">Posts</h1>
    </div>
    <div class="flex flex-col gap-6 sm:gap-8 mb-6">
        <?php foreach ($collection->items() as $item) : ?>
            <article>
                <h2 class="font-header text-xl font-semibold mt-0 mb-2 leading-tight tracking-tight underline"><a href="<?php echo $item->link; ?>" class="text-accent hover:text-primary dark:hover:text-content hover:underline"><?php echo $item->title; ?></a></h2>
                <div class="leading-normal"><?php echo $item->excerpt; ?></div>
            </article>
        <?php endforeach ;?>
    </div>
</div>

<?php if ($pagination) : ?>
    <?php if ($pagination->previous) : ?>
        <a href="<?php echo $pagination->previous; ?>">Previous</a>
    <?php endif; ?>
    <?php if ($pagination->next) : ?>
        <a href="<?php echo $pagination->next; ?>">Next</a>
    <?php endif; ?>
<?php endif; ?>

<?php include 'content/pages/_partials/footer.php'; ?>