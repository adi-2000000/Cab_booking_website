<?php
session_start();

include "config.php";

 $userid = $_SESSION['userid'];

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$car = $_SESSION['car'];
$distance = $_SESSION['distance'];
$distance1 = $_POST['distance'];
$bookid1 = $_SESSION['bookid'];
$phone = $_SESSION['phone'];
$pickup = $_SESSION['pickup'];
$drop = $_SESSION['drop'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$dateend = $_SESSION['dateend'];
$timeend = $_SESSION['timeend'];
$days= $_SESSION['days'];

$trip = $_SESSION['trip'];
$amount = $_POST['amount'];
$new_amount = $_POST['new_amount'];
$nightCharge = $_POST['nightCharges'];
$service = $_POST['service'];
$gst = $_POST['gst'];
$driver = $_POST['driver'];
$dis = $_POST['distance1'];
$car = $_POST['car'];

$picbd = mysqli_query($link,"SELECT * FROM `queries` WHERE bookid= '$bookid1'");
  while($rowbd = mysqli_fetch_array($picbd)){
    $offer2 = $rowbd['offer'];
   if($offer2 != NULL){
    $offern = $_POST['offer'];
  $offerpercent = $_POST['offerpercent'];
}else{
  $offern = 'NA';
  $offerpercent = 0;
}
  }
  if($offerpercent > 0){
  $offeramount = (int)$new_amount - ($new_amount/100)*$offerpercent;
  }else{
    $offeramount = 0;
    $offerpartial = 0;
  }
  
  
  $_SESSION['nightCharges'] = $nightCharge;
$_SESSION['offerpercent'] = $offerpercent;
$_SESSION['gst'] = $gst;
$_SESSION['service'] = $service;
$_SESSION['off'] = $off;
$_SESSION['rs'] = $_POST['rs'];
$_SESSION['base'] = $_POST['base'];
$_SESSION['days'] = $_POST['days'];
$_SESSION['car'] = $car;
$_SESSION['dis'] = $dis;
$_SESSION['driver'] = $driver;
$_SESSION['amount'] = $amount;
$_SESSION['new_amount'] = $new_amount;
$_SESSION['offeramount'] = $offeramount;

$roundDist = $distance * 2;
  
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

if ($trip == "One Way") {
  $int = (int) $distance;
} elseif ($trip == "Round") {
  $int = $perdayDis;
} elseif ($trip == "Rental") {
  $int = $distance;
}
$offerpartial = (int) ($offeramount / 100) * 25;
$_SESSION['offerpartial'] = $offerpartial;
$partial = (int) ($new_amount / 100) * 25;
$_SESSION['partial'] = $partial;
date_default_timezone_set('Asia/Calcutta');
$now = date('Y-m-d H:i:s');
$sql = "INSERT INTO `user_booking` (name, phone, email, user_pickup, user_drop, date, time, user_trip_type, status, bookid, distance, car, baseAmount,driver_bhata, amount,nightCharges' gst, service_charge, offeramount,offerpercent, partial,offer,offerpartial,dateend,timeend, bookingtype, userid,created_at)
   VALUES ('$name','$phone','$email','$pickup', '$drop', '$date', '$time', '$trip', '0', '$bookid1', '$int', '$car','$amount', '$driver', '$new_amount','$nightCharge','$gst', '$service', '$offeramount','$offerpercent','$partial', '$offern','$offerpartial','$dateend','$timeend', 'website','$userid','$now')";
if ($link->query($sql) === TRUE) {
  header('location:full-pay.php');
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}



?>