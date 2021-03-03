<style>
<?php include 'css/upload.css'; ?>

/*# sourceMappingURL=bootstrap.min.css.map */
</style>
<!DOCTYPE html>
<html lang="en">
   <head>


   
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/scritta.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/responsive.css">
	  <link rel="stylesheet" href="css/custom.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">

      <!-- Pogo Slider CSS -->
  
      



    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<link href="css/upload.css">

    
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

   </head>
<style>
   .banneruplad{
  width:100%;
  height:500px;
  padding-top:234px;
  text-align:center;
  background-image:url(images/banner.jpg);
  background-size:cover;
}
.bottone{
   background-color:black;
   color: withe;
}
</style>
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
               
                     <li><a class="nav-link" href="presenza.html">CONFERMA LA PRESENZA</a></li>
                     <li><a class="nav-link" href="nozze.html">LUNA DI MIELE</a></li>
                     <li><a class="nav-link" href="#family">SPECIAL GUEST</a></li>
                     <li><a class="nav-link" href="gallery.php">FOTO</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>



<div class="banneruplad">
  
                
<div class="bannerbcg">
               <form action="upload.php" method="post" enctype="multipart/form-data" class="botton">
               <input type="file" name="file" class="file">
               <input type="submit" name="submit" value="Upload" class="bottone" >

               <label for="upload" type="submit" name="submit" value="Upload"> <i class="fa fa-cloud-upload mr-2 text-muted"></i>
     
            </div>
</div>
         </div>
      </div>
      <?php if(!empty($statusMsg)){?>
      <p class="status-msg"><?php echo $statusMsg;?></p>
      <?php } 
      ?>
   </div>
   <div class="centroupload">
   </div>
   </div>
   </form>
</div>





     
   <div class="container py-5">
      <div class="image-area mt-4">
         <div class="row py-4">
            <div class="col-lg-6 mx-auto">
     
   </div>
   </div>    
   </div>
   <div class="dropzone" data-dropzone>
   <div class="dropzone__field">




<!-- 
  GALLERIA 2-->
   <!--
   <div class="gallery">
    
                  <?php
                     // Include the database configuration file
                     include 'dbConfig.php';
                     $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
                     
                     if($query->num_rows > 0){
                         while($row = $query->fetch_assoc()){
                             $imageURL = 'uploads/'.$row["file_name"];
                     ?>
                  <img src="<?php echo $imageURL; ?>" alt=""  class="col-sm-6 col-md-4 col-lg-3 item" />
                  <?php }
                     }else{ ?>
                  <p>No image(s) found...</p>
                  <?php } ?>
!-->

                  
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- GALLERIA 3 !-->


<section class="centrofoto">
  
  <?php
                     // Include the database configuration file
                     include 'dbConfig.php';
                     $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
                     
                     if($query->num_rows > 0){
                         while($row = $query->fetch_assoc()){
                             $imageURL = 'uploads/'.$row["file_name"];
                     ?>
                  <img src="<?php echo $imageURL; ?>" alt=""   width="300px" height="300px" class="gallery_pics" href="<?php echo $imageURL; ?>" />
                  <?php }
                     }else{ ?>
   <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
                  <p>No image(s) found...</p>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>

    
</div>
<!-- works -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<div class="gallery_pics_holder">












                     </body>

</html>

