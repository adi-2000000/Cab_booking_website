
 <?php include 'header.php';?>
 
<body>
    
   
    
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="mr-2 menu-icon fa fa-car"></i>  All Outsource Cars | Cabs Details</strong>&nbsp;<button class="button btn-add" data-toggle="modal" data-target="#myModal" ><i style="font-size:24px" class="fa" title="Add More">&#xf067;</i></button>
                            </div>
    <!------modal----for---add----drivers-----> 
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <div class="alert alert-secondary" role="alert"> 
                        <h3 class="text-center p-2"><strong>&nbsp; <i class="mr-2 menu-icon fa fa-car"></i> |&nbsp; Add OutSource Car/Cab Form &nbsp; </strong> <label class="text-danger">&nbsp; </label></h3> 
                        </div>
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add OutSource Cars | Cabs Form</h4>-->
        </div>
        <div class="modal-body">
            
         
            
         <!--<div class="container">
          
                                <strong>Add Outsource Cabs</strong> | New Cars
                            </div>-->
                            <div class="card-body card-block">
                                <form action="out-source-insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Vehicle Name & Reg. No.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="o-name" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                             <label for="file-input" class=" form-control-label">Vehicle RC No.</label>
                                        </div>
                                        <div class="col-sm-5">
                                              <input type="text" id="text-input" name="o-rc" class="form-control"><small class="form-text text-muted"></small>
                                        </div>      
                                        <div class="col-sm-4">
                                             <input type="file" id="file-input" name="o-img-rc" class="form-control-file">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Insurance</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-insurance" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Permit</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-permit" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Authorization</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-auth" class="form-control-file"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Car's No Plate</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="o-plate" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Car's Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-img" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Front Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-img-f" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Back Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-img-b" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Side Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="o-img-s" class="form-control-file"></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Car's Other Details</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="o-other" class="form-control"><small class="form-text text-muted"></small></div>
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

 

       
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <button type="button" class="btn btn-warning" title="Pending OutSource">
                               <?php
                              include 'config.php';
                               $pic = mysqli_query($link,"SELECT COUNT(*) FROM `out_source_details` WHERE status = '0' ORDER BY `id` DESC");
                               while($row = mysqli_fetch_array($pic)){
                               ?> 
                            Pending <span class="badge bg-light"><?php echo $row['COUNT(*)']?></span><?php } ?>
                          </button>
                         
                          <a href="out-source-approved.php"><button type="button" class="btn btn-success" title="Approved OutSource">Approved<?php 
                              include 'config.php';
                               $pic = mysqli_query($link,"SELECT COUNT(*) FROM `out_source_details` WHERE status = '1' ORDER BY `id` DESC");
                               while($row = mysqli_fetch_array($pic)){
                               ?> 
                             <span class="badge bg-dark"><?php echo $row['COUNT(*)']?></span> <?php }  ?>
                          </button></a>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>OutCab Reg.No.</th>
                                            <th>OutCab RC No.</th>
                                            <th>OutCab Img</th>
                                            <th>Other</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT * FROM `out_source_details` WHERE status = '0' ORDER BY `id` DESC");
                                       while($row = mysqli_fetch_array($pic)){
                                       ?> 
                                       <tr>
                                            <td><?php echo $row['o_name']; ?></td>
                                            <td><?php echo $row['o_rc']; ?></td>
                                            <td><?php echo $row['o_img']; ?></td>
                                            <td><?php echo $row['o_other']; ?></td>
                                            <td>
                                                <form action="out-cab.php" method="post">
                                                <input type="hidden" name="outid" value="<?php echo $row['outid']; ?>">
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
        <i class="menu-icon fa fa-inr"></i> (document).ready(function() {
          <i class="menu-icon fa fa-inr"></i> ('#bootstrap-data-table-export').DataTable();
      } );
  </script>

</body>
    