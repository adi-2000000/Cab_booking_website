<?php
session_start();
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['driver'] = $_POST['driver'];
$_SESSION['car'] = $_POST['car'];
$_SESSION['rs'] = $_POST['rs'];
$_SESSION['dis'] = $_POST['dis'];
$_SESSION['days'] = $_POST['days'];
header('location:booking-details-round.php')
?>