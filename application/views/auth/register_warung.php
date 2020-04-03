<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
                <form action="<?php echo site_url('auth/store_warung') ?>" class="billing-form" method="post" enctype='multipart/form-data'> 
                <h3 class="mb-4 billing-heading">Register</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
						<div class="form-group">
							<label for="firstname">Nama Warung</label>
						<input type="text" class="form-control" name="name" placeholder="">
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-md-6 pb-3">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="col-md-6 pb-3">
						<label for="username">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<!-- ini nanti lokasi -->
					<div class="w-100"></div>
					<div class="w-100"></div>
					<div class="col-md-12">
						<div class="form-group">
						<label for="streetaddress">Address</label>
						<input type="text" class="form-control" name="address" placeholder="House number and street name">
					</div>
					</div>
					<div class="w-100"></div>
					<div class="col-md-6">
						<div class="form-group">
						<label for="towncity">City</label>
						<input type="text" name="city" class="form-control" placeholder="">
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="postcodezip">Post Code</label>
							<input type="text" name="postcode" class="form-control" placeholder="">
						</div>
					</div>
					<!-- lokasi end -->
					<div class="w-100"></div>
					<div class="col-md-6">
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone" placeholder="">
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="emailaddress">Email Address</label>
						<input type="email" name="email" class="form-control" placeholder="">
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="photo">Add photo</label>
							<input type="file" name="files[]" multiple class="form-control my-2" style="padding-top: 15px;">
							<!-- <input type="file" name="photo[]" class="form-control my-2" style="padding-top: 15px;">
							<input type="file" name="photo[]" class="form-control my-2" style="padding-top: 15px;"> -->
						</div>
					</div>
					<div class="w-100"></div>
					<div class="offset-md-4 col-md-2 mt-4">
						<div class="form-group">
							<input type="submit" class="btn btn-primary px-5 text-center d-block" value="Register">
						</div>
					</div>
	            </div>
	          </form><!-- END -->
            </div>
        </div>
    </div>
</section> <!-- .section -->



