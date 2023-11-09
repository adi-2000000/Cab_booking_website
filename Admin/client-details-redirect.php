<?php
session_start();
$_SESSION['vendor'] = $_POST['vendor'];
$_SESSION['bookid']= $_POST['bookid'];
header('location:client-details.php');
?>