<?php 
    session_start();
    
     $bookid = $_POST['bookid'];
     
   $car=$_POST['car'];
    $phone =$_POST['phone'] ; 
    $pickup = $_POST['pickup'] ; 
    $drop= $_POST['drop'] ; 
    $date= $_POST['date'] ; 
    $time1= $_POST['time'] ; 
    $trip = $_POST['trip'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $service=$_POST['service'];
    $parking = $_POST['parking'];
    $gst=$_POST['gst'];
    $dis = $_POST['distance'];
    $amount=$_POST['amount'];
    $dateend= $_POST['dateend']; 
    $timeend1= $_POST['timeend']; 
    $new_amount=$_POST['new_amount'];
    $totalpaidAmt=$_POST['totalpaid_amt'];
    $remainAmt = $totalpaidAmt - $new_amount;
    $driver = $_POST['driver'];
    $distance = $_POST['distance'];
    $days = $_POST['days'];
    $bookingtype = 'Custom';
    
    if($trip == "Rental" || $trip == "Rental NoGST"){
    $extrahours = $_POST['extrahours'];
    $extrahoursrs = $_POST['extrahoursrs'];
    $extrakm = $_POST['extrakm'];
    $extrakmrs = $_POST['extrakmrs'];
    $hour = $_POST['mySelect'];
    $hoursamount = $_POST['hoursamount'];
    $kmamount = $_POST['kmamount'];
  
    //$int = $distance;
    $base = $_POST['base'];
    //$amount = $_POST['amount'];
    $rentalamount = $_POST['rentalamount'];
    $new_amount = $rentalamount;
    $totalpaidAmt=$_POST['totalpaid_amt'];
    $remainAmt = $totalpaidAmt - $new_amount;
    }
    $toll = $_POST['toll'];

   $time = date('h:i a', strtotime($time1));
   $timeend = date('h:i a', strtotime($timeend1));
  
  
    include "config.php";
 
 $updateInvoice = "UPDATE custom_booking SET user_pickup='$pickup', user_drop='$drop', date='$date', time='$time',extrahours='$extrahours',extrahoursrs='$extrahoursrs',extrakm='$extrakm',extrakmrs='$extrakmrs',hoursamount='$hoursamount',kmamount='$kmamount', phone='$phone', user_trip_type='$trip',
 days='$days', distance='$distance', car='$car', base='$amount',amount='$new_amount', partial='$partial', dateend='$dateend', timeend='$timeend', name='$name', email='$email', gst='$gst', service_charge='$service',driver_bhata='$driver', parking='$parking',toll='$toll',totalpaid_amt='$totalpaidAmt',
 remain_amt='$remainAmt' WHERE bookid='$bookid'";

    if ($link->query($updateInvoice) != TRUE) {
    echo "<br>" . $link->error;
    }else{
         if($trip == "Rental"){
       header('location:rental-invoice1.php');
        
    }elseif($trip == "One Way" || $trip == "Round"){
        header('location:invoice1.php');
        
   }elseif($trip == "One Way NoGST" || $trip == "Round NoGST"){
       header('location:invoice-withoutgst1.php');
       
   }elseif($trip == "Rental NoGST"){
       header('location:invoice-rentalnogst1.php');
   }
    }
    
    $_SESSION['phone'] = $phone;
    $_SESSION['pickup'] = $pickup;
    $_SESSION['drop'] = $drop;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    $_SESSION['trip'] = $trip;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['service'] = $service;
    $_SESSION['parking'] = $parking;
    $_SESSION['gst'] = $gst;
    $_SESSION['car'] = $car;
    $_SESSION['dis'] = $dis;
    $_SESSION['amount'] = $amount;
    $_SESSION['dateend'] = $dateend;
    $_SESSION['timeend'] = $timeend;
    $_SESSION['new_amount'] = $new_amount;
    $_SESSION['bookid'] = $bookid;
    $_SESSION['driver'] = $driver;
    $_SESSION['distance'] = $distance;
    $_SESSION['toll'] = $toll;
    $_SESSION['days'] = $days;
    $_SESSION['extrahours'] = $extrahours;
    $_SESSION['extrakm'] = $extrakm;
    $_SESSION['hr'] = $hr;
    $_SESSION['base'] = $base;
    $_SESSION['rentalamount'] = $rentalamount;
    $_SESSION['bookingtype'] = $bookingtype;
    
     $_SESSION['extrahoursrs'] = $extrahoursrs;
     $_SESSION['extrakmrs'] = $extrakmrs ;
     $_SESSION['mySelect'] = $hour ;
    $_SESSION['hoursamount'] = $hoursamount ;
     $_SESSION['toll'] = $toll ;
      $_SESSION['base'] = $base ;
      $_SESSION['amount'] = $amount;
      
      $_SESSION['totalpaid_amt'] = $totalpaidAmt;
      $_SESSION['remain_amt'] = $remainAmt;
                                    
                                    
?>