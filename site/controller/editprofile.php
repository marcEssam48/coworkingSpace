<?php
    
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            include '../view/init.php';
			echo '<h1 class="text-center">Update member</h1>';
			echo '<div class="container">';

			// Get variables from the form 
            // check if Get request is numeric & Get the integer value of it 
            $userid = isset($_POST['userid']) && is_numeric($_POST['userid']) ? intval($_POST['userid']) : 0;
			$user = $_POST['username'];
			$email = $_POST['email'];
			$name = $_POST['full'];	
            $phone = $_POST['phone'];
			
			

			// password trick
            $pass="";
//			$pass = $_POST['newpassword'] ? $_POST['oldpassword']: sha1($_POST['newpassword']);

                
			if (empty($_POST['newpassword'])) {
				
				$pass = $_POST['oldpassword'];

			} else {

				$pass = sha1($_POST['newpassword']);
			}

			// validate the form 

			$formErrors = array();

			if (strlen($user) < 3) {
				
				$formErrors[] = 'username cant be less than 3 chracters';

			}

			if (strlen($user) > 15) {
				
				$formErrors[] = 'username cant be more than 15 chracters';

			}

			if (empty($user)) {
				
				$formErrors[] = 'username cant be empty';
			}

			if (empty($name)) {
				
				$formErrors[] = 'fullname cant be empty';
			}

			if (empty($email)) {
				
				$formErrors[] = 'Email cant be empty';
			}

			foreach ($formErrors as $error) {
				
				echo '<div class="alert alert-danger">' . $error . '</div>';

			}

			// check if there is no error proceed the update operation 

			if (empty($formErrors)) {
                 include  '../../admin/model/Database.php'; 
                $vars = '../include/vars.php';
                $cxn = new Database($vars);
                include '../model/uifunctions.php';
                $Title = new Uifunctions();
                global $con;
                            
                $stmt = $con->prepare("SELECT * FROM users WHERE username=? AND userid != ? LIMIT 1");
                $stmt->execute(array($user, $userid));
                $row = $stmt->fetch();
                $count = $stmt-> rowCount();
                if($count > 0){
                    $themsg = "<div class='alert alert-success'>" . "sorry this user is exists" . "</div>";
                    $Title->redirectHome($themsg, 'back');
                }
				
                else{
//				 update the database with this info
                
				$stmt = $con->prepare("UPDATE users SET username = ? ,  fullname =?, email = ?, password = ?, phonenumber =? WHERE userid = ?");
				$stmt->execute(array($user, $name , $email, $pass, $phone, $userid));

				//echo success message

				$themsg = "<div class='alert alert-success'>" . $stmt->rowCount() . 'Record Updated</div>';
                
                $Title-> redirectHome($themsg);
                }

			}
        }
?>