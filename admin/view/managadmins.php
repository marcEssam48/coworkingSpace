<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        include '../view/Login.php';
        die();
    }
        //session_destroy();
        $pageTitle = 'Dashboard';
		include 'init.php';
        include  '../model/Database.php';
        $vars = '../include/vars.php';
        $cxn = new Database($vars);
		// start dashboard page 
?>	
            <div class="container latest">
                <div class="row">
                        <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <i class="fa fa-tag"></i>
                                <a href="../controller/pdfadminpendingmember.php">
                                    All members
                                </a>
                                  <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                    <?php 
                                       $Allmembers = $Title->getLatest("*", "users WHERE regstatus=1 AND groupid = 0", "userid");
                                    if ($Title->countItems('regstatus','users WHERE regstatus=1 AND groupid=1')!=0){
                                        foreach($Allmembers as $member){
                                                  echo "<li><a href='member.php?userid=" .$member['userid']."'' class='btn btn-success avtivate pull-right' ><i class='fa fa-edit'></i>Edit</a><a href='../controller/delete.php?userid=".$member['userid']."' class='btn btn-danger confirm pull-right'><i class='fa fa-close'></i>Delete</a>
                                                  ";
                                                  echo  $member['username'] ;
                                                 
                                                 
                                            echo '</li>';
                                             }
                                    }
                                    else {
                                        echo '<div class="alert alert-info">No pendding members to show</div>';
                                    }
                                    
                                    ?>
                                 </ul>
                            </div>
                        </div>
                    </div>
 
                            
            
                                   
<!--                    start admins-->
                     
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <i class="fa fa-lock"></i>
                                <a href="../controller/pdfadminpendingadmins.php">
                                All Admins
                                </a>
                                <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span> 
                            </div>
                            <div class="panel-body"> 
                                <ul class="list-unstyled latest-users">
                                    <?php 
                                          $AllAdmins = $Title->getLatest("*", "users WHERE regstatus=1 AND groupid = 1", "userid");
                                    if ($Title->countItems('regstatus','users WHERE regstatus=1 AND groupid=1')!=0){
                                        
                                        foreach($AllAdmins as $Admin){
                                          echo "<li><a href='member.php?userid=" .$Admin['userid']."'' class='btn btn-success avtivate pull-right'><i class='fa fa-edit'></i>Edit</a><a
                                          href='../controller/delete.php?userid=".$Admin['userid']."' class='btn btn-danger avtivate pull-right confirm'><i class='fa fa-close'></i>Delete</a>
                                          ";
                                          echo  $Admin['username'] ;
                                            echo '</li>';
                                             }
                                    }
                                    
                                   else echo '<div class="alert alert-info">No Admins to show!</div>';
                                        
                              
                                    ?>
                                </ul>
                            </div>
                        </div>
                         <?=  "<a href='addadmin.php' class='btn btn-info btn-block pull-right'><i class='fa fa-plus'></i> Add New Admin</a>" ?>
                    </div>
                    
                </div>
</div>
    

		<?php
		// end dashboard 

		include 'footer.php';
?>