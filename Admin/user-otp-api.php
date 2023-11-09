<?php
include "config.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true); // true to decode as an associative array

if ($data === null) {
    // JSON data is invalid
    die('Invalid JSON data');
}

$otp = mt_rand(100000, 999999);
$email = $data['email'];
$phone = $data['phone'];
$bookid = $data['bookid']; // Assuming 'bookid' is in the JSON data

$checkSql = "SELECT email FROM `otp` WHERE email = ?";
$checkStmt = $link->prepare($checkSql);

if ($checkStmt) {
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        // Email exists in the 'otp' table, update OTP
        $updateSql = "UPDATE `otp` SET otp = ? WHERE email = ?";
        $updateStmt = $link->prepare($updateSql);

        if ($updateStmt) {
            $updateStmt->bind_param("ss", $otp, $email);

            if ($updateStmt->execute()) {
                // OTP updated successfully
                http_response_code(200); // OK
                echo json_encode(array("message" => "OTP Updated."));
            } else {
                // Error updating OTP
                http_response_code(500); // Internal Server Error
                echo json_encode(array("message" => "Error updating OTP: " . $updateStmt->error));
            }

            $updateStmt->close();
        } else {
            // Error preparing the OTP update SQL statement
            http_response_code(500); // Internal Server Error
            echo json_encode(array("message" => "Error preparing the OTP update SQL statement: " . $link->error));
        }
    } else {
        // Email doesn't exist in the 'otp' table, insert a new record
        $insertSql = "INSERT INTO `otp` (number, email, otp) VALUES (?, ?, ?)";
        $insertStmt = $link->prepare($insertSql);

        if ($insertStmt) {
            $insertStmt->bind_param("sss", $phone, $email, $otp);

            if ($insertStmt->execute()) {
                // OTP inserted successfully
                http_response_code(201); // Created
                echo json_encode(array("message" => "OTP Inserted."));
            } else {
                // Error inserting OTP
                http_response_code(500); // Internal Server Error
                echo json_encode(array("message" => "Error inserting OTP: " . $insertStmt->error));
            }

            $insertStmt->close();
        } else {
            // Error preparing the OTP insert SQL statement
            http_response_code(500); // Internal Server Error
            echo json_encode(array("message" => "Error preparing the OTP insert SQL statement: " . $link->error));
        }
    }

    $checkStmt->close();
} else {
    // Error preparing the check SQL statement
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Error preparing the check SQL statement: " . $link->error));
}

// Close the database connection (you may want to do this differently based on your setup)
$link->close();



$to = $email;
$from = $email; // this is the sender's Email address
$subject = "Cab verification code: $otp";

$message = "
<html>
<head>
    <title>AIMCAB</title>
</head>
<body> 
    <div style='padding:50px;'>
        <p>Hello User,<br>
            <p> Here is your OTP:</p><br>

            <strong style='font-size: 24px;'>OTP: $otp</strong><br>

            <p>Please keep this OTP safe for your reference.</p>

            <h6>Contact the driver or our support team if needed.<br>
            Thank You!</p>
        </div>
    </body>
</html>";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
//$headers .= "From: info@cobaztech.com";

if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo "Email sent successfully!";
} else {
    // Email delivery failed
    echo "Email delivery failed!";
}

// Close the database connection if needed

?>
