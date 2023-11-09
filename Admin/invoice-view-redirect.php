<?php 
    session_start();

    include "config.php";

    $bookidPost=$_POST['bookid'];
    //echo $bookid;
    $trip123=$_POST['user_trip_type'];
    
     $pic = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE bookid = '$bookidPost' ");
     $row = mysqli_fetch_array($pic);
    
    $bookid=$row['bookid'];
    $car=$row['car'];
    $phone =$row['phone'] ; 
    $pickup = $row['user_pickup'] ; 
    $drop= $row['user_drop'] ; 
    $date= $row['date'] ; 
    $time1= $row['time'] ; 
    $trip = $row['user_trip_type'];
    $name = $row['name'];
    $email= $row['email'];
    $service=$row['service_charge'];
    $driver=$row['driver_bhata'];
    $parking = $row['parking'];
    $gst=$row['gst'];
    $dis = $row['distance'];
    $amount=$row['base'];
    $dateend= $row['dateend']; 
    $timeend1= $row['timeend']; 
    $new_amount=$row['amount'];
    $totalpaidAmt=$row['totalpaid_amt'];
    $remainAmt = $row['remain_amt'];
    //$driver = $row['driver'];
    $distance = $row['distance'];
    $days = $row['days'];
    $bookingtype = 'Custom';
    
    if($trip == "Rental" || $trip == "Rental NoGST"){
    $extrahours = $row['extrahours'];
    $extrahoursrs = $row['extrahoursrs'];
    $extrakm = $row['extrakm'];
    $extrakmrs = $row['extrakmrs'];
    $hour = $row['mySelect'];
    $hoursamount = $row['hoursamount'];
  
    //$int = $distance;
    $base = $row['base'];
    $amount = $row['base'];
    //$rentalamount = $row['rentalamount'];
    //$new_amount = $rentalamount;
    $rentalamount = $row['amount'];
    $totalpaidAmt=$row['totalpaid_amt'];
    //$remainAmt = $totalpaidAmt - $new_amount;
    $remainAmt = $row['remain_amt'];
    }
    $toll = $row['toll'];

   $time = date('h:i a', strtotime($time1));
   $timeend = date('h:i a', strtotime($timeend1));
  
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
      
      

   if($trip == "Rental"){
       header('location:rental-invoice.php');
        
    }elseif($trip == "One Way" || $trip == "Round"){
        header('location:invoice.php');
        
   }elseif($trip == "One Way NoGST" || $trip == "Round NoGST"){
       header('location:invoice-withoutgst.php');
       
   }elseif($trip == "Rental NoGST"){
       header('location:invoice-rentalnogst.php');
   }
   
?>