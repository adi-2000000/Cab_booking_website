<?php 
if(isset($_POST['message_submit'])){
    $to ="ajcabs1717@gmail.com"; // this is your Email address
    
    $startdate=$_POST['startdate'];
    $starttime=$_POST['time'];
    $endtime=$_POST['time2'];
    $enddate=$_POST['enddate'];
    $triptype=$_POST['triptype'];
      $fullName = $_POST['username'];
         $source_name=$_POST['Source'];
      $desination_name=$_POST['Desination'];
      $from = $_POST['email']; // this is the sender's Email address
    $phone = $_POST['number'];
    $customer_message = $_POST['splrequest'];
    $subject = "Customer contacted in ajcabservices.com";
    $message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
                <p>Hello Admin,<br>
                        <p>A user just contacted you ! Please check this - </p><br>
                        <p> User Details: </p>
                        <p><b>Name - </b> $fullName </p>
                        <p><b>Email - </b> $from </p>
                        <p><b>Phone Number - </b> $phone </p>
                        <p><b>Message - </b> $customer_message </p><br>
                         <p><b>Trip Type - </b>  $triptype </p><br>
                          <p><b>Start Date - </b>  $startdate </p><br>
                           <p><b>End Date - </b> $enddate </p><br>  
                            <p><b>Start Time - </b>  $starttime </p><br>
                           <p><b>End Time - </b> $endtime </p><br>  
                            <p><b>From - </b> $source_name </p><br>
                             <p><b>to - </b> $desination_name </p><br>
                        <b>Thank You!</b>
                          
                          </body>
            </html>";
   

    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: contact@ajcabservices.com";

    
    mail($to, $subject, $message, $headers);

    ?>

<script>
    window.alert("Thank You!.\n We have received your message. You may get a call from our team.");
</script>

<?php
    }
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>booking page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
      <style>
        
/* for desktop */
.whatsapp_float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    left: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 40px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
}

.whatsapp-icon {
    margin-top: 16px;
}

.call-button {
            position: fixed;
            bottom: 100px; /* Adjust the vertical position as needed */
            right: 40px; /* Adjust the horizontal position as needed */
            display: inline-block;
            background-color: #25d366;
            color: #fff;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
        }

        .call-button i {
            margin-right: 5px;
        }

/* for mobile */
@media screen and (max-width: 767px) {
    .whatsapp-icon {
        margin-top: 10px;
    }

    .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        left: 10px;
        font-size: 30px;
    }
}
    </style>
</head>

<body onload="onloadfunction()">
    <?php include "website_header.php"?>
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car rental Service Provider</h1>
                        <p class="text-white mb-0" style="text-align:justify;">Simply select your pickup and drop-off
                            locations, choose your preferred cab type, and confirm your booking. Our reliable drivers
                            will arrive on time and take you to your destination safely and comfortably. You'll receive
                            real-time updates about your cab's location, estimated time of arrival, and fare details.
                            Plus, our competitive pricing ensures that you'll get the best value for your money. Whether
                            you're traveling for business or leisure, our online cab booking service is the perfect
                            solution for all your transportation needs. Book your ride today and enjoy a hassle-free
                            journey!
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book A Cab Now</h1>
                        <form action="booking.php" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select id="mySelect" name="triptype" id="triptype" onchange="myFunction()" class="form-control border-0"
                                        placeholder="Ride Type" style="height: 55px;"
                                        aria-label="Default select example">
                                        <option value="Onewaytrip" selected>One Way Trip</option>
                                        <option value="roundtrip">Round Trip</option>
                                        <option value="rental">Rental</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="username"  id="username" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Date" name="startdate" id="startdate" data-target="#date1" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                 <div class="col-12 col-sm-6">
            <div class="time" id="timePicker" data-target="#timePicker" data-toggle="datetimepicker">
                <input type="text" class="form-control border-0 datetimepicker-input"
                    placeholder="Time" name="time" id="time" data-target="#timePicker" data-toggle="datetimepicker"
                    style="height: 55px;">
            </div>
        </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Pickup Address"  name="Source" id="Source" data-target="#date1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Drop Address" name="Desination" id="Desination" data-target="#date1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="contact" id="contact" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Contact No" name="number"  id="number" data-target="#date2" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                            placeholder="Return Date" data-target="#date2" name="enddate" id="enddate" data-toggle="datetimepicker"
                                            style="height: 55px;">
                                    </div>
                                </div>
                                 <div class="col-12 col-sm-6">
            <div class="time" id="timePicker2" data-target="#timePicker" data-toggle="datetimepicker">
                <input type="text" class="form-control border-0 datetimepicker-input"
                    placeholder="Return Time" name="time2" id="time2" data-target="#timePicker" data-toggle="datetimepicker"
                    style="height: 55px;">
            </div>
        </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request" id="splrequest" name="splrequest"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" name="message_submit" id="message_submit" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Call Us //</h6>
                    <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                    <p class="mb-0" style="text-align:justify;">If you have any questions or concerns, our friendly
                        customer support team is here to help. Simply give us a call at [phone number] and we'll be
                        happy to assist you. Our knowledgeable representatives are available [insert hours of operation]
                        to answer any questions you may have about our services, pricing, or policies. We can also help
                        you with booking a cab or rental car, modifying an existing reservation, or providing you with
                        travel advice and recommendations. At [company name], we're committed to providing you with the
                        best possible customer experience. So, if you need any assistance, don't hesitate to give us a
                        call – we're always here for you.
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+91 7038081717</h3>
                        <a href="" class="btn btn-secondary py-3 px-5">Contact Us<i
                                class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <?php include "website_footer.php" ?>



    <script>
        function myFunction() {
            var x = document.getElementById("mySelect").value;
            var y = document.getElementById("date2");
            var z = document.getElementById("timePicker2");

            date2
            if (x === "roundtrip") {
                y.style.display = "block";
                z.style.display = "block";

            } else {
                y.style.display = "none";
                z.style.display = "none";

            }
        }

        function onloadfunction() 
        {
            var y = document.getElementById("date2");
            y.style.display = "none";
            
             var z = document.getElementById("timePicker2");
            z.style.display = "none";
        }
    </script>
</body>
</html>


