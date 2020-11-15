<?php
  require '../config/config.php';
  if(empty($_SESSION['username']))
    header('Location: login.php');

      if(isset($_POST['editpass'])) {
      $errMsg = '';
      // Get data from FROM
      $username = $_POST['username'];
      $fullname = $_POST['fullname'];
      $password = $_POST['password'];

      try {
        $stmt = $connect->prepare('UPDATE users SET fullname = ?, username = ?, password = ? WHERE id = ?');
        
        // foreach ($_POST['ap_number_of_plats'] as $key => $value) {
          # code...
          $stmt->execute(array(
            $fullname,
            $username,
            $password,
          ));       
        // }
        header('Location: updatepassword.php?action=update');
        exit;
      }catch(PDOException $e) {
        echo $e->getMessage();
      }
  }

  if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $errMsg = 'Update successfull. Thank you';
  }
    
?>
<?php include '../include/header.php';?>
  <!-- Header nav --> 
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- end header nav -->
<?php include '../include/side-nav.php';?>
<section class="wrapper" style="margin-left: 16%;margin-top: -11%;">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <div id="error1" style=" <?php if ($error !=""){ ?> display: block; <?php  } ?>"> <?php echo $error; ?> </div>
      <center style="font-weight: bold;">CHANGE YOUR PASSWORD</center>
      <form class="form-control">
        <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password" required>
          </div>
          <div class="form-group">
            <!-- <label for="Password2">Password</label> -->
            <input type="password" class="form-control" id="password2" placeholder="Confirm your Password" name="password2" required>
          </div>
          <button type="submit" class="btn btn-info" name='editpass' value="editpass">Change</button>
      </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</section>
<?php include '../include/footer.php';?>