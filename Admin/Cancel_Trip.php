<?php
include 'config.php'; // Include your database connection configuration

$driverId = $_GET['driverid']; // Get the driverid from the request URL parameter

// Fetch trip data based on the driverid
$query = "SELECT * FROM user_booking WHERE driverid = '$driverId' AND cancelled_trip = 1";
$result = mysqli_query($link, $query);

// Check if any rows are returned
if ($result) {
    $data = array();

    // Iterate through the result and add each row to the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = array('message' => 'No data found');
}

// Close the database connection
mysqli_close($link);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>