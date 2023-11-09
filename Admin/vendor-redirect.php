<?php
session_start();
$_SESSION['vendorid'] = $_POST['vendorid'];
header('location:vendor-details.php');
?>