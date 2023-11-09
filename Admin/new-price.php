
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
<div class="content">
            <div class="animated fadeIn">
                 
                <div class="col-md-12">
                    <div class="card-header">
                            <strong class="card-title"><i class="mr-2 menu-icon fa fa-money"></i> Update Pricing &nbsp;<i class="menu-icon fa fa-inr"></i></strong>
                        </div><br>
                        <div class="row">
                        <div class="col-md-4">
                        <select id="selectgst" class="p-2 my-2 bg-primary text-light" placeholder="India">
                            <option value="default" label="Choose an State"></option>
                              <option value="41">Maharashtra</option>
                                        <option value="403">Goa</option>
                                        <option value="11">Delhi</option>
                                        <option value="56">Karnataka</option>
                                        <option value="36">Gujarat</option>
                                        <option value="34">Rajasthan</option>
                                        <option value="50">Andhra Pradesh</option>
                                        <option value="79">Arunachal Pradesh</option>
                                        <option value="78">Assam</option>
                                        <option value="80">Bihar</option>
                                        <option value="49">Chhattisgarh</option>
                                        <option value="12">Haryana</option>
                                        <option value="17">Himachal Pradesh</option>
                                        <option value="83">Jharkhand</option>
                                        <option value="67">Kerala</option>
                                        <option value="45">Madhya Pradesh</option>
                                        <option value="11">Manipur</option>
                                        <option value="12">Meghalaya</option>
                                        <option value="79">Mizoram</option>
                                        <option value="79">Nagaland</option>
                                        <option value="77">Odisha</option>
                                        <option value="16">Punjab</option>
                                        <option value="737">Sikkim</option>
                                        <option value="64">Tamil Nadu</option>
                                        <option value="53">Telangana</option>
                                        <option value="79">Tripura</option>
                                        <option value="24">Uttarakhand</option>
                                        <option value="28">Uttar Pradesh</option>
                                        <option value="74">West Bengal</option>
                                        <option value="744">Andaman and Nicobar Islands</option>
                                        <option value="160">Chandigarh</option>
                                        <option value="396">Dadra and Nagar Haveli</option>
                                        <option value="396">Daman & Diu</option>
                                        <option value="18">Jammu & Kashmir</option>
                                        <option value="30">Ladakh</option>
                                        <option value="682">Lakshadweep</option>
                                        <option value="609">Puducherry</option>
                        </select><br>
                     </div>
                     <div class="col-md-8">
                                                 <button type="submit" class="btn btn-warning">ON / OFF</button> 
                                                 </div>
                     </div>   
                         <!---<form>
                                  <div class="row p-2">
                                <div class="col-md-3">
                                 
                                      <select data-placeholder="India" class="standardSelect" tabindex="5">
                                          
                                        <option value="default" label="Choose an State"></option>
                                        <option value="41">Maharashtra</option>
                                        <option value="403">Goa</option>
                                        <option value="11">Delhi</option>
                                        <option value="56">Karnataka</option>
                                        <option value="36">Gujarat</option>
                                        <option value="34">Rajasthan</option>
                                        <option value="50">Andhra Pradesh</option>
                                        <option value="79">Arunachal Pradesh</option>
                                        <option value="78">Assam</option>
                                        <option value="80">Bihar</option>
                                        <option value="49">Chhattisgarh</option>
                                        <option value="12">Haryana</option>
                                        <option value="17">Himachal Pradesh</option>
                                        <option value="83">Jharkhand</option>
                                        <option value="67">Kerala</option>
                                        <option value="45">Madhya Pradesh</option>
                                        <option value="11">Manipur</option>
                                        <option value="12">Meghalaya</option>
                                        <option value="79">Mizoram</option>
                                        <option value="79">Nagaland</option>
                                        <option value="77">Odisha</option>
                                        <option value="16">Punjab</option>
                                        <option value="737">Sikkim</option>
                                        <option value="64">Tamil Nadu</option>
                                        <option value="53">Telangana</option>
                                        <option value="79">Tripura</option>
                                        <option value="24">Uttarakhand</option>
                                        <option value="28">Uttar Pradesh</option>
                                        <option value="74">West Bengal</option>
                                        <option value="744">Andaman and Nicobar Islands</option>
                                        <option value="160">Chandigarh</option>
                                        <option value="396">Dadra and Nagar Haveli</option>
                                        <option value="396">Daman & Diu</option>
                                        <option value="18">Jammu & Kashmir</option>
                                        <option value="30">Ladakh</option>
                                        <option value="682">Lakshadweep</option>
                                        <option value="609">Puducherry</option>
                                       
                                    </select>
                           </div>  
                         <strong>Choose An State</strong>
                      </div>
                      
                    </form>--->
            
                              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                  <div class="row p-2">
                                <div class="col-md-3">
                                 
                                      <select data-placeholder="Source" class="standardSelect" tabindex="5" name="pin">
                                          
                                        <option value="default" label="Source"></option>
                                        <option value="41">Ahmednagar</option>
                                        <option value="403">Aurangabad</option>
                                        <option value="11">Pune</option>
                                        <option value="56">Mumbai</option>
                                        <option value="36">Solapur</option>
                                        <option value="34">Kolhapur</option>
                                        <option value="50">Latur</option>
                                        <option value="79">Nashik</option>
                                        <option value="78">Nagpur</option>
                                        <option value="80">Buldhana</option>
                                        <!---<option value="49">Chhattisgarh</option>
                                        <option value="12">Haryana</option>
                                        <option value="17">Himachal Pradesh</option>
                                        <option value="83">Jharkhand</option>
                                        <option value="67">Kerala</option>
                                        <option value="45">Madhya Pradesh</option>
                                        <option value="11">Manipur</option>
                                        <option value="12">Meghalaya</option>
                                        <option value="79">Mizoram</option>
                                        <option value="79">Nagaland</option>
                                        <option value="77">Odisha</option>
                                        <option value="16">Punjab</option>
                                        <option value="737">Sikkim</option>
                                        <option value="64">Tamil Nadu</option>
                                        <option value="53">Telangana</option>
                                        <option value="79">Tripura</option>
                                        <option value="24">Uttarakhand</option>
                                        <option value="28">Uttar Pradesh</option>
                                        <option value="74">West Bengal</option>
                                        <option value="744">Andaman and Nicobar Islands</option>
                                        <option value="160">Chandigarh</option>
                                        <option value="396">Dadra and Nagar Haveli</option>
                                        <option value="396">Daman & Diu</option>
                                        <option value="18">Jammu & Kashmir</option>
                                        <option value="30">Ladakh</option>
                                        <option value="682">Lakshadweep</option>
                                        <option value="609">Puducherry</option>--->
                                       
                                    </select>
                           </div>  
                           
                           <div class="col-md-3">
                                    <select data-placeholder="Destination" class="standardSelect" tabindex="5" name="pin">
                                          
                                        <option value="default" label="Destination"></option>
                                        <option value="41">Ahmednagar</option>
                                        <option value="403">Aurangabad</option>
                                        <option value="11">Pune</option>
                                        <option value="56">Mumbai</option>
                                        <option value="36">Solapur</option>
                                        <option value="34">Kolhapur</option>
                                        <option value="50">Latur</option>
                                        <option value="79">Nashik</option>
                                        <option value="78">Nagpur</option>
                                        <option value="80">Buldhana</option>
                                        <!---<option value="49">Chhattisgarh</option>
                                        <option value="12">Haryana</option>
                                        <option value="17">Himachal Pradesh</option>
                                        <option value="83">Jharkhand</option>
                                        <option value="67">Kerala</option>
                                        <option value="45">Madhya Pradesh</option>
                                        <option value="11">Manipur</option>
                                        <option value="12">Meghalaya</option>
                                        <option value="79">Mizoram</option>
                                        <option value="79">Nagaland</option>
                                        <option value="77">Odisha</option>
                                        <option value="16">Punjab</option>
                                        <option value="737">Sikkim</option>
                                        <option value="64">Tamil Nadu</option>
                                        <option value="53">Telangana</option>
                                        <option value="79">Tripura</option>
                                        <option value="24">Uttarakhand</option>
                                        <option value="28">Uttar Pradesh</option>
                                        <option value="74">West Bengal</option>
                                        <option value="744">Andaman and Nicobar Islands</option>
                                        <option value="160">Chandigarh</option>
                                        <option value="396">Dadra and Nagar Haveli</option>
                                        <option value="396">Daman & Diu</option>
                                        <option value="18">Jammu & Kashmir</option>
                                        <option value="30">Ladakh</option>
                                        <option value="682">Lakshadweep</option>
                                        <option value="609">Puducherry</option>--->
                                       
                                    </select>
                           </div>
                               
 
                        <div class="col-md-5">
                         <button type="submit" name="search" class="btn btn-info">Search</button>
                         </div>
                        
                    
                      </div>
                      
                    </form>
                      <?php
                                  
                                    /*if(isset($_POST['search'])) 
                                    { 
                                        include 'config.php';
                                        $pin = $_POST['pin'];
                                       $pic = mysqli_query($link,"SELECT * FROM `oneway` WHERE pin = '$pin'");
                                       while($row = mysqli_fetch_array($pic)){
                                           
                                        $hatchback = $row['hatchback']; 
                                          $sedan = $row['sedan'];
                                          $suv = $row['suv']; 
                                          $suv1 = $row['suv+']; 
                                          $state = $row['state'];
                                        
                                       }
                                       
                                          $pic = mysqli_query($link,"SELECT * FROM `round` WHERE pin = '$pin'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hatchback1 = $row['hatchback']; 
                                          $sedan1 = $row['sedan'];
                                          $suv11 = $row['suv']; 
                                          $suv12 = $row['suv+']; 
                                        
                                       }
                                        $pic = mysqli_query($link,"SELECT * FROM `rental` WHERE pin = '$pin' and hours = '2'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hatchback22 = $row['hatchback']; 
                                          $sedan24 = $row['sedan'];
                                          $suv26 = $row['suv']; 
                                          $suv28 = $row['suv+']; 
                                       
                                       }
                                       $pic = mysqli_query($link,"SELECT * FROM `rental` WHERE pin = '$pin' and hours = '4'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hatchback32 = $row['hatchback']; 
                                          $sedan34 = $row['sedan'];
                                          $suv36 = $row['suv']; 
                                          $suv38 = $row['suv+']; 
                                      
                                              
                                        }$pic = mysqli_query($link,"SELECT * FROM `rental` WHERE pin = '$pin' and hours = '6'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hatchback42 = $row['hatchback']; 
                                          $sedan44 = $row['sedan'];
                                          $suv46 = $row['suv']; 
                                          $suv48 = $row['suv+']; 
                                    
                                       }
                                       $pic = mysqli_query($link,"SELECT * FROM `rental` WHERE pin = '$pin' and hours = '8'");
                                          while($row = mysqli_fetch_array($pic)){
                                          $hatchback52 = $row['hatchback']; 
                                          $sedan54 = $row['sedan'];
                                          $suv56 = $row['suv']; 
                                          $suv58 = $row['suv+']; 
                                         
                                       }
                                       
                                    }
                                       if(isset($_POST['oneway'])) 
                                    { 
                                         include 'config.php';
                                            $hatchback = $_POST['one-hatchback'];
                                            $sedan = $_POST['one-sedan'];
                                            $suv = $_POST['one-suv'];
                                            $suv1 = $_POST['one-suv+'];
                                            $state = $_POST['state'];
                                
                                            $sql = "UPDATE `oneway` SET `hatchback` = '$hatchback', `sedan` = '$sedan', `suv` = '$suv', `suv+` = '$suv1' WHERE state = '$state'";
                                        
                                            if ($link->query($sql) != TRUE) {
                                               echo "Error: " . $sql . "<br>" . $link->error;
                                               }
                                    }
                                      if(isset($_POST['round'])) 
                                    { 
                                         include 'config.php';
                                           $hatchback1 = $_POST['round-hatchback'];
                                            $sedan1 = $_POST['round-sedan'];
                                            $suv11 = $_POST['round-suv'];
                                            $suv12 = $_POST['round-suv+'];
                                            $state = $_POST['state'];
                                            
                                            $sql = "UPDATE `round` SET `hatchback` = '$hatchback1', `sedan` = '$sedan1', `suv` = '$suv11', `suv+` = '$suv12' WHERE state = '$state'";
                                            if ($link->query($sql) != TRUE) {
                                               echo "Error: " . $sql . "<br>" . $link->error;
                                               }
                                    }
                                    
                                    if(isset($_POST['rental'])) 
                                    { 
                                             include 'config.php';
                                            $hatchback22 = $_POST['rental-hatchback1'];
                                            $sedan24 = $_POST['rental-sedan1'];
                                            $suv26 = $_POST['rental-suv1'];
                                            $suv28 = $_POST['rental-suv11'];
                                            $hatchback32 = $_POST['rental-hatchback2'];
                                            $sedan34 = $_POST['rental-sedan2'];
                                            $suv36 = $_POST['rental-suv2'];
                                            $suv38 = $_POST['rental-suv22'];
                                            $hatchback42 = $_POST['rental-hatchback3'];
                                            $sedan44 = $_POST['rental-sedan3'];
                                            $suv46 = $_POST['rental-suv3'];
                                            $suv48 = $_POST['rental-suv33'];
                                            $hatchback52 = $_POST['rental-hatchback4'];
                                            $sedan54 = $_POST['rental-sedan4'];
                                            $suv56 = $_POST['rental-suv4'];
                                            $suv58 = $_POST['rental-suv44'];
                                            $state = $_POST['state'];
                          
                                           $sql = "UPDATE `rental` SET `hatchback` = '$hatchback22', `sedan` = '$sedan24', `suv` = '$suv26', `suv+` = '$suv28' WHERE state = '$state' and hours = '2'";
                                          $sql1 = "UPDATE `rental` SET `hatchback` = '$hatchback32', `sedan` = '$sedan34', `suv` = '$suv36', `suv+` = '$suv38' WHERE state = '$state' and hours = '4'";
                                          $sql2 = "UPDATE `rental` SET `hatchback` = '$hatchback42', `sedan` = '$sedan44', `suv` = '$suv46', `suv+` = '$suv48' WHERE state = '$state' and hours = '6'";
                                          $sql3 = "UPDATE `rental` SET `hatchback` = '$hatchback52', `sedan` = '$sedan54', `suv` = '$suv56', `suv+` = '$suv58' WHERE state = '$state' and hours = '8'";
                                         
                                              if ($link->query($sql) != TRUE || $link->query($sql1) != TRUE || $link->query($sql2) != TRUE || $link->query($sql3) != TRUE ) {
                                               echo "Error: " . $sql . "<br>" . $link->error;
                                               }
                                    }*/
                                    ?>
                                     <br>
                        <!--<div class="col-md-12">
                        <div class="text-info text-center"><strong style="font-size:40px;"><? echo $state; ?></strong></div>
                         </div>-->
                    <br>
                            
                        <div class="card">  
                            <div class="card-body card-block">
                                  
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label  class=" form-control-label"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRIP / CAR TYPE</strong></label>
                                            </div>
                                          
                                            <div class="col-md-9">
                                                <div class="row">
                                            
                                                <div class="col-sm-3">
                                                    
                                                 <div class="text-center"><strong>HATCHBACK</strong></div>
                                              
                                                </div>
                                                
                                                 <div class="col-sm-2">
                                                    
                                                <div class="text-center"><strong>SEDAN</strong></div>
                                              
                                                </div>
                                               &nbsp;&nbsp;
                                                 <div class="col-sm-2">
                                                    
                                                <div class="text-center"><strong>SUV</strong></div>
                                              
                                                </div>
                                               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                <div class="col-sm-2">
                                                  
                                               <div class="text-center"><strong>SUV+</strong></div>
                                               
                                                </div>
                                                 </div>
                                                </div>
                                            </div>
                                         <br>
                                 
                                    
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label  class=" form-control-label"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ONE WAY TRIP</strong></label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-sm-2">
                                                    
                                                <input type="number" id="one-hatchback" name="one-hatchback"  class="form-control" min="1" value="<? echo $hatchback; ?>" ><br>
                                              
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2">
                                                    
                                                <input type="number" id="one-sedan" name="one-sedan"  class="form-control" min="1" value="<?php echo $sedan;  ?>"><br>
                                              
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2">
                                                    
                                                <input type="number" id="one-suv" name="one-suv"  class="form-control" min="1" value="<?php echo $suv; ?>"><br>
                                              
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-sm-2">
                                                  
                                                <input type="number" id="one-suv+" name="one-suv+"  class="form-control" min="1" value="<?php echo $suv1; ?>">
                                               <input type="hidden" id="state" name="state"  class="form-control" value="<?php echo $state; ?>">
                                                </div>
                                                <div class="col-sm-2">
                                                 <button type="submit" name="oneway" class="btn btn-info">Update</button> 
                                                 </div>
                                              </div>
                                              
                                                </div>
                                            </div>
                                            
                                        </form>
                                        
                                         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                    <div class="row">
                                          <div class="col-md-3">
                                            <label class=" form-control-label"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROUND TRIP</strong></label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                
                                                <div class="col-sm-2">
                                                <input type="number" id="round-hatchback" name="round-hatchback" min="1" class="form-control" value="<? echo $hatchback1; ?>"><br>
                                              </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2">
                                                <input type="number" id="round-sedan" name="round-sedan" min="1" class="form-control" value="<?php echo $sedan1;  ?>"><br>
                                               </div>
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2">
                                                <input type="number" id="round-suv" name="round-suv" min="1" class="form-control" value="<?php echo $suv11; ?>"><br>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-sm-2">
                                                  
                                                <input type="number" id="round-suv+" name="round-suv+" min="1" class="form-control" value="<?php echo $suv12; ?>">
                                                <input type="hidden" id="state" name="state"  class="form-control" value="<?php echo $state; ?>">
                                              
                                                </div>
                                                   <div class="col-sm-2">
                                                 <button type="submit" name="round" class="btn btn-info">Update</button> 
                                                 </div>
                                                </div>
                                        </div>
                                        </div>
                                     
                                        </form>
                                        <br>
                                        
                                         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                             
                                    <div class="row">
                                          <div class="col-md-3">
                                            <label class=" form-control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RENTAL TRIP</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                
                                                <div class="col-sm-2"><strong>&nbsp;2 Hours</strong>
                                                <input type="number" id="rental-hatchback" name="rental-hatchback1" min="1" class="form-control" value="<? echo $hatchback22; ?>"><br>
                                              </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;2 Hours</strong>
                                                <input type="number" id="rental-sedan" name="rental-sedan1" min="1" class="form-control" value="<?php echo $sedan24;  ?>"><br>
                                               </div>
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;2 Hours</strong>
                                                <input type="number" id="rental-suv" name="rental-suv1" min="1" class="form-control" value="<?php echo $suv26; ?>"><br>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-sm-2"><strong>&nbsp;2 Hours</strong>
                                                  
                                                <input type="number" id="rental-suv+" name="rental-suv11" min="1" class="form-control" value="<?php echo $suv28; ?>">
                                                
                                                </div>
                                                    </div>
                                                  
                                                </div>
                                        </div>
                                     
                                     <div class="row">
                                          <div class="col-md-3">
                                            <label class=" form-control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                
                                                <div class="col-sm-2"><strong>&nbsp;4 Hours</strong>
                                                <input type="number" id="rental-hatchback" name="rental-hatchback2" min="1" class="form-control" value="<? echo $hatchback32; ?>"><br>
                                              </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;4 Hours</strong>
                                                <input type="number" id="rental-sedan" name="rental-sedan2" min="1" class="form-control" value="<?php echo $sedan34;  ?>"><br>
                                               </div>
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;4 Hours</strong>
                                                <input type="number" id="rental-suv" name="rental-suv2" min="1" class="form-control" value="<?php echo $suv36; ?>"><br>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-sm-2"><strong>&nbsp;4 Hours</strong>
                                                  
                                                <input type="number" id="rental-suv+" name="rental-suv22" min="1" class="form-control" value="<?php echo $suv38; ?>">
                                                
                                              
                                                </div>
                                                    </div>
                                                   
                                                </div>
                                        </div>
                                        
                                        <div class="row">
                                          <div class="col-md-3">
                                            <label class=" form-control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                
                                                <div class="col-sm-2"><strong>&nbsp;6 Hours</strong>
                                                <input type="number" id="rental-hatchback" name="rental-hatchback3" min="1" class="form-control" value="<? echo $hatchback42; ?>"><br>
                                              </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;6 Hours</strong>
                                                <input type="number" id="rental-sedan" name="rental-sedan3" min="1" class="form-control" value="<?php echo $sedan44;  ?>"><br>
                                               </div>
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;6 Hours</strong>
                                                <input type="number" id="rental-suv" name="rental-suv3" min="1" class="form-control" value="<?php echo $suv46; ?>"><br>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-sm-2"><strong>&nbsp;6 Hours</strong>
                                                  
                                                <input type="number" id="rental-suv+" name="rental-suv33" min="1" class="form-control" value="<?php echo $suv48; ?>">
                                        
                                              
                                                </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <div class="row">
                                          <div class="col-md-3">
                                            <label class=" form-control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                           
                                                <div class="col-sm-2"><strong>&nbsp;8 Hours</strong>
                                                <input type="number" id="rental-hatchback" name="rental-hatchback4" min="1" class="form-control" value="<? echo $hatchback52; ?>"><br>
                                              </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;8 Hours</strong>
                                                <input type="number" id="rental-sedan" name="rental-sedan4" min="1" class="form-control" value="<?php echo $sedan54;  ?>"><br>
                                               </div>
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <div class="col-sm-2"><strong>&nbsp;8 Hours</strong>
                                                <input type="number" id="rental-suv" name="rental-suv4" min="1" class="form-control" value="<?php echo $suv56; ?>"><br>
                                                </div>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="col-sm-2"><strong>&nbsp;8 Hours</strong>
                                                  
                                                <input type="number" id="rental-suv+" name="rental-suv44" min="1" class="form-control" value="<?php echo $suv58; ?>">
                                                <input type="hidden" id="state" name="state"  class="form-control" value="<?php echo $state; ?>">
                       
                                                </div>
                                                   <div class="col-sm-2">
                                                 <button type="submit" name="rental" class="btn btn-info">Update</button> 
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
      } );
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

