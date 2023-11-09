<html>

<head>
  

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,100&display=swap" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
 <style>
    img{
        
  /*  height:20%;
    width:20%
    padding:0; */

}
h1{
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,100&display=swap');
   font-family: 'Noto Sans', sans-serif;

}
h4{
       @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,100&display=swap');
   font-family: 'Noto Sans', sans-serif;

   font-size:40px;

}
</style>
    </head>
    <body>
        
   <?php include "website_header.php" ?>
           
        <div class="col text-center" style="margin:50px;">
    <img src="images/un.gif" style="height:50%; width:40%">

    <h4 class="text-center text-primary"><b>Rental is not available more than 80 Km</b></h4>
    <h4 class="text-center text-danger"><b>Try Our One Way and Round Trip Services</b></h4>

        </div>
<?php include "website_footer.php"?>

        </body>
         <script>
         setTimeout(function(){
           <? session_destroy();?>
            window.location.href = 'index.php';
           
         }, 10000);
      </script>
    </html>