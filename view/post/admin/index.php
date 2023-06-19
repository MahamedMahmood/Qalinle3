<?php  require(__DIR__ . "/../../layouts/header.php"); ?>

<?php foreach($all AS $entry): ?>

    <h3>

    <a href="posts-edit?id= <?php echo e($entry->id); ?> ">
    <?php echo e($entry->title); ?>
    </a>
    </h3>

<?php endforeach;  ?>


<?php  require(__DIR__ . "/../../layouts/footer.php"); ?>