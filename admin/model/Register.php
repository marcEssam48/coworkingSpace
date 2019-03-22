<?php

/*
 * Register Class
 * 
 */
class Register
{    
    private $fullname;
    private $email;
    private $username;
    private $password;
    private $phonenumber;
    private $groupid;
    private $cxn;   // Database Object
    
    
    function __construct($data)
    {
        if(is_array($data))
        {
            
            $this->setData($data);
            
             // Connect to database
        $this->connectToDb();
        // insert user data
            
        $this->rgisterUser();
            
        }
        else
        {
            throw new Exception("Error: Data must be in an array.");
        }
        
       
        
    }
    
    private function setData($data)
    {
        $this->fullname     = $data['fullname'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->email    = $data['email'];
        $this->phonenumber = $data['phonenumber'];
        $this->groupid = $data['groupid'];
    }
    
    private function connectToDb()
    {
        include 'Database.php';
        $vars = "../include/vars.php";
        $this->cxn =  new Database($vars);
       
    }
    
   private function rgisterUser()
    {
        //`users`:: `userid`, `fullname`, `username`, `password`, `email` `phonenumber`  `groupid

        include 'Uifunctions.php';
          $Title = new Uifunctions();
          if(preg_match("/^[0-9]{11}$/", $this->phonenumber)) {
                if(strlen($this->password )< 8){
                       $msg = "<div class=' alert alert-success'>
        invalid Password Please enter more than 8 characters 
        </div>";
          $Title->redirectHome($msg, "../view/Login.php");
        }
        else{
            $pass = sha1($this->password);

              global $con;    
        $stmt = $con->prepare("INSERT INTO
                                users (username, fullname, email ,password , phonenumber, groupid, regdate)
                            VALUES (:zname, :zfullname, :zmail, :zpass , :zphone, :zgroupid, now())");
					$stmt->execute(array(
                       'zname' => $this->username, 
                       'zfullname' => $this->fullname,
                        'zmail' => $this->email,
						'zpass' =>$pass,
                        'zphone' => $this->phonenumber,
                        'zgroupid'=> $this->groupid
					));	
     return true;

      }
      }else {
              $nonavbar = "";
              include "../view/init.php";
        $msg = "<div class=' alert alert-success'>
        invalid Phone number Please enter 11 numbers 
        </div>";
          $Title->redirectHome($msg, "../view/Login.php");
      }     
    }
    private function close()
    {
        $this->cxn->close();
    }
    
}

?>
