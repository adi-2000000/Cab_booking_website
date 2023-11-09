<?php 
$driverid = $_POST['driverid'];
?>
<?php include "header.php";?>

<head>

    <link rel="stylesheet" href="assets/css/style.css">

    <html>

<body>

    <div class="content">
        <div class="animated">

            <div class="card">
                <div class="card-header">

                    <strong class="card-title" v-if="headerText"><i class="mr-2 fa fa-user"></i>Driver Details</strong>
                </div>

            </div>

            <section class="vh-100 bg-white">
                <div class="row">
                    <div class="col  justify-content-center align-items-center h-100 py-5 px-5">
                        <div class="col col-lg-12 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">

                                <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE driverid = '$driverid'");
                   while($row = mysqli_fetch_array($pic)){
                       
                   ?>
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white"
                                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="driver/<?php echo $row['d_img'];?>" alt="Avatar"
                                            class="img-fluid my-5" style="width: 80px;" />
                                        <h5>Marie Horwitz</h5>
                                        <p>Driver's Details</p>
                                        <i class="far fa-edit mb-5"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h6>Driver's Personal Information</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Name</h6>
                                                    <p class="text-muted"><?php echo $row['d_name'];?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Mobile</h6>
                                                    <p class="text-muted"><?php echo $row['d_contact'];?></p>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted"><?php echo $row['d_email'];?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Alternate</h6>
                                                    <p class="text-muted"><?php echo $row['d_mobile'];?></p>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                <div class="col-12 mb-3">
                                                    <h6>Adhaar No</h6>
                                                    <p class="text-muted"><?php echo $row['d_adhaar'];?></p>
                                                </div>
                                            </div>
                                            <h6>Address</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">

                                                    <p class="text-muted"><?php echo $row['d_address'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE driverid = '$driverid'");
                   while($row = mysqli_fetch_array($pic)){
                       
                   ?>
                    <div class="col-xl-6 col-sm-6 py-5 px-5">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Driving Licence</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <!------Image-------Modal----->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                            data-target="#smallmodal">
                                            Show Image
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog"
                                            aria-labelledby="smallmodalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title text-dark" id="smallmodalLabel">DL</h5>
                                                        <img src="driver/<?php echo $row['d_img_dl']?>">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">

                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!------Image-------Modal----->
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">PVC</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <!------Image-------Modal----->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                            data-target="#smallmodal1">
                                            Show Image
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="smallmodal1" tabindex="-1" role="dialog"
                                            aria-labelledby="smallmodalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title text-dark" id="smallmodalLabel">PVC</h5>
                                                        <img src="driver/<?php echo $row['d_img_pvc']?>">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">

                                                        </button>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!------Image-------Modal----->
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Adhaar Card</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <!------Image-------Modal----->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                            data-target="#smallmodal2">
                                            Show Image
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="smallmodal2" tabindex="-1" role="dialog"
                                            aria-labelledby="smallmodalLabel2" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title text-dark" id="smallmodalLabel">Adhaar
                                                        </h5>
                                                        <img src="driver/<?php echo $row['d_img_adhaar']?>">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">

                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!------Image-------Modal----->
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <div class="row gx-5">
                <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE driverid= '$driverid'  ");
                   while($row = mysqli_fetch_array($pic)){
                       if($row['status'] == "0" || $row['status'] == "2"){
                   ?>
                <form action="approve-driver.php" method="POST">
                    <input type="hidden" name="driverid" value="<?php echo $driverid;?>">
                    <button type="submit" class="btn btn-success mr-3" title="Approved Driver">
                        Approve
                    </button>
                </form>
                <?php 
                       }
                   }
                   ?>
                <br><br>
                <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE driverid='$driverid' ");
                   while($row = mysqli_fetch_array($pic)){
                       if($row['status'] == "0" || $row['status'] == "1"){
                   ?>
                <form action="decline-driver.php" method="POST">
                    <input type="hidden" name="driverid" value="<?php echo $driverid;?>">
                    <button type="submit" class="btn btn-danger mr-3" title="Declined Driver">
                        Reject
                    </button>
                </form>
                <?php 
                       }
                   }
                   ?>
            </div>

        </div><!-- .animated -->
    </div><!-- .content -->

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