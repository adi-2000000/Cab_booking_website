<?php include 'header.php';?>
<head>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCelDo4I5cPQ72TfCTQW-arhPZ7ALNcp8w&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<html>
<body>
    
<div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><i class="mr-2 menu-icon fa fa-list"></i>  CUSTOM BOOKINGS</strong>
                        </div>

                    <?php
                    include "config.php";
                    $value2='';
                        //Query to fetch last inserted invoice number
                        $query = "SELECT bookid from `custom_booking` order by id DESC LIMIT 1";
                        $stmt = $link->query($query);
                        if(mysqli_num_rows($stmt) > 0) {
                            if ($row = mysqli_fetch_assoc($stmt)) {
                                $value2 = $row['bookid'];
                                $value2 = substr($value2, 7, 7);//separating numeric part
                                $value2 = $value2 + 1;//Incrementing numeric part
                                $value2 = "AIMC00A" . sprintf('%03s', $value2);//concatenating incremented value
                                $value = $value2; 
                            }
                        } 
                        else {
                            $value2 = "AIMC00A1";
                            $value = $value2;
                        }
                        ?>
                    <div class="col-md-4 p-2">
                        <select id="selectgst" class="p-2 my-2 bg-warning" placeholder="TYPE">
                              <option value="gst">GST</option>
                            <option value="nogst">WITHOUT GST</option>
                        </select><br>
                     </div>
                                
             
                
                <div class="nogstselect">
                <div class="col-md-4 p-2"> 
                  <h4><strong><div class="text-dark my-1"><i class="mr-2 menu-icon fa fa-car"></i> Trip Type </div></strong></h4> 
                    <select id="nogst" class="p-2 my-2 bg-warning" placeholder="trip type">
                    <option value="One Way NOGST">One Way Trip</option>
                    <option value="Round NOGST">Round Trip</option>
                    <option value="Rental NOGST">Rental Trip</option>
                      </select><br>
                      <input id="bookid" class="form-control register_form " name="bookid" type="text" value="<?php echo $value;?>">  
                    </div>
                </div>
                
                  <div class="gstselect">
                   <div class="col-md-4 p-2"> 
                       <h4><strong><div class="text-dark my-1"><i class="mr-2 menu-icon fa fa-car"></i> Trip Type </div></strong></h4> 
                  <select id="newgst" class="p-2 my-2 bg-warning" >
                    <option value="One Way">One Way Trip</option>
                    <option value="Round">Round Trip</option>
                    <option value="Rental">Rental Trip</option>
                      </select><br>
                      <input id="bookid" class="form-control register_form " name="bookid" type="text" value="<?php echo $value;?>">  
                     </div>
                </div>
         
             <div class="rental">
                <form id="form" action="invoice-redirect.php" Method="POST" target="_blank">
                    <div class="row p-2 my-1">
                         <div class="col-lg-4"><br>
                               <h4><strong><div class="text-dark my-1 ">Choose Date and Time</div></strong></h4>
                                <input class="col-7" class="form-control register_form " name="date" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="time" type="time" placeholder="Time"><br><br>
                                <strong class="label label-default">Vehicle Type :</strong>
                                <select class="p-2 my-2 bg-white" name="car">
                                <option value="Hatchback">Hatchback</option>    
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="SUV+">SUV+</option>
                                </select><br><br>
                                <strong class="label label-default">Rental Hours :</strong>
                                <select id="mySelect" name="mySelect" oninput="rentalSelectFunction()" class="p-2 my-2 bg-white">
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option></select><br>
                                <input id="trip" class="form-control register_form" name="trip" type="hidden" value="Rental"><br>
                                <strong class="label label-default">Name :</strong>
                                <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                                <strong class="label label-default">Contact :</strong>
                                <input id="phone" class="form-control register_form " type="" name="phone" placeholder="Phone Number" required><br>
                              
                        </div>
                        
                         <div class="col-lg-4"><br>
                               
                                <strong class="label label-default">Email :</strong>
                                <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                                <strong class="label label-default">PickUp Location :</strong>
                                <input id="rental_pickup" class="form-control register_form " name="rental_pickup" type="text" placeholder="Pick Up Location" required><br>
                                <strong class="label label-default">Drop Location :</strong>
                                
                                <input id="rental_drop" class="form-control register_form " name="rental_drop" type="text" placeholder="Drop Location" required><br>
                                 <strong class="label label-default">Base Fare</strong> 
                                <input id="rentalamount" class="form-control register_form " name="amount" placeholder="Enter Base Fare" type="Number" min="0" oninput="rentalFunction()"><br>
                                <input id="rentalbase" name="base"  type="hidden">
                                 <strong class="label label-default">Toll</strong> 
                                <input id="rentaltoll" class="form-control register_form " name="toll" placeholder="Enter Toll" type="Number" min="0" oninput="rentalFunction()"><br>
                                <strong class="label label-default">Parking</strong> 
                                <input id="rentalparking" class="form-control register_form " name="parking" placeholder="Enter Parking" type="Number" min="0" oninput="rentalFunction()"><br>
                        </div>
                        <div class="col-lg-4"><br>
           
                               <strong class="label label-default">Extra Hours :</strong> 
                               <div class="row">
                                   <div class="col-sm-3">
                                <input id="extrahours" class="form-control register_form " name="extrahours" placeholder="Extra Hours" type="Number" min="0" oninput="rentalFunction()"><br>
                                </div>
                                <div class="col-sm-6">
                                <input id="extrahoursrs" class="form-control register_form " name="extrahoursrs" placeholder="Extra Hours Price" type="Number" min="0" oninput="rentalFunction()"><br>
                                </div>
                                </div>
                                <h4><strong><div class="text-dark my-1"> Fixed KM </div></strong></h4> 
                                <input id="distance" class="form-control register_form " name="distance" type="text" readonly><br>
                                <strong class="label label-default">Extra Distance :</strong> 
                                <div class="row">
                                   <div class="col-sm-3">
                                <input id="extrakm" class="form-control register_form " name="extrakm" type="Number" placeholder="Extra Distance Km" min="0" oninput="rentalFunction()"><br>
                                 </div>
                                <div class="col-sm-6">
                                <input id="extrakmrs" class="form-control register_form " name="extrakmrs" type="Number" placeholder="Extra Distance Price" min="0" oninput="rentalFunction()"><br>
                                </div>
                                 </div>
                                
                                <input id="kmamount" class="form-control register_form " name="kmamount" type="hidden" required>
                                <input id="hoursamount" class="form-control register_form " name="hoursamount" type="hidden" required>
                                <strong class="label label-default">GST % :</strong>
                                <input id="rentalgst" class="form-control register_form " name="gst" type="text" placeholder="Enter GST %" oninput="rentalFunction()" required><br>
                                <input id="rentalgst1" class="form-control register_form " name="gst" type="text" placeholder="GST" readonly><br>
                                <strong class="label label-default">SubTotal :</strong>
                                <input id="rentalamount1" class="form-control register_form " name="rentalamount" type="text" placeholder="Subtotal" required><br>
                                <strong class="label label-default">Paid Amount :</strong>
                                <input id="totalpaid_amt" class="form-control register_form " name="totalpaid_amt" type="text" placeholder="Paid Amount" required><br>
                                <input id="submit" class="btn btn-warning p-1" title="Confirm here" type="submit" value="Submit" target="_blank"><br><br><br><br><br><br>
                                </form>
                        </div>
                    </div>
                </div>
                
                <div class="oneway">
                    
                <form id="form" action="invoice-redirect.php" Method="POST" target="_blank">
                    
                    <div class="row p-2 my-1">
                         <div class="col-lg-4"><br>
                                <strong class="label label-default">Vehicle Type :</strong>
                                <input id="car" class="form-control register_form " name="car" type="text" placeholder="Vehicle Type" required><br>
                                <h4><strong><div class="text-dark my-1 ">Choose Date and Time</div></strong></h4> 
                                <input class="col-7" class="form-control register_form " name="date" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="time" type="time" placeholder="Time"><br>
                                <input id="trip" class="form-control register_form " name="trip" type="hidden" value="One Way"><br>
                                <strong class="label label-default">Name :</strong>
                                <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                                <strong class="label label-default">Contact :</strong>
                                <input name="phone" class="form-control register_form " type="" placeholder="Phone Number" required><br>
                                <strong class="label label-default">Email :</strong>
                                <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                                
                        </div>
                        
                        <div class="col-lg-4"><br>
                                <strong class="label label-default">PickUp Location :</strong>
                                <input id="oneway_pickup" class="form-control register_form " name="oneway_pickup" type="text" placeholder="Pick Up Location" required><br>
                                <input id="origin" type="hidden" name="origin" required/>
                                <strong class="label label-default">Drop Location :</strong>
                                <input id="oneway_drop" class="form-control register_form " name="oneway_drop" type="text" placeholder="Drop Location" required><br>
                                <input id="destination" type="hidden" name="destination" required/>
                                <strong class="label label-default">Distance :</strong>
                                <input id="Distance" class="form-control register_form " name="distance" type="text" placeholder="Distance" required><br>
                                <strong class="label label-default">Amount :</strong>
                                <input id="amount" class="form-control register_form  " name="amount" type="text" placeholder="Base Fare" oninput="myFunction()"><br>
                                <strong class="label label-default">Toll :</strong>
                                <input id="toll" class="form-control register_form  " name="toll" type="text" placeholder="Toll" oninput="myFunction()" ><br>
                                <strong class="label label-default">Parking :</strong>
                                <input id="parking" class="form-control register_form  " name="parking" type="text" placeholder="Parking" oninput="myFunction()" required><br>
                         </div>
                        
                        <div class="col-lg-4"><br>
                                
                                <strong class="label label-default">GST % :</strong>
                                <input id="gst1" class="form-control register_form " name="gst1" type="text" placeholder="Enter GST %" oninput="gstFunction()" required><br>
                                <input id="gst" class="form-control register_form " name="gst" type="text" placeholder="GST" readonly><br>
                                <strong class="label label-default">Service Charges % :</strong>
                                <input id="service1" class="form-control register_form " name="service1" type="text" placeholder="Enter Service Charge %" oninput="serviceFunction()" required><br>
                                <input id="service" class="form-control register_form " name="service" type="text" placeholder="Service Charge"  readonly><br>
                                <strong class="label label-default">SubTotal :</strong>
                                <input id="new_amount" class="form-control register_form " name="new_amount" type="text" placeholder="Subtotal" oninput="myFunction()" required><br>
                                <strong class="label label-default">Paid Amount :</strong>
                                <input id="totalpaid_amt" class="form-control register_form " name="totalpaid_amt" type="text" placeholder="Paid Amount" required><br>
                                <input id="submit" class="btn btn-warning p-1" title="Confirm here" type="submit" value="Submit" target="_blank"><br><br><br><br><br><br>
                                </form>
                        </div>
                </div>
            </div>    
                
                
                <div class="round">
                    
                <form id="form" action="invoice-redirect.php" Method="POST" target="_blank">
                    
                    <div class="row p-2 my-1">
                         <div class="col-lg-4"><br>
                         
                                  <h4><strong><div class="text-dark my-1 ">Choose Start Trip Date and Time</div></strong></h4>
                                <input class="col-7" class="form-control register_form " name="date" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="time" type="time" placeholder="Time"><br><br>
                                <h4><strong><div class="text-dark my-1 ">Choose End Trip Date and Time</div></strong></h4>
                                 <input class="col-7" class="form-control register_form " name="dateend" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="timeend" type="time" placeholder="Time"><br><br>
                                <strong class="label label-default">No. of Days :</strong>
                                <input id="days" class="form-control register_form " name="days" type="text" placeholder="Days" required><br>
                                <strong class="label label-default">Vehicle Type :</strong>
                                <input id="car" class="form-control register_form " name="car" type="text" placeholder="Vehicle Type" required>
                                 <input id="trip" class="form-control register_form " name="trip" type="hidden" value="Round"><br>
                                 
                                   

                         </div>
                
                         <div class="col-lg-4"><br>    
                                   <strong class="label label-default">Name :</strong>
                                    <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                                    <strong class="label label-default">Contact :</strong>
                                    <input name="phone" class="form-control register_form " type="" placeholder="Phone Number" required><br>
                                    <strong class="label label-default">Email :</strong>
                                    <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                                    <strong class="label label-default">PickUp Location :</strong>
                                    <input id="round_pickup" class="form-control register_form " name="round_pickup" type="text" placeholder="Pick Up Location" required><br>
                                    <strong class="label label-default">Drop Location :</strong>
                                    <input id="round_drop" class="form-control register_form " name="round_drop" type="text" placeholder="Drop Location" required><br>
                                    <strong class="label label-default">Distance :</strong>
                                    <input id="Distance" class="form-control register_form " name="distance" type="text" placeholder="Distance" required><br>
                                    <strong class="label label-default">Amount :</strong>
                                    <input id="amount1" class="form-control register_form " name="amount" type="text" placeholder="Base Fare" oninput="myFunction1()" required><br>
                                    <strong class="label label-default">Driver Allowance :</strong>
                                    <input id="driver1" class="form-control register_form " name="driver" type="text" placeholder="Driver Allowance" oninput="myFunction1()" required><br>
                            
                        </div>
                        
                        <div class="col-lg-4"><br>
                                    <strong class="label label-default">Toll :</strong>
                                    <input id="toll1" class="form-control register_form " name="toll" type="text" placeholder="Toll" oninput="myFunction1()" required><br>
                                    <strong class="label label-default">Parking :</strong>
                                    <input id="parking1" class="form-control register_form " name="parking" type="text" placeholder="Parking" oninput="myFunction1()" required><br>
                                    <strong class="label label-default">GST % :</strong>
                                    <input id="gst3" class="form-control register_form " name="gst" type="text" placeholder="Enter GST %" oninput="gstFunction1()" required><br>
                                    <input id="gst2" class="form-control register_form " name="gst" type="text" placeholder="GST" readonly><br>
                                    <strong class="label label-default">Service Charges % :</strong>
                                    <input id="service3" class="form-control register_form " name="service" type="text" placeholder="Enter Service Charge %" oninput="serviceFunction1()" required><br>
                                    <input id="service2" class="form-control register_form " name="service" type="text" placeholder="Service charge" readonly><br>
                                    <strong class="label label-default">SubTotal :</strong>
                                    <input id="new_amount1" class="form-control register_form " name="new_amount" type="text" placeholder="Subtotal" oninput="myFunction1()" required><br>
                                    <strong class="label label-default">Paid Amount :</strong>
                                    <input id="totalpaid_amt" class="form-control register_form " name="totalpaid_amt" type="text" placeholder="Paid Amount" required><br>
                                    <input id="submit" class="btn btn-warning p-1" title="Confirm here" type="submit" value="Submit" target="_blank"><br><br><br><br><br><br>
                                    </form>
                        </div>
                      
                </div>
 </div>
                
                <div class="onewaynogst">
                    
                <form id="form" action="invoice-redirect.php" Method="POST" target="_blank">
                    
                    <div class="row p-2 my-1">
                         <div class="col-lg-4"><br>
                                <strong class="label label-default">Vehicle Type :</strong>
                                <input id="car" class="form-control register_form " name="car" type="text" placeholder="Vehicle Type" required><br>
                                <h4><strong><div class="text-dark my-1 ">Choose Date and Time</div></strong></h4> 
                                <input class="col-7" class="form-control register_form " name="date" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="time" type="time" placeholder="Time"><br>
                                <input id="trip" class="form-control register_form " name="trip" type="hidden" value="One Way NoGST"><br>
                                <strong class="label label-default">Name :</strong>
                                <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                                <strong class="label label-default">Contact :</strong>
                                <input name="phone" class="form-control register_form " type="" placeholder="Phone Number" required><br>
                                <strong class="label label-default">Email :</strong>
                                <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                                
                        </div>
                        
                        <div class="col-lg-4"><br>
                                <strong class="label label-default">PickUp Location :</strong>
                                <input id="onewaynogst_pickup" class="form-control register_form " name="onewaynogst_pickup" type="text" placeholder="Pick Up Location" required><br>
                                <input id="origin" type="hidden" name="origin" required/>
                                <strong class="label label-default">Drop Location :</strong>
                                <input id="onewaynogst_drop" class="form-control register_form " name="onewaynogst_drop" type="text" placeholder="Drop Location" required><br>
                                <input id="destination" type="hidden" name="destination" required/>
                                <strong class="label label-default">Distance :</strong>
                                <input id="Distance" class="form-control register_form " name="distance" type="text" placeholder="Distance" required><br>
                                <strong class="label label-default">Amount :</strong>
                                <input id="amount3" class="form-control register_form  " name="amount" type="text" placeholder="Base Fare" oninput="myFunction3()"><br>
                                <strong class="label label-default">Toll :</strong>
                                <input id="toll3" class="form-control register_form  " name="toll" type="text" placeholder="Toll" oninput="myFunction3()" ><br>
                                
                        </div>
                        
                        <div class="col-lg-4"><br>
                               <strong class="label label-default">Parking :</strong>
                                <input id="parking3" class="form-control register_form  " name="parking" type="text" placeholder="Parking" oninput="myFunction3()" required><br>
                                <strong class="label label-default">Enter Service Charges % :</strong>
                                <input id="service33" class="form-control register_form " name="service1" type="text" placeholder="Enter Service Charge %" oninput="serviceFunction3()" required><br>
                                <input id="service31" class="form-control register_form " name="service" type="text" placeholder="Service Charge"  readonly><br>
                                <strong class="label label-default">SubTotal :</strong>
                                <input id="new_amount3" class="form-control register_form " name="new_amount" type="text" placeholder="Subtotal" oninput="myFunction3()" required><br>
                                <strong class="label label-default">Paid Amount :</strong>
                                <input id="totalpaid_amt" class="form-control register_form " name="totalpaid_amt" type="text" placeholder="Paid Amount" required><br>
                                <input id="submit" class="btn btn-warning p-1" title="Confirm here" type="submit" value="Submit" target="_blank"><br><br><br><br><br><br>
                                </form>
                        </div>
                </div>
            </div>    
                
                
                <div class="roundnogst">
                    
                <form id="form" action="invoice-redirect.php" Method="POST" target="_blank">
                    
                    <div class="row p-2 my-1">
                         <div class="col-lg-4"><br>
                         
                                  <h4><strong><div class="text-dark my-1 ">Choose Start Trip Date and Time</div></strong></h4>
                                <input class="col-7" class="form-control register_form " name="date" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="time" type="time" placeholder="Time"><br><br>
                                <h4><strong><div class="text-dark my-1 ">Choose End Trip Date and Time</div></strong></h4>
                                 <input class="col-7" class="form-control register_form " name="dateend" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="timeend" type="time" placeholder="Time"><br><br>
                                <strong class="label label-default">No. of Days :</strong>
                                <input id="days" class="form-control register_form " name="days" type="text" placeholder="Days" required><br>
                                <strong class="label label-default">Vehicle Type :</strong>
                                <input id="car" class="form-control register_form " name="car" type="text" placeholder="Vehicle Type" required>
                                 <input id="trip" class="form-control register_form " name="trip" type="hidden" value="Round NoGST"><br>
                                   

                         </div>
                
                         <div class="col-lg-4"><br>    
                                   <strong class="label label-default">Name :</strong>
                                    <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                                    <strong class="label label-default">Contact :</strong>
                                    <input name="phone" class="form-control register_form " type="" placeholder="Phone Number" required><br>
                                    <strong class="label label-default">Email :</strong>
                                    <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                                    <strong class="label label-default">PickUp Location :</strong>
                                    <input id="roundnogst_pickup" class="form-control register_form " name="roundnogst_pickup" type="text" placeholder="Pick Up Location" required><br>
                                    <strong class="label label-default">Drop Location :</strong>
                                    <input id="roundnogst_drop" class="form-control register_form " name="roundnogst_drop" type="text" placeholder="Drop Location" required><br>
                                    <strong class="label label-default">Distance :</strong>
                                    <input id="Distance" class="form-control register_form " name="distance" type="text" placeholder="Distance" required><br>
                                    <strong class="label label-default">Amount :</strong>
                                    <input id="amount4" class="form-control register_form " name="amount" type="text" placeholder="Base Fare" oninput="myFunction4()" required><br>
                                  
                        </div>
                        
                        <div class="col-lg-4"><br>
                          <strong class="label label-default">Driver Allowance :</strong>
                                    <input id="driver4" class="form-control register_form " name="driver" type="text" placeholder="Driver Allowance" oninput="myFunction4()" required><br>
                                     <strong class="label label-default">Toll :</strong>
                                    <input id="toll4" class="form-control register_form " name="toll" type="text" placeholder="Toll" oninput="myFunction4()" required><br>
                                    <strong class="label label-default">Parking :</strong>
                                    <input id="parking4" class="form-control register_form " name="parking" type="text" placeholder="Parking" oninput="myFunction4()" required><br>
                                    <strong class="label label-default">Enter Service Charges % :</strong>
                                    <input id="service44" class="form-control register_form " name="service" type="text" placeholder="Enter Service Charge %" oninput="serviceFunction4()" required><br>
                                    <input id="service41" class="form-control register_form " name="service" type="text" placeholder="Service charge" readonly><br>
                                    <strong class="label label-default">SubTotal :</strong>
                                    <input id="new_amount4" class="form-control register_form " name="new_amount" type="text" placeholder="Subtotal" oninput="myFunction4()" required><br>
                                    <strong class="label label-default">Paid Amount :</strong>
                                    <input id="totalpaid_amt" class="form-control register_form " name="totalpaid_amt" type="text" placeholder="Paid Amount" required><br>
                                    <input id="submit" class="btn btn-warning p-1" title="Confirm here" type="submit" value="Submit" target="_blank"><br><br><br><br><br><br>
                                    </form>
                        </div>
                       
                </div>
 </div>
 
 <div class="rentalnogst">
                <form id="form" action="invoice-redirect.php" Method="POST" target="_blank">
                    <div class="row p-2 my-1">
                         <div class="col-lg-4"><br>
                               <h4><strong><div class="text-dark my-1 ">Choose Date and Time</div></strong></h4>
                                <input class="col-7" class="form-control register_form " name="date" type="date" placeholder="Date"><br><br>
                                <input class="col-6" class="form-control register_form " name="time" type="time" placeholder="Time"><br><br>
                                <strong class="label label-default">Vehicle Type :</strong>
                                <select class="p-2 my-2 bg-white" name="car">
                                <option value="Hatchback">Hatchback</option>    
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="SUV+">SUV+</option>
                                </select><br><br>
                                <strong class="label label-default">Rental Hours :</strong>
                                <select id="mySelect1" name="mySelect" oninput="rentalSelectFunction1()" class="p-2 my-2 bg-white">
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option></select><br>
                                <input id="trip" class="form-control register_form" name="trip" type="hidden" value="Rental NoGST"><br>
                                <strong class="label label-default">Name :</strong>
                                <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                                <strong class="label label-default">Contact :</strong>
                                <input id="phone" class="form-control register_form " type="" name="phone" placeholder="Phone Number" required><br>
                              
                        </div>
                        
                         <div class="col-lg-4"><br>
                               
                                <strong class="label label-default">Email :</strong>
                                <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                                <strong class="label label-default">PickUp Location :</strong>
                                <input id="rentalnogst_pickup" class="form-control register_form " name="rentalnogst_pickup" type="text" placeholder="Pick Up Location" required><br>
                                <strong class="label label-default">Drop Location :</strong>
                                
                                <input id="rentalnogst_drop" class="form-control register_form " name="rentalnogst_drop" type="text" placeholder="Drop Location" required><br>
                                 <strong class="label label-default">Base Fare</strong> 
                                <input id="rentalamount2" class="form-control register_form " name="amount" placeholder="Enter Base Fare" type="Number" min="0" oninput="rentalFunction1()"><br>
                                <input id="rentalbase1" name="base"  type="hidden">
                                 <strong class="label label-default">Toll</strong> 
                                <input id="rentaltoll1" class="form-control register_form " name="toll" placeholder="Enter Toll" type="Number" min="0" oninput="rentalFunction1()"><br>
                                <strong class="label label-default">Parking</strong> 
                                <input id="rentalparking1" class="form-control register_form " name="parking" placeholder="Enter Parking" type="Number" min="0" oninput="rentalFunction1()"><br>
                        </div>
                        <div class="col-lg-4"><br>
           
                               <strong class="label label-default">Extra Hours :</strong> 
                               <div class="row">
                                   <div class="col-sm-3">
                                <input id="extrahours1" class="form-control register_form " name="extrahours" placeholder="Extra Hours" type="Number" min="0" oninput="rentalFunction1()"><br>
                                </div>
                                <div class="col-sm-6">
                                <input id="extrahoursrs1" class="form-control register_form " name="extrahoursrs" placeholder="Extra Hours Price" type="Number" min="0" oninput="rentalFunction1()"><br>
                                </div>
                                </div>
                                <h4><strong><div class="text-dark my-1"> Fixed KM </div></strong></h4> 
                                <input id="distance1" class="form-control register_form " name="distance" type="text" readonly><br>
                                <strong class="label label-default">Extra Distance :</strong> 
                                <div class="row">
                                   <div class="col-sm-3">
                                <input id="extrakm1" class="form-control register_form " name="extrakm" type="Number" placeholder="Extra Distance Km" min="0" oninput="rentalFunction1()"><br>
                                 </div>
                                <div class="col-sm-6">
                                <input id="extrakmrs1" class="form-control register_form " name="extrakmrs" type="Number" placeholder="Extra Distance Price" min="0" oninput="rentalFunction1()"><br>
                                </div>
                                 </div>
                                
                                <input id="kmamount1" class="form-control register_form " name="kmamount" type="hidden" required>
                                <input id="hoursamount1" class="form-control register_form " name="hoursamount" type="hidden" required>
                                
                                <strong class="label label-default">SubTotal :</strong>
                                <input id="rentalamount3" class="form-control register_form " name="rentalamount" type="text" placeholder="Subtotal" required><br>
                                <strong class="label label-default">Paid Amount :</strong>
                                <input id="totalpaid_amt" class="form-control register_form " name="totalpaid_amt" type="text" placeholder="Paid Amount" required><br>
                                <input id="submit" class="btn btn-warning p-1" title="Confirm here" type="submit" value="Submit" target="_blank"><br><br><br><br><br><br>
                                </form>
                        </div>
                    </div>
                </div>

</div>
</div>
</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

 <script>
    $(function() {
        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('rental_pickup'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('rental_drop'));
             var from_places = new google.maps.places.Autocomplete(document.getElementById('oneway_pickup'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('oneway_drop'));
             var from_places = new google.maps.places.Autocomplete(document.getElementById('round_pickup'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('round_drop'));
            var from_places = new google.maps.places.Autocomplete(document.getElementById('onewaynogst_pickup'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('onewaynogst_drop'));
            var from_places = new google.maps.places.Autocomplete(document.getElementById('roundnogst_pickup'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('roundnogst_drop'));
            var from_places = new google.maps.places.Autocomplete(document.getElementById('rentalnogst_pickup'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('rentalnogst_drop'));
                
                google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });
        });
    });
</script>

<script>
        var allFields = document.querySelectorAll("form");
        for (var i = 0; i < allFields.length; i++) {
            allFields[i].addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    console.log('Enter clicked')
                    event.preventDefault();
                    if (this.parentElement.nextElementSibling.querySelector('input')) {
                        this.parentElement.nextElementSibling.querySelector('input').focus();}}});}
 </script>
  <script>
           $(document).ready(function(){
               $(".nogstselect").hide();
                 $(".gstselect").show();
                  $(".round").hide();
                    $(".oneway").show();
                    $(".rental").hide();
                     $(".onewaynogst").hide();
                     $(".roundnogst").hide();
                    $(".rentalnogst").hide();
              $("#selectgst").change(function(){
                    $( "select option:selected").each(function(){
                        
                        if($(this).attr("value")=="gst"){
                              $(".gstselect").show();
                            $(".nogstselect").hide();
                    $(".round").hide();
                    $(".oneway").show();
                    $(".rental").hide();
                     $(".onewaynogst").hide();
                     $(".roundnogst").hide();
                     $(".rentalnogst").hide();
                        }
                        
                        if($(this).attr("value")=="nogst"){
                             $(".gstselect").hide();
                            $(".nogstselect").show();
                         $(".round").hide();
                    $(".oneway").hide();
                    $(".rental").hide();
                     $(".onewaynogst").show();
                     $(".roundnogst").hide();
                     $(".rentalnogst").hide();
                        }
                         
                    });
                }); 
        
                   $("#newgst").change(function(){
                
                    $( "select option:selected").each(function(){
                         
                        if($(this).attr("value")=="One Way"){
                            $(".round").hide();
                            $(".oneway").show();
                            $(".rental").hide();
                             $(".onewaynogst").hide();
                             $(".roundnogst").hide();
                             $(".rentalnogst").hide();
                        }
                        
                        if($(this).attr("value")=="Round"){
                            $(".oneway").hide();
                            $(".round").show();
                            $(".rental").hide();
                              $(".onewaynogst").hide();
                             $(".roundnogst").hide();
                             $(".rentalnogst").hide();
                        }
                         if($(this).attr("value")=="Rental"){
                            $(".oneway").hide();
                            $(".round").hide();
                            $(".rental").show();
                             $(".onewaynogst").hide();
                             $(".roundnogst").hide();
                             $(".rentalnogst").hide();
                        }
                    });
                });  
                
                 $("#nogst").change(function(){
                 
                    $( "select option:selected").each(function(){
                         
                        if($(this).attr("value")=="One Way NOGST"){
                            $(".round").hide();
                            $(".oneway").hide();
                            $(".rental").hide();
                             $(".onewaynogst").show();
                             $(".roundnogst").hide();
                             $(".rentalnogst").hide();
                        }
                        
                        if($(this).attr("value")=="Round NOGST"){
                            $(".oneway").hide();
                            $(".round").hide();
                            $(".rental").hide();
                              $(".onewaynogst").hide();
                             $(".roundnogst").show();
                              $(".rentalnogst").hide();
                        }
                        
                        if($(this).attr("value")=="Rental NOGST"){
                            $(".oneway").hide();
                            $(".round").hide();
                            $(".rental").hide();
                              $(".onewaynogst").hide();
                             $(".roundnogst").hide();
                              $(".rentalnogst").show();
                        }
                    });
                });  
                
           }); 
</script>

<script>
             
                

</script>

<script>
     function myFunction(){

     var total=0;
     var gst=0;
     var service=0;
 var p1 = parseInt(document.getElementById('amount').value);
 var p2 = parseInt(document.getElementById('toll').value); 
 var p3 = parseInt(document.getElementById('parking').value); 
 total = p1 + p2 + p3;
 newamount = total ;
 document.getElementById('new_amount').value = Math.round(newamount); 
 if (isNaN(gst))  document.getElementById('gst').value = 0;
 if (isNaN(service))  document.getElementById('service').value = 0;
 if (isNaN(newamount))  document.getElementById('new_amount').value = 0;
 
 
}
</script>

<script>
function myFunction3(){
 var total=0;
 var gst=0;
 var service=0;
 var p1 = parseInt(document.getElementById('amount3').value);
 var p2 = parseInt(document.getElementById('toll3').value); 
 var p3 = parseInt(document.getElementById('parking3').value); 
 total = p1 + p2 + p3;
 newamount = total ;
 document.getElementById('new_amount3').value = Math.round(newamount); 
 if (isNaN(service))  document.getElementById('service33').value = 0;
 if (isNaN(newamount))  document.getElementById('new_amount3').value = 0;
}
</script>

<script>
function gstFunction(){
 var p1 = parseInt(document.getElementById('amount').value);
 var p2 = parseInt(document.getElementById('toll').value); 
 var p3 = parseInt(document.getElementById('parking').value); 
 var gst1 = parseInt(document.getElementById('gst1').value); 
 var service = parseInt(document.getElementById('service').value); 
 total = p1 + p2 + p3;
 gst = (total/100)*gst1;
 newamount = total + gst + service;
 document.getElementById('gst').value = Math.round(gst); 
 document.getElementById('new_amount').value = Math.round(newamount); 
 if (isNaN(newamount))  document.getElementById('new_amount').value = 0;
 if (isNaN(gst))  document.getElementById('gst').value = 0;
}
</script>

<script>
function serviceFunction(){
 var p1 = parseInt(document.getElementById('amount').value);
 var p2 = parseInt(document.getElementById('toll').value); 
 var p3 = parseInt(document.getElementById('parking').value); 
 var gst = parseInt(document.getElementById('gst').value); 
 var service1 = parseInt(document.getElementById('service1').value); 
 total = p1 + p2 + p3;
 service = (total/100)*service1;
 newamount = total + gst + service;
 document.getElementById('service').value = Math.round(service); 
 document.getElementById('new_amount').value = Math.round(newamount); 
 if (isNaN(newamount))  document.getElementById('new_amount').value = 0;
 if (isNaN(service))  document.getElementById('service').value = 0;
}
</script>

<script>
function serviceFunction3(){
 var p1 = parseInt(document.getElementById('amount3').value);
 var p2 = parseInt(document.getElementById('toll3').value); 
 var p3 = parseInt(document.getElementById('parking3').value); 
 var service = parseInt(document.getElementById('service33').value); 
  total = p1 + p2 + p3;
  service = (total/100)*service;
 newamount = total + service;
 document.getElementById('service31').value = Math.round(service); 
 document.getElementById('new_amount3').value = Math.round(newamount); 
if (isNaN(newamount))  document.getElementById('new_amount3').value = 0;
 if (isNaN(service))  document.getElementById('service31').value = 0;
}
</script>

<script>
 function myFunction1() {
     var total=0;
     var gst=0;
var p1 = parseInt(document.getElementById('amount1').value);
var p2 = parseInt(document.getElementById('toll1').value); 
var p3 = parseInt(document.getElementById('parking1').value); 
var p4 = parseInt(document.getElementById('driver1').value); 
 total = p1 + p2 + p3 + p4;
 newamount = total ;
 document.getElementById('new_amount1').value = Math.round(newamount);
 if (isNaN(gst))  document.getElementById('gst1').value = 0;
 if (isNaN(service))  document.getElementById('service1').value = 0;
 if (isNaN(newamount))  document.getElementById('new_amount1').value = 0;
   }
</script>

<script>
 function myFunction4() {
     var total=0;
     var gst=0;
var p1 = parseInt(document.getElementById('amount4').value);
var p2 = parseInt(document.getElementById('toll4').value); 
var p3 = parseInt(document.getElementById('parking4').value); 
var p4 = parseInt(document.getElementById('driver4').value); 
 total = p1 + p2 + p3 + p4;
 newamount = total ;
 document.getElementById('new_amount4').value = Math.round(newamount);

 if (isNaN(service))  document.getElementById('service41').value = 0;
 if (isNaN(newamount))  document.getElementById('new_amount4').value = 0;

   }
</script>


<script>
function gstFunction1(){
 var p1 = parseInt(document.getElementById('amount1').value);
 var p2 = parseInt(document.getElementById('toll1').value); 
 var p3 = parseInt(document.getElementById('parking1').value);
 var p4 = parseInt(document.getElementById('driver1').value);
 var gst1 = parseInt(document.getElementById('gst3').value); 
 var service = parseInt(document.getElementById('service2').value); 
 total = p1 + p2 + p3 + p4;
 gst = (total/100)*gst1;
 newamount = total + gst + service;
 document.getElementById('gst2').value = Math.round(gst); 
 document.getElementById('new_amount1').value = Math.round(newamount); 
 if (isNaN(newamount))  document.getElementById('new_amount1').value = 0;
 if (isNaN(gst))  document.getElementById('gst2').value = 0;
}
</script>

<script>
function serviceFunction1(){
 var p1 = parseInt(document.getElementById('amount1').value);
 var p2 = parseInt(document.getElementById('toll1').value); 
 var p3 = parseInt(document.getElementById('parking1').value); 
 var p4 = parseInt(document.getElementById('driver1').value);
 var gst = parseInt(document.getElementById('gst2').value); 
 var service1 = parseInt(document.getElementById('service3').value); 
 total = p1 + p2 + p3 + p4;
 service = (total/100)*service1;
 newamount = total + gst + service;
 document.getElementById('service2').value = Math.round(service); 
 document.getElementById('new_amount1').value = Math.round(newamount); 
 if (isNaN(newamount))  document.getElementById('new_amount1').value = 0;
 if (isNaN(service))  document.getElementById('service2').value = 0;
}
</script>

<script>
function serviceFunction4(){
 var p1 = parseInt(document.getElementById('amount4').value);
 var p2 = parseInt(document.getElementById('toll4').value); 
 var p3 = parseInt(document.getElementById('parking4').value); 
 var p4 = parseInt(document.getElementById('driver4').value);
 var service1 = parseInt(document.getElementById('service44').value); 
 total = p1 + p2 + p3 + p4;
 service = (total/100)*service1;
 newamount = total + service;
 document.getElementById('service41').value = Math.round(service); 
 document.getElementById('new_amount4').value = Math.round(newamount); 
 if (isNaN(newamount))  document.getElementById('new_amount4').value = 0;
 if (isNaN(service))  document.getElementById('service41').value = 0;
}
</script>

<script>

function rentalSelectFunction(){
var value = parseInt(document.getElementById('mySelect').value);
if(value == "2"){

    fixkm = 20;
}
if(value == "4"){

    fixkm = 40;
}
if(value == "6"){

    fixkm = 60;
}
if(value == "8"){

    fixkm = 80;
}
if(value == "10"){

    fixkm = 100;
}
if(value == "12"){

    fixkm = 120;
}

document.getElementById('distance').value = Math.round(fixkm);

}
</script>

<script>
 function rentalFunction(){
 var hours = parseInt(document.getElementById('extrahours').value);
  var hoursrs = parseInt(document.getElementById('extrahoursrs').value);
 
  var km = parseInt(document.getElementById('extrakm').value);
  var kmrs = parseInt(document.getElementById('extrakmrs').value);
  
 var toll = parseInt(document.getElementById('rentaltoll').value);
 var parking = parseInt(document.getElementById('rentalparking').value);
 
 var base = parseInt(document.getElementById('rentalamount').value);
 var gst = parseInt(document.getElementById('rentalgst').value);

 var h = hours * hoursrs;
 var km = km * kmrs;
 
 amount = base + km + h + toll + parking;
 newgst = (amount/100)*gst;
 newamount = amount + newgst;
 document.getElementById('rentalamount1').value = Math.round(newamount);
 document.getElementById('kmamount').value = Math.round(km);
  document.getElementById('hoursamount').value = Math.round(h);
  document.getElementById('rentalbase').value = Math.round(base);
  document.getElementById('rentalgst1').value = Math.round(newgst);
  if (isNaN(newamount))  document.getElementById('rentalamount1').value = 0;
}
</script>

<script>

function rentalSelectFunction1(){
var value = parseInt(document.getElementById('mySelect1').value);
if(value == "2"){

    fixkm = 20;
}
if(value == "4"){

    fixkm = 40;
}
if(value == "6"){

    fixkm = 60;
}
if(value == "8"){

    fixkm = 80;
}
if(value == "10"){

    fixkm = 100;
}
if(value == "12"){

    fixkm = 120;
}

document.getElementById('distance1').value = Math.round(fixkm);

}
</script>

<script>
 function rentalFunction1(){
 var hours = parseInt(document.getElementById('extrahours1').value);
  var hoursrs = parseInt(document.getElementById('extrahoursrs1').value);
 
  var km = parseInt(document.getElementById('extrakm1').value);
  var kmrs = parseInt(document.getElementById('extrakmrs1').value);
  
 var toll = parseInt(document.getElementById('rentaltoll1').value);
 var parking = parseInt(document.getElementById('rentalparking1').value);
 
 var base = parseInt(document.getElementById('rentalamount2').value);

 var h = hours * hoursrs;
 var km = km * kmrs;
 
 amount = base + km + h + toll + parking;

 document.getElementById('rentalamount3').value = Math.round(amount);
 document.getElementById('kmamount1').value = Math.round(km);
  document.getElementById('hoursamount1').value = Math.round(h);
  document.getElementById('rentalbase1').value = Math.round(base);
  if (isNaN(amount))  document.getElementById('rentalamount1').value = 0;
 
}
</script>

<script>
/*
 function rentalKmFunction(){
 var extrakm = parseInt(document.getElementById('extrakm').value);
 var kmamount = parseInt(document.getElementById('kmamount').value);
 amount1 = extrakm * 12;
 kmamount = kmamount + amount1; 
 document.getElementById('rentalamount').value = Math.round(kmamount);
}*/
</script>
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
          document.getElementById('extrahours').value = 0
          document.getElementById('extrakm').value = 0
          document.getElementById('toll').value = 0;
            document.getElementById('parking').value = 0;
            document.getElementById('mySelect').value = 0;
            document.getElementById('base').value = 0;
            document.getElementById('extrahours').value = 0;
            document.getElementById('hoursamountrs').value = 0;
          
      } );
  </script>
</body>
</html>
