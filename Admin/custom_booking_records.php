<?php include "header.php";?>

<head>

    <link rel="stylesheet" href="assets/css/style.css">
    <html>

<body>

    <div class="drop p-3 text-dark">
        <li class="menu-item-has-children dropdown">
            <a href="bookings.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">All Bookings</a>
            <ul class="sub-menu children dropdown-menu p-1">
                <li><a href="all-bookings.php">All Bookings</a></li>
                <li><a href="rental-bookings.php">Rental Bookings</a></li>
                <li><a href="oneway-bookings.php">One-Way Bookings</a></li>
                <li><a href="roundtrip-bookings.php">Round-Trip Bookings</a></li>
                <li><a href="outstation-bookings.php">Outstation Bookings</a></li>
            </ul>
        </li>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><i class="mr-2 menu-icon fa fa-list"></i> Custom Bookings
                                Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table"
                                class="table-stats order-table ov-h table table-striped table-bordered table-light">
                                <thead>
                                    <tr>

                                        <th class="avatar">User</th>
                                        <th>Booking Id</th>
                                        <th>User Name</th>
                                        <th>Phone</th>
                                        <th>Email ID</th>
                                        <th>DateTime</th>
                                        <th>TripType</th>
                                        <th>CarType</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Amount</th>
                                        <th>View</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `custom_booking` ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?>
                                    <tr>

                                        <td class="avatar">
                                            <div class="round-img" style="height:40px; width:40px">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/all.jpg"
                                                        alt=""></a>
                                            </div>
                                        </td>
                                        <td><a style="color:#000000" href="#"><?php echo $row['bookid']; ?></a></td>
                                        <td> <span class="name"><?php echo $row['name']; ?></span> </td>
                                        <td> <span class="phone"><?php echo $row['phone']; ?></span> </td>
                                        <td> <span class="email"><?php echo $row['email']; ?></span> </td>
                                        <td> <span
                                                class="c_type"><?php echo $row['date']; ?><br><?php echo $row['time']; ?></span>
                                        </td>
                                        <td> <span class="t_type"><?php echo $row['user_trip_type']; ?></span> </td>
                                        <td> <span class="name"><?php echo $row['car']; ?></span> </td>
                                        <td> <span class="source"><?php echo $row['user_pickup']; ?></span> </td>
                                        <td> <span class="destination"><?php echo $row['user_drop']; ?></span> </td>
                                        <td><span class="amount"><?php echo $row['amount']; ?></span></td>

                                        <?php if($row['vendorid'] > 0 ){
                                            $vendor = "true";
                                            }else{
                                             $vendor = "false";
                                            }?>
                                        <td>
                                            <form action="custom-client-details-redirect.php" method="POST">
                                                <input type="hidden" name="vendor" value="<?php echo $vendor ?>">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                                <button type="submit"
                                                    style="border:none; background-color:transparent"><img class=""
                                                        src="images/v.png" height="30px" width="30px"></img></button>
                                            </form>
                                        </td>
                                        <td>
                                            <?php 
                                                 if($row['status'] == '0'){ echo '<span class="badge badge-warning text-dark">Pending</span>'; }
                                                 if($row['status'] == '1'){ echo '<span class="badge badge-info">OnGoing</span>'; }
                                                 if($row['status'] == '2'){ echo '<span class="badge badge-complete">Completed</span>'; }
                                                 if($row['status'] == '3'){ echo '<span class="badge badge-danger">Cancelled</span>'; }
                                                 ?>

                                        </td>
                                    </tr>
                                    <?php
                                       }        
                                      ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->




    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


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


    <script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    });
    </script>

</body>

</html>