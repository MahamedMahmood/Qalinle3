<?php  require(__DIR__ . "/../../layouts/header.php"); ?>

<h3>Edit Posts</h3>

<?php if (!empty($savedsuccess)): ?>

<p>The post was saved successfully.</p>

<?php endif; ?>

<form method="POST" action="posts-edit?id= <?php echo e($entry->id); ?>">  

    <input type="text" name="title" value="<?php echo e($entry->title); ?>"/>

    <textArea name="content"><?php echo e($entry->content); ?></textArea>

    <input type="submit" value="Save Post!"/>

</form>


<?php  require(__DIR__ . "/../../layouts/footer.php"); ?>