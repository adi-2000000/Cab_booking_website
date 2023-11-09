 <?php

    
    session_start();
    
    $_SESSION['booked'] = true;
    $name=$_POST['name'];
    $phone='91'.$_POST['phone'];
    $email=$_POST['email'];
    $pickup=$_POST['from'];
    $drop=$_POST['to'];
    $date=$_POST['date'];
    $time1=$_POST['time'];
    echo $distance=$_POST['distance'];
    $trip=$_POST['trip'];
    
  
    
    $int=(int)$distance;
    $dateend = $_POST['dateend'];
    $timeend1 = $_POST['timeend'];
    $time = date("g:i A", strtotime($time1));
    $timeend = date("g:i A", strtotime($timeend1));
     $pincode = $_POST['pincode'];
    echo $sourcePincode = $_POST['source_pincode'];
    echo $destinationPincode = $_POST['destination_pincode'];
    echo $hours = $_POST['mySelect'];


// var_dump($sourcePincode);
// var_dump($destinationPincode);
// var_dump($destinationPincode);


   
    include "config.php";

	$value2='';
    //Query to fetch last inserted invoice number
    $query = "SELECT bookid from queries order by id DESC LIMIT 1";
    $stmt = $link->query($query);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $value2 = $row['bookid'];
            $value2 = substr($value2, 6, 7);//separating numeric part
            $value2 = $value2 + 1;//Incrementing numeric part
            $value2 = "AJC00A" . sprintf('%03s', $value2);//concatenating incremented value
            $value1 = $value2; 
        }
    }else{
            $value2 = "AJC00A1";
            $value1 = $value2;
    }
    
   $bookid1 = $value1;
   
   date_default_timezone_set('Asia/Calcutta');
    $now = date('Y-m-d H:i:s');
   $sql = "INSERT INTO `queries` (bookid,date,time,pickup_location,drop_location,trip,dateend,timeend,created_at,oneway_distance, name, phone, email) 
   VALUES ('$bookid1', '$date', '$time','$pickup','$drop','$trip','$dateend','$timeend','$now','$distance','$name','$phone','$email')";

   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
   
   if($trip == "Round"){
   $_SESSION['dateend'] = $dateend;   
   $_SESSION['timeend'] = $timeend;
   $_SESSION['source_pincode'] = $sourcePincode;
   $_SESSION['destination_pincode'] = $destinationPincode;
   }
   $_SESSION['name'] = $name;
   $_SESSION['phone'] = $phone;
   $_SESSION['email'] = $email; 
   $_SESSION['pickup'] = $pickup; 
   $_SESSION['drop'] = $drop; 
   $_SESSION['date'] = $date; 
   $_SESSION['time'] = $time; 
   

   
   $_SESSION['distance'] = $distance; 
   $_SESSION['trip'] = $trip; 
   $_SESSION['bookid'] = $bookid1;
   $_SESSION['hours'] = $hours;
   $_SESSION['pincode'] = $pincode;
   
   $_SESSION['source_pincode'] = $sourcePincode;
   $_SESSION['destination_pincode'] = $destinationPincode;
   

        if($trip == "One Way" && $distance == 0){echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Location');
    window.location.href='index.php';
    </script>");
       
            
        }elseif($trip == "One Way"){
 $_SESSION['trip'] = $trip; 
    header('location:queryoneway.php');
     
    }elseif($trip == "Round"){
        $_SESSION['trip'] = $trip; 

    header('location:queryroundtrip.php');
    
    }elseif($trip == "Rental" && $distance <= 80){
        $_SESSION['trip'] = $trip; 
          header('location:rentaltrip.php');
    }else{
      header('location:unavailable-rental.php');
    }
    
    

 ?>