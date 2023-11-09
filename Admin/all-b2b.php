

<?php include 'header.php';?>

<body>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="mr-2 menu-icon fa fa-user"></i>B2B Details</strong>&nbsp;<button class="button btn-add" data-toggle="modal" data-target="#myModal" ><i style="font-size:24px" class="fa" title="Add More">&#xf067;</i></button>
                            </div>
                            
<!------modal----for---add----Vendors-----> 
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class=" modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <div class="alert alert-secondary" role="alert"> 
                        <h3 class="text-center p-2"><strong>&nbsp; <i class="mr-2 menu-icon fa fa-user"></i> |&nbsp; Add B2B Form &nbsp; </strong> <label class="text-danger">&nbsp; </label></h3> 
                        </div>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Vendor Form</h4>-->
        </div>
        <div class="modal-body">
            
         
            
         <!--<div class="container">
          
                                <strong>Add Vendor</strong> | New Riders
                            </div>-->
                            <div class="card-body card-block">
                                <form action="b2b-insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-name" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact No.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-contact" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alternet Mobile No.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-mobile" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">City Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-city" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Company Logo</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="b2b-img" class="form-control-file"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Govt Approval Certificate</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="b2b-img-certi" class="form-control-file"></div>
                                    </div>
                                    
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Comapny Docs</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="b2b-img-doc" class="form-control-file"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Business Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-email" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bank Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-bank" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bank Account No</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-acc-no" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="text" class=" form-control-label">IFSC Code</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="text" id="text-input" name="b2b-ifsc" class="form-control"><small class="form-text text-muted"></small>
                                        </div>      
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="file-input" class=" form-control-label">PAN No.</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="text" id="text-input" name="b2b-pan" class="form-control"><small class="form-text text-muted"></small>
                                        </div>      
                                        <div class="col-sm-4">
                                             <input type="file" id="file-input" name="b2b-img-pan" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company Other Details</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="b2b-other" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <button type="submit" name="upload" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                           <button type="reset" class="btn btn-success"><i class="fa fa-ban"></i> Reset</button>
                                           <button type="button" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-close"></i> Close</button>
                                      
                                    
                                     <!--<div class="card-footer">
                                          <button type="submit" name="upload" class="btn btn-primary btn-md">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-md">
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
<!------modal----for---add----Vendors----->                             
                            
                            
                            
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table-stats order-table ov-h table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        
                                            <th class="avatar">B2B ID</th>
                                            <th>Business Name</th>
                                            <th>Contact</th>
                                            <th>City</th>
                                            <th>View</th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `b2b_details` ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?> 
                                        <tr>
                                      
                                            <td class="avatar">
                                                <span class="name"><?php echo $row['b2bid']; ?></span>
                                            </td>
                                            <td>  <span class="name"><?php echo $row['b2b_name']; ?></span> </td>
                                            <td>  <span class="contact"><?php echo $row['b2b_contact']; ?></span> </td>
                                            <td>  <span class="email"><?php echo $row['b2b_city']; ?></span> </td>
                                            <td>
                                             <form action="b2b-redirect.php" method="post">
                                                   <input type="hidden" name="b2bid" value="<?php echo $row['b2bid']; ?>">
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

