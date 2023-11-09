<?php 
  session_start();
  include "config.php";
  
  $txnid = $_GET['txnid'];
  
  $sqlfetch = "SELECT * FROM user_booking WHERE txnid='$txnid'";
  $resultfetch = $link->query($sqlfetch);
  $rowfetch = $resultfetch->fetch_assoc();
  
 $bookingtype = $rowfetch['bookingtype']; 
 $email = $rowfetch['email']; 
 $phone =$rowfetch['phone'] ; 
 $bookid = $rowfetch['bookid'];
  $baseAmount = $rowfetch['baseAmount'];
 $new_amount = $rowfetch['amount'];
 $offer_amount = $rowfetch['offeramount'];
 
 $time = $rowfetch['time'];
 $trip = $rowfetch['user_trip_type'];
 $pickup = $rowfetch['user_pickup'];
 $drop = $rowfetch['user_drop'];

  
$sql = "UPDATE `queries` SET payment_success_partial = 'visited' bookid ='$bookid'";
   if ($link->query($sql) != TRUE) {
       header("location:index.php");
              exit;
   //echo "Error: " . $sql . "<br>" . $link->error;
   }
             /*if(!isset($_SESSION['booked']) && $_SESSION['booked'] != true){
               header("location:index.php");
              exit;
    }*/
   
  
  if($rowfetch['offerpartial'] > 0){
      $partial = $rowfetch['offerpartial'];
  }else{
      $partial = $rowfetch['partial'];
  }
  
  
 if ($trip == "One Way"){
     $remaining = $offer_amount - $partial;
  }elseif($trip == "Round"){
      $remaining = $offer_amount - $partial;
  }elseif($trip == "Rental"){
      $remaining =  $new_amount - $partial;
  }
  
  
    $sql1 ="UPDATE `user_booking` SET paid='$partial', remaining='$remaining' WHERE bookid ='$bookid'";
  mysqli_query($link, $sql1);  
  $link->query($sql1);
  
  $sqlpay = "UPDATE `user_booking` SET payment = 'Successful' WHERE bookid ='$bookid";
   if ($link->query($sqlpay) != TRUE) {
   echo "Error: " . $sqlpay . "<br>" . $link->error;
   }
  
  
   include "config.php";
  $sqlcustom = "SELECT * FROM custom_booking ORDER BY id DESC LIMIT 1";
  $resultcustom = $link->query($sqlcustom);
  $rowcustom = $resultcustom->fetch_assoc();
  
   $bookingtype1 = $rowcustom['bookingtype'];
   $bookid1 = $rowcustom['bookid'];
   $new_amount1 = $rowcustom['amount'];
   $partial1 = $rowcustom['partial'];
   
$remaining1 = $new_amount1 - $partial1;  // for custom Booking

  $sql2 ="UPDATE `custom_booking` SET paid='$partial1', remaining='$remaining1' WHERE bookid ='$bookid1'";
  mysqli_query($link, $sql2);  
  $link->query($sql2);



  
if($trip == 'One Way'){
$to = "aimcab@aimcabbooking.com";
$from = $email; // this is the sender's Email address
$subject = "New One Way Trip Booking. Please Check!";
$subject2 = "AIMCAB: Booking Confirmation";

$message="<html>
                    <head>
                <title>AIMCAB</title>
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
                         <strong>Partial Amount - Rs.$partial </strong></p>
                         <br>
                         <h6>Contact him/her shortly.<br>
                        Thank You!</p>
                          
                          </body>
            </html>";
            
$message2 ='
<html>
<body>
    <p>Dear '.$rowfetch[name].',</p>
    <p>Thank you for choosing our Service ! We appreciate the apportunity to serve you.</p>
    <p>We have received your payment of Rs. ' . $partial . '. You have to pay Rs. ' . $remaining . ' after the completion of the trip.</p>
    <p>Your booking id is <strong>'.$bookid.'</strong></p>
    <p>Please see below for more details.</p>
    
    <p><strong>Trip Details:</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>Pickup Location</strong> </td>
                <td>' . $rowfetch[user_pickup].'</td>
            </tr>
             <tr>
                <td><strong>Drop Location</strong> </td>
                <td>'. $rowfetch[user_drop].'</td>
            </tr>
            <tr>
                <td><strong>Date</strong> </td>
                <td>' . $rowfetch[date] . '</td>
            </tr>
             <tr>
                <td><strong>Time</strong> </td>
                <td>' . $rowfetch[time] . '</td>
            </tr>
            <tr>
                <td><strong>Trip Type</strong> </td>
                <td>' . $rowfetch[user_trip_type] . '</td>
            </tr>
            <tr>
                <td><strong>Distance</strong> </td>
                <td>' . $rowfetch[distance] . 'Km</td>
            </tr>
            <tr>
                <td><strong>Car</strong> </td>
                <td>' . $rowfetch[car] . '</td>
            </tr>
    </table
    <br/>
    <p><strong>Billing Details:</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>BaseFare</strong> </td>
                <td>Rs. ' . $rowfetch[baseAmount].'</td>
            </tr>
            <tr>
                <td><strong>GST(5%)</strong> </td>
                <td>Rs. '. $rowfetch[gst] .'</td>
            </tr>
            <tr>
                <td><strong>Service Charges(10%)</strong> </td>
                <td>Rs. ' . $rowfetch[service_charge] . '</td>
            </tr>';
             $time2 = '0'.$time;
            $timeHrs =  date("H:i", strtotime($time2));

              $start = '00:00';
              $end = '05:30';

          if($timeHrs >= $start && $timeHrs <= $end) {
            $nightCharge = 250;
           
            $message2 .='
            <tr>
                <td><strong>Night Charges</strong> </td>
                <td>Rs. ' . $nightCharge . '</td>
            </tr>';
           }
           $message2 .='
             <tr>
                <td><strong>Total Amount</strong> </td>
                <td>Rs. ' . $rowfetch[amount] . '</td>
            </tr>';
            if($rowfetch[offeramount] != 0) {
            $message2 .='
            <tr>
                <td><strong>Offer Amount</strong> </td>
                <td>Rs. ' . $rowfetch[offeramount] . '</td>
            </tr>';
           }
           $message2 .='
            <tr>
                <td><strong>Partial</strong> </td>
                <td>Rs. ' . $partial . '</td>
            </tr>
    </table>
    <br/>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1"
		width="600">
		<tr>
                <td><strong>Transaction ID:</strong></td>
                <td><strong>Rs.' . $txnid . ' </strong></td>
            </tr>
        <tr>
                <td><strong>Paid Amount:</strong> Rs.' . $partial . ' </td>
                <td><strong>Remaining Amount:</strong> Rs.' . $remaining . '</td>
            </tr>
    </table>
    <p><strong>Note: If you have paid partial amount, the remainder should be paid after the trip is completed.</strong></p>
    <p>Regards<br />Team AimCab</p>
    </body>
            </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: info@aimcabbooking.com";
    
    $headers2 = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers2 .= "From: $to \r\n";
    
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    }


if($trip == 'Round'){
$to = "aimcab@aimcabbooking.com";
$from = $email; // this is the sender's Email address
$subject = "New Round Trip Booking. Please Check!";
$subject2 = "AIMCAB: Booking Confirmation";

$message="<html>
                    <head>
                <title>AIMCAB</title>
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
                         <strong>Start date and Time - $rowfetch[date] - $rowfetch[time] </strong><br>
                          <strong>End date and time - $rowfetch[dateend] - $rowfetch[timeend] </strong><br>
                         <strong>Trip Type - $rowfetch[user_trip_type] </strong><br>
                         <strong>Car Type - $rowfetch[car] </strong><br>
                         <strong>Full Amount - Rs.$rowfetch[offeramount] </strong><br>
                         <strong>Partial Amount - Rs.$partial</strong></p>
                         <br>
                         <h6>Contact him/her shortly.<br>
                        Thank You!</p>
                          
                          </body>
            </html>";
            
$message2 ='
<html>
<body>
    <p>Dear '.$rowfetch[name].',</p>
    <p>Thank you for choosing our Service ! We appreciate the apportunity to serve you.</p>
    <p>We have received your payment of Rs. ' . $partial . '. You have to pay Rs. ' . $remaining . ' after the completion of the trip.</p>
    <p>Your booking id is <strong>'.$bookid.'</strong></p>
    <p>Please see below for more details.</p>
    
    <p><strong>Trip Details:</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>Pickup Location</strong> </td>
                <td>' . $rowfetch[user_pickup].'</td>
            </tr>
            <tr>
                <td><strong>Drop Location</strong> </td>
                <td>'. $rowfetch[user_drop].'</td>
            </tr>
            <tr>
                <td><strong>Start date and Time</strong> </td>
                <td>' . $rowfetch[date].' - '.$rowfetch[time]  . '</td>
            </tr>
             <tr>
                <td><strong>End date and time</strong> </td>
                <td>' . $rowfetch[dateend].' - '.$rowfetch[timeend] . '</td>
            </tr>
            <tr>
                <td><strong>Trip Type</strong> </td>
                <td>' . $rowfetch[user_trip_type] . '</td>
            </tr>
            
            <tr>
                <td><strong>Car</strong> </td>
                <td>' . $rowfetch[car] . '</td>
            </tr>
    </table
    <br
    <p><strong>Billing Details:</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>BaseFare</strong> </td>
                <td>Rs. ' . $rowfetch[baseAmount].'</td>
            </tr>
            <tr>
                <td><strong>DriverBhata</strong> </td>
                <td>Rs. '. $rowfetch[driver_bhata] .'</td>
            </tr>
            <tr>
                <td><strong>GST(5%)</strong> </td>
                <td>Rs. ' . $rowfetch[gst] . '</td>
            </tr>
            <tr>
                <td><strong>Service Charges(10%)</strong> </td>
                <td>Rs. ' . $rowfetch[service_charge] . '</td>
            </tr>';
            $time2 = '0'.$time;
            $timeHrs =  date("H:i", strtotime($time2));

              $start = '00:00';
              $end = '05:30';

          if($timeHrs >= $start && $timeHrs <= $end) {
            $nightCharge = 250;
           
            $message2 .='
            <tr>
                <td><strong>Night Charges</strong> </td>
                <td>Rs. ' . $nightCharge . '</td>
            </tr>';
           }
           $message2 .='
             <tr>
                <td><strong>Total Amount</strong> </td>
                <td>Rs. ' . $rowfetch[amount] . '</td>
            </tr>';
           if($rowfetch[offeramount] != 0) {
            $message2 .='
            <tr>
                <td><strong>Offer Amount</strong> </td>
                <td>Rs. ' . $rowfetch[offeramount] . '</td>
            </tr>';
           }
           $message2 .='
    </table>
    <br/>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1"
		width="600">
		<tr>
                <td><strong>Transaction ID:</strong></td>
                <td><strong>Rs.' . $txnid . ' </strong></td>
            </tr>
        <tr>
                <td><strong>Paid Amount:</strong> Rs.' . $partial . ' </td>
                <td><strong>Remaining Amount:</strong> Rs.' . $remaining . '</td>
            </tr>
    </table>
    <p><strong>Note: If you have paid partial amount, the remainder should be paid after the trip is completed.</strong></p>
    <p>Regards<br />Team AimCab</p>
    </body>
            </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: info@aimcabbooking.com";
    
    $headers2 = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers2 .= "From: $to \r\n";
    
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    }




if($trip == 'Rental'){
$to = "aimcab@aimcabbooking.com";
$from = $email; // this is the sender's Email address
$subject = "New Rental Trip Booking. Please Check!";
$subject2 = "AIMCAB: Booking Confirmation";

$message="<html>
                    <head>
                <title>AIMCAB</title>
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
                         <strong>Partial Amount - Rs.$rowfetch[partial] </strong></p>
                         <br>
                         <h6>Contact him/her shortly.<br>
                        Thank You!</p>
                          
                          </body>
            </html>";
            
$message2 ='
<html>
<body>
    <p>Dear '.$rowfetch[name].',</p>
    <p>Thank you for choosing our Service ! We appreciate the apportunity to serve you.</p>
    <p>We have received your payment of Rs. ' . $rowfetch[partial] . '. You have to pay Rs. ' . $remaining . ' after the completion of the trip.</p>
   <p>Your booking id is <strong>'.$bookid.'</strong></p>
    <p>Please see below for more details.</p>
    
    <p><strong>Trip Details:</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>Pickup Location</strong> </td>
                <td>' . $rowfetch[user_pickup].'</td>
            </tr>
            <tr>
                <td><strong>Pickup date and Time</strong> </td>
                <td>' . $rowfetch[date].' - '.$rowfetch[time]  . '</td>
            </tr>
             <tr>
                <td><strong>Selected Pakage</strong> </td>
                <td>' . $rowfetch[hours] .' Hrs ' . $rowfetch[distance] .' Kms</td>
            </tr>
            <tr>
                <td><strong>Trip Type</strong> </td>
                <td>' . $rowfetch[user_trip_type] . '</td>
            </tr>
            <tr>
                <td><strong>Fixed Distance</strong> </td>
                <td>' . $rowfetch[distance] . 'Km</td>
            </tr>
            <tr>
                <td><strong>Car</strong> </td>
                <td>' . $rowfetch[car] . '</td>
            </tr>
    </table
    <p><strong>Billing Details:</strong></p>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <td><strong>BaseFare</strong></td>
                <td>Rs. ' . $rowfetch[baseAmount] . '</td>
            </tr>
            <tr>
                <td><strong>Total</strong> </td>
                <td>Rs. ' . $rowfetch[amount] . '</td>
            </tr>
            <tr>
                <td><strong>Partial</strong></td>
                <td>Rs. ' . $rowfetch[partial] . '</td>
            </tr>
    </table>
    <br/>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1"
		width="600">
		<tr>
                <td><strong>Transaction ID:</strong></td>
                <td><strong>Rs.' . $txnid . ' </strong></td>
            </tr>
        <tr>
                <td><strong>Paid Amount:</strong> Rs.' . $rowfetch[partial] . ' </td>
                <td><strong>Remaining Amount:</strong> Rs.' . $remaining . '</td>
            </tr>
    </table>
    <p><strong>Note: If you have paid partial amount, the remainder should be paid after the trip is completed.</strong></p>
    <p>Regards<br />Team AimCab</p>
    </body>
            </html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: info@aimcabbooking.com";
    
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
  <link rel="icon" type="image/png" sizes="16x16" href="https://aimcabbooking.com/images/logo-png.png">
    <link rel="apple-touch-icon" sizes="16x16"  href="https://aimcabbooking.com/images/logo-png.png">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
 <!-- <script>
     setTimeout(function(){
          window.location.href ='index.php';
       }, 5000);
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
</head>

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
        margin: 0 auto;
      }
    </style>
    <body>
      <?php include 'header.php';?>
      <div class="card" style="margin:25px 400px;">
      <div style="text-align:center;">
       <img src="images/successful_payment.png" alt="success" style="width:150px"/>
      </div>
        <h1 style="text-align:center;">Payment Successful</h1> 
        <p style="text-align:center;">Your Booking is Confirmed<br/>Check your mail for Invoice</p>
        <br/>
        <a class="btn btn-dark" href="index.php" role="button">Go back to Home</a>
      </div><br/>
      <?php include 'footer.php';?>
    </body>
</html>

<?php 
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\VAPID;

require "includes/database.php";
require 'web-push/vendor/autoload.php';

// var_dump(VAPID::createVapidKeys());
// die;

$publicKey = "BDHpi7gABWvOmNiyzuhET2-C6HBasei0BAzcxpQGbbpr2rqH7q758MqkX6Jq9nBwEELC27pe-j7sOPTkz4gAKaI";
$privateKey = "HB0FaP2rbzQFHq9NT2cM80rvfVXfpY_4HsQ54wThC-k";

$title = "New $trip Trip Booking";
$body = "$bookid - From $pickup To $drop";

//Notification send to admin

$message = json_encode([
    'title' => $title,
    'body' => $body,
    'icon' => 'https://aimcabbooking.com/images/logo-png.png',
    'badge' => 'https://aimcabbooking.com/images/logo-png.png',
    'extraData' => 'https://aimcabbooking.com/admin/all-bookings.php?ref=push-message'
]);


$time = time();
$query = $con->query("SELECT * FROM `push_subcribers` WHERE `expirationTime` = 0 OR `expirationTime` > '{$time}'");
if($query->num_rows > 0){
    $auth = [
        'VAPID' => [
            'subject' => 'https://aimcabbooking.com', // can be a mailto: or your website address
            'publicKey' => $publicKey, // (recommended) uncompressed public key P-256 encoded in Base64-URL
            'privateKey' => $privateKey, // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL
        ],
    ];
    $webPush = new WebPush($auth);

    while ($subscriber = $query->fetch_assoc()) {
        $subscription = Subscription::create([
                "endpoint" => $subscriber['endpoint'],
                "keys" => [
                    'p256dh' => $subscriber['p256dh'],
                    'auth' => $subscriber['authKey']
                ]
            ]);
        $webPush->queueNotification($subscription, $message);
    }

    foreach ($webPush->flush() as $report) {
        $endpoint = $report->getRequest()->getUri()->__toString();
    
        //if ($report->isSuccess()) {
        //    echo "Message sent successfully for {$endpoint}.<br>";
       // } else {
       //     echo "Message failed to sent for {$endpoint}: {$report->getReason()}.<br>";
       /// }
    }
}
else{
    echo "No Subscribers";
}

//Notification send to admin

$message_vender = json_encode([
    'title' => $title,
    'body' => $body,
    'icon' => 'https://aimcabbooking.com/images/logo-png.png',
    'badge' => 'https://aimcabbooking.com/images/logo-png.png',
    'extraData' => 'https://aimcabbooking.com/vendor/index.php?ref=push-message'
]);


$timeVendor = time();
$queryVendor = $con->query("SELECT * FROM `push_subcribers_vendor` WHERE `expirationTime` = 0 OR `expirationTime` > '{$timeVendor}'");
if($queryVendor->num_rows > 0){
    $authVendor = [
        'VAPID' => [
            'subject' => 'https://aimcabbooking.com', // can be a mailto: or your website address
            'publicKey' => $publicKey, // (recommended) uncompressed public key P-256 encoded in Base64-URL
            'privateKey' => $privateKey, // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL
        ],
    ];
    $webPushvendor = new WebPush($authVendor);

    while ($subscriberVendor = $queryVendor->fetch_assoc()) {
        $subscriptionVendor = Subscription::create([
                "endpoint" => $subscriberVendor['endpoint'],
                "keys" => [
                    'p256dh' => $subscriberVendor['p256dh'],
                    'auth' => $subscriberVendor['authKey']
                ]
            ]);
        $webPushvendor->queueNotification($subscriptionVendor, $message_vender);
    }

    foreach ($webPushvendor->flush() as $report) {
        $endpoint = $report->getRequest()->getUri()->__toString();
    
        //if ($report->isSuccess()) {
        //    echo "Message sent successfully for {$endpoint}.<br>";
       // } else {
       //     echo "Message failed to sent for {$endpoint}: {$report->getReason()}.<br>";
       /// }
    }
}
else{
    echo "No Subscribers";
}
                    
