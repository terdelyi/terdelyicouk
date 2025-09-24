<?php include 'content/pages/_partials/header.php'; ?>

    <article>
        <h1 class="large mb-5"><?php echo $page->title; ?></h1>
        <div class="text-body/70 dark:text-content/40 text-sm mb-8">
            <div class="font-title">
                <?php echo date_format(new DateTime($page->date), 'D d M Y'); ?> — <?php foreach ($page->tags as $tag) : ?>#<?php echo $tag?> <?php endforeach; ?>
            </div>
        </div>
        <div class="has-content">
            <?php echo $page->content; ?>
        </div>
    </article>

<?php include 'content/pages/_partials/footer.php'; ?>