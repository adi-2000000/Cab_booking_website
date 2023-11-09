<?php
session_start();
$bookid = $_SESSION['bookid'];
$_SESSION['vendor'] = "false";
include "config.php";

//Cancellation mail to vendor
   $pic = mysqli_query($link,"SELECT * FROM `vendor_details` WHERE `vendorid` = '$_SESSION[vendorid]'");
 $row = mysqli_fetch_array($pic);
 $vendorName = $row['v_name'];
 $vedMail = $row['v_email'];
 
  $pic1 = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE `bookid` = '$bookid'");
 $row1 = mysqli_fetch_array($pic1);
 $bookingId = $row1['bookid'];
 $tripType = $row1['user_trip_type'];
 $pickupLocation = $row1['user_pickup'];
 $dropLocation = $row1['user_drop'];

$to = $vedMail;
$subject = "Your assigned trip has been cancelled.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $vendorName,<br>
                
                <p>Your assigned trip with booking id <strong>$bookingId</strong> from <strong>$pickupLocation</strong> to <strong>$dropLocation</strong> has been cancel from our side.</p>
                         
                        <p>Regards,<br/>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    
    //End here
    
    
$sql = "UPDATE `custom_booking` SET vendorid='0', driverid='0', cabid='0', status='0' WHERE bookid='$bookid'";
if ($link->query($sql) === TRUE) {
     unset($_SESSION['vendorid']);
  header('location:custom-client-details.php');
} else {
  echo "Error updating record: " . $link->error;
}
?>