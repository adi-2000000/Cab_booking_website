<?php
session_start();
$_SESSION['vendorid'] = $_POST['vendorid'];
$_SESSION['bookid']= $_POST['bookid'];
header('location:cancel-booking-details.php');
?>