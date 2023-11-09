<?php 
session_start();
echo $bookid = $_SESSION['bookid'];
?>

<head>

    <link rel="stylesheet" href="assets/css/style.css">


<html>
<body>
    <?php include "header.php";?>
   <div class="content">
            <div class="animated">

                   
                   <h2> Cancelled booking Details </h2>
                   <br>
                        <div class="container pull-left">
                              <div class="card mb-3">
                                  
                              <div class="card-body">
                                   <?php
                                  include 'config.php';
                                  $pic = mysqli_query($link,"SELECT * FROM `user_booking` WHERE `bookid` = '$bookid'");
                                   while($row = mysqli_fetch_array($pic)){
                                   ?> 
                                <div class="row">
                                  <div class="col-sm-5">
                                    <p class="mb-0">Name</p>
                                  </div>
                                  <div class="col-sm-7">
                                    <p class="text-muted mb-0"><?php echo $row['name']; ?></p>
                                  </div>
                                </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Email</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Phone/Mob</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['phone']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Pickup Location</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['user_pickup']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Drop Location</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['user_drop']; ?></p>
                                      </div>
                                    </div>
                                     <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Trip Type</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['user_trip_type']; ?></p>
                                      </div>
                                    </div>
                                    <?php if($row['user_trip_type'] == 'One Way'){ ?>
                                     <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Date/Time</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['date']; ?>  <?php echo $row['time']; ?></p>
                                      </div>
                                    </div>
                                    <?php } if($row['user_trip_type'] == 'Round'){?>
                                     <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0"> Start Date/Time</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['date']; ?>  <?php echo $row['time']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0"> End Date/Time</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['dateend']; ?>  <?php echo $row['timeend']; ?></p>
                                      </div>
                                    </div>
                                    <?php } ?>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Distance KM</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['distance']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Car/Model</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['car']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Amount</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['amount']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Partial Amt</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['partial']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Paid Amt</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['paid']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Remaining Amt</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['remaining']; ?></p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-5">
                                        <p class="mb-0">Booking Type</p>
                                      </div>
                                      <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['bookingtype']; ?></p>
                                      </div>
                                    </div>
                                   <?php 
                                   }
                                   ?>
                                   </div>
                                 </div>   
                              </div> 
                          </div>
                      </div>

    <!-- Right Panel -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

  
  
    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

   
</body>
</html>