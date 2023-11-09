


<?php include 'header.php';?>

  <body> 
      
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title text-danger">Cancelled Booking Table</strong>
                            </div>
                            <div class="card-body">
                               
                                <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                              <th>Booking Id</th>
                                               <th>Vendor id</th>
                                               <th>Cancellation Reason</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                     <?php
                                 include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `cancelled_trips`");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?> 
                                    <tbody>
                                        <tr>
                                            <td><? echo $row['bookid'];?> </td>
                                            <td><span class="amount"><? echo $row['vendorid'];?></span></td>
                                            <td><span class="reason"><? echo $row['cancel_reason'];?></span></td>
                                            <td>
                                           <form action="custom-cancellation-redirect.php" method="post">
                                                <input type="hidden" name="vendorid" value="<?php echo $row['vendorid']; ?>">
                                                <input type="hidden" name="bookid" value="<?php echo $row['bookid']; ?>">
                                                <button type="submit" style="border:none; background-color:transparent"><img class="" src="images/v.png" height="30px" width="30px"></img></button>
                                                </form>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                     <?php
                                       }
                                       ?> 
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

