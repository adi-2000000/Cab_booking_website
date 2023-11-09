<?php include 'header.php';?>

<body>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> <i class="mr-2 menu-icon fa fa-user"></i> All Driver Details</strong>&nbsp;<button class="button btn-add" data-toggle="modal" data-target="#myModal" ><i style="font-size:24px" class="fa" title="Add More">&#xf067;</i></button>
                            </div>
                            
<!------modal----for---add----drivers-----> 
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <div class="alert alert-secondary" role="alert"> 
                        <h3 class="text-center p-2"><strong>&nbsp; <i class="mr-2 menu-icon fa fa-user"></i> |&nbsp; Add Driver Form &nbsp; </strong> <label class="text-danger">&nbsp; </label></h3> 
                        </div>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Driver Form</h4>-->
        </div>
        <div class="modal-body">
           
         <!--<div class="container">
          
                                <strong>Add Driver</strong> | New Riders
                            </div>-->
                            <div class="card-body card-block">
                                <form action="driver-insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Driver Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="d-name" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact No.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="d-contact" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alternet Mobile. No.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="d-mobile" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Driver's Email_id</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="d-email" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="d-address" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="file-input" class=" form-control-label">Driver's Image/Selfie</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="file" id="file-input" name="d-img" class="form-control-file">
                                        </div>      
                                        <div class="col-sm-4">
                                             <input type="file" id="file-input" name="d-img-1" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                     <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="file-input" class=" form-control-label">Adhaar Card No.</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="text" id="text-input" name="d-adhaar" class="form-control"><small class="form-text text-muted"></small>
                                        </div>      
                                        <div class="col-sm-4">
                                             <input type="file" id="file-input" name="d-img-adhaar" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="file-input" class=" form-control-label">Driving Licence No.</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="text" id="text-input" name="d-dl" class="form-control"><small class="form-text text-muted"></small>
                                        </div>      
                                        <div class="col-sm-4">
                                             <input type="file" id="file-input" name="d-img-dl" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="file-input" class=" form-control-label">PVC No.</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="text" id="text-input" name="d-pvc" class="form-control"><small class="form-text text-muted"></small>
                                        </div>      
                                        <div class="col-sm-4">
                                             <input type="file" id="file-input" name="d-img-pvc" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Other Details</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="d-other" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                     
                                           <button type="submit" name="upload" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                           <button type="reset" class="btn btn-success"><i class="fa fa-ban"></i> Reset</button>
                                           <button type="button" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-close"></i> Close</button>
                                         
                                    
                                      <!--<div class="card-footer">
                                        
                                         <button type="submit" name="upload" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                         </button>
                                         <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
                                      </div> --->
                                    </form>
                                  </div> 
              </div
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!------modal----for---add----drivers----->                             
 <button type="button" class="btn btn-warning" title="Pending Drivers">
       <?php
      include 'config.php';
       $pic = mysqli_query($link,"SELECT COUNT(*) FROM `driver_details` WHERE status='0' ORDER BY `id` DESC");
       while($row = mysqli_fetch_array($pic)){
       ?> 
    Pending <span class="badge bg-light"><?php echo $row['COUNT(*)']?></span><?php } ?>
  </button>
 
  <a href="drivers-approved.php"><button type="button" class="btn btn-success" title="Approved Drivers">Approved<?php 
      include 'config.php';
       $pic = mysqli_query($link,"SELECT COUNT(*) FROM `driver_details` WHERE status='1' ORDER BY `id` DESC");
       while($row = mysqli_fetch_array($pic)){
       ?> 
     <span class="badge bg-dark"><?php echo $row['COUNT(*)']?></span> <?php }  ?>
  </button></a>
                          
                            <div class="card-body">
                              
                                <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                      
                                            <th class="avatar">Driver</th>
                                            <th>Driver Name</th>
                                            <th>Contact No.</th>
                                            <th>DL No.</th>
                                            <th>PVC No.</th>
                                            <th>Email_id</th>
                                            <th>Address</th>
                                            
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `driver_details` WHERE status='0' ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?> 
                                        <tr>
                                          
                                            <td class="avatar">
                                                <div class="round-img" style="height:40px; width:40px">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/all.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name"><?php echo $row['d_name']; ?></span> </td>
                                            <td>  <span class="contact"><?php echo $row['d_contact']; ?></span> </td>
                                            <td>  <span class="dl"><?php echo $row['d_dl']; ?></span> </td>
                                            <td>  <span class="pvc"><?php echo $row['d_pvc']; ?></span> </td>
                                            <td>  <span class="email"><?php echo $row['d_email']; ?></span> </td>
                                            <td> <span class="address"><?php echo $row['d_address']; ?></span> </td>
                                            <td>
                                            <form action="driver-details.php" method="post">
                                                <input type="hidden" name="driverid" value="<?php echo $row['driverid']; ?>">
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
                    <div class="col-sm-12">
                        Copyright &copy; 2023 AimCab Admin
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


