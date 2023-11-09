
<?php include 'header.php';?>
 <body>  
       <div class="drop p-3">
       <li class="menu-item-has-children dropdown" >
                        <a href="bookings.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Outstation Bookings</a>
                        <ul class="sub-menu children dropdown-menu">
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
                                <strong class="card-title">Outstation Bookings Table</strong>
                            </div>
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                          <th class="serial">Sr. No.</th>
                                            <th class="avatar">User</th>
                                            <th>Booking Id</th>
                                            <th>Name</th>
                                            <th>DateTime</th>
                                            <th>TripType</th>
                                            
                                            <th>CarType</th>
                                            <th>Source</th>
                                            <th>Destination</th>
                                            <th>Amount</th>
                                             <th>Partial Amount</th>
                                              <th>Paid Amount</th>
                                               <th>Remaining</th>
                                            <th>View</th>
                                           
                                        </tr>
                                    </thead>
                                     <tbody>
                                    <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `user_booking` WHERE trip='Outstation' ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?> 
                                        <tr>
                                            <td class="serial"><?php echo $row['id']; ?></td>
                                        <td class="avatar">
                                                <div class="round-img" style="height:40px; width:40px">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/all.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td><a style="color:#000000" href="#"><?php echo $row['bookid']; ?></a></td>
                                            <td>  <span class="name"><?php echo $row['name']; ?></span> </td>
                                            <td>  <span class="c_type"><?php echo $row['date']; ?><br><?php echo $row['time']; ?></span> </td>
                                            <td>  <span class="t_type"><?php echo $row['user_trip_type']; ?></span> </td>
                                             
                                            <td>  <span class="name"><?php echo $row['name']; ?></span> </td>
                                            <td> <span class="source"><?php echo $row['user_pickup']; ?></span> </td>
                                            <td> <span class="destination"><?php echo $row['user_drop']; ?></span> </td>
                                            <td><span class="amount"><?php echo $row['amount']; ?></span></td>
                                             <td><span class="partial"><?php echo $row['partial']; ?></span></td>
                                              <td><span class="paid"><?php echo $row['paid']; ?></span></td>
                                               <td><span class="remaining"><?php echo $row['remaining']; ?></span></td>
                                               <?php if($row['vendorid'] > 0 ){
                                            $vendor = "true";
                                            }else{
                                             $vendor = "false";
                                            }?>
                                            <td>
                                              <a href="client-details.php?bookid=<?php echo $row['bookid']?>&vendor=<?php echo $vendor?>&vendorid=<?php echo $row['vendorid']?>&driverid=<?php echo $row['driverid']?>&cabid=<?php echo $row['cabid']?>" ><img class="" src="images/v.png" height="30px" width="30px"></img></a>
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



    </div><!-- /#right-panel -->

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
      } );
  </script>


</body>

