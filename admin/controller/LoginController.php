<?php
/*
 * awebarts:: LoginController
 */

//check if user coming from HTTP post request

if($_POST)
{
    
    // Login
    // `username`  `password`  
 

    if(isset($_POST['Login']))
    {      
       try {
            // validator => $_POST # $rules ;
            include '../model/Validator.php';
            $valid = new Validator();            
            $rules = array("username" => "checkStings");
            
            if($valid->validate($_POST, $rules))
                $username = $_POST['username'];
            
                $password = sha1($_POST['password']);
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }
        
        try
        {
            include '../model/Login.php';
            $login = new Login($username, $password);
            
            if($login == TRUE)
            {
                session_start();
                $_SESSION['username'] = $username;
                header('Location:../view/index.php');
            }
            
        }
        catch (Exception $exc)
        {
            echo $exc->getMessage();
        }
        
    }
    // Register
    //`userid`  `username`  `password`  `email`   `phonenumber`   `fullname`   `groupid`

    if(isset($_POST['Register']))
    {
        
        try {
            // validator => $_POST # $rules ;
          
            include '../model/Validator.php';
            $valid = new Validator();

            $data['fullname']       = $_POST['fullname'];
            $data['email'] = $valid->sanitizeItem($_POST['email'], 'email');
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['phonenumber']    = $_POST['phonenumber'];
            $data['groupid']        = $_POST['groupid'];

            $rules = array(
                "fullname" => "checkRequired|checkStings",
                "email" => "checkRequired|checkEmail",
                "username" => "checkRequired|checkStings",
                "password" => "checkRequired",
                "phonenumber" => "checkRequired"
            );
            if (!$valid->validate($data, $rules))
                die();
        } catch (Exception $exc) {
            echo $exc->getMessage();
            die();
        }

        try {
            include '../model/Register.php';
            new Register($data);
            
             $nonavbar= '';
            include '../view/init.php';
            $themsg = "<div class='alert alert-success'>" . "Rejesterd sussessfuly, please wait the admin confirmation" . "</div>";
            $Title->redirectHome($themsg, 'back');
        
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
            
    }        
}
else
{
   include '../view/Login.php';
   
}

?>
