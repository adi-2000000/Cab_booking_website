<?php
// Create a database connection
include 'config.php';

// Check the connection

    // Get the JSON data from the request body
    $json_data = file_get_contents('php://input');

    // Decode the JSON data
    $data = json_decode($json_data, true);

    // Check if JSON decoding was successful
    if ($data === null) {
        echo "Error: Invalid JSON data";
    } else {
        // Extract data from the decoded JSON
        $bookid = $data['bookid'];
        $username = $data['username'];
        $email = $data['email'];
        $reason_of_complaint = $data['reason_of_complaint'];
        $related = $data['related'];
        $phone = $data['phone'];

        // Insert data into the database (assuming $conn is defined in 'config.php')
        $sql = "INSERT INTO user_complaints (bookid, username, email, reason_of_complaint, related, phone) VALUES ('$bookid', '$username', '$email', '$reason_of_complaint', '$related', '$phone')";

        if (mysqli_query($link, $sql)) {
            echo "Feedback data saved successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
    }

    // Close the database connection
    mysqli_close($link);

?>
