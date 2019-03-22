<?php
            include '../view/init.php';
            $userid = isset($_GET['courseid']) && is_numeric($_GET['courseid']) ? intval($_GET['courseid']) : 0;
	   $regstatus = 1;
			
           include  '../model/Database.php';
          
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
                global $con;
                        
              $stmt = $con->prepare("UPDATE users SET coursestatus = 1  WHERE courseid = ?");
				$stmt->execute(array($userid));
                $themsg = "<div class='alert alert-success'>" . " this Course is now Available" . "</div>";
                 $Title->redirectHome($themsg);
?>