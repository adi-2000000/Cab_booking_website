<?php 
session_start();
$vendorid = $_SESSION['vendorid'];
include 'config.php';
$pic = mysqli_query($link,"SELECT * FROM `vendor_details` WHERE vendorid = '$vendorid'");
$row = mysqli_fetch_array($pic);

//To Create random Password
function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
$randPass =  rand_string(10);

//Registration Code 
        // Prepare an insert statement
        $sql = "INSERT INTO `vendor-login` (username, password, vendorid) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $vendorid);
            
            // Set parameters
            $param_username = $row['v_email'];
            $param_password = password_hash($randPass, PASSWORD_DEFAULT); // Creates a password hash
            $vendorid = $vendorid;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
//header("location:../vendor/login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }




    $vid = $vendorid; 
    $to =  $row['v_email']; 
    $phone = $row['v_contact']; 
    $subject = "Your request at AimCab has been approved";
    $message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
                <p>Hello Vendor,<br>
                        <p>We have verified your deatails.  Please check this <br> Your Vendor id is $vid</p>
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
window.location.href = "vendor-details.php";
</script>