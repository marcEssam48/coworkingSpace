
<?php

/*
 * Login Class
 * 
 */
class Login {
    private $username;
    private $password;
    private $cxn;       // database object
            
    function __construct($username,$password)
    {
        // set data
        $this->setData($username, $password);
        // connect DB
        $this->connectToDb();
        // get Data
        $this->getData();
    }
    
    private function setData($username,$password)
    {
        $this->username = $username;
        $this->password = $password;   
    }
    
    private function connectToDb()
    {
        include  'Database.php';
        $vars = '../include/vars.php';
        $this->cxn = new Database($vars);
        

    }
    
      function getData()
    {
     

        global $con;
        // check if the user exist in database
        $stmt2 = $con->prepare("SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password' AND `groupid` = 1 AND regstatus=1 LIMIT 1");
       $stmt2->execute(array($this->username, $this->password));
                $count = $stmt2->rowCount();
        
        if($count>0)
        {
            return TRUE;
        }
        else
        {
            $nonavbar= '';
            include '../view/init.php';
            $themsg = "<div class='alert alert-danger'>" . "the username or password is invalid" . "</div>";
            $Title->redirectHome($themsg, 'back');
        }
        
    }
    
    
    function close()
    {
        $this->cxn->close();
    }
    
    
    
    
}

?>