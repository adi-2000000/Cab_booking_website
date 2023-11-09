<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            bottom: 2%; /* Adjust the vertical position as needed */
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





@media (max-width: 767px) {
  .wht {
    display: none;
}
.container1{
    height:50%;
    width:100%;
}
.carausal{
    height:500%;
}

.cimage{
    height:40%;
}
}


@media (max-width: 768px) {
    .carousel-item {
        height: 1500px; 
}
    </style>
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
        
          .container1 {
            margin-bottom: 300px;
          
        }

        .py-5 {
            padding: 1.25rem; /* Adjust the padding as needed */
        }

       

      

        .slider_form {
            background-color: #D81324;
            padding: 20px;
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
        
        input::placeholder {
  text-indent: 20px; 
  
}
        

       
    </style>
    <!-- Booking End -->
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

</head>

<body>
   


   <?php include "website_header.php" ?>
<!-- Carousel Start -->
<div class="carausal container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 cimage" src="img/carousel-bg-1.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container container1">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-12 col-lg-7 text-center text-lg-start">
                                
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown ">// Car Booking //</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown ">"We'll Get You Moving: Car Rental Made Easy"</h1>
                                <a href="https://wa.me/message/HL3LLCBNDNIML1" class="btn btn-danger py-3 px-5 animated slideInDown ">Whatsapp Us <i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                            <div class="col-12 col-lg-5 animated zoomIn">
                                <div class="slider_form">
                                    <h2 class="wht" style="text-align: center; padding-bottom: 10px;"> BOOK A CAB NOW</h2>
                                    <h4 class="text-light my-1" style="text-align: left;">Trip Type </h4>
                                    <form id="form" action="post-trip.php" method="POST" autocomplete="on">
                                        <select class="p-2 my-2 bg-warning" name="trip" id="select" style="height: 40px;">
                                            <option value="One Way">One Way Trip</option>
                                            <option value="Round">Round Trip</option>
                                            <option value="Rental">Rental</option>
                                        </select>
                                       <div class="oneway">
                                             <div class="row">
        <div class="col-md-6">
            <input id="from" class="form-control register_form" name="from" type="text" placeholder="PickUp Location" required autocomplete="from" >
        </div>
        <div class="col-md-6">
            <input id="to" class="form-control register_form" name="to" type="text" placeholder="Drop Location" required >
        </div>
    </div>
                                            <!--<input id="from" class="form-control register_form" name="from" type="text" placeholder="PickUp Location" required autocomplete="from" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">-->
                                            <input id="origin" type="hidden" name="origin" required />
                                            <!--<input id="to" class="form-control register_form" name="to" type="text" placeholder="Drop Location" required style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">-->
                                            <input id="destination" type="hidden" name="destination" required />
                                            <div id="result">
                                                <input id="distance" type="hidden" name="distance">
                                                <input id="source_pincode" type="hidden" name="source_pincode">
                                                <input id="destination_pincode" type="hidden" name="destination_pincode">
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
 <div class="row">
                                               <div class="col-md-6">
                                        <input id="date" class="form-control register_form" name="date" style="color: black;" type="date" placeholder="Date" >
                                       </div>   <div class="col-md-6">
                                        <input id="time" class="form-control register_form" name="time" style="color: black;" type="time" placeholder="Time">
                                        </div> </div>
                                       <div class="round">
                                            <h5 class="text-light my-1">Return Date and Time</h5>
                                              <div class="row">
                                               <div class="col-md-6">
                                            <input id="dateend" class="form-control register_form" style="color: black;" name="dateend" type="date" placeholder="Date">
                                               </div><div class="col-md-6">
                                            <input class="form-control register_form" name="timeend" style="color: black;" type="time" placeholder="Time">
                                        </div></div>
                                        </div>
                                        <h5 class="text-light my-1">Personal Details</h5>
                                        <input id="name" name="name" class="form-control register_form" type="text" placeholder="Your Name" title="Error Message" required >
                                        <input id="phone" name="phone" class="form-control register_form" type="number" placeholder="Your Phone Number" maxlegth="10" title="Error Message" pattern="[1-9]{1}[0-9]{9}" required>
                                        <input id="email" name="email" class="form-control register_form" type="email" placeholder="Your Email ID" title="Error Message" required >
                                        <center><input id="submit" class="btn btn-dark p-1" type="submit" value="Book Now"></center>
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


 <div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 style="color:#D81324; text-align:center;"><b>About Aj Cab Service</b></h1>
            <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="text-align:justify; padding:20px;">
                <div class="card-body">
  Welcome to AJ cab Services ! We offer a wide variety of rental vehicles to meet your transportation needs. Whether you're looking for a small car to navigate the city streets, a spacious SUV for a family road trip, or a luxurious car for a special occasion, we've got you covered.
<br>
Our rental process is quick and easy, with flexible options to suit your schedule. Simply choose your desired rental period, select your vehicle of choice, and pick up your keys. We also offer convenient drop-off options, including after-hours returns, to make your rental experience as hassle-free as possible.
<br>
All of our rental vehicles are well-maintained and regularly serviced to ensure optimal performance and reliability. We also offer optional insurance coverage for added peace of mind while on the road.
<br>
In addition to our rental services, we also offer a range of additional amenities to enhance your driving experience. From GPS navigation systems to child safety seats, we have everything you need to make your journey comfortable and stress-free.
<br>
Thank you for considering our car rental company for your transportation needs. We look forward to serving you and helping you get where you need to go!
  </div>
</div>
        </div>
        <div class="col-sm-2"></div>
    </div>
  </div>

 





<div class="container">
    <div class="row">
      
    </div>
</div>





    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">6</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
                    <p class="text-white mb-0">Expert Drivers</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">488</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">550</h2>
                    <p class="text-white mb-0">Compleate Rides</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->






    <!-- contact form here  -->
    <div class="container">
        <div class="row" style="border:1px solid black;padding:40px;">
                        <h2 style="text-align:center">Drop Your Message Here </h2>
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4"> 
                        <?php 
if(isset($_POST['message_submit'])){
    $to ="ajcabs1717@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullName = $_POST['cust_name'];
    $phone = $_POST['number'];
    $cust_subject = $_POST['subject'];
    $customer_message = $_POST['cust_message'];
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
                        <b>Thank You!</b>
                          
                          </body>
            </html>";
   

    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: contact@ajcabservices.com";

    
    mail($to, $subject, $message, $headers);

    ?>

<script>
    window.alert("Thank You!. We have received your message.\n  You may get a call from our team.");
</script>

<?php
    }
?>
                        <form action="index.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="cust_name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="number" name="number" placeholder="Phone No.">
                                        <label for="subject">Phone No.</label>
                                    </div>
                                </div>
                                 <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="cust_message" name="cust_message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-danger w-100 py-3" name="message_submit" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                </div>
        </div>
    </div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-760c9b87-a4d1-4e2d-a260-dc29d3e91e3f"></div>

<a href="tel:+1234567890" class="call-button">
  <i class="fa fa-phone"></i> Call Us
</a>
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
    <!-- end contact form here  -->
<?php include "website_footer.php"?>
</body>

</html>