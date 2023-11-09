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

</head>

<body onload="onloadfunction()">
  
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
             <div class="col-lg-4 col-md-5 p-4" id="booking-form">
                        <div class="slider_form">
                            <h2 style="text-align:center; padding-bottom:10px;"> BOOK A CAB NOW</h2>
                            <h4 class="text-light my-1" style="text-align:left; color:white;">Trip  </h4>
                            <form id="form" action="post-trip.php" method="POST" autocomplete="on">
                                <select class="p-2 my-2 bg-success" name="trip" id="select" style="height: 40px;">
                                    <option value="One Way">One Way Trip</option>
                                    <option value="Round">Round Trip</option>
                                    <option value="Rental">Rental</option>
                                </select>
                                <div class="oneway">
                                    <input id="from" class="form-control register_form " name="from" type="text"
                                        placeholder="PickUp Location" required autocomplete="from"></br>
                                    <input id="origin" type="hidden" name="origin" required /></br>
                                    <input id="to" class="form-control register_form " name="to" type="text"
                                        placeholder="Drop Location" required></br>
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
                                    <input id="submit" class="btn btn-warning p-1" type="submit" value="Book Now"
                                        style="background-color: red;">
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


