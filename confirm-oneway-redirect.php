<?php 
  session_start();  

  include "config.php";
  
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
  $_SESSION['driver']=$driver;
  $_SESSION['amount']=$amount;
  $_SESSION['new_amount'] = $new_amount;
  $_SESSION['offeramount'] = $offeramount;
  if ($trip == "One Way"){
      $int = (int)$distance;
  }elseif($trip == "Round"){
      $int = $dis;
  }elseif($trip == "Rental"){
      $int = $distance;
  }
     $offerpartial = (int)($offeramount / 100) * 25;
       $_SESSION['offerpartial'] = $offerpartial;
        $partial = (int)($new_amount/ 100) * 25;
       $_SESSION['partial'] = $partial;
     date_default_timezone_set('Asia/Calcutta');
    $now = date('Y-m-d H:i:s');
   $sql ="INSERT INTO `user_booking` (name, phone, email, user_pickup, user_drop, date, time, user_trip_type, status, bookid, distance, car, baseAmount, driver_bhata, amount,nightCharges, gst, service_charge, offeramount, offerpercent, partial,offer, offerpartial, dateend, timeend, bookingtype, created_at)
   VALUES ('$name','$phone','$email','$pickup', '$drop', '$date', '$time', '$trip', '0', '$bookid1', '$int', '$car','$amount','$driver', '$new_amount','$nightCharge', '$gst','$service', '$offeramount','$offerpercent','$partial', '$offern','$offerpartial','$dateend','$timeend', 'website','$now')";
   
   if ($link->query($sql) === TRUE) {
      // echo $sql;
        header('location:full-pay.php');
   } else {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
    
?>