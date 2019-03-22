<?php
            include '../view/init.php';
            $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
	   $regstatus = 1;
			
           include  '../model/Database.php';
          
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
                global $con;
                        
              $stmt = $con->prepare("SELECT * FROM users WHERE userid = ? LIMIT 1");
                $check = $Title->checkItem('userid', 'users', $userid);
        
		
				// if there is such ID show the form 

				if ($check  > 0) {

					$stmt = $con->prepare("DELETE FROM users WHERE userid = :zuser");
                        
					$stmt->bindparam(":zuser", $userid);

					$stmt->execute();
                    
                
                $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . 'Record Deleted</div>';
                $Title->redirectHome($theMsg, 'back');
              

				} else {
                    $theMsg = "<div class='alert alert-danger'> this ID is not exist</div>";
					$Title->redirectHome($theMsg);
                    
				}

?>