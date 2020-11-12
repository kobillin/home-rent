<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');

	
?>

<html>
<head><title>Update</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<?php 
	$mobile =$_POST['mobile'];
	 ?>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['fullname'] ?></b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Fullname <br>
					<input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" autocomplete="off" class="box"/><br /><br />
					Username <br>
					<input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" autocomplete="off" class="box"/><br /><br />
					Mobile <br>
					<input type="text" name="mobile" value="<?php echo $mobile;?>" autocomplete="off" class="box"/><br /><br />
					<hr>
					Password <br>
					<input type="password" name="password" value="<?php echo $password;?>" class="box" /><br/><br />
					Vafify Password <br>
					<input type="password" name="passwordVarify" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					<input type="submit" name='update' value="Update" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
	$fullname = htmlentities($_POST['fullname']);
	$username = htmlentities($_POST['username']);
	$mobile = htmlentities($_POST['mobile']);
	$password = htmlentities($_POST['password']);

	$update = "update users set fullname='$fullname',username='$username',mobile='$mobile',password='$password' where user_id='$user_id'";

	$run = mysqli_query($con, $update);

	if($run){
		echo"<script> alert('Your Profile Has Been Updated...')</script>";

		echo"<script> window.open('update.php?u_id$user_id', '_self')</script>";
	}
}	
?>