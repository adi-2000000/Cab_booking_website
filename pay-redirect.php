<?php
session_start();
$name = $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['phone']=$phone;
$bookid = $_SESSION['bookid'];

include "config.php";
$sql = "UPDATE `user_booking` SET name = '$name', email = '$email', phone = '$phone' WHERE bookid ='$bookid'";
   if ($link->query($sql) != TRUE) {
   echo "Error: " . $sql . "<br>" . $link->error;
   }
         
header('location:full-pay.php');
?>