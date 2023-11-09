<?php 
session_start();
$b2bid = $_SESSION['b2bid'];
include 'config.php';
$pic = mysqli_query($link,"SELECT * FROM `b2b_details` WHERE b2bid = '$b2bid'");
$row = mysqli_fetch_array($pic);

//To Create random Password
function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
$randPass =  rand_string(10);

//Registration Code 
        // Prepare an insert statement
        $sql = "INSERT INTO `b2b-login` (username, password, b2bid) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $b2bid);
            
            // Set parameters
            $param_username = $row['b2b_email'];
            $param_password = password_hash($randPass, PASSWORD_DEFAULT); // Creates a password hash
            $b2bid = $b2bid;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
//header("location:../vendor/login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }




    $bid = $b2bid; 
    $to =  $row['b2b_email']; 
    $phone = $row['b2b_contact']; 
    $subject = "Your request at AimCab has been approved";
    $message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
                <p>Hello Vendor,<br>
                        <p>We have verified your deatails.  Please check this <br> Your Vendor id is $bid</p>
                        <p> Sign in Details: </p>
                        <p><b>Username - </b> $to <br>
                        <b>Password - </b>$randPass  </p>
                        <p>Use this credentials to sign in for your account at aimcab. <a href='https://aimcabbooking.com/vendor/login.php'>Click here for login</a></p>
                        <p><strong>Note: </strong>After login successful. Please change your username and password.</p>
                        <b>Thank You! <br> Team AimCab</br>
                          
                          </body>
            </html>";
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);

    ?>

      <script type="text/javascript">
alert("Mail sent successfully");
window.location.href = "b2b-details.php";
</script>