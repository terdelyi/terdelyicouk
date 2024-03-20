<?php include 'content/pages/_partials/header.php'; ?>

<?php foreach ($collection->items() as $item) : ?>
    <article class="mb-10">
        <h3 class="font-header text-xl font-bold mb-2 leading-tight tracking-tight underline"><a href="<?php echo $item->link; ?>" class="text-pink hover:text-blue-600 dark:hover:text-grey-400 hover:underline"><?php echo $item->title; ?></a></h3>
        <div class="leading-relaxed"><?php echo $item->excerpt; ?></div>
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