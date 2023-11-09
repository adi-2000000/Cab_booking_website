<?php

$hatchback = $_POST['one-hatchback'];
$sedan = $_POST['one-sedan'];
$suv = $_POST['one-suv'];
$suv1 = $_POST['one-suv+'];
$state = $_POST['state'];

include "config.php";

$sql = "UPDATE `oneway` SET `hatchback` = '$hatchback', `sedan` = '$sedan', `suv` = '$suv', `suv+` = '$suv1' WHERE state = '$state'";

if ($link->query($sql) === TRUE) {
  header('location:price.php');
} else {
  echo "Error updating record: " . $link->error;
}

?>