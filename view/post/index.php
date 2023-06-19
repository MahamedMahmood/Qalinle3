<?php 

include __DIR__ . "/../layouts/header.php"; ?>


<br>
<br>
<br>
<br>
<br>

<style> 
.Pannel{
  display:flex; padding: 2rem; 1rem; flex-wrap: wrap; align-content: center; width:60%; margin-left:auto; margin-right:auto; flex-direction: column;
 border-radius: 5px;
border: 1px solid grey;

}

.Pannel a:hover {
  color: red;
}

@media (max-width: 768px) {
  .Pannel {
   width: 80%;
   
  }
}

@media (max-width: 425px) {
    .Pannel {
      width: 90%;
     text-align:;
  }
}

#icon{
  width:50px;
  height:50px;
  margin-left: auto;
  margin-right: auto;
  background-color: #1E90FF;
  border-radius: 50%;
  color: #FFF;
  
}

.Pannel img:hover {
  color: red;
}


</style>

<div class="Pannel">
    <?php  foreach($posts AS $post): ?>
    
      <h1 style="text-align:center; padding: 1rem; margin-bottom:0; margin-top:0">Waa maxay Programming languages?</h1>

    
      <p style="padding: 1rem; margin-top:0; text-align:center;" >Programming languages waa luuqado rasmi ah oo lagu samayn karo xeerar xisaabeed kuwaa oo lagu fulinkaro Computerka. </p>
      <img id="icon" src="../../rrc/img/arrow-down-icon.png" alt="arrowDown-icon" style="color:white">
    
          <h3 style="text-align:center;">
          <a style="text-decoration:none; padding: 1rem;" href="post?id=<?php echo e($post->id); ?>">
         
        <?php echo e($post->title); ?>
        </a>
    </h3>
        
       
         

        <?php endforeach; ?>

        </div>

        <br>
<br>
<br>
<br>
<br>
<br>
<br>



    <?php  include __DIR__ . "/../layouts/footer.php"; ?>