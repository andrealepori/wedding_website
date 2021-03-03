<style>
<?php include 'css/index.css'; ?>

</style>



<!DOCTYPE html>
<html lang="it">
	
<head>
	<!-- Title -->
	<title>Login Page </title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<style>

* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column  {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column  {
    width: 100%;
  }
}
</style>

<body>
 

<div class="colcontainer">

        <div class="leftcol">
        
		<h1 class="titoloscomparire">
	
		Alessandro Grossi & <br>
		
		Giulia Pellegrino
		</h1>
		
		<form action="auth/login.php" method="post">
<div class="bordi">


<h1 class="titolo">
	
			BENVENUTI NEL SITO<br> DEL NOSTRO MATRIMONIO
		</h1>
	<div>
		
		<br>		
		<input type="password"  name="password" class="form"> 
	
	</div>
	<div>
		<br>
		<br>
	</div class="bottone">
		<input type='submit' value="Login" class="bottone">
	<input type="hidden" name="submitted" value="1" padding-top="10px" >
</div>
	
</form>


	
	
	
	
	
	
	
	
	
	</div>
        <div class="rightcol">
	<img src="images/wedding-ring.svg" class="anelli">
		<h1 class="titolosx"><span class="bcg">
		Giulia  & <br>
		
		Alessandro
		</h1>
        </div>
    </div>




	

</body>

</html>
