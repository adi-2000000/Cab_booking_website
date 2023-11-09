<?php 
  session_start();
  include "config.php";
  
  $bookid = $_GET['bookid'];
  
    $sql1 ="UPDATE `user_booking` SET paid = '0' WHERE bookid ='$bookid' ";
  mysqli_query($link, $sql1);  
  $link->query($sql1);

$sqlpay = "UPDATE `user_booking` SET payment = 'Pay Later' WHERE bookid = '$bookid'";
   if ($link->query($sqlpay) != TRUE) {
   echo "Error: " . $sqlpay . "<br>" . $link->error;
   }
   
  
  $sqlfetch = "SELECT * FROM user_booking WHERE bookid = '$bookid'";
  $resultfetch = $link->query($sqlfetch);
  $rowfetch = $resultfetch->fetch_assoc();
  
 $email = $rowfetch['email'];
 $phone =$rowfetch['phone'] ;
 $bookid = $rowfetch['bookid'];
 $baseAmount = $rowfetch['baseAmount'];
 $new_amount = $rowfetch['amount'];
 $offer_amount = $rowfetch['offeramount'];
 $trip = $rowfetch['user_trip_type'];
 
  $time = $rowfetch['time'];
  $pickup = $rowfetch['user_pickup'];
 $drop = $rowfetch['user_drop'];
 $payLater = $rowfetch['payLater'];

 

$sql = "UPDATE `queries` SET payment_success = 'visited' WHERE bookid = '$bookid'";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
           /*  if(!isset($_SESSION["booked"]) && $_SESSION['booked'] != true){
               header("location:index.php");
              exit;
    }*/

    if($rowfetch['offeramount'] > 0){
     $new_amount = $rowfetch['offeramount'];
  }else{
      $new_amount = $rowfetch['amount'];
     }


   include "config.php";
  $sqlcustom = "SELECT * FROM custom_booking WHERE bookid = '$bookid'";
  $resultcustom = $link->query($sqlcustom);
  $rowcustom = $resultcustom->fetch_assoc();
  
   $bookingtype1 = $rowcustom['bookingtype'];
   $bookid1 = $rowcustom['bookid'];
   $new_amount1 = $rowcustom['amount'];
   $partial1 = $rowcustom['partial'];

  


// Invoices without Pay 

if($trip == 'One Way'){
//$to = "aimcab@aimcabbooking.com";
//$to = "contact@ajcabservices.com";
$to = "ajcabs1717@gmail.com";


$from = $email; // this is the sender's Email address
$subject = "New One Way Trip Booking. Please Check!";
$subject2 = "AJCABS Booking Confirmation";

$message="<html>
                    <head>
                <title>AJCABS</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Hello Admin,<br>
                  <p>A customer just booked Cab! Please check these details- </p><br>
                         <p><strong>Booking Id - $bookid </strong><br>
                         <strong>Customer Name - $rowfetch[name] </strong><br>
                         <strong>Email ID -  $rowfetch[email] </strong><br>
                         <strong>Phone No - $rowfetch[phone] </strong><br>
                         <strong>Pickup Location - $rowfetch[user_pickup] </strong><br>
                         <strong>Drop Location -  $rowfetch[user_drop] </strong><br>
                         <strong>Date - $rowfetch[date] </strong><br>
                         <strong>Time - $rowfetch[time] </strong><br>
                         <strong>Trip Type - $rowfetch[user_trip_type] </strong><br>
                         <strong>Car Type - $rowfetch[car] </strong><br>
                         <strong>Full Amount - Rs.$rowfetch[offeramount] </strong><br>
                         <strong>Pay Later - Customer Will Pay Later </strong></p>
                         <br>
                         <h6>Contact him/her shortly.<br>
                        Thank You!</p>
                          
                          </body>
            </html>";
            
$message2 ='
<html>
<body>
    <p>Thank you for choosing our Service ! We appreciate the apportunity to serve you.</p>
    <p>Please see below for more details.</p>
    
   <p><strong>Trip Details</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>Pickup Location</strong> </td>
                <td>' . $rowfetch['user_pickup'].'</td>
            </tr>
            <tr>
                <td><strong>Pickup date and Time</strong> </td>
                <td>' . $rowfetch['date'].' - '.$rowfetch['time']  . '</td>
            </tr>
            
            <tr>
                <td><strong>Trip Type</strong> </td>
                <td>' . $rowfetch['user_trip_type'] . '</td>
            </tr>
             <tr>
                <td><strong>Fixed Distance</strong> </td>
                <td>' . $rowfetch['distance'] . 'Km</td>
            </tr>
            <tr>
                <td><strong>Car</strong> </td>
                <td>' . $rowfetch['car'] . '</td>
            </tr>
    </table
   
    <br/>
     <p><strong>Billing Details:</strong></p>
       <table border="1" cellpadding="5" style="border-collapse: collapse; width: 100%;">
     <tr>
         <th>Booking Details</th>
         <th>Information</th>
     </tr>
     <tr>
         <td>Booking Id</td>
         <td>' . $bookid . '</td>
     </tr>
     <tr>
         <td>Customer Name</td>
         <td>' . $rowfetch['name'] . '</td>
     </tr>
     <tr>
         <td>Email ID</td>
         <td>' . $rowfetch['email'] . '</td>
     </tr>
     <tr>
         <td>Phone No</td>
         <td>' . $rowfetch['phone'] . '</td>
     </tr>
     <tr>
         <td>Pickup Location</td>
         <td>' . $rowfetch['user_pickup'] . '</td>
     </tr>
     <tr>
         <td>Drop Location</td>
         <td>' . $rowfetch['user_drop'] . '</td>
     </tr>
     <tr>
         <td>Date</td>
         <td>' . $rowfetch['date'] . '</td>
     </tr>
     <tr>
         <td>Time</td>
         <td>' . $rowfetch['time'] . '</td>
     </tr>
    
     <tr>
         <td>Trip Type</td>
         <td>' . $rowfetch['user_trip_type'] . '</td>
     </tr>
     <tr>
         <td>Car Type</td>
         <td>' . $rowfetch['car'] . '</td>
     </tr>
     <tr>
         <td>Full Amount</td>
         <td>Rs.' . $rowfetch['amount'] . '</td>
     </tr>
 </table>
   
   <p><strong>Note: </strong></p>
    <p>You have to pay Offer amount before or after the trip completion </p>
    <p>Regards<br />Team AJCab</p>
    </body>
            </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: contact@ajcabservices.com";
    
    $headers2 = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers2 .= "From: $to \r\n";
    
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    }
    
    
        
if($trip == 'Round'){
//$to = "aimcab@aimcabbooking.com";
//$to = "contact@ajcabservices.com";
$to = "ajcabs1717@gmail.com";

$from = $email; // this is the sender's Email address
$subject = "New Round Trip Booking. Please Check!";
$subject2 = "AJCAB: Booking Confirmation";

$message="<html>
                    <head>
                <title>AJCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Hello Admin,<br>
                  <p>A customer just booked Cab! Please check these details- </p><br>
                         <p><strong>Booking Id - $bookid </strong><br>
                         <strong>Customer Name - $rowfetch[name] </strong><br>
                         <strong>Email ID -  $rowfetch[email] </strong><br>
                         <strong>Phone No - $rowfetch[phone] </strong><br>
                         <strong>Pickup Location - $rowfetch[user_pickup] </strong><br>
                         <strong>Drop Location -  $rowfetch[user_drop] </strong><br>
                         <strong>Date - $rowfetch[date] </strong><br>
                         <strong>Time - $rowfetch[time] </strong><br>
                         <strong>Start date and Time - $rowfetch[date] - $rowfetch[time] </strong><br>
                          <strong>End date and time - $rowfetch[dateend] - $rowfetch[timeend] </strong><br>
                         <strong>Trip Type - $rowfetch[user_trip_type] </strong><br>
                         <strong>Car Type - $rowfetch[car] </strong><br>
                         <strong>Full Amount - Rs.$rowfetch[offeramount] </strong><br>
                         <strong>Pay Later - Customer Will Pay Later </strong></p>
                         <br>
                         <h6>Contact him/her shortly.<br>
                        Thank You!</p>
                          
                          </body>
            </html>";
            
$message2 ='
<html>
<body>
    <p>Thank you for choosing our Service ! We appreciate the apportunity to serve you.</p>
    <p>Please see below for more details.</p>
    
   <p><strong>Trip Details</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>Pickup Location</strong> </td>
                <td>' . $rowfetch['user_pickup'].'</td>
            </tr>
            <tr>
                <td><strong>Pickup date and Time</strong> </td>
                <td>' . $rowfetch['date'].' - '.$rowfetch['time']  . '</td>
            </tr>
             <tr>
                <td><strong>Drop Location</strong> </td>
                <td>' . $rowfetch['user_drop'].'</td>
            </tr>
            <tr>
                <td><strong>Drop date and Time</strong> </td>
                <td>' . $rowfetch['dateend'].' - '.$rowfetch['timeend']  . '</td>
            </tr>
           
            <tr>
                <td><strong>Trip Type</strong> </td>
                <td>' . $rowfetch['user_trip_type'] . '</td>
            </tr>
             <tr>
                <td><strong>Fixed Distance</strong> </td>
                <td>' . $rowfetch['distance'] . 'Km</td>
            </tr>
            <tr>
                <td><strong>Car</strong> </td>
                <td>' . $rowfetch['car'] . '</td>
            </tr>
    </table
   
    <br>
      <p><strong>Billing Details:</strong></p>
       <table border="1" cellpadding="5" style="border-collapse: collapse; width: 100%;">
     <tr>
         <th>Booking Details</th>
         <th>Information</th>
     </tr>
     <tr>
         <td>Booking Id</td>
         <td>' . $bookid . '</td>
     </tr>
     <tr>
         <td>Customer Name</td>
         <td>' . $rowfetch['name'] . '</td>
     </tr>
     <tr>
         <td>Email ID</td>
         <td>' . $rowfetch['email'] . '</td>
     </tr>
     <tr>
         <td>Phone No</td>
         <td>' . $rowfetch['phone'] . '</td>
     </tr>
     <tr>
         <td>Pickup Location</td>
         <td>' . $rowfetch['user_pickup'] . '</td>
     </tr>
     <tr>
         <td>Drop Location</td>
         <td>' . $rowfetch['user_drop'] . '</td>
     </tr>
     <tr>
         <td>Date</td>
         <td>' . $rowfetch['date'] . '</td>
     </tr>
     <tr>
         <td>Time</td>
         <td>' . $rowfetch['time'] . '</td>
     </tr>
    
     <tr>
         <td>Trip Type</td>
         <td>' . $rowfetch['user_trip_type'] . '</td>
     </tr>
     <tr>
         <td>Car Type</td>
         <td>' . $rowfetch['car'] . '</td>
     </tr>
     <tr>
         <td>Full Amount</td>
         <td>Rs.' . $rowfetch['amount'] . '</td>
     </tr>
 </table>
     
   
    <br/>
   
   <p><strong>Note: </strong></p>
    <p>You have to pay Offer amount before or after the trip completion </p>
    <p>Regards<br />Team AJCab</p>
    </body>
            </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: contact@ajcabservices.com";
    
    $headers2 = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers2 .= "From: $to \r\n";
    
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    }




if($trip == 'Rental'){
//$to = "aimcab@aimcabbooking.com";
//$to = "contact@ajcabservices.com";
$to = "ajcabs1717@gmail.com";


$from = $email; // this is the sender's Email address
$subject = "New Rental Trip Booking. Please Check!";
$subject2 = "AJCAB: Booking Confirmation";

$message="<html>
                    <head>
                <title>AJCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Hello Admin,<br>
                  <p>A customer just booked Cab! Please check these details- </p><br>
                         <p><strong>Booking Id - $bookid </strong><br>
                         <strong>Customer Name - $rowfetch[name] </strong><br>
                         <strong>Email ID -  $rowfetch[email] </strong><br>
                         <strong>Phone No - $rowfetch[phone] </strong><br>
                         <strong>Pickup Location - $rowfetch[user_pickup] </strong><br>
                         <strong>Drop Location -  $rowfetch[user_drop] </strong><br>
                         <strong>Date - $rowfetch[date] </strong><br>
                         <strong>Time - $rowfetch[time] </strong><br>
                          <strong>Hours - $rowfetch[hours] </strong><br>
                         <strong>Trip Type - $rowfetch[user_trip_type] </strong><br>
                         <strong>Car Type - $rowfetch[car] </strong><br>
                         <strong>Full Amount - Rs.$rowfetch[amount] </strong><br>
                         <strong>Pay Later - Customer Will Pay Later </strong></p>
                         <br>
                         <h6>Contact him/her shortly.<br>
                        Thank You!</p>
                          
                          </body>
            </html>";
            
$message2 ='
<html>
<body>
    <p>Dear '.$rowfetch['name'].',</p>
    <p>Thank you for choosing our Service ! We appreciate the apportunity to serve you.</p>
    <p>Please see below for more details.</p>
    
    <p><strong>Trip Details</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>Pickup Location</strong> </td>
                <td>' . $rowfetch['user_pickup'].'</td>
            </tr>
            <tr>
                <td><strong>Pickup date and Time</strong> </td>
                <td>' . $rowfetch['date'].' - '.$rowfetch['time']  . '</td>
            </tr>
             <tr>
                <td><strong>Selected Pakage</strong> </td>
                <td>' . $rowfetch['hours'] .' Hrs ' . $rowfetch['distance'] .' Kms</td>
            </tr>
            <tr>
                <td><strong>Trip Type</strong> </td>
                <td>' . $rowfetch['user_trip_type'] . '</td>
            </tr>
             <tr>
                <td><strong>Fixed Distance</strong> </td>
                <td>' . $rowfetch['distance'] . 'Km</td>
            </tr>
            <tr>
                <td><strong>Car</strong> </td>
                <td>' . $rowfetch['car'] . '</td>
            </tr>
    </table
    <br>
     <p><strong>Billing Details</strong></p>
    <table border="1" cellpadding="5" style="border-collapse: collapse; width: 100%;">
     <tr>
         <th>Booking Details</th>
         <th>Information</th>
     </tr>
     <tr>
         <td>Booking Id</td>
         <td>' . $bookid . '</td>
     </tr>
     <tr>
         <td>Customer Name</td>
         <td>' . $rowfetch['name'] . '</td>
     </tr>
     <tr>
         <td>Email ID</td>
         <td>' . $rowfetch['email'] . '</td>
     </tr>
     <tr>
         <td>Phone No</td>
         <td>' . $rowfetch['phone'] . '</td>
     </tr>
     <tr>
         <td>Pickup Location</td>
         <td>' . $rowfetch['user_pickup'] . '</td>
     </tr>
     <tr>
         <td>Drop Location</td>
         <td>' . $rowfetch['user_drop'] . '</td>
     </tr>
     <tr>
         <td>Date</td>
         <td>' . $rowfetch['date'] . '</td>
     </tr>
     <tr>
         <td>Time</td>
         <td>' . $rowfetch['time'] . '</td>
     </tr>
     <tr>
         <td>Hours</td>
         <td>' . $rowfetch['hours'] . '</td>
     </tr>
     <tr>
         <td>Trip Type</td>
         <td>' . $rowfetch['user_trip_type'] . '</td>
     </tr>
     <tr>
         <td>Car Type</td>
         <td>' . $rowfetch['car'] . '</td>
     </tr>
     <tr>
         <td>Full Amount</td>
         <td>Rs.' . $rowfetch['amount'] . '</td>
     </tr>
 </table>
   <p><strong>Note: </strong></p>
    <p>You have to pay Offer amount before or after the trip completion </p>
    <p>Regards<br />Team AJCab</p>
    </body>
            </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: contact@ajcabservices.com";
    
    $headers2 = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers2 .= "From: $to \r\n";
    
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    }
?>


<!DOCTYPE html>
<html>
<head>
    <?php include 'tags.php';?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--<link rel="icon" type="image/png" sizes="16x16" href="https://aimcabbooking.com/images/logo-png.png">-->
  <!--  <link rel="apple-touch-icon" sizes="16x16"  href="https://aimcabbooking.com/images/logo-png.png">-->
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script>
         setTimeout(function(){
           
            window.location.href = 'index.php';
           
         }, 8000);
      </script> -->
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-GCC1XJLS7R');
</script>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Confirmation Booking Details</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
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
     <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
     
     
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
         <style>
    
      body {
        text-align: center;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
       
         margin: 25px auto; /* Center the card on both PC and mobile */
      max-width: 400px; /* Limit card width to 400px on larger screens */
      padding: 20px;
      text-align: center;
      }
       @media (max-width: 600px) {
      .card {
        max-width: 90%; /* Reduce card width on smaller screens */
      }
    }
    </style>
</head>
<body>
      <div class="card" >
      <div style="text-align:center;">
      </div>
        <h1 style="text-align:center;">Booked Successfully</h1> 
        <p style="text-align:center;">Your Booking is Confirmed<br/>Check Your Email For More Details</p>
        <br/>
        <a class="btn btn-dark" href="index.php" role="button">Go back to Home</a>
      </div><br/>
</body>
</html>

