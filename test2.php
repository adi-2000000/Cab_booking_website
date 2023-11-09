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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCelDo4I5cPQ72TfCTQW-arhPZ7ALNcp8w&libraries=places">
        </script>
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
    
    <style>
    .form-title {
        text-align: center;
        padding-bottom: 10px;
    }

    .form-label {
        text-align: left;
    }

    .form-select {
        padding: 2px;
        margin: 2px;
        background-color: #eb0f07;
        height: 40px;
    }

    .register-form {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-button {
        background-color: #eb0f07;
        padding: 10px;
    }
</style>


  <script>
                        $(document).ready(function () {
                            $(".round").hide();
                            $(".rental").hide();
                            $("select").change(function () {
                                $("select option:selected").each(function () {

                                    if ($(this).attr("value") == "One Way") {
                                        $(".round").hide();
                                        $(".oneway").show();
                                        $(".rental").hide();
                                    }

                                    if ($(this).attr("value") == "Round") {
                                        $(".oneway").show();
                                        $(".round").show();
                                        $(".rental").hide();
                                    }
                                    if ($(this).attr("value") == "Rental") {
                                        $(".oneway").show();
                                        $(".round").hide();
                                        $(".rental").show();
                                    }
                                });
                            });
                        });
                    </script>
                    
                      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
            opacity: 5;
            transition: opacity 1s ease-in-out;
        }
        
        .slider_form {
    background-color: rgba(255, 255, 255, 0.7); /* Adjust the last value (0.7) for the desired transparency (0 to 1) */
}
    </style>

</head>

<body onload="onloadfunction()">
    
    
    <style>
        
        
        
          .formbook {
    background-color: rgba(255, 255, 255, 0.7); /* Adjust the last value (0.7) for the desired transparency (0 to 1) */
}
    </style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-12 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Booking //</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">"We'll Get You Moving: Car Rental Made Easy"</h1>
                                <a href="https://wa.me/message/HL3LLCBNDNIML1" class="btn btn-danger py-3 px-5 animated slideInDown">Whatsapp Us <i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-12 col-lg-5 animated zoomIn">
<div class="slider_form" style="border-radius: 20px; background-color: rgba(255, 0, 0, 0.5);">
                                    <h2 style="text-align: center; padding-bottom: 10px;"> BOOK A CAB NOW</h2>
                                    <h4 class="text-light my-1" style="text-align: left;">Trip Type </h4>
                                    <form id="form" action="post-trip.php" method="POST" autocomplete="on">
                                        <select class="p-2 my-2 bg-warning" name="trip" id="select" style="height: 40px; border-radius: 20px;">
                                            <option value="One Way">One Way Trip</option>
                                            <option value="Round">Round Trip</option>
                                            <option value="Rental">Rental</option>
                                        </select>
                                        <div class="oneway">
                                             <div class="row">
        <div class="col-md-6">
            <input id="from" class="form-control register_form" name="from" type="text" placeholder="PickUp Location" required autocomplete="from" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
        </div>
        <div class="col-md-6">
            <input id="to" class="form-control register_form" name="to" type="text" placeholder="Drop Location" required style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        </div>
    </div>
                                        </div>
                                        <div class="rental">
                                            <h5 class="text-light my-1">Choose Package</h5>
                                            <select class="p-2 my-2 bg-warning" name="mySelect">
                                                <option value="4">4Hrs 40Kms</option>
                                                <option value="6">6Hrs 60Kms</option>
                                                <option value="8">8Hrs 80Kms</option>
                                            </select>
                                        </div>
                                        <h5 class="text-light my-1">Choose Date and Time</h5>
                                        <input id="date" class="form-control register_form" name="date" style="color: black;" type="date" placeholder="Date">
                                        <input id="time" class="form-control register_form" name="time" style="color: black;" type="time" placeholder="Time">
                                        <div class="round">
                                            <h5 class="text-light my-1">Return Date and Time</h5>
                                            <input id="dateend" class="form-control register_form" style="color: black;" name="dateend" type="date" placeholder="Date">
                                            <input class="form-control register_form" name="timeend" style="color: black;" type="time" placeholder="Time">
                                        </div>
                                        <h5 class="text-light my-1">Personal Details</h5>
                                        <input id="name" name="name" class="form-control register_form" type="text" placeholder="Your Name" title="Error Message" required style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                        <input id="phone" name="phone" class="form-control register_form" type="number" placeholder="Your Phone Number" maxlegth="10" title="Error Message" pattern="[1-9]{1}[0-9]{9}" required>
                                        <input id="email" name="email" class="form-control register_form" type="email" placeholder="Your Email ID" title="Error Message" required style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                        <center><input id="submit" class="btn btn-primary p-1" type="submit" value="Book Now"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

    
    
    
    
    <script>
        // Initialize the carousel index
        let carouselIndex = 0;

        // Define the array of image sources
        const imageSources = [
            "img/carousel-bg-1.jpg",
            "img/carousel-bg-2.jpg",
            "img/taxi-image.jpg",
            // Add more image sources as needed
        ];

        // Function to update the carousel image with a fade effect
        function updateCarouselImage() {
            const carouselImage = document.querySelector(".carousel-item img");
            carouselImage.style.opacity = 0;

            // Increment the index or reset it to 0 when reaching the end
            carouselIndex = (carouselIndex + 1) % imageSources.length;
            setTimeout(() => {
                carouselImage.src = imageSources[carouselIndex];
                carouselImage.style.opacity = 1;
            }, 1000); // Adjust the delay (in milliseconds) to control the fade duration
        }

        // Automatically update the carousel image every 5 seconds (adjust as needed)
        setInterval(updateCarouselImage, 5000);
    </script>
    
    
    
    
    
    
  
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
             <div class="col-lg-4 col-md-5 p-4" id="booking-form"  style="border-radius:20px">
                        <div class="slider_form"  style="border-radius:20px" >
                            <h2 style="text-align:center; padding-bottom:10px;"> BOOK A CAB NOW</h2>
                            <h4 class="text-light my-1" style="text-align:left;">Trip Type </h4>
                            <form id="form" action="post-trip.php" method="POST" autocomplete="on" >
                                <select class="p-2 my-2 bg-warning" name="trip" id="select" style="height: 40px;"  style="border-radius:20px">
                                    <option value="One Way">One Way Trip</option>
                                    <option value="Round">Round Trip</option>
                                    <option value="Rental">Rental</option>
                                </select>
                                <div class="oneway">
                                    <input id="from" class="form-control register_form " name="from" type="text"
                                        placeholder="PickUp Location" required autocomplete="from" style="border-radius:20px"></br>
                                    <input id="origin" type="hidden" name="origin" required />
                                    <input id="to" class="form-control register_form " name="to" type="text"
                                        placeholder="Drop Location" required   style="border-radius:20px">
                                    <input id="destination" type="hidden" name="destination" required />
                                    <div id="result">
                                        <input id="distance" type="hidden" name="distance">
                                        <input id="source_pincode" type="hidden" name="source_pincode">
                                        <input id="destination_pincode" type="hidden" name="destination_pincode">
                                    </div>
                                    <div class="rental">
                                        <h5 class="text-light my-1 ">Choose Package</h5>
                                        <select class="p-2 my-2 bg-warning" name="mySelect">
                                            <option value="4">4Hrs 40Kms</option>
                                            <option value="6">6Hrs 60Kms</option>
                                            <option value="8">8Hrs 80Kms</option>
                                        </select>
                                    </div>
                                    <h5 class="text-light my-1">Choose Date and Time</h5>
                                    <input id="date" class="col-6" class="form-control register_form " name="date"
                                        style="color: black;" type="date" placeholder="Date">
                                    <input id="time" class="col-5" class="form-control register_form " name="time"
                                        style="color: black;" type="time" placeholder="Time">
                                    <div class="round">
                                        <h5 class="text-light my-1 ">Return Date and Time</h5>
                                        <input id="dateend" class="col-6" class="form-control register_form "
                                            style="color: black;" name="dateend" type="date" placeholder="Date">
                                        <input class="col-5" class="form-control register_form " name="timeend"
                                            style="color: black;" type="time" placeholder="Time">
                                    </div>
                                    <h5 class="text-light my-1">Personal Details</h5>
                                    <input id="name" name="name" class="form-control register_form " type="text"
                                        placeholder="Your Name" title="Error Message" required>
                                    <input id="phone" name="phone" class="form-control register_form " type="number"
                                        placeholder="Your Phone Number" maxlegth="10" title="Error Message"
                                        pattern="[1-9]{1}[0-9]{9}" required>
                                    <input id="email" name="email" class="form-control register_form " type="email"
                                        placeholder="Your Email ID" title="Error Message" required>
                                    <!---<input id="email" name="email" class="form-control register_form " type="email" placeholder="Your Email id" title="Error Message" required>-->
                                    <center><input id="submit" class="btn btn-warning p-1" type="submit" value="Book Now"
                                        style="background-color: blue; padding-top:20px;"></center>
                            </form>
                        </div>

                        <script>

                            jQuery(document).ready(function () {
                                jQuery("#phone").keypress(function (e) {
                                    var length = jQuery(this).val().length;
                                    if (length > 9) {
                                        return false;
                                    } else if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                        return false;
                                    } else if ((length == 0) && (e.which == 48)) {
                                        return false;
                                    }
                                });
                            });
                        </script>
                    </div>
            </div>
        </div>
    </div>
    <style>
        /* Add CSS styles here */
        .container-fluid.booking {
            background-color: red; /* Background color for the booking section */
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .py-5 {
            padding: 1.25rem; /* Adjust the padding as needed */
        }

        h1 {
            color: #fff;
            font-size: 28px;
        }

        p {
            color: #fff;
            text-align: justify;
        }

        .slider_form {
            background-color: #D81324;
            padding: 20px;
        }

        h2 {
            text-align: center;
            padding-bottom: 10px;
            color: #fff;
        }

        select {
            width: 100%;
            padding: 5px;
            background-color: #FFD700; /* Yellow background for select boxes */
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 3px;
            background-color: #fff; /* White background for input fields */
        }

        .btn {
            background-color: blue;
            color: #fff;
            padding: 20px 30px;
            border: none;
            cursor: pointer;
        }
    </style>
    <!-- Booking End -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>

<!-- Google API Code -->

      <script>

        jQuery(document).ready(function () {
          jQuery("#phone").keypress(function (e) {
            var length = jQuery(this).val().length;
            if (length > 9) {
              return false;
            } else if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
              return false;
            } else if ((length == 0) && (e.which == 48)) {
              return false;
            }
          });
        });
      </script>

 <script>
        function myfun() {
          var a = document.myForm.Email.value;
          if (a.indexOf('@') <= 0) {
            document.getElementById("Message").innerHTML = "**Invalid @ position";
            return false;
          }
          if ((a.charAt(a.length - 4) != '.') && (a.charAt(a.length - 3) != '.')) {
            document.getElementById("Message").innerHTML = "**Invalid . position";
            return false;
          }

        }
      </script>

      <script>
        var allFields = document.querySelectorAll("#form");
        for (var i = 0; i < allFields.length; i++) {
          allFields[i].addEventListener("keyup", function (event) {
            if (event.keyCode === 13) {
              console.log('Enter clicked')
              event.preventDefault();
              if (this.parentElement.nextElementSibling.querySelector('input')) {
                this.parentElement.nextElementSibling.querySelector('input').focus();
              }
            }
          });
        }
      </script>

      <script>
        $(function () {
          // add input listeners
          google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to'));

            // For Distance
            google.maps.event.addListener(from_places, 'place_changed', function () {
              var from_place = from_places.getPlace();
              var from_address = from_place.formatted_address;
              $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
              var to_place = to_places.getPlace();
              var to_address = to_place.formatted_address;
              $('#destination').val(to_address);
              calculateDistance();
            });


            google.maps.event.addListener(from_places, 'place_changed', function () {
              var place = from_places.getPlace();
              console.log(place)

              var address = place.formatted_address;
              var latitude = place.geometry.location.lat();
              var longitude = place.geometry.location.lng();
              var latlng = new google.maps.LatLng(latitude, longitude);
              var geocoder = (geocoder = new google.maps.Geocoder());
              geocoder.geocode({
                latLng: latlng
              }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                  if (results[0]) {
                    var address = results[0].formatted_address;
                    var pin =
                      results[0].address_components[
                        results[0].address_components.length - 1
                      ].long_name;
                    console.log(pin);
                    document.getElementById("source_pincode").value = pin;
                  }
                }
              });
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
              var place = to_places.getPlace();
              console.log(place)

              var address = place.formatted_address;
              var latitude = place.geometry.location.lat();
              var longitude = place.geometry.location.lng();
              var latlng = new google.maps.LatLng(latitude, longitude);
              var geocoder = (geocoder = new google.maps.Geocoder());
              geocoder.geocode({
                latLng: latlng
              }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                  if (results[0]) {
                    var address = results[0].formatted_address;
                    var pin =
                      results[0].address_components[
                        results[0].address_components.length - 1
                      ].long_name;
                    console.log(pin);
                    document.getElementById("destination_pincode").value = pin;
                  }
                }
              });
            });

          });

          // calculate distance
          function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
              origins: [origin],
              destinations: [destination],
              travelMode: google.maps.TravelMode.DRIVING,
              unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
              // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
              avoidHighways: false,
              avoidTolls: false
            }, callback);
          }
          // get distance results
          function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
              $('#result').html(err);
            } else {
              var origin = response.originAddresses[0];
              var destination = response.destinationAddresses[0];
              if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                $('#result').html("Better get on a plane. There are no roads between " + origin + " and " +
                  destination);
              } else {
                var distance = response.rows[0].elements[0].distance;
                var duration = response.rows[0].elements[0].duration;
                console.log(response.rows[0].elements[0].distance);
                var distance_in_kilo = distance.value / 1000; // the kilom

                var duration_text = duration.text;
                var duration_value = duration.value;

                $('#in_kilo').text(distance_in_kilo.toFixed(2));
                document.getElementById("distance").value = distance_in_kilo;

              }
            }
          }
        });
      </script>
      <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('min', today);
      </script>
      <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date1').attr('min', today);
      </script>
      <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#dateend').attr('min', today);
      </script>
      <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date2').attr('min', today);
      </script>

      <script>
        //switch page
        $('.select_location').on('change', function () {
          window.location = $(this).val();
        });
      </script>
      
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