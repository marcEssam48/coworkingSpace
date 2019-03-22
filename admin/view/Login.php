--
<?php 
	
	$nonavbar = '';
	
	include 'init.php';

?>

	<div class=" container admin-home text-center">
		<div class="row">
		<!-- `userid`  `username`  `password`  `email`   `phonenumber`   `fullname`   `groupid`   `ratingstatus`  `regstatus`   `regdate` -->
			<div class="form-horizontal">
                
				<p class="admin-panel">Admin panel</p>
                    <h1  class=" text-center"><span class="selected" data-class="login"> LogIn</span> | <span data-class="register"> SignUp</span></h1>
	                <form class="form-group register text-center col-xs-6 col-xs-push-3" method="POST" action="../controller/LoginController.php">
                        <div class="input-container">
	                    <input required="required" name="fullname" class="form-control input-lg" type="text" placeholder="Fullname" autocomplete="off">
                        </div>
                        <div class="input-container">
	                    <input required="required" name="email" class="form-control input-lg" type="email" placeholder="email" autocomplete="off">
                        </div>
                        <div class="input-container">
	                    <input required="required" name="username" class="form-control input-lg" type="text" placeholder=" username" autocomplete="off">
                        </div>
                        <div class="input-container">
	                    <input required="required" name="password" class=" password form-control input-lg" type="password" placeholder="password" autocomplete="off" ><i class="show-pass fa fa-eye fa-2x"></i>
                        </div>
                        <div class="input-container">
	                    <input required="required" name="phonenumber" class="form-control input-lg" type="tel" placeholder="phonenumber" autocomplete="off">
                        </div>
	                    <input type="hidden" name="groupid" value="1">
	                    <input class="btn btn-success btn-block btn-lg" type="submit" name="Register" value="Register">
	                </form>
				
			
					<form class="form-group login col-xs-6 col-xs-push-3" method="POST" action="../controller/LoginController.php">
                        <div class="input-container">
						<input required="required" class="form-control input-lg" type="text" name="username" placeholder="Username To Login" autocomplete="off" />
                        </div>
                        <div class="input-container">
						<input required="required" class="form-control input-lg" type="password" name="password" placeholder="Password To Login" autocomplete="new-password" />
                        </div>

						<input class="btn btn-primary btn-block btn-lg" type="submit" name="Login" value="Login">
					</form>	
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>


