

<?php include 'header.php';?>

<body>
 <div class="container py-5">
        <div class="row mb-12">
            <div class="col-lg-12">
                <h4 class="display-4 font-weight-light text-center" style="color:#03a9f3;">Request Vendor</h4>
                <p class="text-center">Fill Below form the to send link of registration form</p>
            </div>
        </div>
        
        <?php
if(isset($_POST['send_req'])){
 $vendorName = $_POST['v_name'];
 $vendorMail = $_POST['v_email'];

$to = $vendorMail;
$subject = "You have been requested to register at AimCab";

$message="<html>
                    <head>
                <title>AIMCAB</title>
                    </head>
            <body> 
            <div style='padding:50px;'>
                <p>Dear $vendorName,<br>
                
                <p>Click on the below link to register with Aimcab</p>
                <p><strong>link:</strong> https://aimcabbooking.com/vendor/vendor-registration.php</p></br>
                  <p><strong>Note:</strong> Fill all the form field and upload the documents</p>
                         
                        <p>Regards,<br/>Team AimCab</p>
                          
                          </body>
            </html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $headers .="From: aimcab@aimcabbooking.com";
    
    mail($to, $subject, $message, $headers);
    
    ?>
    
     <script>window.alert("Vendor Requested");</script>

<?php
    }
?>


        <div class="row text-center" style="padding-top:20px;">
            <div class="col-xl-12 col-sm-6 mb-5">
                <form action="request-vendor.php" method="post" enctype="multipart/form-data" class="form-horizontal">


                    <div class="row form-group">
                        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Vendor Name:</label></div>
                        <div class="col-12 col-md-8">
                            <input type="text" id="text-input" name="v_name" value="<?php echo $vendorDetails['v_name']; ?>"
                                class="form-control"><small class="form-text text-muted"></small></div>
                                 <div class="col-12 col-md-2"> </div>
                    </div>
                   
                    <div class="row form-group">
                        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Email ID:</label></div>
                        <div class="col-12 col-md-8"><input type="text" id="text-input" name="v_email" value="<?php echo $vendorDetails['v_email']; ?>"
                                class="form-control"><small class="form-text text-muted"></small></div>
                                <div class="col-12 col-md-2"> </div>
                    </div>
                    <button type="submit" name="send_req" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i>
                        Send Request</button>
                    <button type="reset" class="btn btn-success"><i class="fa fa-ban"></i> Reset</button>

                </form>
            </div>
        </div>
    </div>


      <!-- Scripts -->
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
    
