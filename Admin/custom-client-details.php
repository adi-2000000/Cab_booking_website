<?php 
session_start();
$bookid = $_SESSION['bookid'];
$vendor = $_SESSION['vendor']; ?>

<?php include "header.php";?>

<head>

    <link rel="stylesheet" href="assets/css/style.css">


    <html>

<body>

    <div class="content">
        <div class="animated">

            <div class="card">
                <div class="card-header">
                    <i class="mr-2 fa fa-align-justify"></i>
                    <strong class="card-title" v-if="headerText">Custom Booking Details</strong>
                </div>
                <div class="card-body">

                    <!-- Button trigger modal -->
                    <?php if($vendor == "true" ){ ?>
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                        Assign Vendor
                    </button>

                    <?php }elseif($vendor == "false"){?>

                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                        Assign Vendor
                    </button>
                    <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#largeModal">
                        Assign Driver
                    </button>
                    <button type="button" class="btn btn-warning mb-1" data-toggle="modal" data-target="#largeModal2">
                        Assign Cab
                    </button>
                    <?php } ?>
                </div>
            </div>
            <div class="container">
                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="mediumModalLabel" style="text-align:center;"><strong>Assign
                                        Vendor</strong></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="container">

                                <table id="myTable1"
                                    class="table-stats order-table ov-h table table-striped table-bordered table-light">
                                    <thead>
                                        <tr>

                                            <th class="avatar">Vendor</th>
                                            <th>Id</th>
                                            <th>Vendor Name</th>
                                            <th>Phone</th>
                                            <th>Email ID</th>
                                            <th>City</th>
                                            <th>Assign</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `vendor_details` WHERE status='1' ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                            $vendorid = $row['vendorid'];
                                       ?>
                                        <tr>

                                            <td class="avatar">
                                                <div class="round-img" style="height:40px; width:40px">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/all.jpg"
                                                            alt=""></a>
                                                </div>
                                            </td>
                                            <td><a style="color:#000000" href="#"><?php echo $row['id']; ?></a></td>
                                            <td> <span class="name"><?php echo $row['v_name']; ?></span> </td>
                                            <td> <span class="phone"><?php echo $row['v_contact']; ?></span> </td>
                                            <td> <span class="email"><?php echo $row['v_email']; ?></span> </td>
                                            <td> <span class="c_type"><?php echo $row['v_city']; ?></span> </td>

                                            <td>
                                                <form action="custom-assign-vendor.php" method="POST">
                                                    <input type="hidden" name="bookid" value="<?php echo $bookid ?>">
                                                    <input type="hidden" name="vendorid" value="<?php echo $vendorid ?>">
                                                    <button type="submit"
                                                        class="btn btn-success btn text-light">Assign</button>
                                                </form>
                                            </td>

                                        </tr>
                                        <?php
                                       }        
                                      ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="width: 120%;">
                            <div class="modal-header">
                                <h3 class="modal-title" id="largeModalLabel" style="text-align:center;"><strong>Assign
                                        Driver</strong></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <table id="myTable2"
                                        class="table-stats order-table ov-h table table-striped table-bordered table-light">
                                        <thead>
                                            <tr>

                                                <th class="avatar">Driver</th>
                                                <th>Id</th>
                                                <th>Driver Name</th>
                                                <th>Phone</th>
                                                <th>DL No</th>
                                                <th>Address</th>
                                                <th>Assign</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE status='1' ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?>
                                            <tr>

                                                <td class="avatar">
                                                    <div class="round-img" style="height:40px; width:40px">
                                                        <a href="#"><img class="rounded-circle"
                                                                src="images/avatar/all.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td><a style="color:#000000" href="#"><?php echo $row['id']; ?></a></td>
                                                <td> <span class="name"><?php echo $row['d_name']; ?></span> </td>
                                                <td> <span class="phone"><?php echo $row['d_contact']; ?></span> </td>
                                                <td> <span class="email"><?php echo $row['d_dl']; ?></span> </td>
                                                <td> <span class="c_type"><?php echo $row['d_address']; ?></span> </td>

                                                <td>
                                                    <form action="custom-assign-driver.php" method="POST">
                                                        <input type="hidden" name="bookid"
                                                            value="<?php echo $bookid ?>">
                                                        <input type="hidden" name="driverid"
                                                            value="<?php echo $row['driverid'] ?>">
                                                        <button type="submit"
                                                            class="btn btn-success btn text-light">Assign</button>
                                                    </form>
                                                </td>

                                            </tr>
                                            <?php
                                       }        
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel2"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="largeModalLabel" style="text-align:center;"><strong>Assign
                                        Cab</strong></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <table id="myTable3"
                                        class="table-stats order-table ov-h table table-striped table-bordered table-light">
                                        <thead>
                                            <tr>

                                                <th class="avatar">Cab</th>
                                                <th>Id</th>
                                                <th>Cab Name</th>
                                                <th>Plate</th>
                                                <th>RC</th>
                                                <th>Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `cabs_details` WHERE status='1' ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?>
                                            <tr>

                                                <td class="avatar">
                                                    <div class="round-img" style="height:40px; width:40px">
                                                        <a href="#"><img class="rounded-circle"
                                                                src="images/avatar/all.jpg" alt=""></a>
                                                    </div>
                                                </td>
                                                <td><a style="color:#000000" href="#"><?php echo $row['id']; ?></a></td>
                                                <td> <span class="name"><?php echo $row['c_name']; ?></span> </td>
                                                <td> <span class="phone"><?php echo $row['c_plate']; ?></span> </td>
                                                <td> <span class="email"><?php echo $row['c_rc']; ?></span> </td>

                                                <td>

                                                    <form action="custom-assign-cab.php" method="POST">
                                                        <input type="hidden" name="bookid"
                                                            value="<?php echo $bookid ?>">
                                                        <input type="hidden" name="cabid"
                                                            value="<?php echo $row['cabid'] ?>">
                                                        <button type="submit"
                                                            class="btn btn-success btn text-light">Assign</button>
                                                    </form>
                                                </td>
                                                <?php
                                       }        
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                include 'config.php';
               $pic = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE `bookid` = '$bookid'");
               while($row = mysqli_fetch_array($pic)){
               ?>

            <div class="card mb-5">

                <div class="modal fade" id="largeModal6" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel6"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Custom Client's Booking Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">

                                    <br>
                                    <div class="container-col-xl-10">
                                        <div class="card mb-5">
                                            <div class="card-body">
                                                <?php
                                  
                                  include 'config.php';
                                   $pic = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE `bookid` = '$bookid'");
                                   while($row = mysqli_fetch_array($pic)){
                                   ?>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0">Booking ID</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['bookid']; ?></p>
                                                    </div>
                                                </div>
                                                  <hr>
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
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0">Pickup Location</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['user_pickup']; ?>
                                                        </p>
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
                                                        <p class="text-muted mb-0"><?php echo $row['user_trip_type']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <?php if($row['user_trip_type'] == 'One Way'){ ?>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0">Date/Time</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['date']; ?>
                                                            <?php echo $row['time']; ?></p>
                                                    </div>
                                                </div>
                                                <?php } if($row['user_trip_type'] == 'Round'){?>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0"> Start Date/Time</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['date']; ?>
                                                            <?php echo $row['time']; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0"> End Date/Time</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['dateend']; ?>
                                                            <?php echo $row['timeend']; ?></p>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0">Distance KM</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['distance']; ?>  Km</p>
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
                                                        <p class="mb-0">Paid Amt</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['totalpaid_amt']; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0">Remaining Amt</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['remain_amt']; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="mb-0">Booking Type</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="text-muted mb-0"><?php echo $row['bookingtype']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <?php $driverid = $row['driverid'];
                                         $cabid = $row['cabid']; 
                                        $status = $row['status'];
                                   }
                                   ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?# if($status == '0' || $status == '1' ){ ?>
                                    <!-- <a href="cancel-trip.php" class="btn btn-danger" data-dismiss="modal">Cancel</button></a> -->
                                    <? #} ?>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>

                <!------Image-------Modal----->

            </div>

            <div class="row">

                <div class="col-md-3">
                    <h4>Client's Booking Details</h4>
                    <br>
                    <div class="container-col-xl-10">
                        <div class="card mb-5">
                            <div class="card-body">
                                <?php
                                  
                                  include 'config.php';
                                   $pic = mysqli_query($link,"SELECT * FROM `custom_booking` WHERE `bookid` = '$bookid'");
                                   while($row = mysqli_fetch_array($pic)){
                                   ?>
                                   
                                   <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Booking ID</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['bookid']; ?></p>
                                    </div>
                                </div>

                                <hr>
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
                                        <p class="mb-0">Contact</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['phone']; ?></p>
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
                                        <p class="text-muted mb-0"><?php echo $row['date']; ?>
                                            <?php echo $row['time']; ?></p>
                                    </div>
                                </div>
                                <?php } if($row['user_trip_type'] == 'Round'){?>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0"> Start Date/Time</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['date']; ?>
                                            <?php echo $row['time']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0"> End Date/Time</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['dateend']; ?>
                                            <?php echo $row['timeend']; ?></p>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php $driverid = $row['driverid'];
                                         $vendorid = $row['vendorid'];
                                         $cabid = $row['cabid']; 
                                        $status = $row['status'];
                                   }
                                   ?>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#largeModal6"
                        style="width:150px; height:40px;">Show Details</button><br><br>

                    <? if($status == '0' || $status == '1' ){ ?>
                    <a href="custom-send-update-mail.php"><button type="button" class="btn btn-success"
                            style="width:150px; height:40px;">Send Mail</button></a><br><br>
                    <a href="custom-booking-complete.php"><button type="button" class="btn btn-info"
                            style="width:150px; height:40px;">Trip Complete</button></a>
                    <a href="custom-cancel-booking.php"><button type="button" class="btn btn-danger pull-right"
                            data-dismiss="modal">Cancel</button></a>
                    <? }?>


                </div>

                <?php
                           //  if($vendorid > 0){
                              include 'config.php';
                               $vendorid = $_SESSION['vendorid'];
                               $pic = mysqli_query($link,"SELECT * FROM `vendor_details` WHERE vendorid = '$vendorid' ");
                               while($row = mysqli_fetch_array($pic)){
                               ?>
                <div class="col-md-3">
                    <h4>Vendor Booking Details</h4>
                    <br>
                    <div class="container-col-xl-10">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['v_name']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['v_email']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['v_contact']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['v_mobile']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['v_city']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? if($status == '0' || $status == '1' ){ ?>
                    <a href="custom-cancel-vendor.php"><button type="button" class="btn btn-danger pull-right"
                            data-dismiss="modal">Cancel Vendor</button></a>
                    <? } ?>
                </div>
                <br>
                <?php }  //} ?>
                <?php if($driverid > 0){
                           include 'config.php';
                           $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE driverid = '$driverid'");
                           while($row = mysqli_fetch_array($pic)){ ?>
                <div class="col-md-3">
                    <h4>Driver Details</h4>
                    <br>
                    <div class="container-col-xl-10">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Name</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['d_name']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['d_email']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['d_contact']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['d_mobile']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">DL No</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['d_dl']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['d_address']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? if($status == '0' || $status == '1' ){ ?>
                    <a href="custom-cancel-driver.php"><button type="button" class="btn btn-danger pull-right"
                            data-dismiss="modal">Cancel Driver</button></a>
                    <? } ?>
                </div>

                <?php } } ?>
                <br>


                <?php if($cabid > 0){?>
                <?php
                              include 'config.php';
                               $pic = mysqli_query($link,"SELECT * FROM `cabs_details` WHERE cabid = $cabid ");
                               while($row = mysqli_fetch_array($pic)){
                               ?> <br>
                <div class="col-md-3">
                    <h4>Cab Details</h4>
                    <br>
                    <div class="container-col-xl-10">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Car Type</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['c_name']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Car Number</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['c_plate']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Car RC Number</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0"><?php echo $row['c_rc']; ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <? if($status == '0' || $status == '1' ){ ?>
                    <a href="custom-cancel-cab.php"><button type="button" class="btn btn-danger pull-right"
                            data-dismiss="modal">Cancel Cab</button></a>
                    <? } ?>
                </div>
            </div>
            <?php  }  } ?>
        </div>
        <?php } ?>

    </div><!-- .animated -->
    </div><!-- .content -->

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


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>

    <script>
    $(document).ready(function() {
        $("#myTable1").dataTable();
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#myTable2").dataTable();
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#myTable3").dataTable();
    });
    </script>

    <script src="media/js/jquery.dataTables.min.js"></script>
    <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">


</body>

</html>