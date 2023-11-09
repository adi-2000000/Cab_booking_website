<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

<body>

    <body>

        <div class="drop p-3 text-dark">
            <li class="menu-item-has-children dropdown">
                <a href="add-oneway-trip.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="color:white">Add One-Way Trip</a>
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
                                    <h2><strong>Add Trip - Rental</strong></h2>
                                </div>
                            </div>
                            <br>

                            <?php
                        require('config.php');
if(isset($_POST['submit_trip'])){
    
    $hours4 = $_POST['hours4'];
    $distance4 = $_POST['distance4'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $sedan4 = $_POST['sedan4'];
    $suv4 = $_POST['suv4'];
    $suvPlus4 = $_POST['suvplus4'];
   
    $sql4 = "INSERT INTO `rental_trip` (hours, distance, city, state, sedan, suv, suvplus) 
   VALUES ('$hours4','$distance4','$city','$state', '$sedan4', '$suv4','$suvPlus4')";
   
     $hours6 = $_POST['hours6'];
    $distance6 = $_POST['distance6'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $sedan6 = $_POST['sedan6'];
    $suv6 = $_POST['suv6'];
    $suvPlus6 = $_POST['suvplus6'];
    
    $sql6 = "INSERT INTO `rental_trip` (hours, distance, city, state, sedan, suv, suvplus) 
   VALUES ('$hours6','$distance6','$city','$state', '$sedan6','$suv6','$suvPlus6')";
   

   
   $hours8 = $_POST['hours8'];
    $distance8 = $_POST['distance8'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $sedan8 = $_POST['sedan8'];
    $suv8 = $_POST['suv8'];
    $suvPlus8 = $_POST['suvplus8'];
   
    $sql8 = "INSERT INTO `rental_trip` (hours, distance, city, state, sedan, suv, suvplus) 
   VALUES ('$hours8','$distance8','$city','$state', '$sedan8','$suv8','$suvPlus8')";
   

     if ($link->query($sql4) != TRUE || $link->query($sql6) != TRUE || $link->query($sql8) != TRUE) {
        echo "Error: " . $sql4 . "<br>" . $link->error;
        }
        else{
            echo "<h3 style='color:green;'>TRIP ADDED SUCCESSFULLY</h3><br>";
        }
    }
?>
                            <form action="add-rental-trip.php" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>State</label><br>
                                                <select data-placeholder="Choose Source State" class="standardSelect"
                                                    tabindex="5" name="state" style="padding: 8px;">
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
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar
                                                        Islands
                                                    </option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli
                                                    </option>
                                                    <option value="Daman & Diu">Daman & Diu</option>
                                                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                                    <option value="Ladakh">Ladakh</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-sm-4">
                                                <label>City</label><br>
                                                <input type="text" id="city" name="city"
                                                    class="form-control"><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <label>HOURS</label>
                                            <input type="text" id="hours4" name="hours4" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                         <div class="col-sm-2 text-center">
                                            <label>DISTANCE</label>
                                            <input type="text" id="distance4" name="distance4" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SEDAN</label>
                                            <input type="text" id="sedan4" name="sedan4" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV</label>
                                            <input type="text" id="suv4" name="suv4" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV+</label>
                                            <input type="text" id="suvplus4" name="suvplus4" class="form-control"
                                                min="1" value=""><br>
                                        </div>

                                    </div>
                                    <div class="row">
                                         <div class="col-sm-2 text-center">
                                            <label>HOURS</label>
                                            <input type="text" id="hours6" name="hours6" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                         <div class="col-sm-2 text-center">
                                            <label>DISTANCE</label>
                                            <input type="text" id="distance6" name="distance6" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SEDAN</label>
                                            <input type="text" id="sedan6" name="sedan6" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV</label>
                                            <input type="text" id="suv6" name="suv6" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV+</label>
                                            <input type="text" id="suvplus6" name="suvplus6" class="form-control"
                                                min="1" value=""><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-2 text-center">
                                            <label>HOURS</label>
                                            <input type="text" id="hours8" name="hours8" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                         <div class="col-sm-2 text-center">
                                            <label>DISTANCE</label>
                                            <input type="text" id="distance8" name="distance8" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SEDAN</label>
                                            <input type="text" id="sedan8" name="sedan8" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV</label>
                                            <input type="text" id="suv8" name="suv8" class="form-control" min="1"
                                                value=""><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV+</label>
                                            <input type="text" id="suvplus8" name="suvplus8" class="form-control"
                                                min="1" value=""><br>
                                        </div>
                                        
                                    </div>

                                </div>

                        </div>
                        <div class="col-sm-12 text-center" style="padding-bottom: 20px;">
                                            <button type="submit" name="submit_trip" class="btn btn-info">Submit
                                                Trip</button>
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