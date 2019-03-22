
<?php
include '../view/init.php';
include '../model/Register.php';
include '../model/Validatorr.php';
include '../model/Login.php';
$valid = new Validator();



    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pass     = $_POST['password'];
//       $valid->ContainsNumbers($username);
    if($log = new Login($username, $pass)){
        session_start();
         $_SESSION['username'] = $username;
        header('location: ../view/Index.php');
        
    }
    
    }

    if(isset($_POST['signUp'])){
      $username =  $valid->secureData(filter_var($_POST['usernamesignup'],  FILTER_SANITIZE_STRING));
      $password = $valid->secureData(filter_var($_POST['passwordsignup'],FILTER_SANITIZE_STRING));
      $phoneNumber = $valid->secureData(filter_var($_POST['number'],FILTER_SANITIZE_NUMBER_INT));
      $email = $valid->secureData(filter_var($_POST['emailsignup'], FILTER_SANITIZE_EMAIL));
       
      $data = array();
      $data['username'] = $username;
      $data['password'] = $password;
      $data['phonenumber'] = $phoneNumber;
      $data['email'] = $email;
      if($rege = new Register($data)){ //if registered successfully
       $done = true;
    
          include '../model/Uifunctions.php';
          $Title = new Uifunctions();
      
    $msg = "<div class=' alert alert-success'>
        Registered successfully! Please wait for the Admin/'s confirmation 
        </div>";
          $Title->redirectHome($msg);
          
    

      }
      
      if(isset($_POST['type'] )){
        if(isset($_POST['Normal_User'])){
        $gpid =0;
        $query = "INSERT INTO `users` (`userid`,  `username`, `password`, `email`, `phonenumber`,`fullname`, `groupid`) VALUES ('','','','','','','$gpid')";
        $con=mysqli_connect("localhost","root","","workingspace");
        $sql = mysqli_query($con,$query);
        
      }
      else if(isset($_POST['instructor'])){
        $gpid =2;
        $query = "INSERT INTO `users` (`userid`, `username`, `password`, `email`, `phonenumber`,`fullname`, `groupid`) VALUES ('','','','','','','$gpid')";
        $con=mysqli_connect("localhost","root","","workingspace");
        $sql = mysqli_query($con,$query);
        
      }

}
      
    }
?>
