<?php 
    session_start();

    include "config.php";
    $value2='';

    $query = "SELECT bookid from `custom_booking` order by id DESC LIMIT 1";
    $stmt = $link->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['bookid'];
            $value2 = substr($value2, 7, 7);//separating numeric part
            $value2 = $value2 + 1;//Incrementing numeric part
            $value2 = "AIMC00A" . sprintf('%03s', $value2);//concatenating incremented value
            $value = $value2; 
        }
    } 
    else {
        $value2 = "AIMC00A1";
        $value = $value2;
    }

    
    $car=$_POST['car'];
    $phone =$_POST['phone'] ;
    //$pickup = $_POST['pickup'] ; 
    //$drop= $_POST['drop'] ; 
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
    $bookid = $value;
    $driver = $_POST['driver'];
    $distance = $_POST['distance'];
    $days = $_POST['days'];
    $bookingtype = 'Custom';
    
    if($trip == "Rental"){
      $pickup = $_POST['rental_pickup'] ; 
      $drop= $_POST['rental_drop'] ; 
        
    }elseif($trip == "One Way"){
      $pickup = $_POST['oneway_pickup'] ; 
      $drop= $_POST['oneway_drop'] ; 
        
    }elseif($trip == "Round"){
        $pickup = $_POST['round_pickup'] ; 
      $drop= $_POST['round_drop'] ; 
        
   }
   elseif($trip == "One Way NoGST"){
        $pickup = $_POST['onewaynogst_pickup'] ; 
      $drop= $_POST['onewaynogst_drop'] ; 
        
   }elseif($trip == "Round NoGST"){
      $pickup = $_POST['roundnogst_pickup'] ; 
      $drop= $_POST['roundnogst_drop'] ; 
       
   }elseif($trip == "Rental NoGST"){
       $pickup = $_POST['rentalnogst_pickup'] ; 
      $drop= $_POST['rentalnogst_drop'] ; 
   }
   
    
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
    //$sql ="INSERT INTO `custom_booking` (user_pickup, user_drop, date, time, phone, user_trip_type, status, bookid, distance, car, amount, partial, dateend, timeend, bookingtype, name, email, totalpaid_amt, remain_amt)
    //VALUES ('$pickup', '$drop', '$date', '$time', '$phone', '$trip', '0', '$bookid', '$distance', '$car', '$new_amount', '$partial', '$dateend', '$timeend', '$bookingtype', '$name', '$email', '$totalpaidAmt','$remainAmt')";
    
     $sql ="INSERT INTO `custom_booking` (user_pickup, user_drop, date, time,extrahours,extrahoursrs,extrakm,extrakmrs,hoursamount,kmamount, phone, user_trip_type, days,status, bookid, distance, car, base,amount, partial, dateend, timeend, bookingtype, name, email, gst, service_charge,driver_bhata, parking,toll,totalpaid_amt, remain_amt)
    VALUES ('$pickup', '$drop', '$date', '$time', '$extrahours','$extrahoursrs','$extrakm','$extrakmrs','$hoursamount','$kmamount','$phone', '$trip','$days', '0', '$bookid', '$distance', '$car', '$amount','$new_amount', '$partial','$dateend', '$timeend', '$bookingtype', '$name', '$email','$gst','$service','$driver','$parking','$toll','$totalpaidAmt','$remainAmt')";
    
    if ($link->query($sql) != TRUE) {
    echo "<br>" . $link->error;
    }else{
         if($trip == "Rental"){
       header('location:rental-invoice.php');
        
    }elseif($trip == "One Way" || $trip == "Round"){
        header('location:invoice.php');
        
   }elseif($trip == "One Way NoGST" || $trip == "Round NoGST"){
       header('location:invoice-withoutgst.php');
       
   }elseif($trip == "Rental NoGST"){
       header('location:invoice-rentalnogst.php');
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
      
      

   /* if($trip == "Rental"){
       header('location:rental-invoice1.php');
        
    }elseif($trip == "One Way" || $trip == "Round"){
        header('location:invoice1.php');
        
   }elseif($trip == "One Way NoGST" || $trip == "Round NoGST"){
       header('location:invoice-withoutgst1.php');
       
   }elseif($trip == "Rental NoGST"){
       header('location:invoice-rentalnogst1.php');
   }*/
   
?>