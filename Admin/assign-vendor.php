<?php

session_start();
$bookid = $_SESSION['bookid'];
$_SESSION['vendor'] = "true";
$_SESSION['vendorid'] = $_POST['vendorid'];

include "config.php";
$sql = "UPDATE `user_booking` SET vendorid='$_POST[vendorid]', driverid='0', status='0' WHERE bookid='$bookid'";
if ($link->query($sql) === TRUE){
  header('location:client-details.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>
