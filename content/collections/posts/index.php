<?php include 'content/pages/_partials/header.php'; ?>

<?php foreach ($collection->items() as $i => $item) : ?>
    <article class="mb-10">
        <?php if ($i === 0) : ?>
            <h1>Posts</h1>
        <?php endif; ?>
        <h2 class="font-header text-xl font-semibold mb-2 leading-tight tracking-tight underline"><a href="<?php echo $item->link; ?>" class="text-accent hover:text-primary dark:hover:text-content hover:underline"><?php echo $item->title; ?></a></h2>
        <div class="leading-normal"><?php echo $item->excerpt; ?></div>
    </article>
<?php endforeach ;?>

<?php if ($pagination) : ?>
    <?php if ($pagination->previous) : ?>
        <a href="<?php echo $pagination->previous; ?>">Previous</a>
    <?php endif; ?>
    <?php if ($pagination->next) : ?>
        <a href="<?php echo $pagination->next; ?>">Next</a>
    <?php endif; ?>
<?php endif; ?>

<?php include 'content/pages/_partials/footer.php'; ?>