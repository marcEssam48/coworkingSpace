<?php 
include '../../admin/model/Database.php';
$cxs = new Database("../include/vars.php");
include '../model/Uifunctions.php';
include '../view/init.php';

$coursename = $_POST['join'];
$coursetitle = $_GET['coursetitle'];

$mydata = new Uifunctions();
//$thedata = $mydata->getLatest('*', 'courses WHERE coursetitle =  ', 'courseid');
$theMsg = "<div class='alert alert-success'> Thank you for joining "." ".$coursetitle." "."course</div>" ;
$joinedcourses = 1;
$courseid = $coursetitle;

global $con;
$connect = $con->prepare("UPDATE courses SET joinedcourses = ? WHERE 	coursetitle =?");

$connect->execute(array($joinedcourses, $courseid));


   $redirect =$mydata -> redirectHome($theMsg);

 




?>