<?php
session_start();
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['bookid'] = $_POST['bookid'];
$_SESSION['created_at'] = $_POST['created_at'];
header('location:timeline.php');
?>