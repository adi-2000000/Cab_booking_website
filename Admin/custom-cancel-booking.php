<?php

session_start();
$bookid = $_SESSION['bookid'];
include "config.php";
$sql = "UPDATE `custom_booking` SET status='3', vendorid='0', driverid='0' WHERE bookid='$bookid'";
if ($link->query($sql) === TRUE) {
  header('location:custom-client-details.php');
} else {
  echo "Error updating record: " . $link->error;
}

 $pic = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE `bookid` = '$bookid'");
 $row = mysqli_fetch_array($pic);
 $bookingId = $row['bookid'];
 $tripType = $row['user_trip_type'];
 $pickupLocation = $row['user_pickup'];
 $dropLocation = $row['user_drop'];
 $custName = $row['name'];
 $custMail = $row['email'];

$to = $custMail;
$subject = "Your trip has been cancelled.";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $custName,<br>
                
                <p>Your trip with booking id $bookingId from $pickupLocation to $dropLocation has been cancel due some technical issues from our side.<br/>
                  If you have  paid the full or partial amount, it will be refunded to your account.</p>
                <p>sorry for inconvenience caused to you in this regards.</p>
                  
                         
                        <p>Regards,<br/>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    
?>