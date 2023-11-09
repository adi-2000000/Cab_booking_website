<?php

// Include your database configuration file (config.php)
include "config.php";

// Get the bookid from the query parameter
$bookid = $_GET['bookid'];
$id = $_GET['id'];


// Check if the bookid is provided
if (empty($bookid)) {
    http_response_code(400); // Bad Request
    echo json_encode(array("message" => "Book ID is required."));
    exit;
}

// Update the garage_out field for the specified bookid
$sql = "UPDATE `user_booking` SET trip_started = '2', status = '2' WHERE bookid = ? AND id = ?";
$stmt = $link->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ss", $bookid, $id); // Assuming bookid and id are strings

    if ($stmt->execute()) {
        http_response_code(200); // OK
        echo json_encode(array("message" => "Trip_started set to 1 for bookid $bookid."));
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