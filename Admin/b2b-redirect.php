<?php
session_start();
$_SESSION['b2bid'] = $_POST['b2bid'];
header('location:b2b-details.php');
?>