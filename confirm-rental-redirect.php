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
  $hours = $_SESSION['hours'];
  
  $trip = $_SESSION['trip'];
  $amount = $_POST['amount'];
  $new_amount = $_POST['new_amount'];
  $service = $_POST['service'];
  $gst = $_POST['gst'];
  $driver = $_POST['driver'];
  $dis = $_POST['distance'];
  $car = $_POST['car'];
  

  $offerpercent = $_POST['offerpercent'];
  if($offerpercent > 0){
  $offeramount = (int)$new_amount - ($new_amount/100)*$offerpercent;
  }
  $_SESSION['offerpercent'] = $offerpercent;
  $_SESSION['gst'] = $gst;
  $_SESSION['service'] = $service;
  $_SESSION['off'] = $off;
  $_SESSION['rs'] = $_POST['rs'];
  $_SESSION['base'] = $_POST['base'];
  $_SESSION['days'] = $_POST['days'];
  $_SESSION['car'] = $car;
  $_SESSION['dis'] = $dis;
  $_SESSION['driver']=$driver;
  $_SESSION['amount']=$amount;
  $_SESSION['new_amount'] = $new_amount;
  $_SESSION['offeramount'] = $offeramount;
  if ($trip == "One Way"){
      $int = (int)$distance;
  }elseif($trip == "Round"){
      $int = $dis;
  }elseif($trip == "Rental"){
      $int = (int)$distance;
  }
     $offerpartial = (int)($offeramount / 100) * 25;
     $_SESSION['offerpartial'] = $offerpartial;
     $partial = (int)($new_amount/ 100) * 25;
     $_SESSION['partial'] = $partial;   
     date_default_timezone_set('Asia/Calcutta');
    $now = date('Y-m-d H:i:s');
   $sql ="INSERT INTO `user_booking` (name, phone, email, user_pickup, user_drop, date, time, hours, user_trip_type, status, bookid, distance, car, amount,offeramount,offerpercent, partial,offerpartial,dateend,timeend, bookingtype,userid, created_at)
   VALUES ('$name','$phone','$email','$pickup', '$drop', '$date', '$time', '$hours', '$trip', '0', '$bookid1', '$int', '$car', '$new_amount','$offeramount','$offerpercent','$partial', '$offerpartial','$dateend','$timeend', 'website','$userid','$now')";
   if ($link->query($sql) === TRUE) {
        header('location:full-pay.php');
   } else {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
   
?>