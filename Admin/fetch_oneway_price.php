<?php
include 'config.php';

$table = $_GET['table']; // Get the table name from the request URL parameter

if ($table === 'oneway_trip') {
    $source_city = $_GET['source_city']; // Get the source city from the request URL parameter
    $destination_city = $_GET['destination_city']; // Get the destination city from the request URL parameter
    
    // Fetch oneway trip data based on source_city and destination_city
    $result = mysqli_query($link, "SELECT * FROM `oneway_trip` WHERE source_city = '$source_city' AND destination_city = '$destination_city'");

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
