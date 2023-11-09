<?php

session_start();
$bookid = $_POST['bookid'];
$phone = $_POST['phone'];
include "config.php";
$sql = "DELETE FROM `queries` WHERE bookid='$bookid' and phone='$phone'";
if ($link->query($sql) === TRUE) {
  header('location:queries.php');
} else {
  echo "Error updating record: " . $link->error;
}
?>