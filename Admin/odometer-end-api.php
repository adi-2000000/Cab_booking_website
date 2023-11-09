<?php

// Include your database configuration file (config.php)
include "config.php";

// Get the JSON data from the request body
$jsonData = file_get_contents('php://input');

// Parse the JSON data
$requestData = json_decode($jsonData, true);

// Check if both bookid and odometerValue are provided
if (empty($requestData['bookid']) || !isset($requestData['odometerValue'])) {
    http_response_code(400); // Bad Request
    echo json_encode(array("message" => "Both bookid and odometerValue are required."));
    exit;
}

// Extract bookid and odometerValue from the parsed JSON data
$bookid = $requestData['bookid'];
$odometerValue = $requestData['odometerValue'];
$id = $requestData['id'];


// Update the odometer_start field for the specified bookid
$sql = "UPDATE `user_booking` SET odometer_end = ? WHERE bookid = ? AND id = ?";
$stmt = $link->prepare($sql);

if ($stmt) {
    $stmt->bind_param("dss", $odometerValue, $bookid, $id); // Assuming odometerValue is a decimal, bookid and id are strings

    if ($stmt->execute()) {
        http_response_code(200); // OK
        echo json_encode(array("message" => "Odometer value updated successfully for bookid $bookid."));
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(array("message" => "Error updating record: " . $stmt->error));
    }

    $stmt->close();
} else {
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Error preparing the SQL statement: " . $link->error));
}

// Close the database connection (you may want to do this differently based on your setup)
$link->close();
?>