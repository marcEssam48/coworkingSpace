<?php
    ob_start();
    session_start();
    if(isset($_SESSION['username']))
    {
        $pageTitle = "Add New Admin";
        include 'init.php';
       
    
    }

		?>
<!--			 start editprofile page -->
			<h1 class="text-center">Add New Admin</h1>

			<div class="container">
			<form class="form-horizontal" action="../controller/addadmin.php" method="POST">
				<!-- Start Username field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" name="username" class="form-control"  autocomplete="off" required="required" placeholder="Username"/>
					</div>
				</div>
				<!-- End Username field-->
				<!-- Start Password field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
					
						<input type="password" name="password" class="form-control" autocomplete="new-password" placeholder="Password" />
					</div>
				</div>
				<!-- End Password field-->
				<!-- Start Email field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control"  placeholder="Email" required="required" />
					</div>
				</div>
				<!-- End Email field-->
                <!-- Start phone field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">phone</label>
					<div class="col-sm-10">
						<input type="text" name="phonenumber" class="form-control" placeholder="phonenumber" required="required" />
					</div>
				</div>
				<!-- End phone field-->
				<!-- Start Fullname field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Fullname</label>
					<div class="col-sm-10">
						<input type="text" name="fullname" class="form-control" placeholder="Full Name" required="required" />
					</div>
				</div>
                <input type="hidden" name="groupid" value=1 />
				<!-- End Fullname field-->
				<!-- Start Username field-->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="Add" name="Add" class="btn btn-primary btn-lg"/>
					</div>
				</div>
				<!-- End Username field-->
			</form>
			</div>

		


	<?php
		// end dashboard 

		include 'footer.php';
?>