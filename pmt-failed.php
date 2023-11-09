<?php
session_start();

$txnid = $_GET['txnid'];

include "config.php";
$sql = "UPDATE `queries` SET payment_failed = 'visited'  WHERE txnid='$txnid'";
   if ($link->query($sql) != TRUE) {
        header("location:index.php");
              exit;
  // echo "Error: " . $sql . "<br>" . $link->error;
   }

$sqlpay = "UPDATE `user_booking` SET payment = 'Failed' WHERE txnid='$txnid'";
   if ($link->query($sqlpay) != TRUE) {
   echo "Error: " . $sqlpay . "<br>" . $link->error;
   }
?>
<!DOCTYPE html>

<html>

<head>
    <?php include 'tags.php';?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" type="image/png" sizes="16x16" href="https://aimcabbooking.com/images/logo-png.png">
    <link rel="apple-touch-icon" sizes="16x16"  href="https://aimcabbooking.com/images/logo-png.png">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
 
  <title>Payment failed</title>

  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-GCC1XJLS7R');
  
</script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/card.css" rel="stylesheet" />
  <!-- responsive style -->
    <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="card.css" rel="stylesheet" />
  <link href="card.html" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

     <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
     
     <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,700,600);
.container{
    margin:5%;
    text-align:center;
  padding: 20px;
}
.header{
    text-align:center;
}
body{
  background-color: #f6f4f4;
  font-family: 'Raleway', sans-serif;
}
.teal{
  background-color: #ffc952 !important;
  color: #444444 !important;
}
a{
  color: #47b8e0 !important;
}
.message{
  text-align: left;
}
.price1{
	font-size: 40px;
	font-weight: 200;
	display: block;
	text-align: center;
}
.ui.message p {margin: 5px;}
    </style>
</head>

<body>
     <?php include 'header.php';?>
<div class="container ">
    <div class="card border border-danger">
                            <div class="card-header">
                                <strong class="card-title">Payment Failed</strong> </div>
  <div class="ui middle aligned center aligned grid">
    <div class="ui eight wide column">
   
      <form class="ui large form">
                
          <div class="ui icon negative message">
           
            <div class="content">
              <div class="header">
                   <i class="warning icon"></i>
                Oops! Something went wrong.<br>
                 <p>While trying to reserve money from your account</p>
              </div>
             
            </div>
            
         </div>
          <a href="full-pay.php">
         <img src="images/fail.png" width="100" height="100"> </img>
      </a>
                    
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                   
      
      </form>
    </div>
  </div>
</div>
 <?php include 'footer.php';?>
</body>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
</html>

                    
