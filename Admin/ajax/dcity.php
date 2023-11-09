<?php
  include '../config.php';

$dstate_id =  $_POST['dstate_data'];

$dcity = "SELECT * FROM cities WHERE state_id = $dstate_id";
$dcity_qry = mysqli_query($link, $dcity);


$output1 = '<option value="">Select State</option>';
while ($dcity_row = mysqli_fetch_assoc($dcity_qry)) {
    $output1 .= '<option value="' . $dcity_row['id'] . '">' . $dcity_row['name'] . '</option>';
}
echo $output1;
