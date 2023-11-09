<?php
session_start();
include "config.php";
$sql = "UPDATE `queries` SET select_car = 'visited' WHERE date ='$_SESSION[date]' ORDER BY id DESC LIMIT 1";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
$trip=$_SESSION['trip'];
$pickup = $_SESSION['pickup'] ; 
$drop= $_SESSION['drop'] ; 
$date= $_SESSION['date'] ; 
$time= $_SESSION['time'] ; 
$hours = $_SESSION['hours'];
//$int = $_SESSION['distance'];

 $pincode = $_SESSION['source_pincode'];
 
//$pincode = $_SESSION['pincode'];
//echo $pincode;
require('rental_pin_codes.php');

//echo $pincode;
//echo $city;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176124826-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-176124826-1');
    </script>

    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '391673948886677');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=391673948886677&ev=PageView&noscript=1" /></noscript>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GCC1XJLS7R"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-GCC1XJLS7R');
    </script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfLx_cHAlPLQ-agkeZldzPaqFyUtfBm64&libraries=places">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <meta name="google-site-verification" content="YfqTJ_rGcR5gwVrcNdpFwMfPUf8kdWPAbKQSmhvZkyA" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Syne&display=swap" rel="stylesheet">
    <title> Outstation Cab Booking Services | Online Cab Booking |</title>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="assets/css/cs-skin-elastic.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> 

    <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" -->
        <!-- crossorigin="anonymous"></script> -->
         <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    
    
    ul {
    list-style-type: none;
}

</style>

<style>
    
    @media screen and (max-width: 600px) {
    .card-container {
     width:140%;
    }
}
    
    
</style>
</head>

<body>
    <!-- trial nav bar  -->
           <?php include "website_header.php" ?>
    <br>

<div class="container-fluid">

<!-- card content start 1 and 2 -->

                 <?php
      $query = "SELECT * FROM rental_trip WHERE hours = '$hours' and city = '$city' AND status=0";
    $query_run = mysqli_query($link, $query);
    if(mysqli_num_rows($query_run) > 0)
       {
          foreach($query_run as $row)
       {
           if($row['sedan'] != 0){
        echo'
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card-container">
                <div class="card" style="width: 70%;">
                  <form id="form" action="booking-details-rental.php" Method="POST">
                    <div class="card-content">
                        <h2 class="card-title">Sedan</h2>
                        <button class="btn btn-success">NEW</button>
                        <p>
                            &#9679;&nbsp; Amaze   &nbsp;&nbsp; &#9679;&nbsp;Swift Dzire  &nbsp;&nbsp; &#9679;&nbsp; Aura/Xcent&nbsp;&nbsp;<br>
                            &#9658;<b style="color:#D81324;">For 4+1</b>
                        </p>
                        <center><span><img class="img-fluid" alt="Responsive image" src="img/Sedan.webp" alt="" style="height: 130px;"></span></center>
                        <div class="row text-center">
                    <p><i class="fas fa-music"></i> Music System&nbsp;&nbsp;<i class="fas fa-snowflake"></i> Air Conditioning</p>
                                <!--<p><i class="fas fa-snowflake"></i> Air Conditioning&nbsp;&nbsp;</p>-->
                                <p><i class="fas fa-car"></i> FastStay & 1 More&nbsp;&nbsp;<i class="fa fa-usb" aria-hidden="true"></i> USB Charging cable</p>
                                <!--<p><i class="fa fa-usb" aria-hidden="true"></i> USB Charging cable&nbsp;&nbsp;</p>-->
                                <p><i class="fas fa-gas-pump"></i> Fuel-type: CNG/Diesel&nbsp;&nbsp;<i class="fas fa-suitcase"></i> Luggage: 2 bags</p>
                                <!--<p><i class="fas fa-suitcase"></i> Luggage: 2 bags</p>-->
                            <input id="car" name="car" type="hidden" value="Sedan">
                           <div class="row text-center">
                                <div class="col-lg-6 centerdiv bookingcontent" style="padding-right: 20px;">
                                    <p style="color:red;">13% Off</p>
                                    <p style="font-size:25px;"><strong>Rs.'.$row['sedan'].'/-</strong></p>
                                    <input type="hidden" name="amount" value="'.$row['sedan'].'">       
                                    <?php $sedan = $value;?>
                                    <p style="color:grey;font-size:13px; padding-left: 35px;">&nbsp;&nbsp;Onwards</p>
                                </div>
                                <div class="col-lg-6 booknowbutton centerdiv">
                                    <button data-toggle="modal" data-target="#exampleModal" style="background-color: #D81324; border-radius: 10px; color: white;">BOOK NOW</button>
                                </div>
                            </div>              
                        </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
        ';
            }
        }
    } else {
        echo("<script>window.location = 'servicenotavailable.php';</script>");
    }
    ?>
</div>
<!-- card content end 1 and 2 -->


                    
                    
                    
                    
                    
    <?php
      $query = "SELECT * FROM rental_trip WHERE hours = '$hours' and city = '$city' AND status=0";
    $query_run = mysqli_query($link, $query);
    if(mysqli_num_rows($query_run) > 0)
       {
          foreach($query_run as $row)
       {
           if($row['suv'] != 0){
        echo'
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card-container">
                <div class="card" style="width: 70%;">
                  <form id="form" action="booking-details-rental.php" Method="POST">
                    <div class="card-content">
                        <h2 class="card-title">SUV</h2>
                        <button class="btn btn-success">NEW</button>
                        <p>
                            &#9679;&nbsp;Maruti Ertiga  &nbsp;&nbsp; &#9679;&nbsp;Mahindra marazoo  &nbsp;&nbsp; &#9679;&nbsp;Mahindra Xylo &nbsp;&nbsp;<br>
                            &#9658;<b style="color:#D81324;">For 6+1</b>
                        </p>
                        <center><span><img class="img-fluid" alt="Responsive image" src="img/SUV.webp" alt="" style="height: 130px;"></span></center>
                        <div class="row text-center">
                  <p><i class="fas fa-music"></i> Music System&nbsp;&nbsp;<i class="fas fa-snowflake"></i> Air Conditioning</p>
                                <!--<p><i class="fas fa-snowflake"></i> Air Conditioning&nbsp;&nbsp;</p>-->
                                <p><i class="fas fa-car"></i> FastStay & 1 More&nbsp;&nbsp;<i class="fa fa-usb" aria-hidden="true"></i> USB Charging cable</p>
                                <!--<p><i class="fa fa-usb" aria-hidden="true"></i> USB Charging cable&nbsp;&nbsp;</p>-->
                                <p><i class="fas fa-gas-pump"></i> Fuel-type: CNG/Diesel&nbsp;&nbsp;<i class="fas fa-suitcase"></i> Luggage: 2 bags</p>
                                <!--<p><i class="fas fa-suitcase"></i> Luggage: 2 bags</p>-->
                            <input id="car" name="car" type="hidden" value="Sedan">
                           <div class="row text-center">
                                <div class="col-lg-6 centerdiv bookingcontent" style="padding-right: 20px;">
                                    <input id="car" name="car" type="hidden" value="Hatchback">
                                    <p style="color:red;">13% Off</p>
                                <p style="font-size:25px;"><strong>Rs.'.$row['suv'].'/-</strong></p>
                                    <input type="hidden" name="amount" value="'.$row['suv'].'">
                            <input type="hidden" name="rs" value="<?php echo $b;?>">
                            <input type="hidden" name="days" value="<?php echo $days;?>">
                            <input type="hidden" name="driver" value="<?php echo $driver;?>">
                            <input type="hidden" name="dis" value="<?php echo $roundDist;?>">
                            <?php $ertiga = $value;?>
                            <p style="color:grey;font-size:13px; padding-left: 35px;">&nbsp;&nbsp;Onwards</p>
                                </div>
                                <div class="col-lg-6 booknowbutton centerdiv">
                                    <button data-toggle="modal" data-target="#exampleModal" style="background-color: #D81324; border-radius: 10px; color: white;">BOOK NOW</button>
                                </div>
                            </div>              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        ';
        }
    }
} else {
    echo("<script>window.location = 'servicenotavailable.php';</script>");
}
?>
<!-- card content end 3 and 4 -->

<!-- card content start 5 -->
<div class="container-fluid">
    <?php
      $query = "SELECT * FROM rental_trip WHERE hours = '$hours' and city = '$city' AND status=0";
    $query_run = mysqli_query($link, $query);
    if(mysqli_num_rows($query_run) > 10)
       {
          foreach($query_run as $row)
       {
            if($row['suvplus'] != 0){
        echo '
    <div class="row justify-content-center"> <!-- Center the card within the row -->
        <div class="col-lg-5">
            <div class="card-container">
                <div class="card" style="width: 70%;">
                  <form id="form" action="booking-details-rental.php" Method="POST">
                    <div class="card-content">
                        <h2 class="card-title">MUV</h2>
                        <button class="btn btn-success">NEW</button>
                        <p>
                            &#9679;&nbsp;Innova Crysta  &nbsp;&nbsp;<br>
                            &#9658;<b style="color:#D81324;">For 6+1</b>
                        </p>
                        <center><span><img class="img-fluid" alt="Responsive image" src="img/car6.png" alt="" style="height: 130px;"></span></center>
                        <div class="row text-center">
                  <p><i class="fas fa-music"></i> Music System&nbsp;&nbsp;<i class="fas fa-snowflake"></i> Air Conditioning</p>
                                <!--<p><i class="fas fa-snowflake"></i> Air Conditioning&nbsp;&nbsp;</p>-->
                                <p><i class="fas fa-car"></i> FastStay & 1 More&nbsp;&nbsp;<i class="fa fa-usb" aria-hidden="true"></i> USB Charging cable</p>
                                <!--<p><i class="fa fa-usb" aria-hidden="true"></i> USB Charging cable&nbsp;&nbsp;</p>-->
                                <p><i class="fas fa-gas-pump"></i> Fuel-type: CNG/Diesel&nbsp;&nbsp;<i class="fas fa-suitcase"></i> Luggage: 2 bags</p>
                                <!--<p><i class="fas fa-suitcase"></i> Luggage: 2 bags</p>-->
                            <input id="car" name="car" type="hidden" value="Sedan">
                            <div class="row text-center">
                                <div class="col-lg-6 centerdiv bookingcontent" style="padding-right: 20px;">
                                    <input id="car" name="car" type="hidden" value="Hatchback">
                                    <p style="color:red;">13% Off</p>
                                <p style="font-size:25px;"><strong>Rs.'.$row['suvplus'].'/-</strong></p>
                                    <input type="hidden" name="amount" value="'.$row['suvplus'].'">
                            <input type="hidden" name="rs" value="<?php echo $b;?>">
                            <input type="hidden" name="days" value="<?php echo $days;?>">
                            <input type="hidden" name="driver" value="<?php echo $driver;?>">
                             <input type="hidden" name="dis" value="<?php echo $roundDist;?>">
                            <?php $innova = $value;?>
                            <p style="color:grey;font-size:13px; padding-left: 35px;">&nbsp;&nbsp;Onwards</p>
                                </div>
                                <div class="col-lg-6 booknowbutton centerdiv">
                                    <button data-toggle="modal" data-target="#exampleModal" style="background-color: #D81324; border-radius: 10px; color: white;">BOOK NOW</button>
                                </div>
                            </div>              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        ';
            }
        }
    }
    ?>
</div>
<!-- card content end 5 -->





































        <?php include "website_footer.php"?>


    <!-- style start for this page   -->
    <style>
    
     body{
        font-size:15px;
    }
        .socialmediacontainer
        {
            text-align:right;
            padding-top:15px;
        }
        .rightreserveddiv
        {
            text-align:center;
            padding-top:2%;
        }
        .quicklinks {
            text-align: center;
        }

        .footer {
            background-color:black;
            padding: 50px;
            color:#FFC107;
        }
        .footer h5
        {
            color:white;
        }

        .footerconatiner {
            text-align: left;
        }

        .bookingcontent {
            text-align: center;
        }

        .booknowbutton {
            padding-top: 10%;
            padding-left: 9%;

        }
        


        .centerdiv {
            padding-top: 2%;
            text-align:center;
        }

        .bookingsectiondiv button {
            display: flex;
            align-items: center;
            /* padding:15px; */
            font-size: 15px;
            padding: 10px;
            background-color: #faa499;
            background-image: linear-gradient(319deg, #faa499 0%, #f7dd85 37%, #ffc55c 100%);
            border-radius: 15px;

        }

        .bookingsectiondiv button:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .bookingsectiondiv {
            text-align: right;
            /* padding: 50px; */
        }

        .card {
            padding: 20px;
            margin: 2px;
            border-radius: 25px;
        }

        body {
            background-color: #F8F9FA;
        }

        .headercontaoner {
            background-color: #CDC7C7;
             /* background-color::#FFFFFF; */
             width:100%;
        }

        .navbar {
            background-color: #CDC7C7;
            margin-bottom:0px;
            /* background-color: #FFFFFF; */
        }

        .navbar ul li {
            padding-left: 15px;
        }

        .navbar form {
            padding-left: 15px;
        }

        .ammentities {
            padding: 100px;
            text-align: left;
        }

        .ammentities ul li {
            line-height: 200%;
        }

        .ammentities ul.no-bullets {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .description {
            text-align: center;
            font-size: 20px;
            line-height: 200%;
            padding: 100px;
            background-image: url("images/background.jpg");
        }

        .description button {
            /* display: flex; */
            align-items: center;
        }

        .classbutton {
            background-color: #FFFFFF;
            /* Green */
            border: none;
            color: white;
            padding: 12px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            color: black;
        }
        
        
                @media screen and (max-width: 480px) {
  .booknowbutton {
            /padding-top: 10%;/
            padding-left: 34%;

        }
                }
                
                 @media screen and (min-width: 480px) {
  .booknowbutton {
            padding-top: 10%;

        }
                }
    </style>
    <!-- style and script end for this page  -->


    <!-- style and script for multilavel  -->
    <style type="text/css">
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .dropdown-menu li {
                position: relative;
            }

            .dropdown-menu .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .dropdown-menu .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: #f1f1f1
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {

            .dropdown-menu .dropdown-menu {
                margin-left: 0.7rem;
                margin-right: 0.7rem;
                margin-bottom: .5rem;
            }

        }

        /* ============ small devices .end// ============ */
    </style>


    <script type="text/javascript">
        //	window.addEventListener("resize", function() {
        //		"use strict"; window.location.reload(); 
        //	});


        document.addEventListener("DOMContentLoaded", function () {


            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function (element) {
                element.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            })



            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.submenu').forEach(function (everysubmenu) {
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
                    element.addEventListener('click', function (e) {

                        let nextEl = this.nextElementSibling;
                        if (nextEl && nextEl.classList.contains('submenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();
                            console.log(nextEl);
                            if (nextEl.style.display == 'block') {
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth

        });
        // DOMContentLoaded  end
    </script>
    <!-- style and script end for multilavel  -->
</body>

</html>