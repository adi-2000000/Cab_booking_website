<?php include 'header.php';?>

<style>

.Timeline {
  display: flex;
  align-items: center;
  height: 500px;
}

.event1,
.event2, .event3 {
  position: relative;
}

.event1Bubble {
  position: absolute;
  background-color: rgba(158, 158, 158, 0.1);
  width: 139px;
  height: 60px;
  top: -70px;
  left: -15px;
  border-radius: 5px;
  box-shadow: inset 0 0 5px rgba(158, 158, 158, 0.64)
}

.event2Bubble {
  position: absolute;
  background-color: rgba(158, 158, 158, 0.1);
  width: 139px;
  height: 60px;
  left: -105px;
  top: 33px;
  border-radius: 5px;
  box-shadow: inset 0 0 5px rgba(158, 158, 158, 0.64)
}

.event1Bubble:after,
.event1Bubble:before,
.event2Bubble:after,
.event2Bubble:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-color: transparent;
  border-bottom: 0;
}

.event1Bubble:before {
  bottom: -10px;
  left: 13px;
  border-top-color: rgba(222, 222, 222, 0.66);
  border-width: 12px;
}

.event1Bubble:after {
  bottom: -8px;
  left: 13px;
  border-top-color: #F6F6F6;
  border-width: 12px;
}

.event2Bubble:before {
  bottom: 59px;
  left: 103px;
  border-top-color: rgba(222, 222, 222, 0.66);
  border-width: 12px;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.event2Bubble:after {
  bottom: 57px;
  left: 103px;
  border-top-color: #F6F6F6;
  border-width: 12px;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.eventTime {
  display: flex;
}

.DayDigit {
  font-size: 27px;
  font-family: "Arial Black", Gadget, sans-serif;
  margin-left: 10px;
  color: #4C4A4A;
}

.Day {
  font-size: 11px;
  margin-left: 5px;
  font-weight: bold;
  margin-top: 10px;
  font-family: Arial, Helvetica, sans-serif;
  color: #4C4A4A;
}

.MonthYear {
  font-weight: 600;
  line-height: 10px;
  color: #9E9E9E;
  font-size: 9px;
}

.eventTitle {
  font-family: "Arial Black", Gadget, sans-serif;
  color: #a71930;
  font-size: 11px;
  text-transform: uppercase;
  display: flex;
  flex: 1;
  align-items: center;
  margin-left: 12px;
  margin-top: -2px;
}

.time {
  position: absolute;
  font-family: Arial, Helvetica, sans-serif;
  width: 50px;
  font-size: 8px;
  margin-top: -3px;
  margin-left: -5px;
  color: #9E9E9E;
}

.eventAuthor {
  position: absolute;
  font-family: Arial, Helvetica, sans-serif;
  color: #9E9E9E;
  font-size: 8px;
  width: 100px;
  top: -8px;
  left: 63px;
}

.event2Author {
  position: absolute;
  font-family: Arial, Helvetica, sans-serif;
  color: #9E9E9E;
  font-size: 8px;
  width: 100px;
  top: 96px;
  left: -32px;
}

.time2{
  position: absolute;
  font-family: Arial, Helvetica, sans-serif;
  width: 50px;
  font-size: 8px;
  margin-top: -31px;
  margin-left: -5px;
  color: #9E9E9E;
}

.now{
     background-color: #004165;
    color: white;
    border-radius: 7px;
    margin: 5px;
    padding: 4px;
    font-size: 10px;
    font-family: Arial, Helvetica, sans-serif;
    border: 2px solid white;
    font-weight: bold;
    box-shadow: 0 0 0 2px #004165
}

.futureGray{
     filter: grayscale(1);
    -webkit-filter: grayscale(1);
  
}

.futureOpacity{
  -webkit-filter: opacity(.3);
  filter: opacity(.3);
  
}
    
</style>

<body>
    
    <div class="content">
            <div class="animated fadeIn">
              
                    <div class="col-md-12">
                        <div class="card">
                               <?php
                              include 'config.php';
                               $pic = mysqli_query($link,"SELECT * FROM `queries` WHERE phone='$_SESSION[phone]' and bookid='$_SESSION[bookid]' and created_at='$_SESSION[created_at]'");
                               while($row = mysqli_fetch_array($pic)){
                               ?> 
                           <div class="alert alert-success" role="alert"> 
                        <h3 class="text-center p-2"><strong>&nbsp; Status -</strong> <label class="text-success">&nbsp; <?php echo $row['query_status']?></label></h3> 
                        </div>
                            <div class="Timeline p-3 mr-2" style="margin-top:-8%">
                          
                        <?php if($row['select_car'] != ""){ ?>
                          <svg height="5" width="200">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">CAR SELECT PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['booking_details'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">BOOKING DETAILS PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['booking_details_round'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">ROUND BOOKING DETAILS PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['booking_details_rental'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">RENTAL BOOKING DETAILS PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['name_email'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">NAME AND EMAIL ENTER PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['fullpay'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">FULL PAYMENT PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['partialpay'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">PARTIAL PAYMENT PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['payment_success'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">PAYMENT SUCCESS PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['payment_failed'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">PAYMENT FAILED PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        <?php if($row['payment_success_partial'] != ""){ ?>
                          <svg height="5" width="150">
                          <line x1="0" y1="0" x2="200" y2="0" style="stroke:#004165;stroke-width:5" />
                          Sorry, your browser does not support inline SVG.
                        </svg>
                        
                          <div class="event1">
                            
                            <div class="event1Bubble">
                              <div class="eventTime">
                                <div class="DayDigit"></div>
                        
                              </div>
                              <div class="eventTitle" style="margin-top:15%;">PARTIAL PAYMENT PAGE</div>
                            </div>
                        
                            <svg height="15" width="15">
                               <circle cx="10" cy="11" r="5" fill="#004165" />
                             </svg>
                          </div>
                        <?php } ?>
                        
           
                        
                            <div class="now">
                            NOW
                          </div>  
                        
                        <svg height="5" width="50">
                        <line x1="0" y1="0" x2="50" y2="0" style="stroke:#004165;stroke-width:5" /> 
                        </svg>
                        <svg height="20" width="42">
                        <line x1="1" y1="0" x2="1" y2="20" style="stroke:#004165;stroke-width:2" /> 
                        <circle cx="11" cy="10" r="3" fill="#004165" />  
                        <circle cx="21" cy="10" r="3" fill="#004165" />  
                        <circle cx="31" cy="10" r="3" fill="#004165" />    
                        <line x1="41" y1="0" x2="41" y2="20" style="stroke:#004165;stroke-width:2" /> 
                        </svg>  
                          
                        </div>
                     <div class="container" style="margin-top:-8%">
                     <form action="updatequery.php" method="POST">
                            <input type="hidden" name="phone" value="<?php echo $row['phone'] ?>">
                                                    <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                                                    <input type="hidden" name="created_at" value="<?php echo $row['created_at'] ?>">
                          <div class="row form-inline">
                            
                                <div class="col-sm-3"><label for="status" class="form-control-label p-2"><strong class="card-title p-2"><i class="mr-2 menu-icon fa fa-exchange"></i>Status</strong></label></div>
                                        <div class="col-sm-3">
                                            <select name="status" id="select" class="form-control">
                                                <option value="0">Select Status</option>
                                                <option value="Confirmed Booking">Confirmed Booking</option>
                                                <option value="Call not Connected">Call not Connected</option>
                                                 <option value="Future Planning">Future Planning</option>
                                                <option value="Not Interested">Not Interested</option>
                                                <option value="Not Answering">Not Answering</option>
                                                <option value="Fake Query">Fake Query</option>
                                                <option value="Whatsapp Send">Whatsapp Send</option>
                                                <option value="Whatsapp Not Active">Whatsapp Not Active</option>
                                                <option value="Wrong Number">Wrong Number</option>
                                             
                                            </select>
                                        </div>
                                <div class="col-sm-3"><button type="submit" class="btn btn-outline-info"><i class="fa fa-magic"></i>&nbsp; Submit</button></div>
                               <div class="col-sm-3"><input type="date" id="day" name="future_date"></div> 
                             
                          </div>
                    </form>
                    <div class="prices p-5 text-center">
                        <div class="row">
                            <div class="col-md-3">
                                <p class="text-dark" >Hatchback</p>
                                <p class="text-info" style="font-size:25px"><i class="menu-icon fa fa-inr"></i> <?php echo $row['hatchback']; ?> /-</p>
                                </div>
                                <div class="col-md-3">
                                <p class="text-dark">Sedan</p>
                                <p class="text-info" style="font-size:25px"><i class="menu-icon fa fa-inr"></i> <?php echo $row['sedan']; ?> /-</p>                                
                                </div>
                                <div class="col-md-3">
                                <p class="text-dark">Ertiga</p>
                                <p class="text-info" style="font-size:25px"><i class="menu-icon fa fa-inr"></i> <?php echo $row['ertiga']; ?> /-</p>
                                </div>
                                 <div class="col-md-3">
                                <p class="text-dark">Innova</p>
                                <p class="text-info" style="font-size:25px"><i class="menu-icon fa fa-inr"></i> <?php echo $row['innova']; ?> /-</p>
                                </div>
                        </div>
                        </div>
                    
                    </div>
                        <?php
                        }
                        ?>
               </div>
         </div>
    </div>
</div>                                


                   

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
        <i class="menu-icon fa fa-inr"></i>  (document).ready(function() {
          <i class="menu-icon fa fa-inr"></i>  ('#bootstrap-data-table-export').DataTable();
      } );
  </script>
  
</body>