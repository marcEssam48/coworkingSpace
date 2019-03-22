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
        //$this->connectToDb();
        // get Data
        $this->login();
    }
    //tmam
    private function setData($username,$password)
    {
        $this->username = $username;
        $this->password = sha1($password);   
    }
    /*
    private function connectToDb()
    {
        include '../model/Database.php';
        $vars = "../include/vars.php";
        $this->cxn = new Database($vars);
    }
    */
     public function login()
    {
        // check if the user exist in database
        $query = "SELECT `username`, `password` FROM `Users` WHERE `username` = '$this->username' AND `password` = '$this->password' AND regstatus=1";
        $connect = mysqli_connect("localhost","root","","workingspace");
        $sql   = mysqli_query($connect,$query);
        
        if(mysqli_num_rows($sql)>0)
        {   $data = array();
            $data = mysqli_fetch_array($sql);
            if($this->username == $data['username'] &&  $data['password'] == $this->password){
                echo 'login success';
            return TRUE;
        }
        else{echo 'login fail';}
        }
        else
        {
                include 'Uifunctions.php';
                $error = new Uifunctions();
                $msg = "<div class=' alert alert-danger'>Username or password is invalid, please try again.</div>";
                $error->redirectHome($msg);
                
        }
        
    }
    
    
    function close()
    {
        $this->cxn->close();
    }
    
    
    
    
}

?>
