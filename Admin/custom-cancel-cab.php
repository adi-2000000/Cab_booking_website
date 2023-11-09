<?php

session_start();
$bookid = $_SESSION['bookid'];

include "config.php";
$sql = "UPDATE `custom_booking` SET cabid='0', status='0' WHERE bookid='$bookid'";
if ($link->query($sql) === TRUE) {
  header('location:custom-client-details.php');
} else {
  echo "Error updating record: " . $link->error;
}
?>