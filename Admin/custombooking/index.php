 <!DOCTYPE html>
<html>
  <head>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCelDo4I5cPQ72TfCTQW-arhPZ7ALNcp8w&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <title> Custom Booking </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600&display=swap" rel="stylesheet">
  </head>
  <body>
      <?php include 'header.php';?>
      <div class="row">
          <div class="col-lg-4"></div><br>
                <div class="col-lg-3 "><br><br>
                <p class="text-dark d-flex justify-content-center" style="font-size:2rem;">Manually Booking</p><br>
                <p class="text-dark my-1 ">Trip Type</p> 
                <select class="p-2 my-2 bg-warning" >
                <option value="One Way">One Way Trip</option>
                <option value="Round">Round Trip</option></select><br>
                 <div class="oneway">
                <form id="form" action="https://aimcabbooking.com/admin/custombooking/invoice.php" Method="POST">
                <input id="userid" class="form-control register_form " name="userid" type="text" placeholder="User Id" >
                <input id="trip" class="form-control register_form " name="trip" type="hidden" value="One Way"><br>
                <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                <input id="pickup" class="form-control register_form " name="pickup" type="text" placeholder="Pick Up Location" required><br>
                <input id="drop" class="form-control register_form " name="drop" type="text" placeholder="Drop Location" required><br>
                <input id="Distance" class="form-control register_form " name="distance" type="text" placeholder="Distance" required><br>
                <input id="car" class="form-control register_form " name="car" type="text" placeholder="Car Name" required><br>
                <input id="amount" class="form-control register_form " name="amount" type="text" placeholder="Amount" required><br>
                <input id="toll" class="form-control register_form " name="toll" type="text" placeholder="Toll" required><br>
                <input id="parking" class="form-control register_form " name="parking" type="text" placeholder="Parking" required><br>
                <input id="gst" class="form-control register_form " name="gst" type="text" placeholder="GST" required><br>
                <input id="service" class="form-control register_form " name="service" type="text" placeholder="Service Charge" required><br>
                <input id="new_amount" class="form-control register_form " name="new_amount" type="text" placeholder="Subtotal" required><br>
                <p class="text-dark my-1 ">Choose Date and Time</p>
                <input class="col-6" class="form-control register_form " name="date" type="date" placeholder="Date">
                <input class="col-5" class="form-control register_form " name="time" type="time" placeholder="Time"><br><br>
                <input name="phone" class="form-control register_form " type="" placeholder="Phone Number" required><br>
                <input id="submit" class="btn btn-warning p-1" type="submit" value="Book Now" ><br><br><br><br><br><br>
                </form>
                </div>
                <div class="round">
                <form id="form" action="https://aimcabbooking.com/admin/custombooking/invoice.php" Method="POST">
                <input id="userid" class="form-control register_form " name="userid" type="text" placeholder="User Id" >
                <input id="trip" class="form-control register_form " name="trip" type="hidden" value="Round"><br>
                <input id="name" class="form-control register_form " name="name" type="text" placeholder="Name" required><br>
                <input id="email" class="form-control register_form " name="email" type="text" placeholder="Email" required><br>
                <input id="pickup" class="form-control register_form " name="pickup" type="text" placeholder="Pick Up Location" required><br>
                <input id="drop" class="form-control register_form " name="drop" type="text" placeholder="Drop Location" required><br>
                <input id="Distance" class="form-control register_form " name="distance" type="text" placeholder="Distance" required><br>
                <input id="car" class="form-control register_form " name="car" type="text" placeholder="Car Name" required><br>
                <input id="days" class="form-control register_form " name="days" type="text" placeholder="Days" required><br>
                <input id="amount" class="form-control register_form " name="amount" type="text" placeholder="Amount" required><br>
                <input id="driver" class="form-control register_form " name="driver" type="text" placeholder="Driver Allowance" required><br>
                <input id="toll" class="form-control register_form " name="toll" type="text" placeholder="Toll" required><br>
                <input id="parking" class="form-control register_form " name="parking" type="text" placeholder="Parking" required><br>
                <input id="gst" class="form-control register_form " name="gst" type="text" placeholder="GST" required><br>
                <input id="service" class="form-control register_form " name="service" type="text" placeholder="Sevice charge" required><br>
                <input id="new_amount" class="form-control register_form " name="new_amount" type="text" placeholder="Subtotal" required><br>
                <p class="text-dark my-1 ">Choose Trip Start Date and Time</p>
                <input class="col-6" class="form-control register_form " name="date" type="date" placeholder="Date">
                <input class="col-5" class="form-control register_form " name="time" type="time" placeholder="Time"><br><br>
                <p class="text-dark my-1 ">Choose Trip End Date and Time</p>
                 <input class="col-6" class="form-control register_form " name="dateend" type="date" placeholder="Date">
                <input class="col-5" class="form-control register_form " name="timeend" type="time" placeholder="Time"><br><br>
                <input name="phone" class="form-control register_form " type="" placeholder="Phone Number" required><br>
                <input id="submit" class="btn btn-warning p-1" type="submit" value="Book Now" ><br><br><br><br><br><br>
                </form>
          </div>
      <div class="col-lg-4 "></div>
</div>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
        var allFields = document.querySelectorAll("#form");
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
              $(".round").hide();
              $("select").change(function(){
                    $( "select option:selected").each(function(){
                        //enter bengal districts
                        if($(this).attr("value")=="One Way"){
                            $(".round").hide();
                            $(".oneway").show();
                        }
                        //enter other states
                        if($(this).attr("value")=="Round"){
                            $(".oneway").hide();
                            $(".round").show();
                        }
                    });
                });  
            }); 
</script>
</body>
</html>