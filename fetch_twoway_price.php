<?php
include 'config.php';

$table = $_GET['table']; // Get the table name from the request URL parameter

if ($table === 'round_trip') {
      $sourcePincode = $_GET['source_pincode'];
$destinationPincode = $_GET['destination_pincode'];
$pincode = $_GET['source_pincode'];
$code = substr($pincode, 0, 3);
    $source_city = $_GET['source_city']; // Get the source city from the request URL parameter
    $destination_city = $_GET['destination_city']; // Get the destination city from the request URL parameter
    
      
    if (in_array($code, ['744','160','396','403','682','609','737'], true)) {
   $pin = $code;
}else{
    $pin = substr($pincode, 0, 2);
}

     
    
     if (in_array($pin, ['40','41','42','43','44'], true)) {
   require('maharashtra_trip_codes.php');
}elseif(in_array($pin, ['403'], true)){
     require('goa-trip-codes.php');
}elseif(in_array($pin, ['30','31','32','33','34'], true)){
     require('rajasthan-trip-codes.php');
}elseif(in_array($pin, ['36','37','38','39'], true)){
     require('gujarat-trip-codes.php');
}elseif(in_array($pin, ['56','57','58','59'], true)){
     require('karnataka-trip-codes.php');
}elseif(in_array($pin, ['50'], true)){
     require('telangana-trip-codes.php');
}elseif(in_array($pin, ['42','43','44','45'], true)){
     require('mp-trip-codes.php');
}elseif(in_array($pin, ['60','61','62','63','64'], true)){
     require('tamilnadu-trip-codes.php');
}elseif(in_array($pin, ['51','52','53'], true)){
     require('ap-trip-codes.php');
}elseif(in_array($pin, ['11'], true)){
     require('delhi-trip-codes.php');
}elseif(in_array($pin, ['14','15','16'], true)){
     require('punjab-trip-codes.php');
}elseif(in_array($pin, ['20','21','22','23','24','25','26','27','28'], true)){
     require('up-trip-codes.php');
}

    
    // Fetch oneway trip data based on source_city and destination_city
    $result = mysqli_query($link, "SELECT * FROM `round_trip` WHERE source_city = '$city1' AND destination_city = '$city2'");

    // Create an array to store the fetched data
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = array('error' => 'Invalid table name');
}

// Close the database connection
mysqli_close($link);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>