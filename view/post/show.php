<?php 

include __DIR__ . "/../layouts/header.php";

?>

<style>

#container {
     display: flex;
     width: 70%;
     margin-left: auto;
     margin-right: auto;
     flex-wrap: wrap; 
}

#form {
     display: flex;
     width: 70%;
     margin-left: auto;
     margin-right: auto; 
     flex-wrap: wrap;
     flex-direction: column;
     
}

</style>


<div id="container">
<div class="panel panel-default">
     
  <div class="panel-heading">
       <h3><?php echo e($post['title']); ?></h3>

  </div>
  <div class="panel-body">
         <?php echo nl2br(e($post['content'])); ?>
  </div>
 
  </div> 

          <br/>
          <br/>
          <br/>

  
     </div>

          <br/>
          <br/>
          <br/>
         

     <form id="form" method="post" action="post?id=<?php echo e($post['id']); ?>">

     <h3>Comment</h3>

     <textarea name="content" id="content"></textarea>

     <br/>
     <div class="Group-liste">
     <?php foreach ($comments AS $comment) : ?>

     <p class="list-group-item">
          <?php echo e($comment->content); ?>
     </p>

     <?php endforeach; ?>

     </div>

     <input type="submit" value="Post Comment" id="comment"/>

     </form>

  
          <style>

          #comment {
               border-radius: 10px;
               width: 150px;
               height: auto;
          }

          #content {
               width:300px;
               height:auto;
          }
          </style>


<br/>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>

  <?php  include __DIR__ . "/../layouts/footer.php"; ?>