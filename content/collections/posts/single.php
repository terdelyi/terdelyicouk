<?php include 'content/pages/_partials/header.php'; ?>

    <article>
        <h1><?php echo $page->title; ?></h1>
        <div class="text-grey-600 dark:text-grey-550 text-sm mb-8 -mt-4">
            <div>
                Published on <?php echo date_format(new DateTime($page->date), 'd M Y'); ?> in <?php echo implode(', ', $page->tags); ?>
            </div>
        </div>
        <div class="has-content mb-10">
            <?php echo $page->content; ?>
        </div>
    </article>

<?php include 'content/pages/_partials/footer.php'; ?>