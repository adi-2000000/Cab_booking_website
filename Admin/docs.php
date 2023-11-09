<?php include 'header.php';?>
<body>
    
   


      
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">All Documentation Details</strong>
                            </div>
                           
                            <div class="card-body card-block">
                                <form action="insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Documentation Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="p-name" placeholder="Enter Documentation Name" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Documentation No.</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="p-title" placeholder="Enter Documentation No" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Add Documents</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="p-img" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Documents File 1</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="p-img-1" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Documents File 2</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="p-img-2" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Documents File 3</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="p-img-3" class="form-control-file"></div>
                                    </div>
                                    
                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Other Documents Details</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="p-price" placeholder="Enter Other Documents Details" class="form-control"><small class="form-text text-muted"></small></div>
                                    </div>
                                     
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

