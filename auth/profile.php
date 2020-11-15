<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php'); 

  $host ="localhost";
  $user ="root";
  $password="";
  $db_name ="newrent";

  $con =mysqli_connect($host, $user, $password, $db_name);

  if (!$con): 
    die("Database connection Error Please check".mysql_errno($con));
  endif;  
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
              <a class="nav-link" href="../auth/profile.php"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<!-- end header nav -->	
	<?php include '../include/side-nav.php';?>
<section class="wrapper" style="margin-left: 16%;margin-top: -11%;">
  <div><center style="font-weight: bold;" >CHANGE PASSWORD</center></div>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6"><div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['fullname'] ?></b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Username <br>
					<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" disabled autocomplete="off" class="box"/><br /><br />
					<hr>
					Password <br>
					<input type="password" name="password" value="" class="box" /><br/><br />
					Vafify Password <br>
					<input type="password" name="passwordVerify" class="box" /><br/><br />
					<input class="btn btn-info" type="submit" name='update' class='submit' value="UPDATE" /><br />
				</form>
			</div>
		</div>
	</div></div>
		<div class="col-sm-3"></div>
	</div>
</section>
<?php include '../include/footer.php';

if(isset($_POST['update'])) {

    $user = $_SESSION['username'];
    $get_user ="select * from users where username='$user'";
    $run_user = mysqli_query($con, $get_user);
    $row = mysqli_fetch_array($run_user);

    $id = $row['id'];
    $password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
    $passwordVerify = htmlentities(mysqli_real_escape_string($con, $_POST['passwordVerify']));

      if($password == $passwordVerify){
        if(strlen($password) >= 6 && strlen($password) <=60){
          $update = "update users set password='$password' where id='$id'";

          $run =mysqli_query($con, $update);
          echo"<script> alert('Your Password is changed a moment ago')</script>";
          echo"<script> window.open('../auth/dashboard.php', '_self')</script>";
      }
      else{
        echo"<script> alert('Your Password should be greater than 6 words')</script>";
        }
      }
    else{
        echo"<script> alert('Your Password did not match')</script>";
        echo"<script> window.open('profile.php', '_self')</script>";
      }
    }
// $update =filter_input(INPUT_POST, "update");

// if (isset($update)) {
//   $username= filter_input(INPUT_POST, "username");
//   $password= filter_input(INPUT_POST, "password");
//   $passwordVerify= filter_input(INPUT_POST, "passwordVerify");

//   $query ="SELECT username from users where id='$id'";
//   $run =mysqli_query($con, $query);
//   $rows = mysqli_fetch_array($run);
//   if ($rows["username"]==$username) {
//     if ($password ==$passwordVerify) {
//       $update_query="update users set password='$password' where id='$id'";

//       $update_run=mysql_query($con, $update_query);

//       if ($update_query) 
//           {
//             echo "<script> alert('Password changed successfully')</script>";
//           }
//       else
//         {
//          echo "<script> alert('Password changed Failed')</script>";
//         }     
//     }
//   }
//   else
//     {
//       echo "<script> alert('Password does not match')</script>";
//     } 
// }
?>
