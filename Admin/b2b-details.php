<?php 
session_start();
$b2bid = $_SESSION['b2bid'];
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
                    <i class="mr-2 fa fa-user"></i>
                    <strong class="card-title" v-if="headerText">B2B Details</strong>
                </div>

            </div>
            <section class="vh-100 bg-white">
                <div class="row">
                    <div class="col  justify-content-center align-items-center h-100 py-5 px-5">
                        <div class="col col-lg-12 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `b2b_details` WHERE `b2bid` = '$b2bid'");
                   while($row = mysqli_fetch_array($pic)){
                   ?>
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white"
                                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="https://aimcabbooking.com/b2b/B2B-Docs/<?php echo $row['b2b_img'];?>"
                                            alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                        <p>Profile Details</p>
                                        <i class="far fa-edit mb-5"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h6>Company Information</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Name</h6>
                                                    <p class="text-muted"><?php echo $row['b2b_name'];?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Mobile</h6>
                                                    <p class="text-muted"><?php echo $row['b2b_contact'];?></p>
                                                </div>
                                            </div>
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted"><?php echo $row['b2b_email'];?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Alternate Mobile</h6>
                                                    <p class="text-muted"><?php echo $row['b2b_mobile'];?></p>
                                                </div>
                                            </div>
                                            <h6>Address</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <p class="text-muted"><?php echo $row['b2b_city'];?></p>
                                                </div>
                                            </div>
                                            <h6>Bank Details</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Acc. No</h6>
                                                    <p class="text-muted"><?php echo $row['b2b_bank'];?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>IFSC Code</h6>
                                                    <p class="text-muted"><?php echo $row['b2b_ifsc'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <br><br>
                                <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `b2b_details` WHERE b2bid= '$b2bid'");
                   while($row = mysqli_fetch_array($pic)){
                       if($row['status'] == "0"){
                   ?>
                                <p class="text-danger"><b>This B2B is not available to assign driver and cab</b></p>
                                <br>
                                <form action="b2b-unblock.php" method="POST">
                                    <input type="hidden" name="b2bid" value="<?php echo $b2bid;?>">
                                    <button type="submit" class="btn btn-success" title="Approved B2B">
                                        Unblock

                                    </button>
                                </form>
                                <?php 
                       }
                   }
                   ?>

                                <?php
                  include 'config.php';
                   $pic = mysqli_query($link,"SELECT * FROM `b2b_details` WHERE b2bid='$b2bid' ");
                   while($row = mysqli_fetch_array($pic)){
                       if($row['status'] == "1"){
                   ?>
                                <p class="text-success"><b>This B2B is available to assign driver and cab</b></p><br>
                                <form action="b2b-block.php" method="POST">
                                    <input type="hidden" name="b2bid" value="<?php echo $b2bid;?>">
                                    <button type="submit" class="btn btn-danger mr-3" title="Declined B2B">
                                        Block
                                    </button>
                                </form>

                                <?php 
                       }
                   }
                   ?>
                                <br>
                                <form action="b2b-loginid-mail.php" method="POST">
                                    <input type="hidden" name="b2bid" value="<?php echo $b2bid;?>">
                                    <input type="hidden" name="email" value="<?php echo $row['b2b_email'];?>">
                                    <input type="hidden" name="contact" value="<?php echo $row['b2b_contact'];?>">
                                    <button type="submit" class="btn btn-primary" title="Send Mail">Send Login Userid
                                        and Password </button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <?php
      include 'config.php';
       $pic = mysqli_query($link,"SELECT * FROM `b2b_details` WHERE b2bid = '$b2bid'");
       while($row = mysqli_fetch_array($pic)){
       ?>
                    <div class="col-xl-6 col-sm-6 py-5 px-5">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Certificate</p>
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="col-sm-4">

                                        <a href="https://aimcabbooking.com/b2b/B2B-Docs/<?php echo $row['b2b_img_certi']; ?>"
                                            target="_blank"><button type="button" class="btn btn-primary mb-1">
                                                View Doc
                                            </button>
                                        </a>

                                    </div>

                                </div>
                                
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Company Doc</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="https://aimcabbooking.com/b2b/B2B-Docs/<?php echo $row['b2b_doc']?>"
                                            target="_blank"><button type="button" class="btn btn-primary mb-1">
                                                View Doc
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">PAN</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-muted mb-0"><?php echo $row['b2b_pan'];?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="https://aimcabbooking.com/b2b/B2B-Docs/<?php echo $row['b2b_img_pan']?>"
                                            target="_blank"><button type="button" class="btn btn-primary mb-1">
                                                View Doc
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>

        </div><!-- .animated -->
    </div><!-- .content -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
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