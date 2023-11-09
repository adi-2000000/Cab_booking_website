


<?php include 'header.php';?>
<body>
   <div class="drop p-3">
       <li class="menu-item-has-children dropdown" >
                        <a href="complaints.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Complaints</a>
                        <ul class="sub-menu children dropdown-menu p-1">
                            <li><a href="all-complaints.php">All Complaints</a></li>
                            <li><a href="user-complaint.php">User Complaints</a></li>
                            <li><a href="driver-complaint.php">Driver Complaints</a></li>
                            
                        </ul>
                    </li>
    </div>
   
      
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-danger">All Complaints Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th class="serial">Sr. No.</th>
                                        <th>Booking Id</th>
                                        <th>User Name</th>
                                        <th>Driver Name</th>
                                            <th>Complaints</th>
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
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td> #5469 </td>
                                            <td>  <span class="user-name">Louis Stanley</span> </td>
                                            <td>  <span class="driver-name">mary john</span> </td>
                                            
                                            <td>  <span class="complaint">Complaints Reasons</span> </td>
                                            <td>  <span class="datetime">Date Time</span> </td>
                                            <td>  <span class="t_type">Trip</span> </td>
                                            <td>  <span class="c_type">Swift</span> </td>
                                            <td> <span class="source">Pune</span> </td>
                                            <td> <span class="destination">Mumbai</span> </td>
                                            <td><span class="amount">1200</span></td>
                                            <td><span class="amount">1200</span></td>
                                            <td><span class="amount">1200</span></td>
                                            <td><span class="amount">1200</span></td>
                                            <td>
                                            <a href="client-details.php" ><img class="bg-transparent" src="images/v.png" height="30px" width="30px"></img></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2022 AimCab Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

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
