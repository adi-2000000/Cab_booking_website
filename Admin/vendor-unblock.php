<?php

$vendorid = $_POST['vendorid'];
include "config.php";
$sql = "UPDATE `vendor_details` SET status = '1' WHERE vendorid='$vendorid'";
$sql1 = "UPDATE `vendor-login` SET status = '1' WHERE vendorid='$vendorid'";
if ($link->query($sql) === TRUE && $link->query($sql1) === TRUE) {
  header('location:vendor-details.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>