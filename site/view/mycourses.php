<?php
session_start();
$pageTitle = "My Courses";
include 'init.php';
include 'navbar.php';

include '../../admin/model/database.php';
$cxs = new Database("../include/vars.php");
include '../model/Uifunctions.php';
$mydata = new Uifunctions();

$thedata = $mydata->getLatest('*', 'courses WHERE 	joinedcourses = 1 ', 'courseid');
 echo '<h1 class="text-center"> You Are Joined In </h1>';
foreach ($thedata as  $values) { ?>
   <div class="container text-center">
       <div class="alert alert-info">
          <p class="lead">  <?= $values['coursetitle']; ?> </p>
       </div>
    </div>
<?php
}

?>