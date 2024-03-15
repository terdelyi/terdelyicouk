<?php include_partial('header.php', ['page' => $page]); ?>

    <article>
        <h1><?php echo $page->title; ?></h1>
        <div class="has-content">
            <?php echo $page->content; ?>
        </div>
        <div class="text-grey-600 dark:text-grey-550 text-sm text-center mb-6">
            <div>
                This post was published on <?php echo $page->date; ?> in <?php echo implode(', ', $page->tags); ?>
            </div>
        </div>
    </article>

<?php include_partial('footer.php', ['page' => $page]); ?>