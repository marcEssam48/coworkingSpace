<?php
        

            
		

			// Get variables from the form 
            // check if Get request is numeric & Get the integer value of it 
            $rate = isset($_POST['rate']) && is_numeric($_POST['rate']) ? intval($_POST['rate']) : 0;
            $id = $_GET['courseid'];
	  
			
           include  '../../admin/model/Database.php';
            include '../model/Uifunctions.php';
            include '../view/init.php';
            $Title = new Uifunctions();
          
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
                global $con;
                        
              $stmt = $con->prepare("UPDATE courses SET courserate = $rate  WHERE courseid =  $id ");
				$stmt->execute(array($rate));
                $themsg = "<div class='alert alert-success'>" . " thank you for your rating" . "</div>";
                 $Title->redirectHome($themsg, 'back');
			
        
?>