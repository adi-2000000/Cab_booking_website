<?php

session_start();
$bookid = $_SESSION['bookid'];
$vendor = $_SESSION['vendor'];

include "config.php";
$sql = "UPDATE `user_booking` SET driverid='$_POST[driverid]', status = '0' WHERE bookid='$bookid'";
if ($link->query($sql) === TRUE) {
  header('location:client-details.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>