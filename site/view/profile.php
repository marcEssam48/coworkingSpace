<?php
    ob_start();
    session_start();
    if(isset($_SESSION['username']))
    {
        
        $pageTitle = "Edit Profile";
        include 'init.php';
        include 'navbar.php';
        include  '../../admin/model/Database.php';
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
 
        $selector = $_SESSION['username'];
        global $con;
			$stmt = $con->prepare("SELECT * FROM users WHERE username = ?  LIMIT 1");
			$stmt->execute(array($selector));
			$row = $stmt->fetch();
    
    }

		?>
<!--			 start editprofile page -->
			<h1 class="text-center">Edit Profile</h1>

			<div class="container">
			<form class="form-horizontal" action="../controller/editprofile.php" method="POST">
                <input type="hidden" name="userid" value="<?= $row['userid']; ?>">
				<!-- Start Username field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" name="username" class="form-control" value="<?=$row['username'];?>" autocomplete="off" required="required"/>
					</div>
				</div>
				<!-- End Username field-->
				<!-- Start Password field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="hidden" name="oldpassword" value="<?=$row['password'];?>" />
						<input type="password" name="newpassword" class="form-control" autocomplete="new-password" />
					</div>
				</div>
				<!-- End Password field-->
				<!-- Start Email field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" value="<?=$row['email'];?>"  required="required" />
					</div>
				</div>
				<!-- End Email field-->
                <!-- Start phone field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">phone</label>
					<div class="col-sm-10">
						<input type="text" name="phone" class="form-control" value="<?=$row['phonenumber'];?>"  required="required" />
					</div>
				</div>
				<!-- End phone field-->
				<!-- Start Fullname field-->
				<div class="form-group form-group-lg">
					<label class="col-sm-2 control-label">Fullname</label>
					<div class="col-sm-10">
						<input type="text" name="full" class="form-control" value="<?=$row['fullname'];?>" required="required" />
					</div>
				</div>
				<!-- End Fullname field-->
				<!-- Start Username field-->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="Save" class="btn btn-primary btn-lg"/>
					</div>
				</div>
				<!-- End Username field-->
			</form>
			</div>

		


	<?php
		// end dashboard 

		include 'footer.php';
?>