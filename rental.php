<?php 

session_start();
$distance=$_SESSION['distance'];

$int=(int)$distance;
$trip=$_SESSION['trip'];

?>
<!DOCTYPE html>

<html>

<head>
    <?php include 'tags.php';?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
 
  <title>Aim Cab</title>
  
  <link rel="icon" type="image/png" sizes="16x16" href="https://aimcabbooking.com/images/lobo.png">
    <link rel="apple-touch-icon" sizes="16x16"  href="https://aimcabbooking.com/images/lobo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/lobo.png">
    <link rel="apple-touch-icon" sizes="16x16"  href="images/lobo.png" />

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/card.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="card.css" rel="stylesheet" />
  <link href="card.html" rel="stylesheet" />
  
  
  
</head>

<body>


    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container bg-light fixed-top ">
          <a class="navbar-brand" href="index.php">
            <span>
              AimCab Pvt Ltd
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hot Cities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Popular Cities</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    </div>
    <!-- end header section -->

  <!-- about section -->

      <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Select Car</h2>
        <p class="font-italic text-muted">AimCab Services with Endless Destination</p>
      </div>
    </div>

     <div class="row text-center">
          <?php 
                  {
                        require_once "config.php";
                        $query = "SELECT * FROM cars WHERE id='4' ";
                        $query_run = mysqli_query($link, $query);
                        if(mysqli_num_rows($query_run) > 0)
                           {
                              foreach($query_run as $row)
                           {
                        ?>
        <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/hatchback.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Hatchback</h5><span class="small text-uppercase text-muted">For 4+1</span>
          <h5 class="mb-0"><?php $b = $row['hot_price']; $a = $int*$b; echo $a;?>/-</h5>
          <button class="button" style="vertical-align:middle"><span>Book </span></button>
        </div>
        
      </div>
      <!-- End-->
       <?php }} else{echo "No Record Found";}} ?>
       <?php 
                  {
                       
                        $query = "SELECT * FROM cars WHERE id='1' ";
                        $query_run = mysqli_query($link, $query);
                        if(mysqli_num_rows($query_run) > 0)
                           {
                              foreach($query_run as $row)
                           {
                        ?>
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/swift.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Sedan</h5><span class="small text-uppercase text-muted">For 4+1</span>
          <h5 class="mb-0"><?php $b = $row['hot_price']; $a = $int*$b; echo $a;?>/-</h5>
          <button class="button" style="vertical-align:middle"><span>Book </span></button>
        </div>
        
      </div>
      <!-- End-->
        <?php }} else{echo "No Record Found";}} ?>
         <?php 
                  {
                        
                        $query = "SELECT * FROM cars WHERE id='2' ";
                        $query_run = mysqli_query($link, $query);
                        if(mysqli_num_rows($query_run) > 0)
                           {
                              foreach($query_run as $row)
                           {
                        ?>
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/ertiga.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Ertiga</h5><span class="small text-uppercase text-muted">For 4+1</span>
          <h5 class="mb-0"><?php $b = $row['hot_price']; $a = $int*$b; echo $a;?>/-</h5>
          <button class="button" style="vertical-align:middle"><span>Book </span></button>
        </div>
      </div>
      <!-- End-->
<?php }} else{echo "No Record Found";}} ?>

 <?php 
                  {
                       
                        $query = "SELECT * FROM cars WHERE id='3' ";
                        $query_run = mysqli_query($link, $query);
                        if(mysqli_num_rows($query_run) > 0)
                           {
                              foreach($query_run as $row)
                           {
                        ?>
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/innova.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Innova</h5><span class="small text-uppercase text-muted">For 4+1</span>
          <h5 class="mb-0"><?php $b = $row['hot_price']; $a = $int*$b; echo $a;?>/-</h5>
          <input type="hidden" value='<?php $a?>'>
          <button class="button" style="vertical-align:middle"><span>Book </span></button>
        </div>
      </div>
      <!-- End-->
<?php }} else{echo "No Record Found";}} ?>
    
    </div>
  </div>
     
  <!-- end about section -->

  <!-- info section -->

  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="box">
        <div class="info_form">
          <h4>
            Subscribe Our Newsletter
          </h4>
          <form action="">
            <input type="text" placeholder="Enter your email">
            <div class="d-flex justify-content-end">
              <button>

              </button>
            </div>
          </form>
        </div>
        <div class="info_links">
          <ul>
            <li class=" ">
              <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.html"> About</a>
            </li>
            <li class="">
              <a class="" href="service.html"> Services </a>
            </li>
            <li class="">
              <a class="" href="news.html"> News</a>
            </li>
            <li class="">
              <a class="" href="contact.html">Contact</a>
            </li>
            <li class="">
              <a class="" href="#">Login</a>
            </li>
          </ul>
        </div>
        <div class="info_social">
          <div>
            <a href="https://www.facebook.com/Aimcab" target="_blank">
              <img src="images/social/facebook.png" alt="">
            </a>
          </div>
          
          <div>
            <a href="https://www.instagram.com/aimcabs/"target="_blank">
              <img src="images/social/insta.png" alt="">
            </a>
          </div>
          
          <div>
                <a href="https://wa.me/message/327S432KEBNXG1" target="_blank" >
                    <img src="images/social/whatsapp.png" alt=""></a>

            </div>
          
          <div>
            <a href="https://join.skype.com/invite/xVR9rGFDod2a"target="_blank">
              <img src="images/social/skype.png" alt="">
            </a>
          </div>
          
          
          
          
          <div>
            <a href="https://www.youtube.com/channel/UCK8gCseBKo36k6Lv3RMXinw" target="_blank">
              <img src="images/social/youtube.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    
    
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; 2021 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>


  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
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

</body>

</html>
