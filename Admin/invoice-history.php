<?php include "header.php";?>

<head>

    <link rel="stylesheet" href="assets/css/style.css">
    <html>

<body>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><i class="mr-2 menu-icon fa fa-list"></i> Custom Booking History</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table"
                                class="table-stats order-table ov-h table table-striped table-bordered table-light">
                                <thead>
                                    <tr>

                                        <th class="avatar">User</th>
                                        <th>Booking Id</th>
                                        <th>User Name</th>
                                        <th>DateTime</th>
                                        <th>TripType</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Amount</th>
                                        <th>View</th>
                                        <th>Status</th>
                                        <th>Delete</th>

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
                                        <td> <span class="c_type"><?php echo $row['date']; ?><br><?php echo $row['time']; ?></span> </td>
                                        <td> <span class="t_type"><?php echo $row['user_trip_type']; ?></span> </td>
                                        <td> <span class="source"><?php echo $row['user_pickup']; ?></span> </td>
                                        <td> <span class="destination"><?php echo $row['user_drop']; ?></span> </td>
                                        <td><span class="amount"><?php echo $row['amount']; ?></span></td>

                                        <?php if($row['vendorid'] > 0 ){
                                            $vendor = "true";
                                            }else{
                                             $vendor = "false";
                                            }?>
                                        <td>
                                            <form action="invoice-view-redirect.php" method="POST">
                                                <input type="hidden" name="vendor" value="<?php echo $vendor ?>">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                                 <input type="hidden" name="user_trip_type" value="<?php echo $row['user_trip_type'] ?>">
                                                <button type="submit"
                                                    style="border:none; background-color:transparent"><img class=""
                                                        src="images/v.png" height="30px" width="30px"></img></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="invoice-edit.php" method="POST">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                              <button type="submit"  class="badge badge-info">Edit</button>
                                                 </form>

                                        </td>
                                        <td>
                                            <form action="customdelete.php" method="POST">
                                                <input type="hidden" name="phone" value="<?php echo $row['phone'] ?>">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                                <input type="hidden" name="created_at" value="<?php echo $row['created_at'] ?>">
                                                <button type="submit" style="border:none; background-color:transparent"><img class="" src="images/delete.png" height="30px" width="30px"></img></button>
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