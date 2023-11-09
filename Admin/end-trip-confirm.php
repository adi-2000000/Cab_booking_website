<?php
include "config.php";

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true); // true to decode as an associative array

if ($data === null) {
    // JSON data is invalid
    die('Invalid JSON data');
}


$km = $data['km'];    //odo start - odo end
$email = $data['email'];
$bookid = $data['bookid'];
$id = $data['id'];
$amount=$data['amount'];
$distence=$data['distance'];
$baseAmount=$data['baseAmount'];



$fareAmount=  $baseAmount/$distence ;
$extraDistence=$km - $distence;
$ExtraPrice=$fareAmount * $extraDistence;
$TotalAmount=$ExtraPrice + $amount;


$to = $email;
$from = $email; // this is the sender's Email address
$subject = "Your Trip has Ended:";

$message = "
<html>
<head>
    <title>AIMCAB - Trip Ended</title>
</head>
<body>
    <div style='padding: 50px;'>
        <p>Hello User,</p>
        <p>Your trip has successfully ended. Here are the trip details:</p>

        <table style='border-collapse: collapse; width: 100%;'>
            <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Base Amount:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$baseAmount</td>
            </tr>
              <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>fare:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$fareAmount</td>
            </tr>
            <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Total Distance Travelled:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$km kilometers</td>
            </tr>
            <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Extra Kilometers Travelled:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$extraDistence</td>
            </tr>
            <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Original Amount:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$amount</td>
            </tr>
            <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Extra Amount:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$ExtraPrice</td>
            </tr>
            <tr>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>Total Amount:</td>
                <td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>$TotalAmount Rs</td>
            </tr>
        </table>

        <p>Please keep this information for your reference.</p>
    <p><a href='https://docs.google.com/forms/d/e/1FAIpQLSdNRQ3aC7RwrT5o7RVKUgx39DRJfRN9x8vlABC4CRH3Cls__w/viewform?usp=sf_link'>Google Form Link</a></p>

        <p>If you have any questions or need further assistance, please don't hesitate to contact our support team.</p>

        <p>Thank you for choosing AIMCAB for your trip. We hope to serve you again soon!</p>

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