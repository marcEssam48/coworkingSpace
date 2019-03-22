<?php
            include '../view/init.php';
            $courseid = isset($_GET['courseid']) && is_numeric($_GET['courseid']) ? intval($_GET['courseid']) : 0;
	 
			
           include  '../model/Database.php';
          
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
                global $con;
                        
              $stmt = $con->prepare("SELECT * FROM users WHERE userid = ? LIMIT 1");
                $check = $Title->checkItem('courseid', 'courses', $courseid);
        
		
				// if there is such ID show the form 

				if ($check  > 0) {

					$stmt = $con->prepare("DELETE FROM courses WHERE courseid = :zcourse");
                        
					$stmt->bindparam(":zcourse", $courseid);

					$stmt->execute();
                    
                
                $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . 'Record Deleted</div>';
                $Title->redirectHome($theMsg, 'back');
              

				} else {
                    $theMsg = "<div class='alert alert-danger'> this ID is not exist</div>";
					$Title->redirectHome($theMsg);
                    
				}

?>