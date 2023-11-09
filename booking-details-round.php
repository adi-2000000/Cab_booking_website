
<?php
include "config.php";
session_start();
$sql = "UPDATE `queries` SET booking_details_round = 'visited' WHERE phone ='$_SESSION[phone]' ORDER BY id DESC LIMIT 1";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
        if(!isset($_SESSION["booked"]) && $_SESSION['booked'] != true){
               header("location:index.php");
              exit;
    }

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $car=$_SESSION['car'];
  $phone =$_SESSION['phone'] ; 
  $bookid1 = $_SESSION['bookid'];
  $pickup = $_SESSION['pickup'] ; 
  $drop= $_SESSION['drop'] ; 
  $date= $_SESSION['date'] ; 
  $time= $_SESSION['time'] ; 
  $amount1=(int)$_SESSION['amount'];
  $driver = $_SESSION['driver'];
  $car_price= $_SESSION['car_price'];
  $dateend= $_SESSION['dateend']; 
  $timeend= $_SESSION['timeend']; 
  $days= $_SESSION['days'];
  //$dis=$_SESSION['dis'];
  $inttance=$_SESSION['distance'];
  //$int=(int)$inttance;
  $rs=$_SESSION['rs'];
  $trip=$_SESSION['trip'];
  $amount = $amount1 + $driver;
  $service=(int)($amount/100)*10;
  $gst=(int)($amount/100)*5 ;
  
   $time2 = '0'.$time;
 $timeHrs =  date("H:i", strtotime($time2));

$start = '00:00';
$end = '05:30';

if($timeHrs >= $start && $timeHrs <= $end) {
 $nightCharge = 250;
}else {
    $nightCharge = 0;
}
  
  $partial = (int)($new_amount / 100) * 25;
  $bookid1 = $_SESSION['bookid'];
  $new_amount1 = $service + $gst + $amount + $nightCharg;
  
  $roundDist = $inttance * 2;
  
$dr = $days*300;
if($roundDist <= 300 && $days == 1){
  $perdayDis = 300;
  }elseif( $roundDist > 300 && $days == 1){
    $perdayDis = $roundDist;
}
elseif($roundDist <= 600 && $days == 2){
  $perdayDis = 600;
  }
elseif($roundDist > 600 && $days == 2){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 900 && $days == 3){
  $perdayDis = 900;
}
elseif($roundDist > 900 && $days == 3){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 1200 && $days == 4){
  $perdayDis = 1200;
  }
elseif($roundDist > 1200 && $days == 4){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 1500 && $days == 5){
  $perdayDis = 1500;
  }
elseif($roundDist > 1500 && $days == 5){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 1800 && $days == 6){
  $perdayDis = 1800;
  }
elseif($roundDist > 1800 && $days == 6){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 2100 && $days == 7){
  $perdayDis = 2100;
  }
elseif($roundDist > 2100 && $days == 7 ){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 2400 && $days == 8){
  $perdayDis = 2400;
  }
elseif($roundDist > 2400 && $days == 8){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 2700 && $days == 9){
  $perdayDis = 2700;
  }
elseif($roundDist > 2700 && $days == 9){
  $perdayDis = $roundDist;
}
elseif($roundDist <= 3000 && $days == 10){
  $perdayDis = 3000;
  }
elseif($roundDist > 3000 && $days == 10){
  $perdayDis = $roundDist;
}


/* Calculate distance condition  */

  if($roundDist <= 300 && $days == 1){
    $int = 300 * $days;
    }elseif( $roundDist > 300 && $days == 1){
      $dPlus = $roundDist - 300;
      $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 600 && $days == 2){
    $int = 300 * $days;
    }
  elseif($roundDist > 600 && $days == 2){
    $dPlus = $roundDist - 600;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 900 && $days == 3){
    $int = 300 * $days;
  }
  elseif($roundDist > 900 && $days == 3){
    $dPlus = $roundDist - 900;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 1200 && $days == 4){
    $int = 300 * $days;
    }
  elseif($roundDist > 1200 && $days == 4){
    $dPlus = $roundDist - 1200;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 1500 && $days == 5){
    $int = 300 * $days;
    }
  elseif($roundDist > 1500 && $days == 5){
    $dPlus = $roundDist - 1500;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 1800 && $days == 6){
    $int = 300 * $days;
    }
  elseif($roundDist > 1800 && $days == 6){
    $dPlus = $roundDist - 1800;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 2100 && $days == 7){
    $int = 300 * $days;
    }
  elseif($roundDist > 2100 && $days == 7 ){
    $dPlus = $roundDist - 1500;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 2400 && $days == 8){
    $int = 300 * $days;
    }
  elseif($roundDist > 2400 && $days == 8){
    $dPlus = $roundDist - 2400;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 2700 && $days == 9){
    $int = 300 * $days;
    }
  elseif($roundDist > 2700 && $days == 9){
    $dPlus = $roundDist - 2700;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 3000 && $days == 10){
    $int = 300 * $days;
    }
  elseif($roundDist > 3000 && $days == 10){
    $dPlus = $roundDist - 3000;
    $int = 300 * $days + $dPlus;
  }
  elseif($roundDist <= 30){
    header('location:unavailable.php');
  }
  
  
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

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-GCC1XJLS7R');
    </script>
    <title>Confirmation Booking Details</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Noto+Sans:wght@300&display=swap"
        rel="stylesheet">
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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>



    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Work+Sans:wght@800&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;

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

    .imgcar {
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
    </style>


    <style>
    .form__group {
        position: relative;
        padding: 15px 0 0;
        margin-top: 10px;
        width: 60%;
    }

    .form__field {
        font-family: inherit;
        width: 100%;
        border: 0;
        border-bottom: 2px solid black;
        outline: 0;
        font-size: 1.3rem;
        color: black;
        padding: 7px 0;
        background: transparent;
        transition: border-color 0.2s;

        &::placeholder {
            color: transparent;
        }

        &:placeholder-shown~.form__label {
            font-size: 1.3rem;
            cursor: text;
            top: 20px;
        }
    }

    .form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 1rem;
        color: black;
    }

    .form__field:focus {
        ~.form__label {
            position: absolute;
            top: 0;
            display: block;
            transition: 0.2s;
            font-size: 1rem;
            color: black;
            font-weight: 700;
        }

    }

    /* reset input */
    .form__field {

        &:required,
        &:invalid {
            box-shadow: none;
        }
    }
    </style>

    <style>
    /* Modal Code */
    .modal-confirm {
        color: #636363;
        width: 325px;
        font-size: 14px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -15px;
    }

    .modal-confirm .form-control,
    .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
    }

    .modal-confirm .icon-box {
        color: #fff;
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -70px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #ffc107;
        padding: 15px;
        text-align: center;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-confirm .icon-box i {
        font-size: 58px;
        position: relative;
        top: 3px;
    }

    .modal-confirm.modal-dialog {
        margin-top: 80px;
    }

    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #ffc107;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border: none;
    }

    .modal-confirm .btn:hover,
    .modal-confirm .btn:focus {
        background: #0b0b0a;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        /*margin: 100px auto;*/
    }
    
    .container{
        width:50%;
    }
    </style>
    
    <style>
     @media (max-width: 767px) {
    .card {
       /* Reduce margin for smaller screens */
        /* Reduce padding for smaller screens */
        width:150%;
      
        margin:auto;
          border:none;
    }
    
    
     .textmuted {
        color: #6c757d;
        font-size: 13px;
    }

    .fs-14 {
        font-size: 14px;
    }
    .row{
        margin-left: -100px;
        border:none;
    }
    .container{
        border:none;
    }
     
    

  
}
    
    
</style>
    <!--NEW---BOOKING----DETAILS-----CODE--->


      <div class="container">
        <div class="card" style="margin:20px; padding:10px;">
            <!--<div class="row m-0">-->
            <!--    <div class="col-lg-7 pb-5 pe-lg-5">-->
                <!--    <div class="row">-->
                <!--        <div class="col-8 p-5">-->
                <!--        </div>-->
                     
                <!--</div>-->
                <div class="row">
                    
                      <div class="d-flex justify-content-center ">
                            <p class="textmuted"></p>
                            <p class="fs-14 fw-bold" style="margin-left:250px"><b>Invoice</b></p>
                        </div>
                    <div class="col-12">
                                        <div class="card1" style="margin: 20px; border: 1px solid #000;padding:10px">

                        
                        
                        
                        
                          
                           
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--<div class="d-flex align-items-end mt-4 ">-->
                        <!--    <p class="h4 m-0"><span class="pe-1"><?php echo $trip?> Trip</span></p>-->
                        <!--</div>-->
                   
                      <div class="d-flex justify-content-between ">
                            <p class="textmuted">Trip </p>
                            <p class="fs-14 fw-bold"><b><?php echo $trip?></b></p>
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
                            <p class="textmuted">Start Date</p>
                            <p class="fs-14 fw-bold"><b><?php echo $date?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Start Time</p>
                            <p class="fs-14 fw-bold"><b><?php echo $time?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">End Date</p>
                            <p class="fs-14 fw-bold"><b><?php echo $dateend?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">End Time</p>
                            <p class="fs-14 fw-bold"><b><?php echo $timeend?></b></p>
                        </div>
                         <div class="d-flex justify-content-between ">
                            <p class="textmuted">Distance/day</p>
                             <p class="fs-14 fw-bold"><b>300Km</b></p>
                        </div>
                        
                        </div>
</div>

                        
                        <div class="col-12">
            <!-- Second Card -->
            <div class="card1" style="margin: 20px; border: 1px solid #000;padding:10px">
                          <div class="d-flex justify-content-between ">
                            <p class="textmuted">Driver Bhata / Day</p>
                             <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span>300</b></p>
                        </div>
                         <br>
                        
                         
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">BaseFare(t.distance x Rs/Km)</p>
                            <p class="fs-14 fw-bold"><b>&nbsp&nbsp&nbsp&nbsp<span class="fa fa-inr"></span><?php echo $amount1?></b></p>
                        </div>
                         <div class="d-flex justify-content-between ">
                            <p class="textmuted">DriverBhata(DriverBhata x days)</p>
                            <p class="fs-14 fw-bold"><b>&nbsp&nbsp&nbsp&nbsp<span class="fa fa-inr"></span><?php echo $driver?></b></p>
                        </div>
                        <?php
                        if($timeHrs >= $start && $timeHrs <= $end) {
                            ?>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Night Charges</p>
                            <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span> <?php echo $nightCharge?></b></p>
                        </div>
                         <?php } ?>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">GST(5%)</p>
                            <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span>  <?php echo $gst?></b></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <p class="textmuted">Service Charges(10%)</p>
                            <p class="fs-14 fw-bold"><b><span class="fa fa-inr"></span>  <?php echo $service?></b></p>
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

                            -webkit-transform: rotate(-5deg);
                            -moz-transform: rotate(-5deg);
                            -ms-transform: rotate(-5deg);
                            -o-transform: rotate(-5deg);
                            transform: rotate(-5deg);
                        }
                        </style>
                       
                        <?php
                         //after promo code applied
                         $pic = mysqli_query($link,"SELECT * FROM `offer`");
                         while($row = mysqli_fetch_array($pic)){
                          $offer = $row['offer'];  
                             $offerpercent = $row['percent'];


                             $picn = mysqli_query($link,"SELECT * FROM `queries` WHERE bookid ='$bookid1' ");
                                         $rown = mysqli_fetch_array($picn);
                                          $offern = $rown['offer'];


                                if($offern == $offer){
                                    
                                      $off_amount = (int)$new_amount1 - ($new_amount1/100)*$offerpercent;

                                   echo'
                                    <div class="d-flex justify-content-between ">
                                <p class="textmuted">Offer</p>
                                <p class="fs-14 fw-bold"><b> '.$offer. ' </b></p>
                                </div>
                                   <div class="d-flex justify-content-between ">
                                <p class="textmuted">Total</p>
                                <p class="fs-14 fw-bold"><b><span class="strikethrough"><span class="fa fa-inr"></span>'.$new_amount1.'</span></b></p>
                                </div>
                                  <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Sub Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="fa fa-inr mt-1 pe-1 fs-14 "></span><span class="h4">'.$off_amount.'</span>
                            </div>
                        </div>
                                ';
                                       }else{                                        
                                           
                                           echo '    <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Sub Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="fa fa-inr mt-1 pe-1 fs-14 "></span><span class="h4">'.$new_amount1.'</span>
                            </div>
                        </div>';
                                       }
                         }
                                      ?>
                        <br><br>


                       
                        <?php
                      $picbd = mysqli_query($link,"SELECT * FROM `queries` WHERE bookid= '$bookid1'");
                      while($rowbd = mysqli_fetch_array($picbd)){
                        $offer2 = $rowbd['offer'];
                       if($offer2 == NULL){
                        echo '
                        <div class="col-12">
                            <form action="booking-details-round.php" method="post">
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col">
                                        </button>
                                    </div>
                                </div>
                            </form>';
                        }
                    }
                    if(isset($_POST['applycode'])){
                        $sql4 ="UPDATE queries SET offer = '$_POST[offer]' WHERE bookid ='$bookid1'";
                        mysqli_query($link, $sql4); 
                        echo "<script>window.open('booking-details-round.php','_self') </script>"; 
                                        
                             $pic = mysqli_query($link,"SELECT * FROM `offer`");
                             while($row = mysqli_fetch_array($pic)){
                              $offer = $row['offer'];
                              $percent = $row['percent'];
                                    if($_POST['offer'] != $offer){                                  
                                       echo'<p class="fs-14 fw-bold text-danger"><b>Enter Valid Offer<b></p>';                        
                           }                   
                    }
                } 
                ?>

                        </div>
                        <br><br>

                        <div class="col-12 px-0">
                            <div class="row m-0">
                                <div class="col-12  mb-4 p-0">
                                    <form action="confirm-oneway-redirect.php" method="post">
                                        <input type="hidden" name="amount" value="<?php echo $amount;?>">
                                        <input type="hidden" name="new_amount" value="<?php echo $new_amount1;?>">
                                        <input type="hidden" name="service" value="<?php echo $service;?>">
                                        <input type="hidden" name="nightCharges" value="<?php echo $nightCharge;?>">
                                        <input type="hidden" name="driver" value="<?php echo $driver;?>">
                                        <input type="hidden" name="gst" value="<?php echo $gst;?>">
                                        <input type="hidden" name="car" value="<?php echo $car;?>">
                                        <input type="hidden" name="rs" value="<?php echo $rs;?>">
                                        <input type="hidden" name="off" value="<?php echo $off;?>">
                                        <input type="hidden" name="offer" value="<?php echo $offern;?>">
                                        <input type="hidden" name="offeramount" value="<?php echo $off_amount;?>">
                                        <input type="hidden" name="offerpercent" value="<?php echo $offerpercent;?>">

                                        <button class="btn btn-primary" type="submit">Proceed to Pay</button> 
                                        <?php
                                        $pic = mysqli_query($link,"SELECT * FROM `offer`");
                                        while($row = mysqli_fetch_array($pic)){
                                         $offer = $row['offer'];

                                         $picn = mysqli_query($link,"SELECT * FROM `queries` WHERE bookid ='$bookid1' ");
                                         $rown = mysqli_fetch_array($picn);
                                          $offern = $rown['offer'];
                                          $percent = $row['percent'];

                                      if($offern == $offer){
                                       echo '<p class="fs-14 fw-bold text-success"><b>New Offer of '; 
                                       echo $percent;
                                       echo '% Applied<b></p>';
                                       }
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