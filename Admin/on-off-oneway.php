

<?php include "header.php";?>
<head>

    <link rel="stylesheet" href="assets/css/style.css">


<html>

<body>

   <div class="drop p-3 text-dark">
       <li class="menu-item-has-children dropdown">
                        <a href="on-off-oneway.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">One-Way Trips</a>
                        <ul class="sub-menu children dropdown-menu p-1">
                        <li><a href="on-off-oneway.php">Round Trips</a></li>
                            <li><a href="rental-trips.php">Rental trips</a></li>
                            <li><a href="outstation-trips.php">Outstation trips</a></li>
                        </ul>
                    </li>
    </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="mr-2 menu-icon fa fa-list"></i>  All Bookings Table</strong>
                            </div>
                            <div class="card-body">
                               <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered table-light">
                                    <thead>
                                        <tr>
                                            <th class="avatar">SN</th>
                                            <th>Source State</th>
                                            <th>Source City</th>
                                            <th>Destination State</th>
                                            <th>Destination City</th>
                                            <th>Hatchback</th>
                                            <th>Sedan</th>
                                            <th>SUV</th>
                                            <th>SUV+</th>
                                            <!-- <th>Status</th>                                           -->
                                        </tr>
                                    </thead>
                                     <tbody>
                                        
                                    <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `oneway_trip`");
                                       while($row = mysqli_fetch_array($pic)){
                                        $tripId = $row['id'];
                                       ?> 
                                        <tr>
                                
                                        <td class="avatar">
                                                <div class="round-img" style="height:40px; width:40px">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/all.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name"><?php echo $row['source_state']; ?></span> </td>
                                            <td>  <span class="phone"><?php echo $row['source_city']; ?></span> </td>
                                            <td>  <span class="email"><?php echo $row['destination_state']; ?></span> </td>
                                            <td>  <span class="c_type"><?php echo $row['destination_city']; ?></span> </td>
                                            <td>  <span class="t_type"><?php echo $row['hatchback']; ?></span> </td>
                                            <td>  <span class="name"><?php echo $row['sedan']; ?></span> </td>
                                            <td> <span class="source"><?php echo $row['suv']; ?></span> </td>
                                            <td> <span class="destination"><?php echo $row['suvplus']; ?></span> </td>                                           
                                             <!-- <td>
                                                 <?php 
                                                 if($row['status'] == '0'){ echo "<a class='btn btn-success' href='offtrip.php?id=$tripId' role='button'>On</a> "; }
                                                 if($row['status'] == '1'){ echo "<a class='btn btn-danger' href='ontrip.php?id=$tripId' role='button'>Off</a>"; }
                                                 ?>
                                            </td> -->
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
      } );
  </script>
  
</body>
</html>
