<?php

$b2bid = $_POST['b2bid'];
include "config.php";
$sql = "UPDATE `b2b_details` SET status = '1' WHERE b2bid='$b2bid'";
$sql1 = "UPDATE `b2b-login` SET status = '1' WHERE b2bid='$b2bid'";
if ($link->query($sql) === TRUE && $link->query($sql1) === TRUE) {
  header('location:b2b-details.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>