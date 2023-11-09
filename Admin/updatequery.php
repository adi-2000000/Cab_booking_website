<?php
session_start();
include "config.php";
$sql = "UPDATE `queries` SET query_status='$_POST[status]' WHERE phone='$_SESSION[phone]' and bookid='$_SESSION[bookid]' and created_at='$_SESSION[created_at]'";
if ($link->query($sql) === TRUE) {
  header('location:timeline.php');
} else {
  echo "Error updating record: " . $link->error;
}

if($_POST['status'] == 'Future Planning'){
   $sql = "UPDATE `queries` SET query_status='$_POST[status]', future_date = '$_POST[future_date]' WHERE phone='$_SESSION[phone]' and bookid='$_SESSION[bookid]' and created_at='$_SESSION[created_at]'";
if ($link->query($sql) === TRUE) {
  header('location:timeline.php');
} else {
  echo "Error updating record: " . $link->error;
} 
}

?>