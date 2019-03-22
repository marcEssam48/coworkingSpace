<?php
        

            
            include '../view/init.php';
		

			// Get variables from the form 
            // check if Get request is numeric & Get the integer value of it 
            $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
	   $regstatus = 1;
			
           include  '../model/Database.php';
          
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
                global $con;
                        
              $stmt = $con->prepare("UPDATE users SET regstatus = 1  WHERE userid = ? AND groupid=1");
				$stmt->execute(array($userid));
                $themsg = "<div class='alert alert-success'>" . " this Admin is Actived" . "</div>";
                 $Title->redirectHome($themsg);
			
        
?>