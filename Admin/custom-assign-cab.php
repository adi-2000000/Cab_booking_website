<?php
session_start();
$bookid = $_SESSION['bookid'];
$_SESSION['vendor'] = "false";
include "config.php";
$sql = "UPDATE `custom_booking` SET cabid='$_POST[cabid]', status='1' WHERE bookid='$bookid'";
if ($link->query($sql) === TRUE) {
  header('location:custom-client-details.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>