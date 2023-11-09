<?php
include "config.php";

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true); // true to decode as an associative array

if ($data === null) {
    // JSON data is invalid
    die('Invalid JSON data');
}


$email = $data['email'];
$bookid = $data['bookid'];
$amount = $data['amount'];
$distance = $data['distance'];
$name = $data['name'];
$car = $data['car'];
$date = $data['date'];
$time = $data['time'];
$userdrop = $data['userdrop'];
$userpickup = $data['userpickup'];
$usertriptype = $data['usertriptype'];
$start_odometer = $data['start_odometer'];





$to = $email;
$from = $email; // this is the sender's Email address
$subject = "Your Trip has Started:";

$message = "
<html>
<head>
    <title>AIMCAB - Trip Started</title>
</head>
<body> 
    <div style='padding:50px;'>
        <p>Hello User,</p>
        <p>Your trip has successfully started. Here are the trip details:</p>
        
        <table style='border-collapse: collapse; width: 120%; margin-top: 20px;'>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Trip ID</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$bookid</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Name</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$name</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Car</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$car</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Date</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$date</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Time</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$time</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>User Drop</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$userdrop</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>User Pickup</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$userpickup</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Trip Type</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$usertriptype</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Start Odometer</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$start_odometer kilometers</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Amount</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$amount</td>
            </tr>
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>Distance</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$distance</td>
            </tr>
        </table>
        
        <p>Please keep this information for your reference.</p>

        <p>If you have any questions or need further assistance, please don't hesitate to contact our support team.</p>

        <p>Thank you for choosing AIMCAB for your trip. We hope you have a safe journey!</p>

        <p>Best regards,<br>Your Company Name</p>
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
mysqli_close($conn);
?>