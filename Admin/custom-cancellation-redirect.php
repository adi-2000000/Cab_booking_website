<?php
session_start();
$_SESSION['vendorid'] = $_POST['vendorid'];
$_SESSION['bookid']= $_POST['bookid'];
header('location:custom-cancel-booking-details.php');
?>