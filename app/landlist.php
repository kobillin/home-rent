<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');	

		try {
			if($_SESSION['role'] == 'admin'){

				$stmt = $connect->prepare('SELECT * FROM registrations_land');
				$stmt->execute();
				$data3 = $stmt->fetchAll (PDO::FETCH_ASSOC);

				$data = array_merge($data3);
			}

			if($_SESSION['role'] == 'user'){
				$stmt = $connect->prepare('SELECT * FROM registrations_land WHERE :user_id = user_id ');
				$stmt->execute(array(
					':user_id' => $_SESSION['id']
				));
				$data1 = $stmt->fetchAll (PDO::FETCH_ASSOC);
				$data = array_merge($data1);
			}
		}catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}	
		// print_r($data1);	
		// echo "<br><br><br>";
		// print_r($data2);
		// echo "<br><br><br>";	
		// print_r($data);	
?>
<?php include '../include/header.php';?>

	<!-- Header nav -->	
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#212529;" id="mainNav">
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
	<section style="padding-left:0px;">
		<?php include '../include/side-nav.php';?>
	</section>

<section class="wrapper" style="margin-left: 16%;margin-top: -23%;">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<h2>List Lands fo sale</h2>
				<?php 
					foreach ($data as $key => $value) {						
						echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">					
								  <div class="card-block">';
								  	echo '<a class="btn btn-warning float-right" href="updateland.php?id='.$value['id'].'&act=';if(!empty($value['own'])){ echo "ap"; }else{ echo "indi"; } echo '">Edit</a>';
									 echo 	'<div class="row">
											<div class="col-4">
											<h4 class="text-center">Owner Details</h4>';
											 	echo '<p><b>Owner Name: </b>'.$value['fullname'].'</p>';
											 	echo '<p><b>Mobile Number: </b>'.$value['mobile'].'</p>';
											 	echo '<p><b>Alternate Number: </b>'.$value['alternat_mobile'].'</p>';
											 	echo '<p><b>Email: </b>'.$value['email'].'</p>';
											 	echo '<p><b>County: </b>'.$value['county'].'</p><p><b> Town: </b>'.$value['town'].'</p><p><b> City: </b>'.$value['city'].'</p>';
											 	if ($value['image'] !== 'uploads/') {
											 		# code...
											 		echo '<img src="'.$value['image'].'" width="100">';
											 	}

											 	echo '<p><b>Address: </b>'.$value['address'].'</p><p><b> Landmark: </b>'.$value['landmark'].'</p>';

										echo '</div>
											<div class="col-5">
											<h4 class="text-center">Land Details</h4>';
												// echo '<p><b>Country: </b>'.$value['country'].'<b> State: </b>'.$value['state'].'<b> City: </b>'.$value['city'].'</p>';
												echo '<p><b>Land Number: </b>'.$value['land_number'].'</p>';

												if(isset($value['sale'])){
													echo '<p><b>Sale: </b>'.$value['sale'].'</p>';
												}										
													echo '<p><b>Lease: </b>'.$value['lease'].'</p>';
													echo '<p><b>Deposit: </b>'.$value['deposit'].'</p>';

													if(isset($value['created_at']))
														echo '<div class="alert alert-info" role="alert"><p><b>Posted on: </b>'.$value['created_at'].'</p></div>';

													if(isset($value['updated_at']))
														echo '<div class="alert alert-info" role="alert"><p><b>Updated on: </b>'.$value['updated_at'].'</p></div>';
											
										echo '</div>
											<div class="col-3">
											<h4>Other Details</h4>';
											echo '<p><b>Facilities: </b>'.$value['facilities'].'</p>';
											echo '<p><b>Description: </b>'.$value['description'].'</p>';
												if($value['vacant'] == 0){ 
													echo '<div class="alert alert-danger" role="alert"><p><b>Sold</b></p></div>';
												}else{
													echo '<div class="badge badge-warning" role="alert"><p><b>Onsale</b></p></div>';
												} 
											echo '</div>
										</div>				      
								   </div>
								</div>';
								echo '<a class="btn btn-warning float-right" href="../app/complaint.php">Complaint</a><br><br>';
					}
				?>				
			</div>
		</div>
	</div>	
</section>
<?php include '../include/footer.php';?>