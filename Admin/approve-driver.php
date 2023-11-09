<?php

$driverid = $_POST['driverid'];
include "config.php";
$sql = "UPDATE `driver_details` SET status = '1' WHERE driverid='$driverid'";
if ($link->query($sql) === TRUE) {
  header('location:drivers-approved.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>