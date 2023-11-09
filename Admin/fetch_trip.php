<?php
include 'config.php';

$userid = $_GET['userid']; // Get the userid from the request URL parameter

// Fetch user data based on the userid
$result = mysqli_query($link, "SELECT * FROM `user_booking` WHERE userid = '$userid'");

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    // Create an array to store the fetched data
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
