<?php
include "config.php";


function verifyOTP($user_otp, $expected_otp) {
    return ($user_otp === $expected_otp);
}

$rawData = file_get_contents("php://input");
$requestData = json_decode($rawData);

if ($requestData === null) {
    header("Content-Type: application/json; charset=utf-8");
    http_response_code(400);
    echo json_encode(array("message" => "Invalid JSON data in the request."));
    exit;
}

if (isset($requestData->otp)) {
    $user_otp_code = $requestData->otp;

    $sql = "SELECT email, otp FROM `otp` WHERE otp = ?";
    $stmt = $link->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $user_otp_code);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_email = $row['email'];
            $expected_otp = $row['otp'];

            if (verifyOTP($user_otp_code, $expected_otp)) {
                http_response_code(200);
                echo json_encode(array("message" => "OTP is valid. Access granted.", "email" => $user_email));
            } else {
                http_response_code(400);
                echo json_encode(array("message" => "Invalid OTP. Access denied."));
            }
        } else {
            http_response_code(404);
            echo json_encode(array("message" => "No OTP found for the provided OTP."));
        }
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Error executing the SQL query: " . $stmt->error));
    }

    $stmt->close();
    $link->close();
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Missing OTP in the request."));
}
?>