<?php

$con = mysqli_connect('localhost', 'aimcabbo', 'Aimcab23M@2023', 'aimcabbo_admin');
$con->set_charset('utf8mb4');

if(mysqli_connect_errno()){
    echo "MySql Connection Error<br>";
    die;
}
