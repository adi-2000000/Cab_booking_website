<?php

session_start();
$bookid = $_POST['bookid'];
$phone = $_POST['phone'];
include "config.php";
$sql = "DELETE FROM `custom_booking` WHERE bookid='$bookid' and phone='$phone'";
if ($link->query($sql) === TRUE) {
  header('location:invoice-history.php');
} else {
  echo "Error updating record: " . $link->error;
}
?>