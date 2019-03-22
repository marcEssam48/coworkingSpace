<?php
//include 'data_base.php';
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
        }
        else
        {
            throw new Exception("Error: Data must be in an array.");
        }
        
        // Connect to database
        //$this->connectToDb();
        // insert user data
        $this->rgisterUser();
        
    }
    
    private function setData($data)
    {
       // $this->fullname     = $data['fullname'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->email    = $data['email'];
        $this->phonenumber = $data['phonenumber'];
      
    }
    /*
    private function connectToDb()
    {
        include 'Database.php';
        $vars = "../include/vars.php";
        $this->cxn = new Database($vars);
    }
    */
    function rgisterUser()
    {    //$db = new DataBase_class();
        //`users`:: `userid`, `fullname`, `username`, `password`, `email` `phonenumber`  `groupid
        include 'Uifunctions.php';
          $Title = new Uifunctions();
          if(preg_match("/^[0-9]{11}$/", $this->phonenumber)) {
                if(strlen($this->password ) < 8){
            $msg = "<div class=' alert alert-success'>
        invalid Password Please enter more than 8 characters 
        </div>";
          $Title->redirectHome($msg, "../view/LogIn.php");
        }
        else {
            $pass = sha1($this->password);
        $query = "INSERT INTO `users` (`userid`, `fullname`, `username`, `password`, `email`, `phonenumber`, `groupid`,`ratingstatus`,`regstatus`,`regdate`) VALUES ('','$this->fullname','$this->username','$pass','$this->email','$this->phonenumber','$this->groupid','','',now())";
        $con=mysqli_connect("localhost","root","","workingspace");
        $sql = mysqli_query($con,$query);
        
      
    $msg = "<div class=' alert alert-success'>
        Registered successfully! Please wait for the Admin/'s confirmation 
        </div>";
          $Title->redirectHome($msg);
        if($sql)    {
            return true;
        }
        else        throw new Exception("Error: not registerd");
        
    }
}
else{
     $msg = "<div class=' alert alert-success'>
        invalid Phone number Please enter 11 numbers 
        </div>";
          $Title->redirectHome($msg, "../view/LogIn.php");

}
  
}
    
    function close()
    {
        $this->cxn->close();
    }
    
}

?>
