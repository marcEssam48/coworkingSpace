<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        include '../controller/LoginController.php';
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

        <div class="row">
  <div class="container home-stats text-center">
      <h1>Dashboard</h1>
			<h2>
                Welcome
                <?php if(isset($_SESSION['username']))
                {
                     echo $_SESSION['username'];
                }
                ?>
             </h2>
			<div class="col-md-3">
                <div class="stat st-members">
                    <i class="fa fa-users "></i>
                    <div class="info">
                        Total members
                        <span><a href="members.php"></a>
                        <?php echo $Title->countItems('username','users');?>
                        </span>
                    </div>
                 </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-pending">
                    <i class="fa fa-user-plus"></i>
                    <div class="info">
                        pending members
                        <span><a href="members.php"></a>
                           <?= $Title->countItems('regstatus','users WHERE regstatus=0 AND groupid=0');?>
                        </span>
                    </div>
                 </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-admins">
                    <i class="fa fa-lock"></i>
                    <div class="info">
                        pendding Admins
                        <span><a href="members.php"></a>
                           <?= $Title->countItems('regstatus','users WHERE regstatus=0 AND groupid=1');?>
                        </span>
                    </div>
                 </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-comments">
                    <i class="fa fa-user-secret"></i>
                    <div class="info">
                        Total Admins
                        <span><a href="members.php"></a>
                            <?= $Title->countItems('regstatus','users WHERE regstatus=1 AND groupid=1');?>
                        </span>
                    </div>
                 </div>
            </div>
            </div>
</div>
                    <div class="container latest">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <i class="fa fa-users"></i>
                                <a href="../controller/pdfadmin.php">
                                     Latest Registered Users
                                </a>

                                 <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span> 
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                    <?php 
                                     $theLatestUsers = $Title->getLatest("*", "users WHERE regstatus=1", "userid", 6);
                                    if ($Title->countItems('regstatus','users WHERE regstatus=1')!=0){
                                  
                                        foreach($theLatestUsers as $user){
                                            echo '<li>'. $user['username'] .'
                                            <a href="member.php?userid=' .$user['userid']. '"><span class="btn btn-success pull-right"><i class="fa fa-edit">';
                                         echo '</i>Edit';
                                        
                                         echo '</span></a></li><br>';
                                        }
                                    }
                                    else 
                                        echo '<div class="alert alert-info">No users to show</div>';
                                    ?>
                                 </ul>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <i class="fa fa-tag"></i>
                                <a href="../controller/pdfadminpendingmember.php">
                                    Latest  pending members
                                </a>
                                  <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled latest-users">
                                    <?php 
                                      $pendingmembers = $Title->getLatest("*", "users WHERE regstatus=0 AND groupid = 0", "userid", 6);
                                    if ($Title->countItems('regstatus','users WHERE regstatus=0 AND groupid=0')!=0){
                                        foreach($pendingmembers as $user){ 
                                            
                                             echo "<li>
                                             <a href='../controller/activemember.php?userid=".$user['userid']."'class='btn btn-info avtivate pull-right'><i class='fa fa-close'></i>Activate</a>";
                                                  echo  $user['username'] ;
                                                 echo '</span></a></li><br>'; 
                                           
                                        }}
                                    
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
                                Pendding Admins
                                </a>
                                <span class="toggle-info pull-right">
                                    <i class="fa fa-minus fa-lg"></i>
                                </span> 
                            </div>
                            <div class="panel-body"> 
                                    <?php 
                                          $pendingadmins = $Title->getLatest("*", "users WHERE regstatus=0 AND groupid = 1", "userid", 6);
                                    if ($Title->countItems('regstatus','users WHERE regstatus=0 AND groupid=1')!=0){
                                        foreach($pendingadmins as $user){
                                             
                                            if($user['regstatus']==0 && $user['groupid']==1){
                                                  echo "<li><a href='../controller/activeadmin.php?userid=".$user['userid']."' class='btn btn-info avtivate pull-right'><i class='fa fa-close'></i>Activate</a>";
                                                  echo  $user['username'] ;
                                                 echo '</span></a></li><br>';
                                             }}}
                                    
                                   else echo '<div class="alert alert-info">No pendding Admins to show</div>';
                                        
                              
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
    

		<?php
		// end dashboard 
		include 'footer.php';
?>