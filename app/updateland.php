<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');

		if ( isset($_GET['id'])) {
			$id = $_REQUEST['id'];
		}	

		if ( isset($_GET['act'])) {
			$active = $_REQUEST['act'];

			if ($active === 'ap') {
				# code...
				try {
					$stmt = $connect->prepare('SELECT * FROM registrations_land where id = :id');
					$stmt->execute(array(
						':id' => $id
					));
					$data = $stmt->fetch(PDO::FETCH_ASSOC);				
				}catch(PDOException $e) {
					$errMsg = $e->getMessage();
				}
			}else{
				try{
					$stmt = $connect->prepare('SELECT * FROM room_rental_registrations where id = :id');
					$stmt->execute(array(
						':id' => $id
					));
					$data = $stmt->fetch(PDO::FETCH_ASSOC);
					}catch(PDOException $e) 
				{
					echo $e->getMessage();
				}			
			}
		}
		
		if(isset($_POST['register_land'])) {
			$errMsg = '';
			// Get data from FROM
			$fullname = $_POST['fullname'];
			$mobile = $_POST['mobile'];
			$alternat_mobile = $_POST['alternat_mobile'];
			$email = $_POST['email'];
			$county = $_POST['county'];
			$town = $_POST['town'];
			$city = $_POST['city'];
			$lease = $_POST['lease'];
			$sale = $_POST['sale'];
			$deposit = $_POST['deposit']; 
			$land_number = $_POST['land_number'];
			$facilities = $_POST['facilities'];
			$description = $_POST['description'];
			$landmark = $_POST['landmark'];
			$address = $_POST['address'];
			$vacant = $_POST['vacant'];
			$user_id = $_SESSION['id'];	
			try {
				$stmt = $connect->prepare('UPDATE registrations_land SET fullname = ?, mobile = ?, alternat_mobile = ?, email = ?,  county = ?, town = ?, city = ?, lease = ?, sale = ?, deposit = ?, land_number = ?, facilities=?, description = ?, landmark = ?, address = ?, vacant = ?  WHERE id = ?');
				$stmt->execute(array(
						$fullname,
						$email,
						$mobile,
						$alternat_mobile,
						$land_number,
						$county,
						$town,
						$city,
						$address,
						$landmark,
						$lease,
						$sale,
						$deposit,
						$description,
						$facilities,
						$vacant,
						 $user_id
				));

				header('Location: updateland.php?action=reg');
				exit;
			}catch(PDOException $e) {
				echo $e->getMessage();
			}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'reg') {
		$errMsg = 'Update successfull. Thank you';
	}
			
		//print_r($data);	
		// echo "<br><br><br>";
		// print_r($data2);
		// echo "<br><br><br>";	
		// print_r($data);	
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
	<?php
		if (isset($active)) {
			# code...
			if ($active === 'ap') {
	  			# code...
	  			include 'partials/edit/apartment.php';
	  		}

	  		if ($active === 'indi') {
	  			# code...
	  			include 'partials/edit/editland.php';
	  		}
		}  		
  	?>
</section>
<?php include '../include/footer.php';?>