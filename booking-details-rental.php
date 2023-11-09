
<?php

session_start();
include "config.php";
$sql = "UPDATE `queries` SET booking_details_rental = 'visited' WHERE phone ='$_SESSION[phone]' ORDER BY id DESC LIMIT 1";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $car=$_POST['car'];
  $phone =$_SESSION['phone'] ; 
  $pickup = $_SESSION['pickup'] ; 
  $drop= $_SESSION['drop'] ; 
  $date= $_SESSION['date'] ; 
  $time= $_SESSION['time'] ; 
 $amount=$_POST['amount'];
 //echo $amount;
  //$distance=$_POST['distance'];
  $trip=$_SESSION['trip'];
  $hours = $_SESSION['hours'];
   $pincode = $_SESSION['source_pincode'];
  //echo $pincode;
require('rental_pin_codes.php');

//echo $city;

 /* if($_SESSION['offer'] == "AIMNEW15"){
     $off = (int)($amount / 100) * 10;
     $amount1 = $amount - $off; 
  }*/

    if($amount < 100)
  {
      $gst = 10;
      $service = 20;
  }elseif($amount < 50){
      $gst = 5;
      $service = 10;
  }else{
       $service=(int)($amount/100)*10;
       $gst=(int)($amount/100)*5 ;      
  }
  
  
  $new_amount1 = $service + $gst + $amount ;
  
  $bookid1 = $_SESSION['bookid'];
  

   /*['formzt']==0;
   if ($_SESSION['formzt']==0){
  
   $sql ="INSERT INTO `user_booking` (user_pickup, user_drop, date, time, phone, user_trip_type, status, bookid, distance, car, amount, partial, bookingtype)
   VALUES ('$pickup', '$drop', '$date', '$time', '$phone', '$trip', '0', '$bookid1', '$int', '$car', '$new_amount', '$partial', 'website')";
   mysqli_query($link, $sql);  
   
  //  if ($link->query($sql) === FALSE) {
  //  echo "<br>" . $link->error;
  //  } 
   $_SESSION['formzt']++;
   }*/

?>

<!DOCTYPE html>

<html>

<head>
    <?php include 'tags.php';?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <title>Confirmation Booking Details</title>
 
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/card.css" rel="stylesheet" />
  <!-- responsive style -->
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <style>
        @media (max-width: 767px) {
            /* Adjust styles for mobile view */

            .container {
                width: 90%; /* Use full width on smaller screens */
            }

            .card {
                margin: -50% ;
                padding: 10px;
                border:none;
            }

            .row {
                margin-left: 0; /* Reset margin for smaller screens */
            }

            .form-control, .form-control2, .form-control3 {
                width: 80%; /* Use full width for input fields */
            }

         

            .btn.btn-primary {
                height: 45px; /* Reduce button height for smaller screens */
            }

            /* Add any other mobile-specific styles here */
        }
    </style>
</head>
<body>
    
         <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container bg-light fixed-top ">

          <a class="navbar-brand" href="index.php">
              
            <img src="" alt="">
        <nav class="navbar navbar-expand-lg custom_nav-container bg-light fixed-top ">
          <a class="navbar-brand" href="index.php">
        <span>AJCABS</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hot Cities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Popular Cities</a>
                </li>
                
              </ul>
            </div>
          </div>-->
        </nav>
      </div>
    </header>

    
    
    
    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Work+Sans:wght@800&display=swap');
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}

body{
     padding:5%;
}
.container {
    margin: 20px auto;
    max-width: 1000px;
    background-color: white;
    padding: 0;
}


.form-control {
    height: 25px;
    width: 150px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
    font-size: 14px;
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.form-control2 {
    font-size: 14px;
    height: 20px;
    width: 55px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
}

.form-control2:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.form-control3 {
    font-size: 14px;
    height: 20px;
    width: 30px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
}

.form-control3:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

p {
    margin: 0;
}

img {
    width: 100%;
    height: 100%;
    object-fit: fill;
}

.text-muted {
    font-size: 10px;
}

.textmuted {
    color: #6c757d;
    font-size: 13px;
}

.fs-14 {
    font-size: 14px;
}

.btn.btn-primary {
    width: 100%;
    height: 55px;
    border-radius: 0;
    padding: 13px 0;
    background-color: black;
    border: none;
    font-weight: 600;
}

.btn.btn-primary:hover .fas {
    transform: translateX(10px);
    transition: transform 0.5s ease
}


.fw-900 {
    font-weight: 900;
}

::placeholder {
    font-size: 12px;
}

.ps-30 {
    padding-left: 30px;
}

.h4 {
    font-family: 'Work Sans', sans-serif !important;
    font-weight: 800 !important;
}

.textmuted,
h5,
.text-muted {
    font-family: 'Poppins', sans-serif;
}
 .container{
        width:50%;
    }
    </style>
    

<!--NEW---BOOKING----DETAILS-----CODE--->   

 <div class="container">
    <div class="card">
       
         <div class="row m-0">
            
             <!--</div>-->
             
             
             <!--<div class="col-lg-7 pb-5 pe-lg-5">-->
                <!--<div class="row">-->
                    <!--<div class="col-8 p-5">-->
                           
                    <!--</div>-->
                <!--    <div class="row m-0">-->
                <!--        <div class="col-md-2 col-6  ps-30 my-4">-->
                <!--            <p class="text-muted">Car Type</p>-->
                <!--            <p class="h5 m-0"><?php echo $car?></p>-->
                <!--        </div>-->
                <!--           <div class="col-md-5 col-6 ps-30 pe-0 my-4">-->
                <!--            <p class="text-muted">PICKUP</p>-->
                <!--            <p class="h5"><span class="ps-1"><?php echo $pickup?></span></p>-->
                <!--        </div>-->
                <!--           <div class="col-md-5 col-6 ps-30 pe-0 my-4">-->
                <!--            <p class="text-muted">DROP</p>-->
                <!--            <p class="h5"><span class="ps-1"> <?php echo $drop?></span></p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
             
             
             
             
             
             
             
             
             
             
             
             
             
             
                
                      <div class="d-flex justify-content-center ">
                            <p class="textmuted"></p>
                            <p class="fs-14 fw-bold" style="margin-left:250px"><b>Invoice</b></p>
                        </div>
             
             
             
             
                <!--<div class="row m-0">-->
                    
                    <div class="col-12 px-4">
                                                                <div class="card1" style="margin: 20px; border: 1px solid #000;padding:10px">

                        <div class="d-flex align-items-end mt-4 ">
                            <p class="h4 m-0"><span class="pe-1"></span></span></p>
                        </div>
                        
                        <div class="d-flex align-items-end mt-4 ">
                            <p class="h4 m-0"><span class="pe-1"><?php echo $trip?> Trip</span></p>
                        </div>
                   
                         <div class="d-flex align-items-end mt-4 ">
                            <p class="h4 m-0"><span class="pe-1"></span></span></p>
                        </div>
                         <div class="d-flex justify-content-between ">
                            <p class="textmuted">Pickup </p>
                            <p class="fs-14 fw-bold"><b><?php echo $pickup?></b></p>
                        </div>  <div class="d-flex justify-content-between ">
                            <p class="textmuted">Drop </p>
                            <p class="fs-14 fw-bold"><b><?php echo $drop?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Phone No </p>
                            <p class="fs-14 fw-bold"><b><?php echo $phone?></b></p>
                        </div>
                          <div class="d-flex justify-content-between ">
                            <p class="textmuted">Car Type </p>
                            <p class="fs-14 fw-bold"><b><?php echo $car?></b></p>
                        </div> 
                      
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Date</p>
                            <p class="fs-14 fw-bold"><b><?php echo $date?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Time</p>
                            <p class="fs-14 fw-bold"><b><?php echo $time?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Hours</p>
                            <p class="fs-14 fw-bold"><b><?php echo $hours?> Hrs</b></p>
                        </div>
                         <div class="d-flex justify-content-between ">
                            <p class="textmuted">Distance(Fixed km)</p>
                            <?php
                            
                           include "config.php";
                            $query = "SELECT * FROM `rental_trip` WHERE hours = '$hours' and city = '$city' AND status=0";
                             // FETCHING DATA FROM DATABASE
                            $result = mysqli_query($link, $query);
                             // OUTPUT DATA OF EACH ROW
                             $row = mysqli_fetch_assoc($result);
                             $distance = $row['distance'];
                             //$_SESSION['distance'] = $distance;

                            ?>
                             <p class="fs-14 fw-bold"><b><?php echo $distance ?> KM</b></p>
                        </div>
                            </div>
</div>
                        
                        <div class="col-12">
            <!-- Second Card -->
            <div class="card1" style="margin: 20px; border: 1px solid #000;padding:10px">
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Base Fare(Fixed amount)</p></p>
                            <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span><?php echo $amount?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">GST (5%)</p>
                            <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span> <?php echo $gst?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Service Charges (10%)</p>
                            <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span> <?php echo $service?></b></p>
                        </div>
                        <style>
                        .strikethrough {
                                  position: relative;
                                }
                                .strikethrough:before {
                                  position: absolute;
                                  content: "";
                                  left: 0;
                                  top: 50%;
                                  right: 0;
                                  border-top: 1px solid;
                                  border-color: inherit;
                                  
                                  -webkit-transform:rotate(-5deg);
                                  -moz-transform:rotate(-5deg);
                                  -ms-transform:rotate(-5deg);
                                  -o-transform:rotate(-5deg);
                                  transform:rotate(-5deg);
                                }
                        </style>
                         <?php
                                if($_SESSION['offer'] == "AIMNEW15"){
                                   echo'
                                    <div class="d-flex justify-content-between ">
                                <p class="textmuted">Offer</p>
                                <p class="fs-14 fw-bold"><b>AIMNEW10</b></p>
                                </div>
                                   <div class="d-flex justify-content-between ">
                                <p class="textmuted">Total</p>
                                <p class="fs-14 fw-bold"><b><span class="strikethrough"><span class="fa fa-inr"></span>'.$amount1.'</span></b></p>
                                </div>';
                                       }
                                       ?>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Sub Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="fa fa-inr mt-1 pe-1 fs-14 "></span><span class="h4"><?php echo $new_amount1;?></span>
                            </div>
                        </div>
                    </div>
                 
                
                    <div class="col-12 px-0">
                        <div class="row m-0">
                            <div class="col-12  mb-4 p-0">
                                    <form action="confirm-rental-redirect.php" method="post">
                                    <input type="hidden" name="new_amount" value="<?php echo $new_amount1;?>">
                                    <input type="hidden" name="distance" value="<?php echo $distance;?>">
                                     <input type="hidden" name="car" value="<?php echo $car;?>">
                              
                                <button class="btn btn-primary" type="submit">CONFIRM BOOKING
                                </button>
                               
                                     <?php
                                if($_SESSION['offer'] == "aimnew10"){
                                   echo'<p class="fs-14 fw-bold"><b>New Offer of 10% applied<b></p>';
                                       }
                                       ?>
                                  </form>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
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

