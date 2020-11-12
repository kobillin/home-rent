<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Book an Apartment Room</h2>
  		<form action="" method="POST">

			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name</label>
				    <input type="text" class="form-control " id="apartment_name" placeholder="Apartment Name" name="apartment_name" value="<?php echo $data['apartment_name']?$data['apartment_name']:''; ?>" required readonly>
				  </div>
				 </div>
				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="plot_number">Plot Number/Home Number</label>
				    <input type="text" class="form-control" id="plot_number" placeholder="Plot Number/Home Number" name="plot_number" value="<?php echo $data['plot_number']?$data['plot_number']:''; ?>" required readonly>
				  </div>
				 </div>

				 <div class="col-md-4">
				    <div class="form-group">
					    <label for="floor">Floor</label>
					    <input type="text" class="form-control" id="floor" placeholder="floor" name="floor" value="<?php echo $data['floor']?$data['floor']:''; ?>" required readonly>
					 </div>
			  	</div>  
			  	 
			</div>
				 
			 <div class="row">
				<div class="col-md-4">
				 <div class="form-group">
				    <label for="rooms">Room</label>
				    <input type="text" class="form-control" id="rooms" placeholder="Rooms" name="rooms" value="<?php echo $data['rooms']?$data['rooms']:''; ?>" required readonly>
				  </div>
				</div>
				<div class="col-md-4">
				    <div class="col-md-4">
				 <div class="form-group">
				    <label for="ap_number_of_plats">Flat Number</label>
				    <input type="ap_number_of_plats" class="form-control" id="Plat Number" placeholder="ap_number_of_plats" name="ap_number_of_plats" value="<?php echo $data['ap_number_of_plats']?$data['ap_number_of_plats']:''; ?>" required readonly>
				  </div>
				</div>
			  	</div>
			</div>
			  	
			</div>		 			 	
			 <div class="row" style="background-color: #D1ECF1; border-radius: 5px; padding: 10px; width: 100%; margin-left: 2px;">
			 	<div class="col-md-4">
				 <div class="form-group">
				    <label for="bookname">Your name</label>
				    <input type="bookname" class="form-control" id="bookname" placeholder="bookname" name="bookname" value="<?php echo $_SESSION['fullname']?$_SESSION['fullname']:''; ?>" required readonly>
				  </div>
				</div>
			  	<div class="col-md-4">
			  		<div class="form-group">
					    <label for="deposit">Deposit</label>
					    <input type="deposit" class="form-control" id="deposit" placeholder="Deposit" name="deposit" value="<?php echo $data['deposit']?$data['deposit']:''; ?>">
			  		</div>
			  	</div>
			  </div>

			   <div class="row">
			    </div>				  
			
			  <button style="margin-top: 5px;" type="submit" class="btn btn-danger" name='bookapartment' value="bookapartment">Book</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->	