
<?php include "header.php";?>
<head>

    <link rel="stylesheet" href="assets/css/style.css">


<html> 
    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Work+Sans:wght@800&display=swap');
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}


.form-control {
    height: 25px;
    width: 150px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
    font-size: 14px;
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.form-control2 {
    font-size: 14px;
    height: 20px;
    width: 55px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
}

.form-control2:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

.form-control3 {
    font-size: 14px;
    height: 20px;
    width: 30px;
    border: none;
    border-radius: 0;
    font-weight: 800;
    padding: 0 0 5px 0;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #ccc;
    margin: 0;
}

.form-control3:focus {
    box-shadow: none;
    border-bottom: 2px solid #ccc;
    background-color: transparent;
}

p {
    margin: 0;
}

img {
    width: 100%;
    height: 100%;
    object-fit: fill;
}

.text-muted {
    font-size: 10px;
}

.textmuted {
    color: #6c757d;
    font-size: 13px;
}

.fs-14 {
    font-size: 14px;
}

.btn.btn-primary {
    width: 100%;
    height: 55px;
    border-radius: 0;
    padding: 13px 0;
    background-color: black;
    border: none;
    font-weight: 600;
}

.btn.btn-primary:hover .fas {
    transform: translateX(10px);
    transition: transform 0.5s ease
}


.fw-900 {
    font-weight: 900;
}

::placeholder {
    font-size: 12px;
}

.ps-30 {
    padding-left: 30px;
}

.h4 {
    font-family: 'Work Sans', sans-serif !important;
    font-weight: 800 !important;
}

.textmuted,
h5 ,
.text-muted {
    font-family: 'Poppins', sans-serif;
}
    </style>
<!--NEW---BOOKING----DETAILS-----CODE--->   
</head>
<body>
<div class="content">
            <div class="animated">
                
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="mr-2 menu-icon fa fa-car"></i> Out Vehicle Details</strong>
                            </div>
                            
                             
        
    
    <div class="container">
                       <div class="row m-0">
                          
                              
                                    
                                    
                                    <div class="row">
                                        <div class="col-lg-5">
                                        <div class="col-12 p-5 mr-5">
                                            <img src="https://www.freepnglogos.com/uploads/honda-car-png/honda-car-upcoming-new-honda-cars-india-new-honda-3.png"
                                                alt="">
                                        </div> 
                                        <div class="row">
                                         <div class="col-md-4">
                                             
            Front
            <div class="img"><img src="..." alt="..." class="img-thumbnail"></div>
        </div>
                                            <div class="col-md-4">
            Side
            <div class="img"><img src="..." alt="..." class="img-thumbnail"></div>
        </div>
                                            <div class="col-md-4">
            Back
            <div class="img"><img src="..." alt="..." class="img-thumbnail"></div>
        </div>
        </div> <br>
        
                       <div class="row m-0 bg-light">
                                            <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                                                <p class="text-muted">Car Type</p>
                                                <p class="h5 m-0"><?php echo $row['c_name'];?></p>
                                            </div>
                                            <div class="col-md-4 col-6  ps-30 my-4">
                                                <p class="text-muted">Car Number</p>
                                                <p class="h5 m-0"><?php echo $row['c_plate'];?></p>
                                            </div>
                                            <div class="col-md-4 col-6 ps-30 my-4">
                                                <p class="text-muted">RC Number</p>
                                                <p class="h5 m-0"><?php echo $row['c_rc'];?></p>
                                            </div>
                                         
                                            <br>
                                        </div>
                                            
                                </div>
                                <div class="col-lg-6 p-5 mr-5">
                                    
                                   
        <div class="card mb-5">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Certificate</p></p>
              </div>
              <div class="col-sm-3">
                <p class="text-muted mb-0"></p>
              </div>
              <div class="col-sm-5">
             <!------Image-------Modal----->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#smallmodal">
                          Show Image
                      </button>
<!-- Modal -->
<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="smallmodalLabel">Certificate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                
                            </button>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           
                        </div>
                    </div>
                </div>
            </div>
<!------Image-------Modal----->

              </div>
              
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Udyog Adhar</p>
              </div>
              <div class="col-sm-3">
                <p class="text-muted mb-0"><?php echo $row['v_udyog'];?></p>
              </div>
              <div class="col-sm-5">
                <!------Image-------Modal----->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#smallmodal1">
                          Show Image
                      </button>
<!-- Modal -->
<div class="modal fade" id="smallmodal1" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="smallmodalLabel">Udyog Adhar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                
                            </button>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           
                        </div>
                    </div>
                </div>
            </div>
<!------Image-------Modal----->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Document</p>
              </div>
               <div class="col-sm-3">
                <p class="text-muted mb-0"></p>
              </div>
              <div class="col-sm-5">
                <!------Image-------Modal----->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#smallmodal3">
                          Show Image
                      </button>
<!-- Modal -->
<div class="modal fade" id="smallmodal3" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="smallmodalLabel">Document</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                
                            </button>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           
                        </div>
                    </div>
                </div>
            </div>
<!------Image-------Modal----->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">Adhar</p>
              </div>
               <div class="col-sm-3">
                <p class="text-muted mb-0"><?php echo $row['v_adhar'];?></p>
              </div>
              <div class="col-sm-5">
                <!------Image-------Modal----->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#smallmodal2">
                          Show Image
                      </button>
<!-- Modal -->
<div class="modal fade" id="smallmodal2" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel2" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="smallmodalLabel">Adhar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                
                            </button>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           
                        </div>
                    </div>
                </div>
            </div>
<!------Image-------Modal----->
              </div>
            </div>
             <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="mb-0">PAN</p>
              </div>
               <div class="col-sm-3">
                <p class="text-muted mb-0"><?php echo $row['v_pan'];?></p>
              </div>
              <div class="col-sm-5">
                <!------Image-------Modal----->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#smallmodal4">
                          Show Image
                      </button>
<!-- Modal -->
<div class="modal fade" id="smallmodal4" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel4" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="smallmodalLabel">PAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                
                            </button>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           
                        </div>
                    </div>
                </div>
            </div>
<!------Image-------Modal----->
              </div>
            </div>
          </div>
        </div>
    
                                    </div>
                    
                            </div>
                           
                       </div>
                               
     </div>
    </div>
  </div>    

 </div>  

</div>
</div>
   
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>


  <!-- owl carousel script -->
  <script type="text/javascript">
    (".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

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

</body>
</html>