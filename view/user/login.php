<?php include __DIR__ . "/../layouts/header.php"; ?>


<br>
<br>
<br>


<section>
<form id="form" method="POST" method="login">

<h2>Login</h2> 
<br>



<div>
<label for="email">Your E-mail:</label>
<input type="email" name="mail" class="form-control" placeholder="e.g. Hamza@11.com" style="height:30px;" >
<div id="mailHelp"><div/>
</div>



<br>

<label for="password">Password:</label>
<input type="password" name="password" class"form-control" id="password" style="height:30px;"/>
<div id="passwordHelp"><div/>




<br>
<input type="submit" value="login" style="border-radius: 20px;" />


<br>
<p style ="color: red"> <?php echo $error?> </p>

</form>

</section>


<style>

#form{
    display: flex;
    width: 60%;
    margin-left:auto;
    margin-right:auto;
    flex-direction: column;
}

#form * input {
    width: 100%;
    border: 1px solid blue;
    border-radius: 2px;
}



</style>

<br>
<br>

<br>
<br>


<?php include __DIR__ . "/../layouts/footer.php"; ?>