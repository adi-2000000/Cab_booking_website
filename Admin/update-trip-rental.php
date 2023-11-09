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

        <div class="content" style="font-size: 12px;">
            <div class="animated fadeIn">

                <div class="col-md-12">
                    <div class="card-header">
                        <strong class="card-title"><i class="mr-2 menu-icon fa fa-money"></i> Update Trip Pricing
                            &nbsp;<i class="menu-icon fa fa-inr"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="update-trip.php"><button type="button" class="btn btn-secondary btn-sm">Oneway Prices</button></a> <a href="update-trip-round.php"><button type="button" class="btn btn-secondary btn-sm">Round Prices</button></a>
                    </div><br>
<?php
  include 'config.php';

$state = "SELECT * FROM states";
$state_qry = mysqli_query($link, $state);

$dstate = "SELECT * FROM states";
$dstate_qry = mysqli_query($link, $dstate);
?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <label><strong>Source State</strong></label><br>
                               <select class="form-select" id="state" name="state">
                            <option selected disabled>Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($state_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                            <?php endwhile; ?>
                        </select>
                            </div>

                            <div class="col-md-4">
                                <label><strong>Source City</strong></label><br>
                               <select class="form-select" id="city" name="city">
                            <option selected disabled>Select [</option>
                        </select>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-center" style="padding-top: 20px;">
                            <button type="submit" name="search" class="btn btn-dark">Search</button>
                        </div>
                </div>
                </form>
                <?php
                $city=''  ;   
                $hours4='';    
                $distance4='';   
                $sedan4='';   
                $suv4='';   
                $suvplus4=''; 
                $hours6='';    
                $distance6='';   
                $sedan6='';   
                $suv6='';   
                $suvplus6=''; 
                $hours8='';    
                $distance8='';   
                $sedan8='';   
                $suv8='';   
                $suvplus8='';               
                                    if(isset($_POST['search'])) 
                                    { 
                                        include 'config.php';
                                        
                                        $sourceState = $_POST['state'];
                                         $sourceCity = $_POST['city'];
                                         //echo  $state;
                                         //echo  $city;

                                         
                                         // SQL QUERY
                                         $query = "SELECT * FROM `states` WHERE id=$sourceState;";
                                         // FETCHING DATA FROM DATABASE
                                         $result = $link->query($query);
                                        $row = $result->fetch_assoc();
 
                                        $state = $row['name'];
                                        //echo  $sState;

                                          // SQL QUERY
                                          $query1 = "SELECT * FROM `cities` WHERE id=$sourceCity;";
                                          // FETCHING DATA FROM DATABASE
                                          $result1 = $link->query($query1);
                                         $row1 = $result1->fetch_assoc();
  
                                         $city = $row1['name'];
                                         //echo  $sCity;

                                        
                                        
                                        
                                     $pic = mysqli_query($link,"SELECT * FROM `rental_trip` WHERE state = '$state' and city = '$city' and hours = '4'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hours4 = $row['hours'];
                                          $distance4 = $row['distance'];
                                          $sedan4 = $row['sedan'];
                                          $suv4 = $row['suv']; 
                                          $suvplus4 = $row['suvplus']; 
                                       
                                       }
                                       $pic = mysqli_query($link,"SELECT * FROM `rental_trip` WHERE state = '$state' and city = '$city' and hours = '6'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hours6 = $row['hours'];
                                          $distance6 = $row['distance'];
                                          $sedan6 = $row['sedan'];
                                          $suv6 = $row['suv']; 
                                          $suvplus6 = $row['suvplus']; 
                                      
                                              
                                        }$pic = mysqli_query($link,"SELECT * FROM `rental_trip` WHERE state = '$state' and city = '$city' and hours = '8'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hours8 = $row['hours'];
                                          $distance8 = $row['distance'];
                                          $sedan8 = $row['sedan'];
                                          $suv8 = $row['suv']; 
                                          $suvplus8 = $row['suvplus']; 
                                    
                                       }
                                       
                                    }
                                     
                                    if(isset($_POST['rental'])) 
                                    { 
                                      include 'config.php';
                                            $hours4 = $_POST['hours4'];
                                            $distance4 = $_POST['distance4'];
                                            $sedan4 = $_POST['sedan4'];
                                            $suv4 = $_POST['suv4'];
                                            $suvplus4 = $_POST['suvplus4'];
                                            $hours6 = $_POST['hours6'];
                                            $distance6 = $_POST['distance6'];
                                            $sedan6 = $_POST['sedan6'];
                                            $suv6 = $_POST['suv6'];
                                            $suvplus6 = $_POST['suvplus6'];
                                            $hours8 = $_POST['hours8'];
                                            $distance8 = $_POST['distance8'];
                                            $sedan8 = $_POST['sedan8'];
                                            $suv8 = $_POST['suv8'];
                                            $suvplus8 = $_POST['suvplus8'];
                                            $state = $_POST['state'];
                                            $city = $_POST['city'];
                          
                                          $sql4 = "UPDATE `rental_trip` SET `hours` = '$hours4', `distance` = '$distance4', `sedan` = '$sedan4', `suv` = '$suv4', `suvplus` = '$suvplus4' WHERE state = '$state' and city = '$city' and hours = '4'";
                                          $sql6 = "UPDATE `rental_trip` SET `hours` = '$hours6', `distance` = '$distance6', `sedan` = '$sedan6', `suv` = '$suv6', `suvplus` = '$suvplus6' WHERE state = '$state' and city = '$city' and hours = '6'";
                                          $sql8 = "UPDATE `rental_trip` SET `hours` = '$hours8', `distance` = '$distance8', `sedan` = '$sedan8', `suv` = '$suv8', `suvplus` = '$suvplus8' WHERE state = '$state' and city = '$city' and hours = '8'";
                                         
                                              if ($link->query($sql4) != TRUE || $link->query($sql6) != TRUE || $link->query($sql8) != TRUE ) {
                                               echo "Error: " . $sql4 . "<br>" . $link->error;
                                               }
                                    }
                                    ?>
                <br> <br>
                <div class="col-md-12">
                    <div class="text-info text-center"><strong style="font-size:40px;">
                            <?php echo $city; ?>
                        </strong></div>
                </div>

                <br> <br>

                <div class="card">
                    <div class="card-body card-block">

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <label>HOURS</label>
                                            <input type="text" id="hours4" name="hours4" class="form-control" min="1"
                                                value="<?php echo $hours4; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>DISTANCE</label>
                                            <input type="text" id="distance4" name="distance4" class="form-control"
                                                min="1" value="<?php echo $distance4; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SEDAN</label>
                                            <input type="text" id="sedan4" name="sedan4" class="form-control" min="1"
                                                value="<?php echo $sedan4; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV</label>
                                            <input type="text" id="suv4" name="suv4" class="form-control" min="1"
                                                value="<?php echo $suv4; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV+</label>
                                            <input type="text" id="suvplus4" name="suvplus4" class="form-control"
                                                min="1" value="<?php echo $suvplus4; ?>"><br>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <label>HOURS</label>
                                            <input type="text" id="hours6" name="hours6" class="form-control" min="1"
                                                value="<?php echo $hours6; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>DISTANCE</label>
                                            <input type="text" id="distance6" name="distance6" class="form-control"
                                                min="1" value="<?php echo $distance6; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SEDAN</label>
                                            <input type="text" id="sedan6" name="sedan6" class="form-control" min="1"
                                                value="<?php echo $sedan6; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV</label>
                                            <input type="text" id="suv6" name="suv6" class="form-control" min="1"
                                                value="<?php echo $suv6; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV+</label>
                                            <input type="text" id="suvplus6" name="suvplus6" class="form-control"
                                                min="1" value="<?php echo $suvplus6; ?>"><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <label>HOURS</label>
                                            <input type="text" id="hours8" name="hours8" class="form-control" min="1"
                                                value="<?php echo $hours8; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>DISTANCE</label>
                                            <input type="text" id="distance8" name="distance8" class="form-control"
                                                min="1" value="<?php echo $distance8; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SEDAN</label>
                                            <input type="text" id="sedan8" name="sedan8" class="form-control" min="1"
                                                value="<?php echo $sedan8; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV</label>
                                            <input type="text" id="suv8" name="suv8" class="form-control" min="1"
                                                value="<?php echo $suv8; ?>"><br>
                                        </div>
                                        <div class="col-sm-2 text-center">
                                            <label>SUV+</label>
                                            <input type="text" id="suvplus8" name="suvplus8" class="form-control"
                                                min="1" value="<?php echo $suvplus8; ?>">
                                                 <input type="hidden" id="state" name="state"  class="form-control" value="<?php echo $state; ?>">
                                                  <input type="hidden" id="city" name="city"  class="form-control" value="<?php echo $city; ?>"><br>
                                        </div>

                                        <div class="col-sm-2">
                                            <button type="submit" name="rental" class="btn btn-success" style="background-color: red">Update</button>
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
        
            
            <script>
// state city
$('#state').on('change', function() {
    var state_id = this.value;
    // console.log(country_id);
    $.ajax({
        url: 'ajax/city.php',
        type: "POST",
        data: {
            state_data: state_id
        },
        success: function(data) {
            $('#city').html(data);
            // console.log(data);
        }
    })
});


</script>


    </body>