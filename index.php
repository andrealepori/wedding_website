<style>
<?php include 'css/index.css'; ?>

</style>


<!DOCTYPE html>
<html lang="it">
	
<head>
	<!-- Title -->
	<title>Login Page </title>

	
</head>

<style>
	.span {
    background-color: rgba(220, 220, 220, 0.596);
}
.body{
	width:auto;
	
}
.bacg {
    background-color: rgba(0, 0, 0, 0.705);
    padding: 7px;
}

.anelli {
    padding-bottom: 40px;
    padding-top: 70px;
    width: 10%;
    padding-left: 18%;
}

</style>
<body>
 




        <div class="rightcol">

<div class="spostamento"><img src="images/wedding-ring.svg" class="anelli">
		<!--
	<img src="images/wedding-ring.svg" class="anelli"> !-->
		<h1 class="titolosx">
		<span class="span">
		Giulia  & <br>
		
		Alessandro
		</h1>
		<form action="auth/login.php" method="post">
<div></div>
<h1 class="titolo">
	
		<span class="span">	BENVENUTI NEL SITO<br> DEL NOSTRO MATRIMONIO</span>
		</h1>
		<div class="center">
		
		<br>		
		<input type="password"  name="password" class="form"> 
		<div class="center">
		<br>
		<br>
	</div class="bottone">
		<input type='submit' value="Login" class="bottone">
	<input type="hidden" name="submitted" value="1" padding-top="10px" >
</div>
	
</form>
	</div>
</div>
		</div>

	


        </div>

		
    </div>










</body>

</html>