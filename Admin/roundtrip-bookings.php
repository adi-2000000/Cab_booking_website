 <?php include 'header.php';?>
<style>
    .responsive-table thead th {
              background-color: red;
              border: 1px solid #1d96b2;
              font-weight: normal;
              text-align: center;
              color: white;
            }
            .responsive-table thead th:first-of-type {
              text-align: left;
            }

            .responsive-table tbody,
            .responsive-table tr,
            .responsive-table th,
            .responsive-table td {
              display: block;
              padding: 0;
              text-align: left;
              white-space: normal;
            }

            .responsive-table th,
            .responsive-table td {
              padding: .5em;
              vertical-align: middle;
            }

            .responsive-table caption {
              margin-bottom: 1em;
              font-size: 1em;
              font-weight: bold;
              text-align: center;
            }

            .responsive-table tfoot {
              font-size: .8em;
              font-style: italic;
            }

            .responsive-table tbody tr {
              margin-bottom: 1em;
              border: 1px solid black ;
            }
            .responsive-table tbody td {
              margin-bottom: 1em;
              border: 2px solid #1d96b2;
            }

            .responsive-table tbody tr:last-of-type {
              margin-bottom: 0;
            }

            .responsive-table tbody th[scope="row"] {
              background-color: #1d96b2;
              color: white;
            }

            .responsive-table tbody td[data-type=currency] {
              text-align: right;
            }

            .responsive-table tbody td[data-title]:before {
              content: attr(data-title);
              float: left;
              font-size: .8em;
              color: rgba(94, 93, 82, 0.75);
            }

            .responsive-table tbody td {
              text-align: right;
              border-bottom: 1px solid #1d96b2;
            }


            @media (min-width: 52em) {
              .responsive-table {
                font-size: .9em;
              }

              .responsive-table thead {
                position: relative;
                clip: auto;
                height: auto;
                width: auto;
                overflow: auto;
              }

              .responsive-table tr {
                display: table-row;
              }

              .responsive-table th,
              .responsive-table td {
                display: table-cell;
                padding: .5em;
              }

              .responsive-table caption {
                font-size: 1.5em;
              }

              .responsive-table tbody {
                display: table-row-group;
              }

              .responsive-table tbody tr {
                display: table-row;
                border-width: 1px;
              }

              .responsive-table tbody tr:nth-of-type(even) {
                background-color: rgba(94, 93, 82, 0.1);
              }

              .responsive-table tbody th[scope="row"] {
                background-color: transparent;
                color: #5e5d52;
                text-align: left;
              }

              .responsive-table tbody td {
                text-align: center;
              }

              .responsive-table tbody td[data-title]:before {
                content: none;
              }
            }
            @media (min-width: 62em) {
              .responsive-table {
                /font-size: 1em;/
              }

              .responsive-table th,
              .responsive-table td {
                padding: .75em .5em;
              }

              .responsive-table tfoot {
                font-size: .9em;
              }
            }

            @media (min-width: 75em) {

              .responsive-table th,
              .responsive-table td {
                padding: .75em;
              }
            }
            
            
</style>
<body>   
       <div class="drop p-3" style="
    background-color: red;
">
       <li class="menu-item-has-children dropdown" >
                        <a href="bookings.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">One Way Bookings</a>
                        <ul class="sub-menu children dropdown-menu" style="background:red">
                            <li><a href="all-bookings.php" style="color:white">All Bookings</a></li>
                            <li><a href="rental-bookings.php" style="color:white">Rental Bookings</a></li>
                            <li><a href="oneway-bookings.php" style="color:white">One-Way Bookings</a></li>
                            <li><a href="roundtrip-bookings.php" style="color:white">Round-Trip Bookings</a></li>
                            <!-- <li><a href="outstation-bookings.php" style="color:white">Outstation Bookings</a></li> -->
                        </ul>
                    </li>
    </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">One-Way Bookings Table</strong>
                            </div>
                            <div class="card-body">
                            <table class="responsive-table" id="bootstrap-data-table">
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
                                            <!-- <th>View</th> -->
                                           
                                        </tr>
                                    </thead>
                                     <tbody>
                                    <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `user_booking`WHERE user_trip_type='One Way' ORDER BY `id` DESC ");
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
                                               <!-- <?php if($row['vendorid'] > 0 ){
                                            $vendor = "true";
                                            }else{
                                             $vendor = "false";
                                            }?>
                                            <td>
                                              <a href="client-details.php?bookid=<?php echo $row['bookid']?>&vendor=<?php echo $vendor?>&vendorid=<?php echo $row['vendorid']?>&driverid=<?php echo $row['driverid']?>&cabid=<?php echo $row['cabid']?>" ><img class="" src="images/v.png" height="30px" width="30px"></img></a>
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
[16:24, 30/10/2023] Adi Pawar: <?php include 'header.php';?>
<style>
    .responsive-table thead th {
              background-color: red;
              border: 1px solid #1d96b2;
              font-weight: normal;
              text-align: center;
              color: white;
            }
            .responsive-table thead th:first-of-type {
              text-align: left;
            }

            .responsive-table tbody,
            .responsive-table tr,
            .responsive-table th,
            .responsive-table td {
              display: block;
              padding: 0;
              text-align: left;
              white-space: normal;
            }

            .responsive-table th,
            .responsive-table td {
              padding: .5em;
              vertical-align: middle;
            }

            .responsive-table caption {
              margin-bottom: 1em;
              font-size: 1em;
              font-weight: bold;
              text-align: center;
            }

            .responsive-table tfoot {
              font-size: .8em;
              font-style: italic;
            }

            .responsive-table tbody tr {
              margin-bottom: 1em;
              border: 1px solid black ;
            }
            .responsive-table tbody td {
              margin-bottom: 1em;
              border: 2px solid #1d96b2;
            }

            .responsive-table tbody tr:last-of-type {
              margin-bottom: 0;
            }

            .responsive-table tbody th[scope="row"] {
              background-color: #1d96b2;
              color: white;
            }

            .responsive-table tbody td[data-type=currency] {
              text-align: right;
            }

            .responsive-table tbody td[data-title]:before {
              content: attr(data-title);
              float: left;
              font-size: .8em;
              color: rgba(94, 93, 82, 0.75);
            }

            .responsive-table tbody td {
              text-align: right;
              border-bottom: 1px solid #1d96b2;
            }


            @media (min-width: 52em) {
              .responsive-table {
                font-size: .9em;
              }

              .responsive-table thead {
                position: relative;
                clip: auto;
                height: auto;
                width: auto;
                overflow: auto;
              }

              .responsive-table tr {
                display: table-row;
              }

              .responsive-table th,
              .responsive-table td {
                display: table-cell;
                padding: .5em;
              }

              .responsive-table caption {
                font-size: 1.5em;
              }

              .responsive-table tbody {
                display: table-row-group;
              }

              .responsive-table tbody tr {
                display: table-row;
                border-width: 1px;
              }

              .responsive-table tbody tr:nth-of-type(even) {
                background-color: rgba(94, 93, 82, 0.1);
              }

              .responsive-table tbody th[scope="row"] {
                background-color: transparent;
                color: #5e5d52;
                text-align: left;
              }

              .responsive-table tbody td {
                text-align: center;
              }

              .responsive-table tbody td[data-title]:before {
                content: none;
              }
            }
            @media (min-width: 62em) {
              .responsive-table {
                /font-size: 1em;/
              }

              .responsive-table th,
              .responsive-table td {
                padding: .75em .5em;
              }

              .responsive-table tfoot {
                font-size: .9em;
              }
            }

            @media (min-width: 75em) {

              .responsive-table th,
              .responsive-table td {
                padding: .75em;
              }
            }
            
            
</style>
  <body> 
      <div class="drop p-3">
       <li class="menu-item-has-children dropdown" >
                        <a href="bookings.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rental Booking</a>
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
       
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Rental Bookings Table</strong>
                            </div>
                            <div class="card-body">
                            <table class="responsive-table" id="bootstrap-data-table">
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
                                       $pic = mysqli_query($link,"SELECT * FROM `user_booking` WHERE user_trip_type='Rental' ORDER BY `id` DESC");
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