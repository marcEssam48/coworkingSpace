<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        include '../controller/LoginController.php';
        die();
    }
        //session_destroy();
        $pageTitle = 'Manage Cources';
		include 'init.php';
        include  '../model/Database.php';
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
		// start dashboard page 
?>	
            <div class="container latest">
                <div class="row">
        
                        <div class="col-sm-6">
                            <h1 class="text-center">All Pendding Courses</h1>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <i class="fa fa-tag"></i>
                             
                                    All Pendding cources
                                
                                  <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                    <?php 
                                       $allcources = $Title->getLatest("*", "courses WHERE coursestatus=0", "courseid");
                                    if ($Title->countItems('coursestatus','courses WHERE coursestatus=0')!=0){
                                        foreach($allcources as $cource){
                                                  echo "<li><a href='../controller/aprrovecourse.php?courseid=".$cource['courseid']."' class='btn btn-info  pull-right'><i class='fa fa-close'></i>aprrove</a>
                                                  ";
                                                  echo  $cource['coursetitle'] ;
                                                 
                                                 
                                            echo '</li>';
                                             }
                                    }
                                    else {
                                        echo '<div class="alert alert-info">No  courses to show</div>';
                                    }
                                    
                                    ?>
                                 </ul>
                            </div>
                        </div>
                    </div>
 
                    <div class="col-sm-6">
                            <h1 class="text-center">All  Courses</h1>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <i class="fa fa-tag"></i>
                                
                                    All  cources
                                
                                  <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                    <?php 
                                       $allcources = $Title->getLatest("*", "courses WHERE coursestatus=1", "courseid");
                                    if ($Title->countItems('coursestatus','courses WHERE coursestatus=1s')!=0){
                                        foreach($allcources as $cource){
                                                  echo "<li><a href='editcourse.php?courseid=" .$cource['courseid']."'' class='btn btn-success avtivate pull-right' ><i class='fa fa-edit'></i>Edit</a><a href='../controller/deletecourse.php?courseid=".$cource['courseid']."' class='btn btn-danger confirm pull-right'><i class='fa fa-close'></i>Delete</a>
                                                  ";
                                                  echo  $cource['coursetitle'] ;
                                                 
                                                 
                                            echo '</li>';
                                             }
                                    }
                                    else {
                                        echo '<div class="alert alert-info">No  courses to show</div>';
                                    }
                                    
                                    ?>
                                 </ul>
                            </div>
                        </div>
                    </div>
   
            
                                   
                     
                    
                    
                </div>
</div>
    

		<?php
		// end dashboard 

		include 'footer.php';
?>