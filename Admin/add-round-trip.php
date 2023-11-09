
<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">
<body>

<body>
    
       <div class="drop p-3 text-dark">
       <li class="menu-item-has-children dropdown" >
                        <a href="add-oneway-trip.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Add One-Way Trip</a>
                        <ul class="sub-menu children dropdown-menu p-1" style="background:red">
                        <li><a href="add-round-trip.php" style="color:white">Add Round Trip</a></li>
                            <li><a href="add-rental-trip.php" style="color:white">Add Rental trip</a></li>
                            <!-- <li><a href="outstation-trips.php" style="color:white">Outstation trips</a></li> -->
                        </ul>
                    </li>
    </div>
    
    <div class="content">
        <div class="animated fadeIn">

            <div class="col-md-12">
                <div class="card-header">
                    <strong class="card-title"><i class="mr-2 menu-icon fa fa-money"></i> Add Trips</strong>
                </div><br>

                <div class="card">
                    <div class="card-body card-block">

                        <div class="row p-2">


                            <div class="col-md-12">
                                <h2><strong>Add Trip - Round</strong></h2>
                            </div>
                        </div>
                        <br>

                        <?php

                        require('config.php');
if(isset($_POST['submit_trip'])){
    $sourceState = $_POST['source_state'];
    $sourceCity = $_POST['source_city'];
    $destState = $_POST['destination_state'];
    $destCity = $_POST['destination_city'];
    $hatchback = $_POST['hatchback'];
    $sedan = $_POST['sedan'];
    $suv = $_POST['suv'];
    $suvPlus = $_POST['suvplus'];
    
    $sql = "INSERT INTO `round_trip` (source_state, source_city, destination_state,destination_city, hatchback, sedan, suv, suvplus) 
   VALUES ('$sourceState','$sourceCity','$destState', '$destCity', '$hatchback', '$sedan','$suv','$suvPlus')";

     if ($link->query($sql) != TRUE) {
        echo "Error: " . $sql . "<br>" . $link->error;
        }
        else{
            echo "<h3 style='color:green;'>TRIP ADDED SUCCESSFULLY</h3><br>";
        }
                           

    }
?>
                        <form action="add-round-trip.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Source State</label><br>
                                            <select data-placeholder="Choose Source State" class="standardSelect"
                                                tabindex="5" name="source_state" style="padding: 8px;">
                                                <option value="default" label="Choose an Source State"></option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                                </option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman & Diu">Daman & Diu</option>
                                                <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                <option value="Ladakh">Ladakh</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>

                                            </select>
                                        </div>
                                        <br>
                                        <div class="col-sm-4">
                                            <label>Source City</label><br>
                                            <input type="text" id="source_city" name="source_city"
                                                class="form-control"><br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Destination State</label>
                                            <select data-placeholder="Choose destination State" class="standardSelect"
                                                tabindex="5" name="destination_state" style="padding: 8px;">
                                                <option value="default" label="Choose an Source State"></option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                                </option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman & Diu">Daman & Diu</option>
                                                <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                <option value="Ladakh">Ladakh</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-4">

                                            <label>Destination City</label>
                                            <input type="text" id="destination_city" name="destination_city"
                                                class="form-control"><br>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>HATCHBACK</label>
                                            <input type="number" id="hatchback" name="hatchback" class="form-control"
                                                min="1" value="<?php echo $suv; ?>"><br>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>SEDAN</label>
                                            <input type="number" id="sedan" name="sedan" class="form-control"
                                                min="1" value="<?php echo $suv; ?>"><br>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>SUV</label>
                                            <input type="number" id="suv" name="suv" class="form-control"
                                                min="1" value="<?php echo $suv; ?>"><br>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>SUV+</label>
                                            <input type="number" id="suvplus" name="suvplus" class="form-control"
                                                min="1" value="<?php echo $suv; ?>"><br>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" name="submit_trip" class="btn btn-info">Submit
                                                Trip</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- .animated -->
    </div><!-- .content -->
    </div>
    </div>

    </div><!-- /#right-panel -->

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
    (document).ready(function() {
        ('#bootstrap-data-table-export').DataTable();
    });
    </script>

    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
    </script>

</body>