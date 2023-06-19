
<?php include __DIR__ . "/../layouts/header.php"; ?>


<br>
<br>
<br>


 

 
<section>
<form id="form" method="POST" method="register">

<h2 class="rgr">Register</h2> 
<br>



  <div>
<label for="username">Username:</label>
<input type="text" name="username" class"form-control" id="username" placeholder="Your name"/>
<div id="usernameHelp"><div/>
</div>
<br>

<label for="email">E-mail-Adresse:</label>
<input type="email" name="mail" class"form-control" id="mail" style="width:100%" placeholder="e.g. Hamza@11.com"/>
<div id="mailHelp"><div/>

<br>


<label for="password">Password:</label>
<input type="password" name="password" class"form-control" id="password" style="width:100%"/>
<div id="passwordHelp"><div/>

<br/>

<input type="submit" name="submit" value="send" style="border-radius: 20px;"/>

<p style="color: red"><?php echo $fail ?></p>



</form>
</section>

<br>
<br>


<style>

#form{
    display: flex;
    width: 60%;
    margin-left:auto;
    margin-right:auto;
    flex-direction: column;
}

#form * input {
    height: 40px;
    border: 1px solid blue;
    border-radius: 2px;
}



</style>





<br>
<br>
<br>
<br>
<br>
<br>



<?php include __DIR__ . "/../layouts/footer.php"; ?>



