<?php 
session_start();
$bookid = $_SESSION['bookid'];
$vendor = $_SESSION['vendor'];

 include 'config.php';
 $custD = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE `bookid` = '$bookid'");
$fetchDetails = mysqli_fetch_array($custD);
$custName = $fetchDetails['name'];
$custContact = $fetchDetails['phone'];
$bookingId = $fetchDetails['bookid'];
$custMail = $fetchDetails['email'];
$tripType = $fetchDetails['user_trip_type'];
$pickupLocation = $fetchDetails['user_pickup'];
$dropLocation = $fetchDetails['user_drop'];
$tripType = $fetchDetails['user_trip_type'];
$startDate = $fetchDetails['date'];
$startTime = $fetchDetails['time'];
$endDate = $fetchDetails['dateend'];
$endTime = $fetchDetails['timeend'];

$driverid = $fetchDetails['driverid'];
$cabid = $fetchDetails['cabid']; 

$driver = mysqli_query($link,"SELECT * FROM `driver_details` WHERE driverid = '$driverid'");
$fetchDriver = mysqli_fetch_array($driver);
$driverName = $fetchDriver['d_name'];
$driverContact = $fetchDriver['d_contact'];
$driverEmail = $fetchDriver['d_email'];

$cab = mysqli_query($link,"SELECT * FROM `cabs_details` WHERE cabid = $cabid ");
$fetchCab = mysqli_fetch_array($cab);
$vName = $fetchCab['c_name'];
$vNumber = $fetchCab['c_plate'];
$rcNo = $fetchCab['c_rc'];


if($tripType == 'One Way'){
$to = $custMail;
$subject = "Your journey information has been updated.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                  <p>Updated your travel information for booking id $bookingId. Please see the updated trip details below. </p>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         <strong>Vahicle Category - $vName </strong><br>
                         <strong>Vahicle RC Number - $rcNo</strong><br>
                         <strong>Assingned Driver Name - $driverName </strong><br>
                         <strong>Driver Mobile No - $driverContact </strong><br>
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
        
//Mail To Driver
if($tripType == 'One Way'){
$to = $driverEmail;
$subject = "Trip Details";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $driverName,<br>
                  <p>Please see the trip details below. </p>
                         <strong>Booking Id  - $bookingId </strong><br>
                         <strong>Customer Name - $custName </strong><br>
                         <strong>Customer Mobile Number - $custContact</strong><br>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }

    
    if($tripType == 'One Way NoGST'){
$to = $custMail;
$subject = "Your journey information has been updated.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                  <p>Updated your travel information for booking id $bookingId. Please see the updated trip details below. </p>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         <strong>Vahicle Category - $vName </strong><br>
                         <strong>Vahicle RC Number - $rcNo</strong><br>
                         <strong>Assingned Driver Name - $driverName </strong><br>
                         <strong>Driver Mobile No - $driverContact </strong><br>
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
        
//Mail To Driver
if($tripType == 'One Way NoGST'){
$to = $driverEmail;
$subject = "Trip Details";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $driverName,<br>
                  <p>Please see the trip details below. </p>
                         <strong>Booking Id  - $bookingId </strong><br>
                         <strong>Customer Name - $custName </strong><br>
                         <strong>Customer Mobile Number - $custContact</strong><br>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }



if($tripType == 'Round'){
$to = $custMail;
$subject = "Your journey information has been updated.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                  <p>Updated your travel information for booking id $bookingId. Please see the updated trip details below. </p>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Start Date & Time - $startDate $startTime</strong><br
                          <strong>End Date & Time - $endDate $endTime</strong><br>
                         <strong>Vahicle Category - $vName </strong><br>
                          <strong>Vahicle RC Number - $rcNo</strong><br>
                         <strong>Assingned Driver Name - $driverName </strong><br>
                         <strong>Driver Mobile No - $driverContact </strong><br>
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
     //Mail To Driver
if($tripType == 'Round'){
$to = $driverEmail;
$subject = "Trip Details";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:10px;'>
                <p>Dear $driverName,<br>
                  <p>Please see the trip details below. </p>
                         <strong>Booking Id  - $bookingId </strong><br>
                         <strong>Customer Name - $custName </strong><br>
                         <strong>Customer Mobile Number - $custContact</strong><br>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Start Date & Time - $startDate $startTime</strong><br>
                          <strong>End Date & Time - $endDate $endTime</strong><br>
                         
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
    if($tripType == 'Round NoGST'){
$to = $custMail;
$subject = "Your journey information has been updated.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                  <p>Updated your travel information for booking id $bookingId. Please see the updated trip details below. </p>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Start Date & Time - $startDate $startTime</strong><br
                          <strong>End Date & Time - $endDate $endTime</strong><br>
                         <strong>Vahicle Category - $vName </strong><br>
                          <strong>Vahicle RC Number - $rcNo</strong><br>
                         <strong>Assingned Driver Name - $driverName </strong><br>
                         <strong>Driver Mobile No - $driverContact </strong><br>
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
     //Mail To Driver
if($tripType == 'Round NoGST'){
$to = $driverEmail;
$subject = "Trip Details";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:10px;'>
                <p>Dear $driverName,<br>
                  <p>Please see the trip details below. </p>
                         <strong>Booking Id  - $bookingId </strong><br>
                         <strong>Customer Name - $custName </strong><br>
                         <strong>Customer Mobile Number - $custContact</strong><br>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Start Date & Time - $startDate $startTime</strong><br>
                          <strong>End Date & Time - $endDate $endTime</strong><br>
                         
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }


if($tripType == 'Rental'){
$to = $custMail;
$subject = "Your journey information has been updated.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                  <p>Updated your travel information for booking id $bookingId. Please see the updated trip details below. </p>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         <strong>Vahicle Category - $vName </strong><br>
                          <strong>Vahicle RC Number - $rcNo</strong><br>
                         <strong>Assingned Driver Name - $driverName </strong><br>
                         <strong>Driver Mobile No - $driverContact </strong><br>
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
     //Mail To Driver
if($tripType == 'Rental'){
$to = $driverEmail;
$subject = "Trip Details";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $driverName,<br>
                  <p>Please see the trip details below. </p>
                         <strong>Booking Id  - $bookingId </strong><br>
                         <strong>Customer Name - $custName </strong><br>
                         <strong>Customer Mobile Number - $custContact</strong><br>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }

if($tripType == 'Rental NoGST'){
$to = $custMail;
$subject = "Your journey information has been updated.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                  <p>Updated your travel information for booking id $bookingId. Please see the updated trip details below. </p>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         <strong>Vahicle Category - $vName </strong><br>
                          <strong>Vahicle RC Number - $rcNo</strong><br>
                         <strong>Assingned Driver Name - $driverName </strong><br>
                         <strong>Driver Mobile No - $driverContact </strong><br>
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    
     //Mail To Driver
if($tripType == 'Rental NoGST'){
$to = $driverEmail;
$subject = "Trip Details";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $driverName,<br>
                  <p>Please see the trip details below. </p>
                         <strong>Booking Id  - $bookingId </strong><br>
                         <strong>Customer Name - $custName </strong><br>
                         <strong>Customer Mobile Number - $custContact</strong><br>
                         <strong>Trip Type - $tripType </strong><br>
                         <strong>Pick Up Location - $pickupLocation </strong><br>
                         <strong>Drop Location -  $dropLocation </strong><br>
                         <strong>Date & Time - $startDate $startTime</strong><br>
                         
                         <br>
                         
                        <p>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    }
    ?>
     <script type="text/javascript">
alert("Mail Sent !");
window.location.href = "custom-client-details.php";
</script>