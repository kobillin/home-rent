<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Add Land for sale</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="fullname">Full Name</label>
				    <input type="text" class="form-control" id="fullname" placeholder="Owner's Full Names" name="fullname" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="Owners 10 digit mobile number" name="mobile" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="alternat_mobile">Alternat Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="Owner's 10 digit mobile number" name="alternat_mobile">
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Owner's Email" name="email" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="land_number">Land Number</label>
				    <input type="text" class="form-control" id="land_number" placeholder="Land Number" name="land_number" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="size">Available Sizes</label>
				    <input type="text" class="form-control" id="size" placeholder="1/0.5/5(acres)" name="size" required>
				  </div>
				 </div>
			</div>

			<div class="row">
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="county">County</label>
			    <input type="county" class="form-control" id="county" placeholder="County" name="county" required>
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="town">Town</label>
			    <input type="town" class="form-control" id="town" placeholder="Town" name="town" required>
			  </div>
			  </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="city" class="form-control" id="city" placeholder="City" name="city" required>
			  </div>
			  </div>
			 </div>

			 <div class="row">
			 	<div class="col-md-2">
			 <div class="form-group">
			    <label for="lease">Lease(Monthly)</label>
			    <input type="lease" class="form-control" id="lease" placeholder="Lease" name="lease" required>
			  </div>
			  </div>

			  <div class="col-md-2">
			 <div class="form-group">
			    <label for="sale">Sale Price</label>
			    <input type="sale" class="form-control" id="sale" placeholder="Sale Price" name="sale">
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="deposit">Deposit</label>
			    <input type="deposit" class="form-control" id="deposit" placeholder="Deposit" name="deposit" required>
			  </div>
			  </div>
			  <div class="col-md-4">

			  <div class="form-group">
			    <label for="facilities">Facilities</label>
			    <input type="facilities" class="form-control" id="facilities" placeholder="Facilities" name="facilities">
			  </div>
			  </div>
			  </div>

			   <div class="row">
			 	<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Description</label>
			    <input type="description" class="form-control" id="description" placeholder="Description" name="description">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="landmark">Landmark</label>
			    <input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="address" class="form-control" id="address" placeholder="Address" name="address" required>
			  </div>
			   </div>
			    </div>				  
			  
			   <div class="row">
			   	<div class="col-4">
			 		 <div class="form-group">
					    <label for="vacant">On Sale/Sold</label>
					    <select class="form-control" id="vacant" name="vacant">
					      <option value="1">On Sale</option>
					      <option value="0">Sold</option>
					    </select>
					  </div>
			 	</div>
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Image</label>
			    <input type="file" name="image" id="image">
			  </div>
			  </div>
			  </div>			
			  <button type="submit" class="btn btn-primary" name='register_land' value="register_land">Submit</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->