<?php include "header.php";?>

<head>

  <link rel="stylesheet" href="assets/css/style.css">


  <html>

<body>

  <div class="drop p-3 text-dark">
    <li class="menu-item-has-children dropdown" >
      <a href="bookings.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" style="color:white">All Bookings</a>
      <ul class="sub-menu children dropdown-menu p-1" style="background-color:red">
        <li><a href="all-bookings.php" style="color:white">All Bookings</a></li>
        <li><a href="rental-bookings.php" style="color:white">Rental Bookings</a></li>
        <li><a href="oneway-bookings.php" style="color:white">One-Way Bookings</a></li>
        <li><a href="roundtrip-bookings.php" style="color:white">Round-Trip Bookings</a></li>
        <!-- <li><a href="outstation-bookings.php">Outstation Bookings</a></li> -->
      </ul>
    </li>
  </div>

  <div class="content">
    <div class="animated fadeIn">
      <div class="row">

        <div class="col-md-12" style="padding-right: 0px; padding-left: 0px">
          <style>
            .responsive-table {
              width: 100%;
              margin-bottom: 1.5em;
            }

            .responsive-table thead {
              position: absolute;
              clip: rect(1px 1px 1px 1px);
              /* IE6, IE7 */
              clip: rect(1px, 1px, 1px, 1px);
              padding: 0;
              border: 0;
              height: 1px;
              width: 1px;
              overflow: hidden;
            }

            .responsive-table tbody td {
              margin-bottom: 1em;
              border: 2px solid #1d96b2;
            }

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
          <table class="responsive-table" id="bootstrap-data-table">
            <thead>
              <tr>
                  <th scope="col">Booking ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">TripType</th>
                <th scope="col">Source</th>
                <th scope="col">Destination</th>
                <!-- <th scope="col">Action</th> -->
                <th scope="col">Status</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="7"></td>
              </tr>
            </tfoot>
            <tbody>
                <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `user_booking` ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?>
              <tr>
            
                <td data-title="Booking ID"><?php echo $row['bookid']; ?></td>
                <td data-title="Name:"><?php echo $row['name']; ?></td>
                <td data-title="Date:"><?php echo $row['date'];?></td>
                <td data-title="Time:" data-type="currency"><?php echo $row['time']; ?></td>
                <td data-title="Trip:" data-type="currency"><?php echo $row['user_trip_type']; ?></td>
                <td data-title="Pickup:" data-type="currency"><?php echo $row['user_pickup']; ?></td>
                <td data-title="Drop:" data-type="currency"><?php echo $row['user_drop']; ?></td>
                 <!-- <?php 
                 if($row['vendorid'] > 0 )
                 {
                    $vendor = "true";
                    }else{
                     $vendor = "false";
                    }?>
                <td data-title="View Details:" data-type="currency">
                    <form action="client-details-redirect.php" method="POST">
                                                <input type="hidden" name="vendor" value="<?php echo $vendor ?>">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                                <button type="submit"
                                                    style="border:none; background-color:transparent"><img class=""
                                                        src="images/v.png" height="30px" width="30px"></img></button>
                                            </form></td> -->
                 <td data-title="Status:" data-type="currency">
                 <?php 
                                                 if($row['status'] == '0'){ echo '<span class="badge badge-warning text-dark">Pending</span>'; }
                                                 if($row['status'] == '1'){ echo '<span class="badge badge-info">OnGoing</span>'; }
                                                 if($row['status'] == '2'){ echo '<span class="badge badge-complete" style="background: #00c292;">Completed</span>'; }
                                                 if($row['status'] == '3'){ echo '<span class="badge badge-danger">Cancelled</span>'; }
                                                 ?></td>
                  <td data-title="Delete:" data-type="currency">
                      <form action="onlinedelete.php" method="POST">
                                                <input type="hidden" name="phone" value="<?php echo $row['phone'] ?>">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                                <input type="hidden" name="created_at"
                                                    value="<?php echo $row['created_at'] ?>">
                                                <button type="submit"
                                                    style="border:none; background-color:transparent"><img class=""
                                                        src="images/delete.png" height="30px"
                                                        width="30px"></img></button>
                                            </form></td>
              </tr>
              <?php
                                       }        
                                      ?>
            </tbody>
          </table>
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
    $(document).ready(function () {
      $('#bootstrap-data-table-export').DataTable();
    });
  </script>


</body>

</html>