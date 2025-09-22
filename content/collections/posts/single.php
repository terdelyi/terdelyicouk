<?php include 'content/pages/_partials/header.php'; ?>

    <article>
        <h1><?php echo $page->title; ?></h1>
        <div class="text-body/70 dark:text-content/40 text-sm mb-8 -mt-4">
            <div>
                Published on <?php echo date_format(new DateTime($page->date), 'D d M Y'); ?> — <?php foreach ($page->tags as $tag) : ?>#<?php echo $tag?> <?php endforeach; ?>
            </div>
        </div>
        <div class="has-content mb-10">
            <?php echo $page->content; ?>
        </div>
    </article>

<?php include 'content/pages/_partials/footer.php'; ?>