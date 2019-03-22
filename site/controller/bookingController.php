<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css">
<script type="text/javascript" href="../resources/js/bootstrap.min.js"></script>

<?php
include '../model/Uifunctions.php';
include '../../admin/model/Database.php';
$redirect = new Uifunctions();
$connect = mysqli_connect("localhost","root","","workingspace");
$theMsg = '<div class ="alert alert-success">You will be deirected home in </div>';
$cxn = new Database('../include/vars.php');
$data = $redirect->getLatest("userdeposit", "booking WHERE booked = 1 and userid =(select userid from users where regstatus =  1 order by regdate Desc limit 1 )", "userid" ,1 );
    foreach ($data as  $values) { 
    echo $values['userdeposit'];
}



if(isset($_POST['reservation'])){
$time = $_POST['hours'];
$date = $_POST['date'];
$endtime =  $_POST['time'];
$roomid =$_POST['roomid'];
$hours=  $endtime - $time ;
$userdeposit = 0;

if($data != 500){
   $userdeposit = (int) $data - ($hours * 50);
}
else {
   $userdeposit = 500 - ($hours * 50);
}

//$query2 = "SELECT deposit from `users` where "
if($time >= $endtime || $hours < 1){
	    $msg = "<div class=' alert alert-success'>
        the RESULTANT TIME is zero or less please choose a valid time
        </div>";
          $redirect->redirectHome($msg, "../view/onclickbook.php");
        }

}


 else{
 		    $msg = "<div class=' alert alert-success'>
        Thanks for booking our rooms :)
        </div>";
          $redirect->redirectHome($msg, "../view/onclickbook.php");
        }



$query = "INSERT INTO `booking`  (`bookingid`,`bookingdate`,`starttime`,`endtime`,`roomid`,`userid`,`userdeposit`,`booked`) VALUES ('','$date','$time','$endtime','$roomid','','$userdeposit','1')";
$sql = mysqli_query($connect,$query);

if($sql){
$redirect->redirectHome($theMsg, 'back') ;
}
else{
	echo "you are not connected";
}


 



 






?>