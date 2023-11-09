<?php

$cabid = $_POST['cabid'];
include "config.php";
$sql = "UPDATE `cabs_details` SET status = '0' WHERE cabid='$cabid'";
if ($link->query($sql) === TRUE) {
  header('location:cabs.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>