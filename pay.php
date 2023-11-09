<?php

  session_start();
  
  include "config.php";
$sql = "UPDATE `queries` SET name_email = 'visited' WHERE phone ='$_SESSION[phone]' ORDER BY id DESC LIMIT 1";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
          if(!isset($_SESSION["booked"]) && $_SESSION['booked'] != true){
               header("location:index.php");
              exit;
    }
?>
 


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" type="image/png" sizes="16x16" href="https://aimcabbooking.com/images/logo-png.png">
    <link rel="apple-touch-icon" sizes="16x16"  href="https://aimcabbooking.com/images/logo-png.png">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
 <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-GCC1XJLS7R');
</script>
  <title>Aim Cab</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>
 
    <?php include 'header.php';?>
    <!-- end header section -->
 <br><br> 
<div class="container">
    
    <div class="row">
        <div class="col"></div>
        <div class="col-md-4">
          <div class="card my-5 p-2 ">
            <div class="login-content p-2">
                <div class="login-logo">
                    <div class="login-form">
                                <!-- Credit Card -->
                                
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Enter Details and Pay</h3>
                                        </div>
                                        
                                        <div class="icon-container text-center">
                                          <i class="fa fa-cc-visa" style="color:navy;"></i>
                                          <i class="fa fa-cc-amex" style="color:blue;"></i>
                                          <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                          <i class="fa fa-cc-discover" style="color:orange;"></i>
                                        </div>
                                        
                                        <hr>
                                        <form action="pay-redirect.php"  name="payuform" method="post">
                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label sm-4">Name</label>
                                                <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                           <div class="form-group">
                                              <label for="cc-name" class="control-label sm-4">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email" required>
                                               </div>
                                              <div class="form-group">
                                              <label for="cc-name" class="control-label sm-4">Contact No.</label>
                                            <input type="text" class="form-control" id="phone" name="phone"  placeholder="Number" maxlegth="10" title="Error Message"
                                        pattern="[1-9]{1}[0-9]{9}" required>
                                               </div>
                                          
                                                    <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Process to Pay </span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                
                                                </button>
                                                 
                                               </div>
                                        </form>
                                         
                                    </div>
                                        
                                        </div>
                              </div>
                                 </div>
                                 </div>
                                  </div> </div><div class="col"></div></div></div>
                                  
   
                                
  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


<!-- info section -->
 <?php include 'footer.php';?>
  <!-- end info section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>


  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>

