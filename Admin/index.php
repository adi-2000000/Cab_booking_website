<?php include "header.php";?>
<head>
<link rel="stylesheet" href="assets/css/style.css">
<style>
.button {
  background-color: #f1f1f1;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}
.button:hover .title {
  visibility: visible;
}
.button .title {
  top: -5px;
  left: 105%;
}
.button:hover {
  background-color: #ddd;
}
.order-table:before {
    background-color: red;
}
.order-table:after {
    background-color: red;
}
@media screen and (max-width: 768px) {
  .button {
    padding: 8px 16px;
    margin: 4px 0;
  }

  .button .title {
    display: none;
  }
}
 @media screen and (max-width: 768px) {
    .card-body-- {
      padding: 10px;
    }

    .table th,
    .table td {
      font-size: 12px;
      padding: 5px;
    }

    .badge {
      font-size: 12px;
      padding: 5px;
    }

    .name,
    .c_type,
    .t_type,
    .product,
    .drop,
    .amount,
    .offeramount,
    .partial,
    .paid,
    .remaining {
      font-size: 12px;
    }
  }
  @media screen and (max-width: 768px) {
    /* Adjust the styles for mobile view here */
    .navbar .navbar-nav li a {
        color: white; /* Set text color to white for mobile view */
    }

    .navbar .navbar-nav li.menu-item-has-children.show .sub-menu {
        background-color: #f10303;
    }

    .card-header:first-child {
        background-color: #f10303;
    }

    .card-title {
        color: white;
    }

    .text-dark {
        background-color: #f10303;
        color: white;
    }

    a, button {
        color: white;
    }
    
}
        

</style>


<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f5d5a539-ea49-4892-8ac0-370dea060029",
    });
  });
</script>

</head>
<body>
    
      <div class="date p-2" >
       <!-- <form action="">
          <label for="birthday">DATE :</label>
          <input type="date" id="day" name="day">
          <button input type="submit" value="Submit">Go</button>
       </form> -->
      </div>         
                   
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                     <?php  
                                      include 'config.php';
                                       $op = mysqli_query($link,"SELECT SUM(amount) AS onlineprice FROM user_booking WHERE status = '2'");
                                      // while($oprow = mysqli_fetch_array($op)){
                                      // $onlinePrices = $oprow['COUNT(amount)'];
                                      // }
                                      $oprow = mysqli_fetch_assoc($op);
                                      $onlinePrices = $oprow['onlineprice'];
                                      
                                       $cp = mysqli_query($link,"SELECT SUM(amount) AS customprice FROM custom_booking WHERE status = '2'");
                                       // while($cprow = mysqli_fetch_array($cp)){
                                       //$customPrices = $cprow['COUNT(amount)'];
                                      // }
                                      $cprow = mysqli_fetch_assoc($cp);
                                      $customPrices = $cprow['customprice'];
                                       
                                        $totalPrices = $onlinePrices + $customPrices;
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><i class="menu-icon fa fa-inr"></i> <span class="count"><?php echo $totalPrices ?></span> /-</div>
                                            <div class="stat-heading"><strong>Business</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                     <?php  
                                      include 'config.php';
                                       $pic = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `user_booking`");
                                       while($row = mysqli_fetch_array($pic)){
                                          $onlineTrip =  $row['COUNT(user_trip_type)'];
                                       }
                                       $pict = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `custom_booking`");
                                       while($rowt = mysqli_fetch_array($pict)){
                                          $customTrip =  $rowt['COUNT(user_trip_type)'];
                                       }
                                       
                                       $totaltrips = $onlineTrip + $customTrip;
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totaltrips ?></span></div>
                                            <div class="stat-heading"><strong>All Trips</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="card">
                           <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                      <?php  
                                      include 'config.php';
                                       $pendingon = mysqli_query($link,"SELECT COUNT(*) FROM `user_booking` WHERE status='0'");
                                       while($ptrow = mysqli_fetch_array($pendingon)){
                                            $onlinePending =  $ptrow['COUNT(*)'];
                                       }
                                       $pendingctm = mysqli_query($link,"SELECT COUNT(*) FROM `custom_booking` WHERE status='0'");
                                       while($ptrow1 = mysqli_fetch_array($pendingctm)){
                                            $customPending =  $ptrow1['COUNT(*)'];
                                       }
                                       
                                       $totalpending = $onlinePending + $customPending;
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalpending ?></span></div>
                                            <div class="stat-heading"><strong>All Pending Trips</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div> -->

                    <!-- <div class="col-lg-3 col-md-6">
                         <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-6">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                      <?php  
                                      include 'config.php';
                                       $ongoing = mysqli_query($link,"SELECT COUNT(*) FROM `user_booking` WHERE status='1'");
                                       while($rowon = mysqli_fetch_array($ongoing)){
                                          $onlineOngoing =  $rowon['COUNT(*)'];
                                       }
                                       $ongoing1 = mysqli_query($link,"SELECT COUNT(*) FROM `custom_booking` WHERE status='1'");
                                       while($rowpen = mysqli_fetch_array($ongoing1)){
                                          $customPending =  $rowpen['COUNT(*)'];
                                       }
                                        $totalOngoing = $onlineOngoing + $customPending;
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalOngoing ?></span></div>
                                            <div class="stat-heading"><strong>All OnGoing Trips</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div> -->
                     <!-- <div class="col-lg-3 col-md-6">
                         <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-9">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                      <?php  
                                      include 'config.php';
                                       $completed = mysqli_query($link,"SELECT COUNT(*) FROM `user_booking` WHERE status='2'");
                                       while($rowcmpt = mysqli_fetch_array($completed)){
                                           $onlineComplete = $rowcmpt['COUNT(*)'];
                                       }
                                       $completed1 = mysqli_query($link,"SELECT COUNT(*) FROM `custom_booking` WHERE status='2'");
                                       while($rowcmpt1 = mysqli_fetch_array($completed1)){
                                           $customComplete = $rowcmpt1['COUNT(*)'];
                                       }
                                       
                                         $totalComplete = $onlineComplete + $customComplete;
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalComplete ?></span></div>
                                            <div class="stat-heading"><strong>All Completed Trips</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                      <?php  
                                      include 'config.php';
                                       $cancelled = mysqli_query($link,"SELECT COUNT(*) FROM `user_booking` WHERE status='3'");
                                       while($rowc = mysqli_fetch_array($cancelled)){
                                          $onlineCancelled =  $rowc['COUNT(*)'];
                                       }
                                       $cancelled1 = mysqli_query($link,"SELECT COUNT(*) FROM `custom_booking` WHERE status='3'");
                                       while($rowc1 = mysqli_fetch_array($cancelled1)){
                                          $customCancelled =  $rowc1['COUNT(*)'];
                                       }
                                       
                                        $totalCancelled = $onlineCancelled + $customCancelled;
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalCancelled ?></span></div>
                                            <div class="stat-heading"><strong>All Cancelled Trips</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                         <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-9">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <?php  
                                      include 'config.php';
                                       $vendors = mysqli_query($link,"SELECT COUNT(*) FROM `vendor_details`");
                                       while($rowvc = mysqli_fetch_array($vendors)){
                                          $vendorCount =  $rowvc['COUNT(*)'];
                                       }
                                       ?>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $vendorCount ?></span></div>
                                            <div class="stat-heading"><strong>Vendors</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                         <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                     <?php  
                                    //  include 'config.php';
                                       //$b2b = mysqli_query($link,"SELECT COUNT(*) FROM `b2b_details`");
                                     //  while($rowvc = mysqli_fetch_array($b2b)){
                                      //    $b2bCount =  $rowvc['COUNT(*)'];
                                      // }
                                      // ?> 
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $b2bCount ?></span></div>
                                            <div class="stat-heading"><strong>B 2 B</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div> -->
                <!-- <div class="bt" style="margin-top:-30px">
                  <button class="button"  onclick="myFunction()"><img  alt="dropdown toggle" data-toggle="tooltip" data-placement="right" title="Show Trips" src="images/d.png" height="30px" width="30px"></img></button>
                    </div>
                     <div id="myDIV" style="display:none">
                        <div class="row"> 
                              <div class="col-lg-3 col-md-6">
                                  <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">One Way</div>
                                                          <?php  
                                                      include 'config.php';
                                                       $onwway = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `user_booking` WHERE user_trip_type='One Way'");
                                                       while($rowone = mysqli_fetch_array($onwway)){
                                                           $onlineOneway = $rowone['COUNT(user_trip_type)'];
                                                       }
                                                       $onwway1 = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `custom_booking` WHERE user_trip_type='One Way'");
                                                       while($rowone1 = mysqli_fetch_array($onwway1)){
                                                           $customOneway = $rowone1['COUNT(user_trip_type)'];
                                                       }
                                                       
                                                       $totalOneway = $onlineOneway + $customOneway;
                                                       ?>
                                                        <div class="stat-digit"><?php echo $totalOneway?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                                <div class="col-lg-3 col-md-6">
                                       <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-primary border-primary"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Round Trip</div>
                                                         <?php  
                                                      include 'config.php';
                                                       $round = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `user_booking` WHERE user_trip_type='Round'");
                                                       while($rowround = mysqli_fetch_array($round)){
                                                          $onlineRound = $rowround['COUNT(user_trip_type)'];
                                                           }
                                                           $round1 = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `custom_booking` WHERE user_trip_type='Round'");
                                                            while($rowround1 = mysqli_fetch_array($round1)){
                                                          $customRound = $rowround1['COUNT(user_trip_type)'];
                                                           }
                                                            $totalRound = $onlineRound + $customRound;
                                                       ?>
                                                        <div class="stat-digit"><?php echo $totalRound ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-danger border-danger"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Rental</div>
                                                         <?php  
                                                      include 'config.php';
                                                       $rental = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `user_booking` WHERE user_trip_type='Rental'");
                                                       while($rowrental = mysqli_fetch_array($rental)){
                                                           $onlineRental = $rowrental['COUNT(user_trip_type)'];
                                                       }
                                                       $rental1 = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `custom_booking` WHERE user_trip_type='Rental'");
                                                       while($rowrental1 = mysqli_fetch_array($rental1)){
                                                           $customRental = $rowrental1['COUNT(user_trip_type)'];
                                                       }
                                                       
                                                       $totalRental = $onlineRental + $customRental;
                                                       ?>
                                                        <div class="stat-digit"><?php echo $totalRental ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="card">
                                            <div class="card-body">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-success border-success"></i></div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Outstation</div>
                                                         <?php  
                                                      include 'config.php';
                                                       $pic = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM `user_booking` WHERE user_trip_type='One Station'");
                                                       while($row = mysqli_fetch_array($pic)){
                                                       ?>
                                                        <div class="stat-digit"><?php echo $row['COUNT(user_trip_type)'] ?></div>
                                                         <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                 </div> 
                           </div> -->
                        <div class="clearfix"></div>
                              <div class="orders">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="box-title">RECENTLY BOOKINGS&nbsp;&nbsp;&nbsp; <a href="all-bookings.php"><spane style="background-color: #0070ffa8; color:white;">&nbsp;VIEW All&nbsp;>></spane></a></h4>
                                                </div>
                                                <div class="card-body--">
                                                    <div class="table-stats order-table ov-h">
                                                        <table class="table" >
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #f10303;color:white">Booking ID</th>
                                                                    <th style="background-color: #f10303;color:white">Name</th>
                                                                    <th style="background-color: #f10303;color:white">DateTime</th>
                                                                    <th style="background-color: #f10303;color:white">Trip Type</th>
                                                                    <th style="background-color: #f10303;color:white">Pickup</th>
                                                                    <th style="background-color: #f10303;color:white">Drop</th>
                                                                    <th style="background-color: #f10303;color:white">Base Amount</th>
                                                                    <th style="background-color: #f10303;color:white">Offer Amount</th>
                                                                    <th style="background-color: #f10303;color:white">Partial</th>
                                                                    <th style="background-color: #f10303;color:white">Paid</th>
                                                                    <th style="background-color: #f10303;color:white">Remaining</th>
                                                                    <th style="background-color: #f10303;color:white">Status</th>
                                                                    <th style="background-color: #f10303;color:white">View</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php  
                                                      include 'config.php';
                                                       $pic = mysqli_query($link,"SELECT * FROM `user_booking` ORDER BY `id` DESC limit 5");
                                                       while($row = mysqli_fetch_array($pic)){
                                                           
                                                           $trip = $row['user_trip_type'];
                                                           
                                                            if ($trip == "One Way"){
                                                                  $partialAmt = $row['offerpartial'];
                                                               }elseif($trip == "Round"){
                                                                   $partialAmt = $row['offerpartial'];
                                                               }elseif($trip == "Rental"){
                                                                   $partialAmt =  $row['partial'];
                                                               }
  
                                                       ?>
                                                       
                                                                    <td> <?php echo $row['bookid']; ?> </td>
                                                                    <td>  <span class="name"><?php echo $row['name']; ?></span> </td>
                                                                    <td>  <span class="c_type"><?php echo $row['date']; ?><br><?php echo $row['time']; ?></span> </td>
                                                                    <td>  <span class="t_type"><?php echo $row['user_trip_type']; ?></span> </td>
                                                                    <td> <span class="product"><?php echo $row['user_pickup']; ?></span> </td>
                                                                    <td><span class="drop"><?php echo $row['user_drop']; ?></span></td>
                                                                    <td><span class="amount"><?php echo $row['amount']; ?></span></td>
                                                                    <td><span class="offeramount"><?php echo $row['offeramount']; ?></span></td>
                                                                    <td><span class="partial"><?php echo $partialAmt; ?></span></td>
                                                                    <td><span class="paid"><?php echo $row['paid']; ?></span></td>
                                                                    <td><span class="remaining"><?php echo $row['remaining']; ?></span></td>
                                                                    <td>
                                                                        <?php if ($row['status'] == "0"){ echo '<span class="badge badge-warning">Pending</span>'; }
                                                                              if ($row['status'] == "1"){ echo '<span class="badge badge-info">OnGoing</span>'; }
                                                                              if ($row['status'] == "2"){ echo '<span class="badge badge-complete">Completed</span>'; }
                                                                              if ($row['status'] == "3"){ echo '<span class="badge badge-danger">Cancelled</span>'; }
                                                                        ?>
                                                                        
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
                                        
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="box-title">UPCOMING TRIPS</h4>
                                                </div>
                                                <div class="card-body--">
                                                    <div class="table-stats order-table ov-h">
                                                        <table class="table ">
                                                            <thead>
                                                                <tr>
                                                                <th style="background-color: #f10303;color:white">Booking ID</th>
                                                                    <th style="background-color: #f10303;color:white">Name</th>
                                                                    <th style="background-color: #f10303;color:white">DateTime</th>
                                                                    <th style="background-color: #f10303;color:white">Trip Type</th>
                                                                    <th style="background-color: #f10303;color:white">Pickup</th>
                                                                    <th style="background-color: #f10303;color:white">Drop</th>
                                                                    <th style="background-color: #f10303;color:white">Base Amount</th>
                                                                    <th style="background-color: #f10303;color:white">Offer Amount</th>
                                                                    <th style="background-color: #f10303;color:white">Partial</th>
                                                                    <th style="background-color: #f10303;color:white">Paid</th>
                                                                    <th style="background-color: #f10303;color:white">Remaining</th>
                                                                    <th style="background-color: #f10303;color:white">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php  
                                                      include 'config.php';
                                                      
                                                      
                                                       /* Get Current Date and Time */
                                                     date_default_timezone_set('Asia/Calcutta'); 
                                                     $date = date("Y-m-d");
                                                     $time = date("g:i A");
                                                     
                                                    $timeAmPm = date("A");
                                                    $ampm = '11:59 '.$timeAmPm;
                                                       
                                                      /* Added 2hr from current time */
                                                     // Current date and time
                                                     $datetime = date("g:i a");
                                                     // Convert datetime to Unix timestamp
                                                     $timestamp = strtotime($datetime);
                                                     // Subtract time from datetime
                                                     $timeplus = $timestamp + (2 * 60 * 60);
                                                     // Date and time after subtraction
                                                     $datetime = date("g:i A", $timeplus);
                                                     //echo $datetime;
                                                     
                                                       $pic = mysqli_query($link,"SELECT * FROM `user_booking` WHERE (date BETWEEN '$date' AND '2030-01-30') ORDER BY `date` ASC limit 15");
                                                       while($row = mysqli_fetch_array($pic)){
                                                           
                                                           $trip = $row['user_trip_type'];
                                                           
                                                            if ($trip == "One Way"){
                                                                  $partialAmt = $row['offerpartial'];
                                                               }elseif($trip == "Round"){
                                                                   $partialAmt = $row['offerpartial'];
                                                               }elseif($trip == "Rental"){
                                                                   $partialAmt =  $row['partial'];
                                                               }
  
                                                       ?>
                                                                    <td> <?php echo $row['bookid']; ?> </td>
                                                                    <td>  <span class="name"><?php echo $row['name']; ?></span> </td>
                                                                    <td>  <span class="c_type"><?php echo $row['date']; ?><br><?php echo $row['time']; ?></span> </td>
                                                                    <td>  <span class="t_type"><?php echo $row['user_trip_type']; ?></span> </td>
                                                                    <td> <span class="product"><?php echo $row['user_pickup']; ?></span> </td>
                                                                    <td><span class="drop"><?php echo $row['user_drop']; ?></span></td>
                                                                    <td><span class="amount"><?php echo $row['amount']; ?></span></td>
                                                                    <td><span class="offeramount"><?php echo $row['offeramount']; ?></span></td>
                                                                    <td><span class="partial"><?php echo $partialAmt; ?></span></td>
                                                                    <td><span class="paid"><?php echo $row['paid']; ?></span></td>
                                                                    <td><span class="remaining"><?php echo $row['remaining']; ?></span></td>
                                                                    <td>
                                                                        <?php if ($row['status'] == "0"){ echo '<span class="badge badge-warning">Pending</span>'; }
                                                                              if ($row['status'] == "1"){ echo '<span class="badge badge-info">OnGoing</span>'; }
                                                                              if ($row['status'] == "2"){ echo '<span class="badge badge-complete">Completed</span>'; }
                                                                              if ($row['status'] == "3"){ echo '<span class="badge badge-danger">Cancelled</span>'; }
                                                                        ?>
                                                                        
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
                                        
                                        <!-- <div class="container col-lg-12">
                                                     Traffic  
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="box-title">Rates</h4>
                                                                </div>
                                                           <div class="row">
                                                                       <div class="col-lg-8">
                                                                        <div class="card-body">
                                                                      <canvas id="TrafficChart"></canvas>  
                                                                        <div id="traffic-chart" class="traffic-chart"></div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-lg-12">
                                                                         
                                                                        <div class="card-body">
                                                                           <?php  
                                                                          include 'config.php';
                                                                         $pic = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM user_booking");
                                                                         while($row = mysqli_fetch_array($pic)){
                                                                             $b = $row['COUNT(user_trip_type)'];
                                                                           ?>
                                                                           
                                                                            <div class="progress-box progress-1">
                                                                                 <?php  
                                                                          include 'config.php';
                                                                         $pic = mysqli_query($link,"SELECT COUNT(*) FROM user_booking WHERE user_trip_type='One Way'");
                                                                         while($row = mysqli_fetch_array($pic)){
                                                                           ?>
                                                                                <h4 class="por-title">One Way</h4>
                                                                                <div class="por-txt"><?php echo $a = $row['COUNT(*)'];?> Trips (<?php $c = ($a * 100) / $b; echo $d = round($c) ;?>%)</div>
                                                                                <div class="progress mb-2" style="height: 5px;">
                                                                                    <div class="progress-bar bg-flat-color-1" role="progressbar" style="width:<?php echo $d?>%;" aria-valuenow="<?php echo $d;?>%" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                                   <?php
                                                                           }
                                                                          ?>
                                                                            </div>
                                                                            <div class="progress-box progress-2">
                                                                                 <?php  
                                                                          include 'config.php';
                                                                         $pic = mysqli_query($link,"SELECT COUNT(*) FROM user_booking WHERE user_trip_type='Round'");
                                                                         while($row = mysqli_fetch_array($pic)){
                                                                           ?>
                                                                                <h4 class="por-title">Round</h4>
                                                                                <div class="por-txt"><?php echo $a = $row['COUNT(*)'];?> Trips (<?php $c = ($a * 100) / $b; echo $d = round($c) ;?>%)</div>
                                                                                <div class="progress mb-2" style="height: 5px;">
                                                                                    <div class="progress-bar bg-flat-color-2" role="progressbar" style="width:<?php echo $d?>%" aria-valuenow="<?php echo $d;?>%" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                                 <?php
                                                                           }
                                                                          ?>
                                                                            </div>
                                                                            <div class="progress-box progress-2">
                                                                                 <?php  
                                                                          include 'config.php';
                                                                         $pic = mysqli_query($link,"SELECT COUNT(*) FROM user_booking WHERE user_trip_type='Rental'");
                                                                         while($row = mysqli_fetch_array($pic)){
                                                                           ?>
                                                                                <h4 class="por-title">Rental</h4>
                                                                                <div class="por-txt"><?php echo $a = $row['COUNT(*)'];?> Trips (<?php $c = ($a * 100) / $b; echo $d = round($c) ;?>%)</div>
                                                                                <div class="progress mb-2" style="height: 5px;">
                                                                                    <div class="progress-bar bg-flat-color-3" role="progressbar" style="width:<?php echo $d?>%" aria-valuenow="<?php echo $d;?>%" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                                 <?php
                                                                           }
                                                                          ?>
                                                                            </div>
                                                                           
                                                                            <?php
                                                                           }
                                                                          ?>
                                                                     /.card-body 
                                                                </div>
                                                            </div> 
                                                         <div class="col-lg-8">
                                                                                           <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card br-0">
                                                                <div class="card-body">
                                                                    <div class="chart-container ov-h">
                                                                        <div id="flotPie1" class="float-chart"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card bg-flat-color-3  ">
                                                                <div class="card-body">
                                                                    <h4 class="card-title m-0  white-color ">August 2022</h4>
                                                                </div>
                                                                 <div class="card-body">
                                                                     <div id="flotLine5" class="flot-line"></div>
                                                                 </div>
                                                            </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card ov-h">
                                                    <div class="card-body bg-flat-color-2">
                                                        <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                                                    </div>
                                                    <div id="cellPaiChart" class="float-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                                                </div> 
                                                            <div class="card-body"></div>
                                                        </div>
                                                  </div>
                                            </div>
                                        </div>             
                              <div class="container col-md-11">
             
                                    </div>
                -->
           <!--
                                     <div class="col-sm-12 mb-4">
                                                    <div class="card-group">
                                                        <div class="card col-md-6 no-padding ">
                                                            <div class="card-body">
                                                                <div class="h1 text-muted text-right mb-4">
                                                                    <i class="fa fa-users"></i>
                                                                </div>
                                
                                                                <div class="h4 mb-0">
                                                                    <span class="count">87500</span>
                                                                </div>
                                
                                                                <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                                                                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="card col-md-6 no-padding ">
                                                            <div class="card-body">
                                                                <div class="h1 text-muted text-right mb-4">
                                                                    <i class="fa fa-user-plus"></i>
                                                                </div>
                                                                <div class="h4 mb-0">
                                                                    <span class="count">385</span>
                                                                </div>
                                                                <small class="text-muted text-uppercase font-weight-bold">Happy Clients</small>
                                                                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="card col-md-6 no-padding ">
                                                            <div class="card-body">
                                                                <div class="h1 text-muted text-right mb-4">
                                                                    <i class="fa fa-list"></i>
                                                                </div>
                                                                <div class="h4 mb-0">
                                                                    <span class="count">1238</span>
                                                                </div>
                                                                <small class="text-muted text-uppercase font-weight-bold">Old Bookings</small>
                                                                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="card col-md-6 no-padding ">
                                                            <div class="card-body">
                                                                <div class="h1 text-muted text-right mb-4">
                                                                    <i class="fa fa-pie-chart"></i>
                                                                </div>
                                                                <div class="h4 mb-0">
                                                                    <span class="count">28</span>%
                                                                </div>
                                                                <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                                                                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="card col-md-6 no-padding ">
                                                            <div class="card-body">
                                                                <div class="h1 text-muted text-right mb-4">
                                                                    <i class="fa fa-clock-o"></i>
                                                                </div>
                                                                <div class="h4 mb-0">5:34:11</div>
                                                                <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                                                                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="card col-md-6 no-padding ">
                                                            <div class="card-body">
                                                                <div class="h1 text-muted text-right mb-4">
                                                                    <i class="fa fa-comments-o"></i>
                                                                </div>
                                                                <div class="h4 mb-0">
                                                                    <span class="count">972</span>
                                                                </div>
                                                                <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                                                                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-6" style="width: 40%; height: 5px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        </div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display == "none") {
     
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
<script>
    // A $( document ).ready() block.
    $( document ).ready(function() {
    var x = document.getElementById("myDIV");
 
    x.style.display = "none";

});
</script>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                  series: [
                      <?php  
                                     include 'config.php';
                                     
                                     $june = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM user_booking WHERE user_trip_type='One Way' AND date BETWEEN '2022-06-01' AND '2022-06-31' ");
                                     $july = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM user_booking WHERE user_trip_type='One Way' AND date BETWEEN '2022-07-01' AND '2022-07-30' ");
                                 
                                     while($jun = mysqli_fetch_array($june) && $jul = mysqli_fetch_array($july)){
                                       ?>
                                            [0, 0, 0,  0, 0,<?php echo $jun['COUNT(user_trip_type)'];?>, <?php echo $jul['COUNT(user_trip_type)'];?> , 0, 0,  0,  0,  0],
                                               <?php
                                       }
                                      ?>
                         
                   
                     
                       <?php  
                                      include 'config.php';
                                     
                                     $june = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM user_booking WHERE user_trip_type='Round' AND date BETWEEN '2022-06-01' AND '2022-06-31' ");
                                     $july = mysqli_query($link,"SELECT COUNT(user_trip_type) FROM user_booking WHERE user_trip_type='Round' AND date BETWEEN '2022-07-01' AND '2022-07-30' ");
                                     
                                     while($jun = mysqli_fetch_array($june) && $jul = mysqli_fetch_array($july)){
                                       ?>
                                             [0, 0, 0,  0, 0,<?php echo $jun['COUNT(user_trip_type)'];?>,<?php echo $jul['COUNT(user_trip_type)'];?>, 0 , 0,  0,  0,  0],
                                             <?php
                                       }
                                      ?>
                                   <?php  
                                      include 'config.php';
                                     $june = mysqli_query($link,"SELECT COUNT(*) FROM user_booking WHERE user_trip_type='Rental'");
                                     $july = mysqli_query($link,"SELECT COUNT(*) FROM user_booking WHERE user_trip_type='Rental'");
                                     while($jun = mysqli_fetch_array($june) && $jul = mysqli_fetch_array($july)){
                                       ?>
                                             [0, 0, 0,  0,  0,  <?php echo $jun['COUNT(*)'];?>,<?php echo $jul['COUNT(*)'];?>, 0, 0,  0,  0,  0],
                                             <?php
                                       }
                                      ?>     
                     
               
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 100 * data.index,
                                dur: 100,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 0, 0, 0, 0, 0, 0 , 0, 0, 0, 0, 0, 0, 0]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 0, 0, 0, 0, 0, 0 , 0, 0, 0, 0, 0, 0, 0]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [0, 0, 0, 0, 0, 0, 0 , 0, 0, 0, 0, 0, 0, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
        });
    </script>
    


</body>
</html>

    <script type="text/javascript">
OneSignal.push(function() {
  /* These examples are all valid */
  var isPushSupported = OneSignal.isPushNotificationsSupported();
  if (isPushSupported) {
    // Push notifications are supported
    consol.log('supported');
     OneSignal.isPushNotificationsEnabled(function(isEnabled) {
    if (isEnabled){
      console.log("Push notifications are enabled!");
       OneSignal.getUserId(function(userId) {
    console.log("OneSignal User ID:", userId);
    // (Output) OneSignal User ID: 270a35cd-4dda-4b3f-b04e-41d7463a2316    
  });
    }
    else{
      console.log("Push notifications are not enabled yet."); 
      OneSignal.push(function() {
  OneSignal.showHttpPrompt();
});
    }
  });
  } else {
    // Push notifications are not supported\
    consol.log('Not supported');
  }
});

</script>

