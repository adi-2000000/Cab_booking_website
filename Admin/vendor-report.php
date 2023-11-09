

<?php include 'header.php';?>

<body>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="mr-2 menu-icon fa fa-user"></i>  All Vendor List</strong>&nbsp;<button class="button btn-add" data-toggle="modal" data-target="#myModal" ><i style="font-size:24px" class="fa" title="Add More">&#xf067;</i></button>
                            </div>
                            
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="avatar">Vendor</th>
                                            <th>Vendor Name</th>
                                            <th>Contact No.</th>
                                            <th>City</th>
                                            <th>Email</th>
                                            <th>View</th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `vendor_details` ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?> 
                                        <tr>
                                      
                                            <td class="avatar">
                                                <div class="round-img" style="height:40px; width:40px">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/all.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name"><?php echo $row['v_name']; ?></span> </td>
                                            <td>  <span class="contact"><?php echo $row['v_contact']; ?></span> </td>
                                            <td>  <span class="email"><?php echo $row['v_city']; ?></span> </td>
                                            <td>  <span class="company"><?php echo $row['v_email']; ?></span> </td>
                                            <td>
                                            <form action="vendor-report-details.php" method="post">
                                                <input type="hidden" name="vendorid" value="<?php echo $row['vendorid']; ?>">
                                                <button type="submit" style="border:none; background-color:transparent"><img class="" src="images/v.png" height="30px" width="30px"></img></button>
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

