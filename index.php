<?php
  require 'config/config.php';
  $data = [];
  
  if(isset($_POST['search'])) {
    // Get data from FORM
    $keywords = $_POST['keywords'];
    $location = $_POST['location'];

    //keywords based search
    $keyword = explode(',', $keywords);
    $concats = "(";
    $numItems = count($keyword);
    $i = 0;
    foreach ($keyword as $key => $value) {
      # code...
      if(++$i === $numItems){
         $concats .= "'".$value."'";
      }else{
        $concats .= "'".$value."',";
      }
    }
    $concats .= ")";
  //end of keywords based search
  
  //location based search
    $locations = explode(',', $location);
    $loc = "(";
    $numItems = count($locations);
    $i = 0;
    foreach ($locations as $key => $value) {
      # code...
      if(++$i === $numItems){
         $loc .= "'".$value."'";
      }else{
        $loc .= "'".$value."',";
      }
    }
    $loc .= ")";

  //end of location based search
    
    try {
      //foreach ($keyword as $key => $value) {
        # code...

        $stmt = $connect->prepare("SELECT * FROM room_rental_registrations_apartment WHERE country IN $concats OR country IN $loc OR state IN $concats OR state IN $loc OR city IN $concats OR city IN $loc OR address IN $concats OR address IN $loc OR rooms IN $concats OR landmark IN $concats OR landmark IN $loc OR rent IN $concats OR deposit IN $concats");
        $stmt->execute();
        $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $connect->prepare("SELECT * FROM room_rental_registrations WHERE country IN $concats OR country IN $loc OR state IN $concats OR state IN $loc OR city IN $concats OR city IN $loc OR rooms IN $concats OR address IN $concats OR address IN $loc OR landmark IN $concats OR rent IN $concats OR deposit IN $concats");
        $stmt->execute();
        $data8 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $data = array_merge($data2, $data8);

    }catch(PDOException $e) {
      $errMsg = $e->getMessage();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Real Estate</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/rent.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#212529; padding: 0px;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"> <span class="glyphicon glyphicon-home"></span> Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="search.php">Search</a>
            </li>
            
            <?php 
              if(empty($_SESSION['username'])){
                echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="./auth/login.php">Login</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="./auth/register.php">Register</a>';
                echo '</li>';
              }else{
                echo '<li class="nav-item">';
                 echo '<a class="nav-link" href="./auth/dashboard.php">Dashboard</a>';
               echo '</li>';

               echo '<li class="nav-item">';
                 echo '<a href="auth/logout.php" class="nav-link">Logout</a>';
               echo '</li>';
              }
            ?>

            

          </ul>
        </div>
      </div>
    </nav>
    <center>
<div style="margin-top: 55px; ">
  <div class="col-md-12">
    <!-- start of carousel -->
      <div id="imageCarousel" class="carousel slide" data-interval="4000">
        <ol class="carousel-indicators">
          <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#imageCarousel" data-slide-to="1"></li>
          <li data-target="#imageCarousel" data-slide-to="2"></li>
          <li data-target="#imageCarousel" data-slide-to="3"></li>
          <li data-target="#imageCarousel" data-slide-to="4"></li>
          <li data-target="#imageCarousel" data-slide-to="5"></li>
          <li data-target="#imageCarousel" data-slide-to="6"></li>
          <li data-target="#imageCarousel" data-slide-to="7"></li>
          <li data-target="#imageCarousel" data-slide-to="8"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="height: 510px; width: auto;" src="src/1.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/2.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/3.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/4.jpg" alt="Self quarantine" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/5.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/6.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/7.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
            <img style="height: 510px; width: auto;" src="src/8.jpg" class="img-responsive">
            <div class="carousel-caption">
              <h3>Home</h3>
              <p> This could be your home</p>
            </div>
          </div>

        <!-- Left and Right controls -->
      <a class="carousel-control-prev" href="#imageCarousel" data-slide-to="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#imageCarousel" data-slide-to="next">
        <span class="carousel-control-next-icon"></span>
      </a>
      </div>
      <!-- end of carousel  -->
</div>
</center>
    <!-- Header -->
<!--     <header class="masthead" style="color: #FED136">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome!</div>
          <div class="intro-heading text-uppercase">It's Nice To See You<br></div>
        </div>
      </div>
    </header> -->

    <!-- Footer -->
    <footer style="background-color: #ccc;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Gabriel Musungu 2020</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
   
    <!-- Bootstrap core JavaScript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/rent.js"></script>
    <script type="text/javascript">
  $(document).ready(function () {
    $('#imageCarousel').carousel();
  });
</script>
  </body>
</html>
