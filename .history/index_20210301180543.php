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

        
table.column-1-2 {
          margin-right: 25px;
                    width: 50% !important;

      }
      /* Most mobile clinets supports css @media queries so you can define styles for theme here */
      @media only screen and (max-width: 640px) {
        .container {
            width: 100% !important;
            max-width: 100% !important;
        }
        table.column-1-2 {
            float: none !important;
            margin-right: 0 !important;
            width: 100% !important;
            text-align: center !important;
        }
      }

      /* Override the .container width for email clients supporting <style> and @media queries */
      @media only screen and (min-width: 641px) {
        .container {
            width: 100% !important;
        }
      }

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



    <table style="border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
      <tr>
  
        <td >
           
            <div style="max-width: 100%; margin: 0 auto;">
                <table class="container" style="border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                          <tbody>
                            <tr>
                              <td>
            
                                <!-- One full width column -->
                                <table width="100%" style="border-collapse: collapse;" cellspacing="0" cellpadding="0" border="0">
                                  <tr>
                               
                                  </tr>
                                </table>
            
                                <!-- Set of 2 columns -->
            
                                  <!-- 
                                    Set width to half of width of container and add align="left" 
                                    to float the table to the left and make column of it. 
                                  -->
                                  <table class="column-1-2" width="300" align="left" style="border-collapse: collapse;" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
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
                                    </tbody>
                                  </table>
            
                                  <!-- The div's width is automatically 100% and previous table can float it, so it fills the second half -->
                                  <div style="padding: 0 25px; background: #fff; text-align: center;">
                                    <div style="padding: 200px 0">
                                      RIGHT COLUMN
                                    </div>
                                  </div>
                                <!-- End of two set columns -->
            
                                <!-- One full width column -->
                                <table width="100%" style="border-collapse: collapse;" cellspacing="0" cellpadding="0" border="0">
								<div class="rightcol">
	<img src="images/wedding-ring.svg" class="anelli">
		<h1 class="titolosx"><span class="bcg">
		Giulia  & <br>
		
		Alessandro
		</h1>
        </div>
    </div>

                                </table>
            
                              </td>
                            </tr>
                          </tbody>
                        </table>
                <!-- End of .container table -->
            </div>
          
            <!-- Add this condition to center the email in MS Outlook -->
            <!--[if mso]>
            </td></tr></table>
            <![endif]--> 
        </td>
      </tr>
    </table>


	

</body>

</html>
