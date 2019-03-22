<?php
if($_POST){
    
     include '../view/init.php';
    
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
            $themsg = "<div class='alert alert-success'>" . "Rejesterd sussessfuly, please wait the admin confirmation" . "</div>";
            $Title->redirectHome($themsg, 'back');
        
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
            
           
}
else {
    $themsg = "<div class='alert alert-success'>" . "something is wrong" . "</div>";
    
            $Title->redirectHome($themsg, 'back');
}
?>