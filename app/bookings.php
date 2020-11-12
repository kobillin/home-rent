<?php
	require '../config/config.php';
  require 'function.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');	
?>
<?php 
	$mysqli =new mysqli('localhost', 'root','', 'newrent') or die(mysqli_error(mysqli));
	$result =$mysqli->query("SELECT * from users") or die($mysqli->error);

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
              <a class="nav-link" href="login.php"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
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
<section class="wrapper" style="margin-left:16%;margin-top: -11%;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
 <br>
 <!-- <h3 class="text-center text-success" id="message"><?php echo  $success; ?></h3> -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>My Bookings <b>Bookings</b></h2>

     </div>
     <div class="col-sm-6">
      <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>    -->   
     </div>
                </div>
   </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th>Apartment name</th>
                      <th>Plot Number</th>
      					     <th>Floor</th>
                     <th>Room</th>
                     <th>Plats</th>
      					       <th>Date Booked</th>
                       <!-- <th>Role</th> -->
                      <!-- <th>Role</th> -->
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    <?php $errMsg = ''; showbookings();?>
           
                
    <?php
    
     // close connection database
     // mysqli_close($conn);
                ?>
                </tbody>
            </table>
   <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>100</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
 <script>
        $(document).ready(function()
        {
            setTimeout(function()
            {
                $('#message').hide();
            },3000);
        });
    </script>

<script src="javascript.js"></script>
			</div>
		</div>
	</div>
</section>
<?php include '../include/footer.php';?>