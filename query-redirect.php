<?php
session_start();
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['car'] = $_POST['car'];
$_SESSION['rs'] = $_POST['rs'];
header('location:booking-details.php')
?>