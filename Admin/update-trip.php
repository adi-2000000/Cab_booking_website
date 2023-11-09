
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
      <div class="container">
    <h1 class="display-4">One Way Trip Prices</h1>
   
</div>
    <div class="content" style="font-size: 12px;">
        <div class="animated fadeIn">

            <div class="col-md-12">
                <div class="card-header">
                    <strong class="card-title"><i class="mr-2 menu-icon fa fa-money"></i> Update Trip Pricing &nbsp;<i
                            class="menu-icon fa fa-inr"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="update-trip.php"><button type="button" class="btn btn-secondary btn-sm">Oneway Prices</button></a>&nbsp;&nbsp;&nbsp;<a href="update-trip-round.php"><button type="button" class="btn btn-secondary btn-sm">Round Prices</button></a> <a href="update-trip-rental.php"><button type="button" class="btn btn-secondary btn-sm">Rental Prices</button></a>
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
                         <br>
                            <label><strong>Source State</strong></label><br>
                            <select class="form-select" id="state" name="state" style="width: 50%; height:50%;">
                            <option selected disabled>Select State</option>
                            <?php while ($row = mysqli_fetch_assoc($state_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                            <?php endwhile; ?>
                        </select>
                        </div>

                        <div class="col-md-4">
                            <br>
                            
                            <label><strong>Source City</strong></label><br>
                           <select class="form-select" id="city" name="city" style="width: 50%; height:50%;">
                            <option selected disabled>Select [</option>
                        </select>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <br>
                            <label><strong>Destination State</strong></label><br>
                             <select class="form-select" id="dstate" name="dstate" style="width: 50%; height:50%;">
                        <option selected disabled>Select State</option>
                        <?php while ($drow = mysqli_fetch_assoc($dstate_qry)) : ?>
                        <option value="<?php echo $drow['id']; ?>"> <?php echo $drow['name']; ?> </option>
                        <?php endwhile; ?>
                    </select>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <label><strong>Destination City</strong></label><br>
                            <select class="form-select" id="dcity" name="dcity" style="width: 50%; height:50%;">
                        <option selected disabled>Select City</option>
                    </select>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-center" style="padding-top: 20px;">
                            <button type="submit" name="search" class="btn btn-dark">Search</button>
                             <!--<input class="btn btn-primary" type="submit" value="Submit">-->
                        </div>
                    </div>
                </form>
                <?php
                $sCity = '';
                $dCity = '';
                
                                  
                                    if(isset($_POST['search'])) 
                                    { 
                                        include 'config.php';
                                        
                                         $sourceState = $_POST['state'];
                                         $sourceCity = $_POST['city'];
                                         //echo  $state;
                                         //echo  $city;

                                         $destinationState = $_POST['dstate'];
                                         $destinationCity = $_POST['dcity'];
                                        // echo  $dstate;
                                        // echo  $dcity;
                                         
                                         
                                         // SQL QUERY
                                         $query = "SELECT * FROM `states` WHERE id=$sourceState;";
                                         // FETCHING DATA FROM DATABASE
                                         $result = $link->query($query);
                                        $row = $result->fetch_assoc();
 
                                        $sState = $row['name'];
                                        //echo  $sState;

                                          // SQL QUERY
                                          $query1 = "SELECT * FROM `cities` WHERE id=$sourceCity;";
                                          // FETCHING DATA FROM DATABASE
                                          $result1 = $link->query($query1);
                                         $row1 = $result1->fetch_assoc();
  
                                         $sCity = $row1['name'];
                                         //echo  $sCity;

                                         /* Destination */
                                         // SQL QUERY
                                           $query2 = "SELECT * FROM `states` WHERE id=$destinationState;";
                                           // FETCHING DATA FROM DATABASE
                                           $result2 = $link->query($query2);
                                          $row2 = $result2->fetch_assoc();
   
                                          $dState = $row2['name'];
                                          //echo  $dState;
  
                                            // SQL QUERY
                                            $query3 = "SELECT * FROM `cities` WHERE id=$destinationCity;";
                                            // FETCHING DATA FROM DATABASE
                                            $result3 = $link->query($query3);
                                           $row3 = $result3->fetch_assoc();
    
                                           $dCity = $row3['name'];
                                           //echo  $dCity;


                                       
                                       $pic = mysqli_query($link,"SELECT * FROM `oneway_trip` WHERE source_state = '$sState' AND source_city = '$sCity' AND destination_state = '$dState' AND destination_city = '$dCity'");
                                       while($row = mysqli_fetch_array($pic)){
                                         //   var_dump($row);
                                        $hatchback = $row['hatchback']; 
                                          $sedan = $row['sedan'];
                                          $sedanPremium = $row['SedanPremium'];
                                          $suv = $row['suv']; 
                                          $suvPlus = $row['suvplus']; 
                                          $suvmuv =  $row['suvmuv'];
                                         $sState = $row['source_state'];
                                         $sCity = $row['source_city'];
                                         $dState = $row['destination_state'];
                                         $dCity = $row['destination_city'];
                                        
                                       }
                                       
                                       
                                    }
                                       if(isset($_POST['oneway'])) 
                                    { 
                                        include 'config.php';
                                            $hatchback = $_POST['one-hatchback'];
                                            $sedan = $_POST['one-sedan'];
                                            $sedanPremium = $_POST['one-sedan-premium'];
                                            $suv = $_POST['one-suv'];
                                            $suvmuv =  $_POST['one-suvmuv'];
                                          
                                            $suvPlus = $_POST['one-suvplus'];
                                            $sState = $_POST['one-sState'];
                                            $sCity = $_POST['one-sCity'];
                                            $dState = $_POST['one-dState'];
                                            $dCity = $_POST['one-dCity'];
                                
                                            $sql = "UPDATE `oneway_trip` SET `hatchback` = '$hatchback', `sedan` = '$sedan', `SedanPremium` = '$sedanPremium', `suv` = '$suv', `suvplus` = '$suvPlus', `suvmuv` = '$suvmuv' WHERE source_state = '$sState' AND source_city = '$sCity' AND destination_state = '$dState' AND destination_city = '$dCity'  ";
                                       //  echo "POST Data:";
    //var_dump($_POST);
                                            if ($link->query($sql) != TRUE) {
                                               echo "Error: " . $sql . "<br>" . $link->error;
                                               }
                                    }
                                    
                                    ?>
                <br> <br>
                <div class="col-md-12">
                    <div class="text-info text-center"><strong style="font-size:40px;">
                   
                            <?php echo $sCity; ?> - <?php echo $dCity; ?>
                        </strong></div>
                </div>

                <br> <br>

              <div class="card">
    <div class="card-body card-block">
        
    </div>
</div>

                        <br><br>


                       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="row">
        <div class="col-md-2">
            <label class="form-control-label">
                <strong>CAR TYPE</strong>
            </label>
            <br>
            <br>
            <label class="form-control-label"><strong>PRICES</strong></label>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-sm-2">
                <div class="text-center"><strong>HATCHBACK</strong></div>
                    <input type="number" id="one-hatchback" name="one-hatchback" class="form-control" min="1" value="<?php echo $hatchback; ?>">
                </div>
                <div class="col-sm-2">
                <div class="text-center"><strong>SEDAN</strong></div>
                    <input type="number" id="one-sedan" name="one-sedan" class="form-control" min="1" value="<?php echo $sedan; ?>">
                </div>
                <div class="col-sm-2">
                <div class="text-center"><strong>SEDAN PREM.</strong></div>
                    <input type="number" id="one-sedan-premium" name="one-sedan-premium" class="form-control" min="1" value="<?php echo $sedanPremium; ?>">
                </div>
                <div class="col-sm-2">
                <div class="text-center"><strong>SUV</strong></div>
                    <input type="number" id="one-suvmuv" name="one-suvmuv" class= "form-control" min="1" value="<?php echo $suvmuv; ?>">
                </div>
                <div class="col-sm-2">
                <div class="text-center"><strong>MUV</strong></div>
                    <input type="number" id="one-suv" name="one-suv" class="form-control" min="1" value="<?php echo $suv; ?>">
                </div>
                <div class="col-sm-2">
                <div class="text-center"><strong>MUV+</strong></div>
                    <input type="number" id="one-suvplus" name="one-suvplus" class="form-control" min="1" value="<?php echo $suvPlus; ?>">
                </div>
                <div class="col-sm-2">
                    <input type="hidden" id="one-sState" name="one-sState" class="form-control" value="<?php echo $sState; ?>">
                </div>
                <div class="col-sm-2">
                    <input type="hidden" id="one-sCity" name="one-sCity" class="form-control" value="<?php echo $sCity; ?>">
                </div>
                <div class="col-sm-2">
                    <input type="hidden" id="one-dState" name="one-dState" class="form-control" value="<?php echo $dState; ?>">
                </div>
                <div class="col-sm-2">
                    <input type="hidden" id="one-dCity" name="one-dCity" class="form-control" value="<?php echo $dCity; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" name="oneway" class="btn btn-primary" style="background: red">Update</button>
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


// state city
$('#dstate').on('change', function() {
    var dstate_id = this.value;
    // console.log(country_id);
    $.ajax({
        url: 'ajax/dcity.php',
        type: "POST",
        data: {
            dstate_data: dstate_id
        },
        success: function(data) {
            $('#dcity').html(data);
            // console.log(data);
        }
    })
});
</script>


</body>