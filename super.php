<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Giuly and Ale </title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/countdown.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.png" type="image/gif">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl TIMELINE  -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Modernizr JS -->
</head>
<body>
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
           <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                 <ul class="navbar-nav">
                    <li><a class="nav-link active" href="home.html">BLOG DI NOZZE</a></li>
                    <li><a class="nav-link" href="presenza.html">CONNFERMA LA PRESENZA</a></li>
                    <li><a class="nav-link" href="nozze.html">HONEY MOON</a></li>
                    <li><a class="nav-link" href="#family">SPECIAL GUEST</a></li>
                    <li><a class="nav-link" href="gallery.php">FOTO</a></li>
                 </ul>
              </div>
           </div>
        </nav>
     </header>



     <div class="bannerpresenza">



     </div>
     <div id="contact" class="contact-box">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="title-box">
                       <h2>Conferma la presenza</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-12 col-sm-12 col-xs-12">
                 <div class="contact-block">
                   <form id="contactForm">
                     <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <input type="text" class="form-control" id="name" name="name" placeholder="Nome e cognome" required data-error="Please enter your name">
                               <div class="help-block with-errors"></div>
                           </div>                                 
                       </div>
                       <div class="col-md-12">
                         <!--  <div class="form-group">
                               <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                               <div class="help-block with-errors"></div>
                           </div> -->
                       </div>
                       <div class="col-md-12">
                           <div class="form-group">
                               <select class="custom-select d-block form-control" id="guest" required data-error="Per favore scegli il numero di partecipanti.">
                                 <option disabled selected>Numero dei partecipanti</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>

                               </select>
                               <div class="help-block with-errors"></div>
                           </div> 
                       </div>
                       <div class="col-md-12">
                       
                           <div class="form-group">	<br>
                               <select class="custom-select d-block form-control" id="event" required data-error="Please select an item in the list.">
                                 <option disabled selected>I Am Attending*</option>
                                 <option value="1">All events</option>
                                 <option value="2">Wedding ceremony</option>
                                 <option value="3">Reception party</option>
                               </select>
                               <div class="help-block with-errors"></div>
                       
                           </div> 
                       </div>
                       <div class="col-md-12">
                           <div class="form-group"> 
                               <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" ></textarea>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="submit-button text-center">
                               <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                               <div id="msgSubmit" class="h3 text-center hidden"></div> 
                               <div class="clearfix"></div> 
                           </div>
                       </div>
                     </div>            
                   </form>
                 </div>
               </div>
           </div>
       </div>
   </div>
</body>
<script src="js2/simplyCountdown.js"></script>
<script src="js2/jquery.min.js"></script>
<script src="js2/popper.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/timezz/dist/timezz.min.js"></script>
<script src="js2/jquery.magnific-popup.min.js"></script>
<script src="js2/jquery.pogo-slider.min.js"></script> 
<script src="js2/slider-index.js"></script>
<script src="js2/smoothscroll.js"></script>
<script src="js2/form-validator.min.js"></script>
<script src="js2/contact-form-script.js"></script>
<script src="js2/custom.js"></script>
<script src="js2/timeline.js"></script>

</html>