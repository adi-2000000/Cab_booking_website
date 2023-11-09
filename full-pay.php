<?php

  session_start();
  include "config.php";
   $sql = "UPDATE `queries` SET fullpay = 'visited' WHERE phone ='$_SESSION[phone]' ORDER BY id DESC LIMIT 1";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
           if(!isset($_SESSION["booked"]) && $_SESSION['booked'] != true){
               header("location:index.php");
         exit;
    }
    

  $_SESSION['full-pay'] = true;
  $phone =$_SESSION['phone'] ; 
  $pickup = $_SESSION['pickup'] ; 
  $drop= $_SESSION['drop'] ; 
  $date= $_SESSION['date'] ; 
  $time= $_SESSION['time'] ; 
  $dateend = $_SESSION['dateend'];
  $timeend = $_SESSION['timeend'];
  $offer = $_SESSION['offeramount'];
  
  if($_SESSION['offeramount'] > 0){
     $new_amount = $_SESSION['offeramount'];
  }else{
      $new_amount = $_SESSION['new_amount'];;
  }
  
  if($_SESSION['offerpartial'] > 0){
      $partial = $_SESSION['offerpartial'];
  }else{
      $partial = $_SESSION['partial'];
  }
  
  $distance=$_SESSION['distance'];
  $int=(int)$distance;
  $trip=$_SESSION['trip'];
  $car=$_SESSION['car'];
  $bookid = $_SESSION['bookid'];
  $name1 = $_SESSION['name'];
  $email1 = $_SESSION['email'];
  
   $sql ="UPDATE user_booking SET name = '$name1', email='$email1' WHERE bookid ='$bookid'";
  mysqli_query($link, $sql); 
 
    
    // $MERCHANT_KEY = "ho63Ae";
    // $SALT = "rHoX1uDQk2pdwlV8HtBPDTv79jgqKvVp";
    $txnid= str_replace(".","",microtime(true)).rand(000,999);
    $services=$trip;
    $surl= "pmt-success.php?txnid=$txnid";
    $furl= "pmt-failed.php?txnid=$txnid";
    $productInfo= $services;
    $subtotal=$new_amount;
    $hashString=$MERCHANT_KEY."|".$txnid."|".$subtotal."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
    $hash = strtolower(hash('sha512', $hashString));
    $advance= $subtotal*0.25;
    $hashString1=$MERCHANT_KEY."|".$txnid."|".$advance."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
    $hash1 = strtolower(hash('sha512', $hashString1));
    
     $sql2 = "UPDATE `user_booking` SET txnid = '$txnid' WHERE bookid ='$bookid'";
   if ($link->query($sql2) != TRUE) {
   echo "Error: " . $sql2 . "<br>" . $link->error;
   }
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
         crossorigin="anonymous"></script> 

  <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!--<link href="css/style.css" rel="stylesheet">-->

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GCC1XJLS7R');
    </script>

    <title>AJ Cab</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>-->
</head>

<body>
    <?php include "website_header.php"?>


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
                                            <h3 class="text-center">Pay Full or Partial Amount</h3>
                                        </div>

                                        <div class="icon-container text-center">
                                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                                        </div>

                                        <hr>
                                        <!--<form action="https://secure.payu.in/_payment" name="payuform" method="post"-->
                                        <!--    novalidate="novalidate">-->

                                        <!--    <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />-->
                                        <!--    <input type="hidden" name="hash" value="<?php echo $hash;?>" />-->
                                        <!--    <input type="hidden" name="txnid" value="<?php echo $txnid;?>" />-->
                                        <!--    <input type="hidden" name="amount" value="<?php echo $new_amount;?>" />-->
                                        <!--    <input type="hidden" name="phone" value="<?php echo $mobile;?> " />-->
                                        <!--    <input type="hidden" name="productinfo" value="<?php echo $services;?>" />-->
                                        <!--    <input type="hidden" name="surl" value="<?php echo $surl;?> " />-->
                                        <!--    <input type="hidden" name="furl" value="<?php echo $furl;?> " />-->
                                        <!--    <input type="hidden" name="service_provider" value="" />-->
                                        <!--    <label for="cc-name" class="control-label sm-4"></label>-->
                                        <!--    <input id="name" name="name" type="hidden" class="form-control"-->
                                        <!--        value="<?php echo $name?>">-->
                                        <!--    <span class="help-block field-validation-valid" data-valmsg-for="cc-name"-->
                                        <!--        data-valmsg-replace="true"></span>-->

                                        <!--    <input id="name1" name="name1" type="hidden" value="<?php echo $name1?>">-->
                                        <!--    <input id="email1" name="email1" type="hidden" value="<?php echo $email1?>">-->
                                        <!--    <input id="phone" name="phone" type="hidden" value="<?php echo $phone?>">-->
                                        <!--    <input id="pickup" name="pickup" type="hidden" value="<?php echo $pickup?>">-->
                                        <!--    <input id="drop" name="drop" type="hidden" value="<?php echo $drop?>">-->
                                        <!--    <input id="date" name="date" type="hidden" value="<?php echo $date?>">-->
                                        <!--    <input id="time" name="time" type="hidden" value="<?php echo $time?>">-->
                                        <!--    <input id="dateend" name="dateend" type="hidden"-->
                                        <!--        value="<?php echo $dateend?>">-->
                                        <!--    <input id="timeend" name="timeend" type="hidden"-->
                                        <!--        value="<?php echo $timeend?>">-->
                                        <!--    <input id="amount" name="new_amount" type="hidden"-->
                                        <!--        value="<?php echo $new_amount?>">-->
                                        <!--    <input id="distance" name="int" type="hidden" value="<?php echo $int?>">-->
                                        <!--    <input id="trip" name="trip" type="hidden" value="<?php echo $trip?>">-->
                                        <!--    <input id="car" name="car" type="hidden" value="<?php echo $car?>">-->
                                        <!--    <input id="bookid" name="bookid" type="hidden" value="<?php echo $bookid?>">-->
                                        <!--    <label for="cc-name" class="control-label sm-4"></label>-->
                                        <!--    <input type="hidden" class="form-control" name="email" id="email"-->
                                        <!--        value="<?php echo $email?>">-->

                                        <!--    <div>-->
                                        <!--        <button id="payment-button" type="submit"-->
                                        <!--            class="btn btn-lg btn-info btn-block">-->
                                        <!--            <i class="fa fa-lock fa-lg"></i>&nbsp;-->
                                        <!--            <span id="payment-button-amount">FullPay Rs.-->
                                        <!--                <?php echo $new_amount;?></span>-->
                                        <!--            <span id="payment-button-sending"-->
                                        <!--                style="display:none;">Sending…</span>-->
                                        <!--    </div><br>-->
                                        <!--</form>-->
                                        <!--<form action="partial-pay.php" name="payuform" method="post"-->
                                        <!--    novalidate="novalidate">-->
                                        <!--    <?php if($partial == "0"){?>-->
                                        <!--    <?php }else{ ?>-->

                                        <!--    </button>-->
                                        <!--    <button id="partial-payment-button" type="submit"-->
                                        <!--        class="btn btn-lg btn-success btn-block">-->
                                        <!--        <i class="fa fa-lock fa-lg"></i>&nbsp;-->
                                        <!--        <span id="payment-button-amount">PartialPay Rs.-->
                                        <!--            <?php echo $partial;?></span>-->
                                        <!--        <input type="hidden" name="partial" value="<?php echo $partial;?>" />-->

                                        <!--        <span id="payment-button-sending" style="display:none;">Sending…</span>-->
                                        <!--        <?php } ?>-->
                                        <!--    </button>-->
                                        <!--</form>-->
                                        <div class="cashPay" style="padding:10px;">
                                            <p style="text-align:center; font-size:20px; padding-top:10px;"><strong>OR</strong></p>
                                               <a href="pay-later-success.php?bookid=<?php echo $bookid ?>" class="btn btn-lg btn-secondary btn-block">
                                                    <i class="fa fa-money fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay Later </span>
                                                    </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    
    
 <!-- jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
$('#mobile-view').click(function() {
    $('p').show();
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
});
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>



    <!-- end info section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
<?php include "website_footer.php"?>

</body>

</html>